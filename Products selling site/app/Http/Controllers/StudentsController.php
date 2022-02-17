<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
   public function index()
   {
       return view('form');
   }

   public function students(Request $request)
   {
       $request->validate(
           [
               'name'=>'required',
               'email'=>'required|email',
               'password'=>'required',
               'confirm_password'=>'required'

           ]
           );
           echo"<pre>";
        print_r($request->all());
   }
}
