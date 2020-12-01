<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatContent extends Model
{
    use HasFactory;
    protected $table = 'v_format_content';
    protected $fillable = [
        'name'
    ];
    public function content(){
    	return $this->hasMany(Content::class);
    }
}
