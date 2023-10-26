<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\ImageRealEstate;
use Illuminate\Support\Facades\Validator;
use App\Models\QuotaPrice;
use App\Models\RealEstate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Advertisement;
use App\Rules\DateRangeWithinOneYear;
use App\Models\Tambon;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\RealEstateFormRequest;
use Carbon\Carbon;

class RealEstateController extends Controller
{
    public function selectRealEstate(RealEstate $realEstate)
    {

        return view('realEstate', ['realEstate' => $realEstate]);
    }
    public function showRealEstate(Request $request)
    {
        $realEstate = new RealEstate;
        $un = $realEstate->checkAgreementRealEstate();
        $query = RealEstate::query();
        $input_status = $request->query('input_status');
        $input_anything = $request->query('input_anything');
        $input_id_user = $request->query('input_id_user');
        if ($input_id_user) {
            $query = $query->where('user_id', $input_id_user);
        }
        if ($input_status) {
            $query = $query->where('status', $input_status);
        }
        if ($input_anything) {
            $query = $query->where('address', 'LIKE', "%$input_anything%")
                ->orWhere('province', 'LIKE', "%$input_anything%")
                ->orWhere('amphoe', 'LIKE', "%$input_anything%")
                ->orWhere('tambon', 'LIKE', "%$input_anything%");
        }
        $realEstates = $query->paginate(15);
        $users = User::all();
        return view('admin.realEstateList', [
            'input_id_user' =>$input_id_user,
            'realEstates' => $realEstates,
            'input_status' => $input_status,
            'input_anything' => $input_anything,
            'users' => $users,
        ]);
    }
    public function popAllPromoteList(Request $request)
    {
        $advertisement = new Advertisement();
        $as = $advertisement->checkStatusAdvertisements();
        $query = RealEstate::query();
        $status = $request->query('status');
        $input_anything = $request->query('input_anything');
        $input_id_user = $request->query('input_id_user');
        if ($input_id_user) {
            $query = $query->where('user_id', $input_id_user);
        }
        if ($input_anything) {
            $query = $query->where('address', 'LIKE', "%$input_anything%");
        }
        if ($status == "unsuccess") {
            $ads = Advertisement::where('status', "unsuccess")->get();
            $realEstateIds = $ads->pluck('real_estate_id')->toArray();
            $query->whereIn('id', $realEstateIds);
        }

        if ($status == "success") {
            $ads = Advertisement::where('status', "unsuccess")->get();
            $realEstateIds = $ads->pluck('real_estate_id')->toArray();
            $query->whereNotIn('id', $realEstateIds);
        }
        $realEstates = $query->paginate(15);

        return view('admin.promoteList', [
            'realEstates' => $realEstates,
            'input_id_user' =>$input_id_user,
            'input_anything' => $input_anything,
        ]);
    }




    public function getViewCreateRealEstate()
    {
        $provinces = Tambon::select('province')->distinct()->get();
        $amphoes = Tambon::select('amphoe')->distinct()->get();
        $tambons = Tambon::select('tambon')->distinct()->get();
        $staffs = User::where('role', 'staff')->get();

        return view('admin.createRealEstate', [
            'staffs' => $staffs,
            'provinces' => $provinces,
            'amphoes' => $amphoes,
            'tambons' => $tambons,
        ]);
    }

