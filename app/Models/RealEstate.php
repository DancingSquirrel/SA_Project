<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use App\Models\ImageRealEstate;
use Illuminate\Support\Collection as SupportCollection;
use Ramsey\Collection\Collection as CollectionCollection;

class RealEstate extends Model
{
    use HasFactory;
    public function user() : BelongsTo
    {
        return $this-> belongsTo(User::class);
    }
    public function quotaprices() : HasMany
    {
        return $this->hasMany(QuotaPrice::class);
    }
    public function advertisements() : HasMany
    {
        return $this->hasMany(Advertisement::class);
    }
    public function ImageRealestates() : HasMany
    {
        return $this->hasMany(ImageRealEstate::class);
    }
    public function agreements() : HasMany
    {
        return $this->hasMany(Agreement::class);
    }


    
    public function getRealEstate() {
        return RealEstate::orderBy('created_at', 'desc')->where('status','public');
    }


    public function getPrice($realEstate){
        $id = $realEstate->id;
        $quotaPrice = QuotaPrice::orderBy('count', 'desc')->where('real_estate_id', $id)->firstOrFail();
        $price = $quotaPrice->price;
        return $price;
    }
    public function getCountPrice($realEstate){
        $id = $realEstate->id;
        $quotaPrice = QuotaPrice::orderBy('count', 'desc')->where('real_estate_id', $id)->firstOrFail();
        $price = $quotaPrice->count;
        return $price;
    }
    public function getYearAgreementRealEstate(RealEstate $realEstate){
        $name =  $realEstate->agreements()->get()->first()->years_agreement;
        return $name;
    }
    


    public function getStaffNameRealEstate(RealEstate $realEstate){
        $name =  $realEstate->user()->get()->first()->name;
        return $name;
    }
   

    public function getAgreementStart(RealEstate $realEstate){
        $id = $realEstate->id;
        $agreement = Agreement::orderBy('date_start', 'desc')->where('real_estate_id', $id)->firstOrFail();
        $date = $agreement->date_start;
        return $date;
    }
    public function getAgreementExpired(RealEstate $realEstate){
        $id = $realEstate->id;
        $agreement = Agreement::orderBy('date_start', 'desc')->where('real_estate_id', $id)->firstOrFail();
        $date = $agreement->date_expired;
        return $date;
    }

    // public function getSearchRealEstate(Request $request){
    //     $province = $request['input_province'] ?? "";
    //     $amphoe = $request['input_amphoe'] ?? "";
    //     $tambon = $request['input_tambon'] ?? "";
    //     $type = $request['input_type_real_estate'] ?? "";
    //     $bathroom = $request['input_bathroom'] ?? "";
    //     $bedroom = $request['input_bedroom'] ?? "";
    //     $lim_low = $request['lim_low'] ?? "";
    //     $lim_high = $request['lim_high'] ?? "";
    //     $f = false ;
    //     $realEstate = RealEstate::where('status','public')->get();

    //     // dd($realEstate);

    //     if ($province != null) {
    //         $realEstate = $realEstate->where('province', $province);
    //         $f = true ;
    //     }
    //     if ($amphoe != null) {
    //         $realEstate = $realEstate->where('amphoe', $amphoe);
    //         $f = true ;
    //     }
    //     if ($tambon != null) {
    //         $realEstate = $realEstate->where('tambon', $tambon);
    //         $f = true ;
    //     }
    //     if ($type != null) {
    //         $realEstate = $realEstate->where('type' , $type);
    //         $f = true ;
    //     }
    //     if ($bathroom != null) {
    //         $realEstate = $realEstate->where('bathroom', $bathroom);
    //         $f = true ;
    //     }
    //     if ($bedroom != null) {
    //         $realEstate = $realEstate->where('bedroom', $bedroom);
    //         $f = true ;
    //     }
    //     if ($lim_low != null) {
    //         $realEstate = $realEstate->whereIn('id', QuotaPrice::where('price','>=', $lim_low)->pluck('real_estate_id')); // RealEstate::where('id', QuotaPrice::where('price','<=',$lim_high)->real_estate_id)->get();
    //         $f = true ;
            
    //     }
    //     if ($lim_high != null) {
    //         $realEstate = $realEstate->whereIn('id', QuotaPrice::where('price','<=', $lim_high)->pluck('real_estate_id')); // RealEstate::where('id', QuotaPrice::where('price','<=',$lim_high)->real_estate_id)->get();
    //         $f = true ;
            
    //     }
    //     if ($f == false){
    //         $realEstate = RealEstate::where('status','public');
    //     }
    //     dd($realEstate);
    //     return $realEstate ;




    // }
    public function getImage_paths(RealEstate $realEstate){
         $images = $realEstate->ImageRealestates()->get()->pluck('image_path');

         return $images;
    }

    public function getSelectStatus(Request $request){
        $status = $request['input_status'] ?? "";
        $anything = $request['input_anything'] ?? "";
        $f = false;
        $realEstate = RealEstate::all();

        if ($status != null) {
            $realEstate = RealEstate::where('status', $status)->paginate(10);
            $f = true;
        }
        if ($f == false){
            $realEstate = RealEstate::paginate(10);
        }

        return $realEstate ;
    }

    
    
}