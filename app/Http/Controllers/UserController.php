<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use Illuminate\Http\Request;
use App\Models\Tambon;

class UserController extends Controller
{
    public function popRealEstate(){
        $provinces = Tambon::select('province')->distinct()->get();
        $amphoes = Tambon::select('amphoe')->distinct()->get();
        $tambons = Tambon::select('tambon')->distinct()->get();

        $realEstateNew = RealEstate::getRealEstate()->paginate(15);
                return view('user.index', [
                    'realEstateNew' => $realEstateNew,
                    'provinces' => $provinces,
                    'amphoes' => $amphoes,
                    'tambons' => $tambons,
                ]);

    }
}
