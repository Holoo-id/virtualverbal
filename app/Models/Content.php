<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RelationTagsContent;
use App\Models\Topics;

class Content extends Model
{
    use HasFactory;
    protected $table = 'v_content';
    protected $fillable = [
        'judul','konten','sub_judul','permalink','image_path','image_name','category_id','published', 'publish_at', 'igdb_id'
    ];

    public function formatContent(){
    	return $this->belongsTo(FormatContent::class, 'category_id');
    }
    
    public function tags(){
    	return $this->belongsToMany(Topics::class, 'v_relation_tags_content', 'content_id', 'tag_id');
    }
    
    public function writer(){
    	return $this->belongsTo(User::class, 'created_by');
    }
}
