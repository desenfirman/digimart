<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');

	}

	public function show()
	{
		if (!Auth::check()) {
			return view('sessions.create');
		}
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
		if (request()->hasFile('display_picture')) {
			$extension = $request->display_picture->extension();
			$path = request()->file('display_picture')->storeAs('public/display_pictures', 'dp_'.$user->id.'.'.$extension);
			$path = str_replace("public/","",$path);
			$user->display_picture = $path;

		}
		$dob = $request->birthdate;
		$user->birthdate = Carbon::parse($dob)->format('Y/m/d');


		$user->save();
		return redirect()->back();

	}

}
