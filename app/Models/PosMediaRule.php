<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PosMediaRule extends Model
{
    protected $fillable = [
        'pos_id','event','media_asset_id','order','status'
    ];

    public function media() {
        return $this->belongsTo(MediaAsset::class, 'media_asset_id');
    }
}