    public function createNewRealEstate(Request $request)
    {
        // dd($request);
        $request->validate([
            'address' => 'required|max:255|min:5',
            'input_province' => 'required',
            'input_amphoe' => 'nullable',
            'input_tambon' => 'nullable',
            'area' => 'required|integer',
            'input_type_real_estate' => 'required',
            'input_bedroom' => 'nullable',
            'input_bathroom' => 'nullable',
            'price' => 'required|integer',
            'detail' => 'required|string|max:200',
            'staff_id' => 'required',
            'date_start' => 'required|date',
            'years_agreement' => 'required|integer',
            'input_images' => 'required',
        ]);



        // realestate

        $address =  $request['address']; //*
        $province =  $request['input_province']; //*

        $amphoe =  $request['input_amphoe'];
        $tambon =  $request['input_tambon'];
        $area =  $request['area']; //*
        $staff_id =  $request['staff_id'];
        $typeRealEstate =  $request['input_type_real_estate']; //*
        $bedroom =  $request['input_bedroom']; //*
        $bathroom =  $request['input_bathroom']; //*
        $detail =  $request['detail']; //*
        $status = 'public';

        // quotaprice
        $price =  $request['price'];
        $date_change = Carbon::now();
        // image
        $images = $request->file('input_images');
        //agreement
        $date_start = Carbon::parse($request['date_start']);
        $years_agreement =  $request['years_agreement'];
        $type = 'consignment';


        $realEstate = new RealEstate();
        $realEstate->address = $address;
        $realEstate->status = $status;
        $realEstate->province = $province;
        $realEstate->amphoe = $amphoe;
        $realEstate->user_id = $staff_id;
        $realEstate->tambon = $tambon;
        $realEstate->area = $area;
        $realEstate->type = $typeRealEstate;
        $realEstate->bedroom = $bedroom;
        $realEstate->bathroom = $bathroom;
        $realEstate->detail = $detail;
        $realEstate->save();

        $quotaprice = new QuotaPrice();
        $quotaprice->count = 1;
        $quotaprice->price = $price;
        $quotaprice->date_change = $date_change;
        $quotaprice->real_estate_id = $realEstate->id;
        $quotaprice->save();

        $agreement = new Agreement();
        $agreement->type = $type;
        $agreement->date_start = $date_start;
        $agreement->years_agreement = $years_agreement;
        $agreement->date_expired = $date_start->addYear($years_agreement);
        $agreement->real_estate_id = $realEstate->id;
        $agreement->save();

        $name_URL = ['facbook', 'dehome', 'shopee', 'google'];
        $i = 0;
        for ($i = 0; $i <= 3; $i += 1) {
            $ad = new Advertisement();
            $ad->real_estate_id = $realEstate->id;
            $ad->status = "unsuccess";
            $ad->name = $name_URL[$i];
            $ad->ad_start = null;
            $ad->ad_expired = null;
            $ad->URL = null;
            $ad->save();
        }

        $accept = 0;

        foreach ($images as $image) {
            $fileName = $realEstate->id . '-' . $accept . '.png';
            $imageRealEstate = new ImageRealEstate();
            $imageRealEstate->real_estate_id = $realEstate->id;
            Storage::putFileAs('public/realestate', $image, $fileName);
            $imageRealEstate->image_path = 'storage/realestate/' . $fileName;
            $imageRealEstate->save();
            $accept++;
        }


        return redirect()->route('admin.realEstateList');
    }











