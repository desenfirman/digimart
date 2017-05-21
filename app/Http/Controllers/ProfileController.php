<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Carbon\Carbon;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');

	}

	public function show()
	{
		$user = Auth::user();
		return view('dashboard.profile', compact('user'));
	}

	public function update(Request $request)
	{
		$user = Auth::user();
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email',
			'birthdate' => 'required|date|date_format:Y-m-d'
			]);


		$input = request()->all();

		$user->fill($input);
		$dob = $request->birthdate;
		$user->birthdate = Carbon::parse($dob)->format('Y/m/d');
		$user->save();
		return redirect()->back();

		/*	$user->name     = Input::get('name');
		$user->email    = Input::get('email');
		$user->mobile   = Input::get('birthdate');
		$user->role_id  = Input::get('role_id');

		$user->save();*/
	}

}
