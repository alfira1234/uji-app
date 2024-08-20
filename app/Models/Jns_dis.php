<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jns_dis extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function disabilitas()
    {
        return $this->hasMany(disabilitas::class, 'jns_dis_id');
    }
}
