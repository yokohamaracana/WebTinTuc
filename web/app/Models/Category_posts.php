<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_posts extends Model
{
    use HasFactory;

    protected $table = 'category_posts';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'title', 
    ];

    public function post(){
        return $this->hasMany('App\Models\post','post_category_id');
    }
}