    public function getViewEditRealEstate(RealEstate $realEstate)
    {
        $provinces = Tambon::select('province')->distinct()->get();
        $amphoes = Tambon::select('amphoe')->distinct()->get();
        $tambons = Tambon::select('tambon')->distinct()->get();
        $staffs = User::where('role', 'staff')->get();


        return view('admin.editRealEstate', [
            'realEstate' => $realEstate,
            'staffs' => $staffs,
            'provinces' => $provinces,
            'amphoes' => $amphoes,
            'tambons' => $tambons,
        ]);
    }
    public function updateRealEstate(Request $request, int $realEstate_id)
    {


        $request->validate([
            'price' => 'required|integer',
            'detail' => 'required|string|max:200',
            'staff_id' => 'required',
            'date_start' => 'required|date',
            'years_agreement' => 'required|integer',
        ]);


        // realestate

        $address =  $request['address']; //*
        $province =  $request['input_province']; //*

        $amphoe =  $request['input_amphoe'];
        $tambon =  $request['input_tambon'];
        $area =  $request['area']; //*
        $typeRealEstate =  $request['input_type_real_estate']; //*
        $bedroom =  $request['input_bedroom']; //*
        $bathroom =  $request['input_bathroom']; //*
        $detail =  $request['detail']; //*
        $status = $request['status'];

        // quotaprice
        $price =  $request['price'];
        $date_change = Carbon::now();
        // image
        $images = $request->file('input_images');
        //agreement
        $date_start = Carbon::parse($request['date_start']);
        $years_agreement =  $request['years_agreement'];
        $type = 'consignment';

        // staff
        $staff =  $request['staff_id'];
        $staff_id = User::where('name', $staff)->get()->first()->id;



        $realEstate = RealEstate::findOrFail($realEstate_id);
        $newprice = $realEstate->getPrice($realEstate);
        if ($price != $newprice) {
            $quotaprice = new QuotaPrice();
            $id = $realEstate->id;
            $quota = QuotaPrice::orderBy('count', 'desc')->where('real_estate_id', $id)->firstOrFail();
            $quotaprice->count = $quota->count + 1;
            $quotaprice->price = $price;
            $quotaprice->date_change = $date_change;
            $quotaprice->real_estate_id = $realEstate->id;
            $quotaprice->save();
        };
        if ($date_start != $realEstate->getAgreementStart($realEstate)) {
            $agreement = $realEstate->agreements()->where('status', 'enable')->get()->first();
            $agreement->status = "disable";
            $agreement = new Agreement();
            $agreement->status = "enable";
            $agreement->date_start = $date_start;
            $agreement->years_agreement = $years_agreement;
            $agreement->date_expired = $date_start->addYear($years_agreement);
            $agreement->real_estate_id = $realEstate->id;
            $agreement->save();
        }
        if ($realEstate->user_id != $staff_id) {
            $realEstate->user_id = $staff_id;
            $realEstate->save();
        }
        if ($realEstate->status != $status) {
            $realEstate->status = $status;
            $realEstate->save();
        }
        if ($images != null) {
            $accept = 1;
            foreach ($images as $image) {
                $fileName = $realEstate->id . '-' . time() . $accept . '.png';
                $imageRealEstate = new ImageRealEstate();
                $imageRealEstate->real_estate_id = $realEstate->id;
                Storage::putFileAs('public/realestate', $image, $fileName);
                $imageRealEstate->image_path = 'storage/realestate/' . $fileName;
                $imageRealEstate->save();
                $accept++;
            }
        }

        return redirect()->route('admin.realEstateList');
    }

    public function deleteImagesRealEstate(int $image_id)
    {
        $image_realestate = ImageRealEstate::findOrFail($image_id);
        if (File::exists($image_realestate->image)) {
            File::delete($image_realestate->image);
        }

        $image_realestate->delete();
        return redirect()->back();
    }

    public function deleteRealEstate(RealEstate $realEstate)
    {
        // delete images
        $list_image_id = $realEstate->ImageRealestates()->get()->pluck('id');
        foreach ($list_image_id as $image_id) {
            $image_realestate = ImageRealEstate::findOrFail($image_id);
            if (File::exists($image_realestate->image)) {
                File::delete($image_realestate->image);
            }
            $image_realestate->delete();
        }

        $agreements_id = $realEstate->agreements()->get()->pluck('id');
        foreach ($agreements_id as $agreement_id) {
            $agreement = Agreement::findOrFail($agreement_id);
            $agreement->delete();
        }

        $quotaprices_id = $realEstate->quotaprices()->get()->pluck('id');
        foreach ($quotaprices_id as $quotaprice_id) {
            $quotaprice = QuotaPrice::findOrFail($quotaprice_id);
            $quotaprice->delete();
        }

        $advertisements_id = $realEstate->advertisements()->get()->pluck('id');
        foreach ($advertisements_id as $advertisement_id) {
            $advertisement = Advertisement::findOrFail($advertisement_id);
            $advertisement->delete();
        }

        $realEstate->delete();

        return redirect()->back();
    }

    public function getViewEditPromote(RealEstate $realEstate)
    {

        return view('admin.editPromote', [
            'realEstate' => $realEstate,
        ]);
    }

