<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RelationTagsContent extends Pivot
{
    use HasFactory;
    protected $table = 'v_relation_tags_content';
    protected $incrementing = true;

}
