<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
	// Data inserted system in laravel
    public function create(){
    	//code will go here
    	$data = [
            'name' => 'Developer_Rezwan1',
            'email' => 'rezwan@gmail1.com',
            'password' => '1243'
    	];

    	User::create($data);
    	return "Data successfully inserted";
    }

    //All user Data view in the front page
    public function view(){
    	$data = User::all();
    	foreach ($data as $key => $value) {
    		echo $key ."=".$value['name']."<br/>";
    		echo $value['email']."<br/>";
    	}
    }

    //View specific data in front page
    public function user($id){
    	$data = User::find($id);
    	echo $data;
    }

    // delete data from Database
    public function delete($id){
    	$data = User::findOrFail($id);
    	$data->delete($id);
    	return "Successfully Deleted!";
    }

}
