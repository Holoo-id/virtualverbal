<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RelationTagsContent;
use App\Models\Content;

class Topics extends Model
{
    use HasFactory;
    protected $table = 'v_topics';
    protected $fillable = [
        'name','color_code','url'
    ];
    
    public function content(){
    	return $this->belongsToMany(Content::class);
    }
}
