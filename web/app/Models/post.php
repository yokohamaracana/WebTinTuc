<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class post extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'post';
    protected $fillable = [
        'title', 'short_desc', 'desc', 'image', 'post_category_id'
    ];
    protected $primarykey = 'id';

    public function category(){
        return $this->BelongsTo('App\Models\Category_posts','post_category_id');
    }
}
