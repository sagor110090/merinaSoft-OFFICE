<?php

namespace App\Helper;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Auth;
use App\StudentAttendance;



class Helpers
{
    public function isAdmin()
    {
        return DB::table('users')->where('email',Auth::User()->email)->where('role','admin')->first();
        
    }
    public function isUser()
    {
        return DB::table('users')->where('email',Auth::User()->email)->where('role','user')->first();
        
    }
    public function findAll($tableName)
    {
        return DB::table($tableName)->get();
    }
    public function schoolInfo()
    {
        return DB::table('schools')->first();
    }

    public function GetOptions($object, $column, $selected = 0, $id = 'id')
    {
        $option = '';
        if (empty($object)) {
            return "<option value = ''>No Data</option>";
        }
        foreach ($object as $obj) {
            $option .= "<option value = '{$obj->$id}' ";
            $option .= ($selected == $obj->$id) ? 'selected' : '';
            $option .= ">" . ucfirst($obj->$column) . "</option>";
        }

        return $option;
    }

    public function studentAttendance()
    {
        $studentAttendance = StudentAttendance::where('created_at','like',date('Y-m-d').'%')->first();
        return $studentAttendance;
    }
    
}
   


?>