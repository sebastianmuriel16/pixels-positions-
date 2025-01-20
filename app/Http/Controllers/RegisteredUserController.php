<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $userAtributes = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email','unique:users,email'],
        'password' => ['required', 'confirmed', Password::min(6)],
       ]);

       $employerAtributes = $request->validate([
        'employer' => ['required'],
        'logo' => ['required',File::types(['png', 'jpg', 'jpeg'])], 
       ]);

       $user =User::create($userAtributes);

       $logoPath = $request->logo->store('logos');

       $user->employer()->create([
        'name' => $employerAtributes['employer'],
        'logo' => $logoPath
       ]);

       Auth::login($user);

       return redirect('/');
    }
}
