<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{

    public function tiket() {
        return $this->belongsTo(Tiket::class);
    }

    public function operator() {
        return $this->belongsTo(User::class, 'operator_id');
    }

}
