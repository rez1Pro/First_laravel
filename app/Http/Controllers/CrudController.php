<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class CrudController extends Controller
{  
	// inser a new user in database
	public function user_create(){
		$data = [
           'name' => 'Sajeeb',
           'email' => 'rezwanhossain@gmail.com',
           'password' => '1233'
		];

		User::create($data);
		return "Successfully User Created!";
	}

	//Show all user in front
	public function users(){
		$data = User::all();
		return $data;
	}

	//Show specific user 
	public function user($id){
		$data = User::find($id);
		return $data;
	}

	//Delete Data from Database
	public function delete($id){
		$data = User::findOrFail($id);
		$data->delete();
		return "Data Deleted!";
	}

	// Data edited system
	public function edit($id){
		$data = User::findOrFail($id);
		$data->name = "Sajeeb";
		$data->email = "rs@gmail.com";
		$data->save();
		return "Data is Successfully Up to date";
	}

	
}
