<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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


    // Eventlol
    public static function getRealEstate() {
        return RealEstate::orderBy('created_at', 'desc')->where('status','pubilc');
    }

    public static function getPrice(RealEstate $realEstate){
        $id = $realEstate->id;
        $quotaPrice = QuotaPrice::where('real_estate_id', $id)->firstOrFail();
        $price = $quotaPrice->price;
        return $price;
    }

    public static function getImageRealEstate(){

    }
}
