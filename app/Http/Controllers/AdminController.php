<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin');
		
	}

	public function index()
	{
		return view('dashboard.dashboard');
	}

	public function users()
	{
		$users = \App\User::all();
		return view('dashboard.users', compact('users'));
	}

	public function destroyUser(User $user) 
	{
		User::destroy($user);
		return redirect()->back();
	}

	public function adverif()
	{
		return view('dashboard.verification');
	}
}
