<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    Public function submit(Request $request){
        
        $request->validate([
          'name'=> 'required',
          'class'=> 'required',
          'faculty'=> 'required',
    'email'=> 'required | email',
    'password'=> 'required',
    
        ])  ;
        $table = new stutent();
        $table->Name =  $request['name'];
        $table->Class=  $request['class'];
        $table->Faculty =  $request['faculty'];
        $table->Email = $request['email'];
        $table->Password = $request['password'];
        $table->save();
           
           return view("registered");
           
           
           }

}
