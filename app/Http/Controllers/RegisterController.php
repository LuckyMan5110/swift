<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());
        auth()->login($user);

        return redirect('/')->with('register_success', "Account successfully registered.");
    }

    public function checkemail(Request $request) 
    {
        $data = $request->all();
        $checkemail = $data['checkemail'];
        $users = User::where('email', $checkemail)
            // ->select('users.*', 'zones.name')
            // ->join('zones', 'users.id', '=', 'zones.user_id')
            ->get();
        $result = sizeof($users)?'This email already exists in our database.':'ok';
        return $result;
    }
}
