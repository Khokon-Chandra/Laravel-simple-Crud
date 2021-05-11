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

    public function select()
    {
        
        // return DB::table('students')->select('name')->get();
        return DB::table('students')->select('name','roll','email')->get();
        // return DB::table('students')->distinct()->get();
    }

    public function merge()
    {
        $students = DB::table('students')->get();

        return $students->merge(DB::table('student_marks')->get());
    }

    public function jointable()
    {
        $result = DB::table('students')
        ->leftJoin('student_marks','students.roll','=','student_marks.roll');

        return json_encode($result);
    }
}
