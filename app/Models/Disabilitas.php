<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disabilitas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jns_dis()
    {
        return $this->belongsTo(Jns_dis::class, 'jns_dis_id');
    }

    public function profil()
    {
        return $this->belongsTo(profil::class, 'profil_id');
    }
}
