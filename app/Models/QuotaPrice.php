<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotaPrice extends Model
{
    use HasFactory;
    public function real_estate() : BelongsTo
    {
        return $this-> belongsTo(RealEstate ::class);
    }


}
