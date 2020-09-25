<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(){
   $this->passed_data['x'] = "Controllers maintain data";
   $this->passed_data['an_array'] = ['Rezwan','developer']; // akhane easily akta array o pass kora jabe..
   $this->passed_data['associated_array'] = array(
   	'name' => 'Rezwan',
     'GPA' => '5.00'
); // akhane '[]' use kora jabe 

   return view('home.index' , $this->passed_data);

}
}

   

// ai vabe o data pass kora jay.......

//  *   public function index(){
//     	$x = 'This is controller veriable';
//     	return view('home.index' , ['veriable_name' => $x]); *** "/" use kora jabe folder define korar jonne ***
//     	/** 2nd veriable always akta array chay... r sei array er index name tai hobe view file a veriable name .... ***
//  //   }