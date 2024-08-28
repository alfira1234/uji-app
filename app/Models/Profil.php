<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function penduduk()
    {
        return $this->hasMany(penduduk::class, 'profil_id');
    }
    public function warga()
    {
        return $this->hasMany(warga::class, 'profil_id');
    }
    public function kesehatan()
    {
        return $this->hasMany(kesehatan::class, 'profil_id');
    }
    public function disabilitas()
    {
        return $this->hasMany(disabilitas::class, 'profil_id');
    }
    public function pendidikan()
    {
        return $this->hasMany(Pendidikan::class, 'profil_id');
    }
    public function potensi()
    {
        return $this->hasMany(potensi::class, 'profil_id');
    }
    public function agama()
    {
        return $this->hasMany(agama::class, 'profil_id');
    }
    public function pencaharian()
    {
        return $this->hasMany(Pencaharian::class, 'profil_id');
    }
}
