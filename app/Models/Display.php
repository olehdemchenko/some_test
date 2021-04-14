<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    use HasFactory;

    //if in plans more types -> better separate to 'types' relation as another database
    public const ACCESSORY_TYPE = 'accessory';
    public const LASER_PHOTO_TYPE = 'laser_photo';

    public function reseller(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Reseller::class);
    }
}
