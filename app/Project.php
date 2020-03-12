<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['category_id','header', 'description','client_name', 'location','year', 'value','thumbnail','image'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
