<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilder extends Controller
{
    public function getAll()
    {
        return DB::table('students')->get();
    }


    public function singleRow()
    {
        return DB::table('students')->where('name','=','Khokon Chandra')->get();
    }

    public function fingRow()
    {
        return json_encode(DB::table('students')->find(5));
    }

    public function silectOneColumn()
    {
        return json_encode(DB::table('students')->pluck('name','roll'));
    }
}
