<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumumen';

    protected $fillable = [
        'title',
        'date',
        'content',
        'image_url',
        'visible',
    ];
}
