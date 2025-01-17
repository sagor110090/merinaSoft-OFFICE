<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['name','slug'];

    public function projectCatagory()
    {
        return $this->hasMany('App\Project','blog_category_id');
    }
}