    public function updatePromoteRealEstate(Request $request, int $realEstate_id)
    {

        // url_facbook
        $realEstate = RealEstate::find($realEstate_id);
        $ad_facbook = $realEstate->advertisements()->where('name', 'facbook')->get()->first();
        $url_facbook = $request['url_facbook'];
        $ad_start_facbook = $request['ad_start_facbook'];
        $ad_expired_facbook = $request['ad_expired_facbook'];
        if ($ad_facbook->URL != $url_facbook) {

            $ad_facbook->URL = $url_facbook;
            if ($ad_start_facbook && $ad_expired_facbook) {
                $ad_facbook->ad_start = $ad_start_facbook;
                $ad_facbook->status = "success";
                $ad_facbook->ad_expired = $ad_expired_facbook;
                $ad_facbook->save();
            }
            if ($ad_start_facbook == null) {
                throw ValidationException::withMessages(['error_date_start_facbook' => 'Date start facbook does not exist']);
            }
            if ($ad_expired_facbook == null) {
                throw ValidationException::withMessages(['error_date_expired_facbook' => 'Date expired facbook does not exist']);
            }
        }
        // url_dehome
        $realEstate = RealEstate::find($realEstate_id);
        $ad_dehome = $realEstate->advertisements()->where('name', 'dehome')->get()->first();
        $url_dehome = $request['url_dehome'];
        $ad_start_dehome = $request['ad_start_dehome'];
        $ad_expired_dehome = $request['ad_expired_dehome'];
        if ($ad_dehome->URL != $url_dehome) {

            $ad_dehome->URL = $url_dehome;
            if ($ad_start_dehome && $ad_expired_dehome) {
                $ad_dehome->ad_start = $ad_start_dehome;
                $ad_dehome->status = "success";
                $ad_dehome->ad_expired = $ad_expired_dehome;
                $ad_dehome->save();
            }
            if ($ad_start_dehome == null) {
                throw ValidationException::withMessages(['error_date_start_dehome' => 'Date start dehome does not exist']);
            }
            if ($ad_expired_dehome == null) {
                throw ValidationException::withMessages(['error_date_expired_dehome' => 'Date expired dehome does not exist']);
            }
        }
        // url_shopee
        $realEstate = RealEstate::find($realEstate_id);
        $ad_shopee = $realEstate->advertisements()->where('name', 'shopee')->get()->first();
        $url_shopee = $request['url_shopee'];
        $ad_start_shopee = $request['ad_start_shopee'];
        $ad_expired_shopee = $request['ad_expired_shopee'];
        if ($ad_shopee->URL != $url_shopee) {

            $ad_shopee->URL = $url_shopee;
            if ($ad_start_shopee && $ad_expired_shopee) {
                $ad_shopee->ad_start = $ad_start_shopee;
                $ad_shopee->status = "success";
                $ad_shopee->ad_expired = $ad_expired_shopee;
                $ad_shopee->save();
            }
            if ($ad_start_shopee == null) {
                throw ValidationException::withMessages(['error_date_start_shopee' => 'Date start shopee does not exist']);
            }
            if ($ad_expired_shopee == null) {
                throw ValidationException::withMessages(['error_date_expired_shopee' => 'Date expired shopee does not exist']);
            }
        }

        //url_google
        $realEstate = RealEstate::find($realEstate_id);
        $ad_google = $realEstate->advertisements()->where('name', 'google')->get()->first();
        $url_google = $request['url_google'];
        $ad_start_google = $request['ad_start_google'];
        $ad_expired_google = $request['ad_expired_google'];
        if ($ad_google->URL != $url_google) {

            $ad_google->URL = $url_google;
            if ($ad_start_google && $ad_expired_google) {
                $ad_google->ad_start = $ad_start_google;
                $ad_google->status = "success";
                $ad_google->ad_expired = $ad_expired_google;
                $ad_google->save();
            }
            if ($ad_start_google == null) {
                throw ValidationException::withMessages(['error_date_start_google' => 'Date start google does not exist']);
            }
            if ($ad_expired_google == null) {
                throw ValidationException::withMessages(['error_date_expired_google' => 'Date expired google does not exist']);
            }
        }

        return redirect()->route('admin.promoteList');
    }








    // public function showRealEstatePrivate(){
    //     $realEstates = RealEstate::where('status' , 'private')->paginate(15);
    //     return view('admin.realEstateExpires', ['realEstates' => $realEstates]);
    // }
    // public function showSelectStatusRealEstate(Request $request){
    //     $realEstates = new RealEstate();
    //     $realEstates = $realEstates->getSelectStatus($request);
    //     return view('admin.realEstateList', compact('realEstates'));
    // }
}
