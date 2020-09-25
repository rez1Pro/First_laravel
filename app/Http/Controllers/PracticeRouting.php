<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeRouting extends Controller
{
   public function getRoute(){
   	return view('routePractice.route_practice');
   }

public function posttest(){
	return "I'm from Post method";
}


public function data_update(){
	return "I'm from PUT method";
}

public function s_data_update(){
	return "I'm from PATCH method";
}


public function data_delete(){
	return "I'm from Delete method";
}

public function show($id,$email='rezwanhossainsajeeb@gmail.com'){ //By default email setup system
	return "I'm your Id = $id and email = $email";
}

public function display($id){
	return "I'm display id = $id";
}

public function any_name(){
	return "I'm from any name";
}


















}

