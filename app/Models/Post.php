<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'tgl_datang',
        'jm_datang',
        'jml_org',
        'nam_leng',
        'email',
        'no_tlp',
        'askot',
        'asne',
        'ket_tam'
    ];

    
}
