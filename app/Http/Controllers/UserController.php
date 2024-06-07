<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.user');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->post();
        if (array_key_exists('flag', $data)) {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email:rfc,dns|unique:users,email,' . $user->id,
                'username' => 'required|unique:users,username,' . $user->id,
            ]);
            $user->fill($data)->save();
            return redirect()->route('user.index')->with('update_success', 'Account info has been updated successfully')->with('aaa', 'Account info has been updated successfully');
        } else{
            $request->validate([
                'current_password' => ['required', 'string', function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('The current password is incorrect.');
                    }
                }],
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password',
            ]);
            $user->fill($data)->save();
            return redirect()->route('user.index')->with('update_success', 'Password info has been updated successfully')->with('p_flag', 1);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
