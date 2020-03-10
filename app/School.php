<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{

    protected $table = 'schools';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['name',
    'email',
    'address',
    'holidays',
    'break_time',
    'logo1',
    'logo2'];

    
}