<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jns_kes()
    {
        return $this->belongsTo(Jns_kes::class, 'jns_kes_id');
    }

    public function profil()
    {
        return $this->belongsTo(profil::class, 'profil_id');
    }
}
