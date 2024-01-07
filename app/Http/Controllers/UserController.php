<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function show(){
        $data=DB::table('students')->get();


        // if(count($data) >0) {
        //     return view('home', ['data' => $data]);
        // } else {
            
        //     // Handle the case where there is not exactly one record
        //     return view('home', ['data' => "false"]);
        // }
        return view('home',['data'=> $data]);
        // return dd($data);
    }
    public function insertquery($first_name,$last_name,$father_name){
        // echo $first_name."<br>";
        // echo $last_name."<br>";
        // echo $father_name."<br>";
        DB::table('students')->insert([
            'fist_name'=>$first_name,
            'last_name'=>$last_name,
            'father_name'=>$father_name
            
        ]);
        // $data=DB::table('students')->get();
        // return view('home',['data'=> $data]);
        return Redirect::to('/');
    }
    public function del(string $id){
        DB::table('students')->where('id', $id)->delete();
        return Redirect::to('/');
        
    }
    public function delall(){
        DB::table('students')->delete();
        return Redirect::to('/');

    }
    public function edit($id){
        $studentDetail=DB::table('students')->where('id',$id)->get();
        if ($studentDetail->count() > 0) {
            return view('edit',['studentDetail'=>$studentDetail]);
        } else {
            return view('edit');

        }
        

    }
    public function update($id,$first_name,$last_name,$father_name){
        $affectedRows = DB::table('students')
        ->where('id', $id)
        ->update([
            'fist_name' =>$first_name,
            'last_name'  =>$last_name,
            'father_name' =>$father_name
            // Add other fields as needed
        ]);
        if($affectedRows){
            return Redirect::to('/');
        }
        else{
            echo "error";
        }

    }
    
}

