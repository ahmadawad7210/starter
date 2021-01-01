<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;

class UserController extends Controller
{
 public function showAdminName()
 {
     return 'ahmad awad';
 }

 public function getIndex(){
/*
     $data=[];
     $data['id']=35;
     $data['name']='ahmad awad';
*/
     $obj= new \stdClass();
     $obj->name='ahmad awad';
     $obj->id=10;
     $obj->gender='male';

     $data=['a'=>'ahmad','b'=>'awad'];

     $data1=[];

     return view('welcome',compact('data1'));
 }
}
