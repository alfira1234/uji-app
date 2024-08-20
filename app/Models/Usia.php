<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usia extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penduduks()
    {
        return $this->hasMany(Penduduk::class, 'usia_id');
    }

    public function pendidikans()
    {
        return $this->hasMany(Pendidikan::class, 'usia_id');
    }
}

