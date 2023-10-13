<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use Illuminate\Http\Request;
use App\Models\Tambon;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Repositories\RealEstateRepository;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    public function popRealEstate(Request $request){
        $provinces = Tambon::select('province')->distinct()->get();
        $amphoes = Tambon::select('amphoe')->distinct()->get();
        $tambons = Tambon::select('tambon')->distinct()->get();

        $input_province = $request->query('input_province');
        $input_amphoe = $request->query('input_amphoe') ;
        $input_tambon = $request->query('input_tambon') ;
        $input_type_real_estate = $request->query('input_type_real_estate') ;
        $input_bathroom = $request->query('input_bathroom') ;
        $input_bedroom = $request->query('input_bedroom') ;
        $lim_low = $request->query('lim_low') ;
        $lim_high = $request->query('lim_high') ;

        $realEstateModel = new RealEstateRepository;
        $realEstateNew = $realEstateModel->getSearchRealEstate($request);
                return view('user.index', [
                    'realEstateNew' => $realEstateNew,
                    'provinces' => $provinces,
                    'amphoes' => $amphoes,
                    'tambons' => $tambons,
                    'input_amphoe' => $input_amphoe,
            'input_province' => $input_province,
            'input_tambon' => $input_tambon,
            'input_type_real_estate' => $input_type_real_estate,
            'input_bathroom' => $input_bathroom,
            'input_bedroom' => $input_bedroom,
            'lim_low' => $lim_low,
            'lim_high' => $lim_high,
                ]);

    }
    public function popAllStaffList(Request $request){
        $query = User::query();
        $input_anything = $request->query('input_anything');
        if ($input_anything) {
            $query = $query->where('name','LIKE',"%$input_anything%")
            ->orWhere('first_name','LIKE',"%$input_anything%")
            ->orWhere('last_name','LIKE',"%$input_anything%")
            ->orWhere('email','LIKE',"%$input_anything%")
            ->orWhere('phone_number','LIKE',"%$input_anything%");
            $staffs = $query->paginate(15);
        }else {
            $staffs = User::paginate(15);
        }
                return view('admin.staffList', [
                    'staffs' => $staffs,
                    'input_anything' => $input_anything,
                ]);
    }
    
    public function popAllStaff(){
        $staffs = User::paginate(15);
                return view('user.staff', [
                    'staffs' => $staffs,
                ]);
    }
}