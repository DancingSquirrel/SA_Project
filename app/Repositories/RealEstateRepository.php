<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\RealEstate;
use App\Models\QuotaPrice;

class RealEstateRepository 
{
    public function getSearchRealEstate(Request $request){
        $input_province = $request->query('input_province');
        $input_amphoe = $request->query('input_amphoe') ;
        $input_tambon = $request->query('input_tambon') ;
        $input_type_real_estate = $request->query('input_type_real_estate') ;
        $input_bathroom = $request->query('input_bathroom') ;
        $input_bedroom = $request->query('input_bedroom') ;
        $lim_low = $request->query('lim_low') ;
        $lim_high = $request->query('lim_high') ;
        $f = false ;
        $query = RealEstate::query();

        // dd($realEstate);

        if ($input_province != null) {
            $query = $query->where('province', $input_province);
            $f = true ;
        }
        if ($input_amphoe != null) {
            $query = $query->where('amphoe', $input_amphoe);
            $f = true ;
        }
        if ($input_tambon != null) {
            $query = $query->where('tambon', $input_tambon);
            $f = true ;
        }
        if ($input_type_real_estate != null) {
            $query = $query->where('type' , $input_type_real_estate);
            $f = true ;
        }
        if ($input_bathroom != null) {
            $query = $query->where('bathroom', $input_bathroom);
            $f = true ;
        }
        if ($input_bedroom != null) {
            $query = $query->where('bedroom', $input_bedroom);
            $f = true ;
        }
        if ($lim_low != null) {
            $query = $query->whereIn('id', QuotaPrice::where('price','>=', $lim_low)->pluck('real_estate_id')); // RealEstate::where('id', QuotaPrice::where('price','<=',$lim_high)->real_estate_id)->get();
            $f = true ;
            
        }
        if ($lim_high != null) {
            $query = $query->whereIn('id', QuotaPrice::where('price','<=', $lim_high)->pluck('real_estate_id')); // RealEstate::where('id', QuotaPrice::where('price','<=',$lim_high)->real_estate_id)->get();
            $f = true ;
            
        }
        if ($f == false){
            $realEstate = RealEstate::where('status', 'pubilc')->paginate(15);
        } else {
            $realEstate = $query->paginate(15);
        }
        // dd($realEstate);
        return $realEstate ;




    }
    
}