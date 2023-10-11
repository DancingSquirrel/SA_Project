<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use Illuminate\Http\Request;
use App\Models\Tambon;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    public function popRealEstate(){
        $provinces = Tambon::select('province')->distinct()->get();
        $amphoes = Tambon::select('amphoe')->distinct()->get();
        $tambons = Tambon::select('tambon')->distinct()->get();
        $realEstateModel = new RealEstate();
        $realEstateNew = $realEstateModel->getRealEstate()->paginate(15);
                return view('user.index', [
                    'realEstateNew' => $realEstateNew,
                    'provinces' => $provinces,
                    'amphoes' => $amphoes,
                    'tambons' => $tambons,
                ]);

    }
    public function popSearchRealEstate(Request $request){
        
        $provinces = Tambon::select('province')->distinct()->get();
        $amphoes = Tambon::select('amphoe')->distinct()->get();
        $tambons = Tambon::select('tambon')->distinct()->get();
        $realEstateModel = new RealEstate();
        $realEstateNew = $realEstateModel->getSearchRealEstate($request)->paginate(15);
                return view('user.index', [
                    'realEstateNew' => $realEstateNew,
                    'provinces' => $provinces,
                    'amphoes' => $amphoes,
                    'tambons' => $tambons,
                ]);

    }
    public function popAllStaff(){
        $staffs = User::paginate(15);
                return view('user.staff', [
                    'staffs' => $staffs
                ]);
    }
}
