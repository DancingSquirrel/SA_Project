<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Advertisement extends Model
{
    use HasFactory;
    public function real_estate() : BelongsTo
    {
        return $this-> belongsTo(RealEstate ::class);
    }


    public function checkStatusAdvertisements(){
        $advertisements = Advertisement::all();
        foreach($advertisements as $advertisement){
                if($advertisement->ad_expired < Carbon::now() )
                    {
                        $advertisement->status = "unsuccess";
                        $advertisement->URL = null;
                        $advertisement->ad_start = null;
                        $advertisement->ad_expired = null;
                        $advertisement->save();
                    }

        }
    }


}
