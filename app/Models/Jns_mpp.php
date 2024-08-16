<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jns_mpp extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pencaharians()
    {
        return $this->hasMany(Pencaharian::class, 'jns_mpp_id');
    }
}
