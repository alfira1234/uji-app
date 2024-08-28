<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencaharian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function jns_mpps()
    {
        return $this->belongsTo(Jns_mpp::class, 'jns_mpp_id');
    }

    // public function pencaharians()
    // {
    //     return $this->hasMany(Pencaharian::class, 'pencaharian_id');
    // }

    public function profil()
    {
        return $this->belongsTo(profil::class, 'profil_id');
    }
}
