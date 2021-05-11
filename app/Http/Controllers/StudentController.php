<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function home()
    {
        $data = DB::select('select * from students');
        return view('home',['students'=>$data]);
    }

    public function addNew(Request $request)
    {        
        if($request->method() === "POST"){
            $data = [
                "name"=>$request->input("name"),
                "roll"=>$request->input("roll"),
                "email"=>$request->input("email")
            ];
            if(DB::table('students')->insert($data)){
                return "Success fully inserted";
            }else{
                return "Data insertion Faild !!";
            }
        }
        return view('insert');
    }

    public function update($id)
    {
        $data = DB::table('students')->where('id','=',$id)->get();
        if(empty($data)){
            header("location:".url('/404')); 
            exit();
        } 
        return view('update',['student'=>json_decode($data)[0]]);

        
        
    }



    public function onUpdate(Request $request)
    {
        if($request->method() == "POST"){
            $id  = $request->input("updateId");
            $data = [
                "name"=>$request->input("name"),
                "roll"=>$request->input("roll"),
                "email"=>$request->input("email")
            ];
           
            $result = DB::table('students')->where('id','=',$id)->update($data);
            return $result?"Update Successful":"Update Faild";
        }
    }



    public function delete(Request $request)
    {
        if($request->method() == "POST"){
            
            $result = DB::table('students')->where('id','=',$request->input('id'))->delete();
            return $result?"Delete Successful":"Delete Faild";
            
        }
        
    }






}
