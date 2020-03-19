<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $table = 'blogs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['header', 'shortDescription', 'description', 'tag', 'thumbnail', 'image', 'slug', 'blog_category_id'];

    public function blog_category()
    {
        return $this->belongsTo('App\BlogCategory','blog_category_id');
    }

}