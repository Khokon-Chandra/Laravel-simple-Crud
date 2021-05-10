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
                $request->input("name"),
                $request->input("roll"),
                $request->input("email")
            ];
            if(DB::insert('insert into students (name, roll, email) values (?, ?, ?)', $data)){
                return "Success fully inserted";
            }else{
                return "Data insertion Faild !!";
            }
        }
        return view('insert');
    }

    public function update($id)
    {
        $data = DB::select('select * from students where id = ?', [$id]);
        if(empty($data)){
            header("location:".url('/404')); 
            exit();
        } 
        return view('update',['student'=>$data[0]]);     
        
    }



    public function onUpdate(Request $request)
    {
        if($request->method() == "POST"){
            $name = $request->input("name");
            $roll = $request->input("roll");
            $email = $request->input("email");
            $id = $request->input("updateId");
            
            $result = DB::update("UPDATE `students` SET `name` = ?, `roll` = ?, `email` = ? WHERE id = ?", [$name,$roll,$email,$id]);

            return $result?"Update Successful":"Update Faild";
        }
    }



    public function delete(Request $request)
    {
        if($request->method() == "POST"){
            
            $result = DB::delete('delete from students where id = ?', [$request->input("id")]);
            return $result?"Delete Successful":"Delete Faild";
            
        }
        
    }






}
