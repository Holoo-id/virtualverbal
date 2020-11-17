<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostArtikel extends Model
{
    protected $table = 'v_content';
    protected $fillable = [
        'judul','konten','sub_judul','permalink','image_name','category_id','published'
    ];
}
