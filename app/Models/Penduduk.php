<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function usias()
    {
        return $this->belongsTo(Usia::class, 'usia_id');
    }

    public function profil()
    {
        return $this->belongsTo(profil::class, 'profil_id');
    }
}
