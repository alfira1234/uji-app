<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jns_kes extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Kesehatan()
    {
        return $this->hasMany(Kesehatan::class, 'jns_kes_id');
    }
}
