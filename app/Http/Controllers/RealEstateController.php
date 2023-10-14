<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\ImageRealEstate;
use App\Models\QuotaPrice;
use App\Models\RealEstate;
use Illuminate\Http\Request;
use App\Models\Tambon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\RealEstateFormRequest;

class RealEstateController extends Controller
{
    public function selectRealEstate(RealEstate $realEstate){

        return view('realEstate', ['realEstate' => $realEstate]) ;
    }
    public function showRealEstate(Request $request){
        $query = RealEstate::query();
        $input_status = $request->query('input_status');
        $input_anything = $request->query('input_anything');
        
        if ($input_status) {
            $query = $query->where('status', $input_status);
        }
        if ($input_anything) {
            $query = $query->where('address','LIKE',"%$input_anything%")
            ->orWhere('province','LIKE',"%$input_anything%")
            ->orWhere('amphoe','LIKE',"%$input_anything%")
            ->orWhere('tambon','LIKE',"%$input_anything%");
        }
        $realEstates = $query->paginate(15);
        return view('admin.realEstateList', [
            'realEstates' => $realEstates, 
            'input_status' => $input_status,
            'input_anything' => $input_anything,
        ]);
    }
    public function popAllPromoteList(Request $request){
        $query = RealEstate::query();
        $input_anything = $request->query('input_anything');
        if ($input_anything) {
            $query = $query->where('address','LIKE',"%$input_anything%");
            
        }
        $realEstates = $query->paginate(15);
        
        return view('admin.promoteList', [
            'realEstates' => $realEstates, 
            'input_anything' => $input_anything,
        ]);
    }

    public function getViewCreateRealEstate(){
        $provinces = Tambon::select('province')->distinct()->get();
        $amphoes = Tambon::select('amphoe')->distinct()->get();
        $tambons = Tambon::select('tambon')->distinct()->get();
        $staffs = User::where('role', 'staff')->get();

        return view('admin.createRealEstate', [
            'staffs' => $staffs,
            'provinces' => $provinces,
            'amphoes' => $amphoes,
            'tambons' => $tambons,]);
    }

    public function createNewRealEstate(RealEstateFormRequest $request){
        $validatedData = $request->validated();
        $request->validate([
            'input_images' => 'required'
        ]);

        // realestate
        
        $address = $validatedData->get('address'); //*
        $province = $validatedData->get('input_province'); //*
        $coordinates = $validatedData->get('coordinates');
        $amphoe = $validatedData->get('input_amphoe');
        $tambon = $validatedData->get('input_tambon');
        $area = $validatedData->get('area'); //*
        $staff_id = $validatedData->get('staff_id');
        $typeRealEstate = $validatedData->get('input_type_real_estate');//*
        $bedroom = $validatedData->get('input_bedroom'); //*
        $bathroom = $validatedData->get('input_bathroom'); //*
        $detail = $validatedData->get('detail'); //*
        $status = 'pubilc';

        // quotaprice
        $price = $validatedData->get('price');
        $date_change = date("Y-m-d H:i:s");
        // image
        $images = $validatedData->file('input_images');
        //agreement
        $date_start = $validatedData->get('date_start');
        $date_expired = $validatedData->get('date_expired');
        $type = 'consignment';


        $realEstate = new RealEstate();
        $realEstate->address = $address;
        $realEstate->status = $status;
        $realEstate->province = $province;
        $realEstate->coordinates = $coordinates;
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
        $agreement->type = $type ;
        $agreement->date_start = $date_start ;
        $agreement->date_expired = $date_expired ;
        $agreement->real_estate_id = $realEstate->id;
        $agreement->save();

        
        $accept = 0 ;

        foreach($images as $image){
            $fileName = $realEstate->id.'-'.$accept.'.png' ;
            $imageRealEstate = new ImageRealEstate();
            $imageRealEstate->real_estate_id = $realEstate->id;
            Storage::putFileAs('public/realestate', $image,$fileName);
            $imageRealEstate->image_path = 'storage/realestate/'.$fileName;
            $imageRealEstate->save();
            $accept++;


        }

        

        return redirect()->route('admin.realEstateList');
    }

    public function tmpUpload(Request $request){
        $image = $request->file('input_image');
        $file_name = $image->getClientOriginalName();
        return $file_name;
    }











    public function getViewEditRealEstate(RealEstate $realEstate){
        $provinces = Tambon::select('province')->distinct()->get();
        $amphoes = Tambon::select('amphoe')->distinct()->get();
        $tambons = Tambon::select('tambon')->distinct()->get();
        $staffs = User::where('role', 'staff')->get();

        return view('admin.editRealEstate', [
            'realEstate' => $realEstate,
            'staffs' => $staffs,
            'provinces' => $provinces,
            'amphoes' => $amphoes,
            'tambons' => $tambons,]);
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