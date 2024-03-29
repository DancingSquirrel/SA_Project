<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Agreement extends Model
{
    use HasFactory;
    public function real_estate() : BelongsTo
    {
        return $this-> belongsTo(RealEstate ::class);
    }
}
