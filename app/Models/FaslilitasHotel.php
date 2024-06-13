<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaslilitasHotel extends Model
{
    protected $table = 'faslilitas_hotels';
    use HasFactory;

    public function kamar()
    {
        return $this->hasMany(kamar::class);
    }
}
