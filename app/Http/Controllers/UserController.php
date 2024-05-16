<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;


class UserController extends Controller
{
    public function index() 
    {
        $users = User::orderBy('id')->paginate(10);
        \LogActivity::addToLog('Browse userlist');
        return view('users.index', compact('users'));
    }

    public function create() 
    {
        \LogActivity::addToLog('Add user');
        return view('users.create');
    }

    public function store(RegisterRequest $request)
    {
        $image_person = '';
        $image_business = '';
        if ($request->hasFile('image_p')) {
            $imageName = time().'p.'.$request->image_p->extension();  
            $request->image_p->move(public_path('images/avatar'), $imageName);
            $image_person = 'images/avatar/' . $imageName;
        }

        if ($request->hasFile('image_b')) {
            $imageName = time().'b.'.$request->image_b->extension();  
            $request->image_b->move(public_path('images/avatar'), $imageName);
            $image_business = 'images/avatar/' . $imageName;
        }
        
        $user = User::create(array_merge($request->validated(), ['image_person' => $image_person], ['image_business' => $image_business]));
        \LogActivity::addToLog('User added ');
        return redirect()->route('users.index')->with('success','User has been created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function edit(User $user)
    {
        \LogActivity::addToLog('Edit user');
        return view('users.edit',compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        \LogActivity::addToLog('User deleted');
        return redirect()->route('users.index')->with('success','User has been deleted successfully');
    }

    public function update(Request $request, User $user)
    {
        $result = $request->post();
        if ($request->hasFile('image_p')) {
            $imageName = time().'p.'.$request->image_p->extension();  
            $request->image_p->move(public_path('images/avatar'), $imageName);
            $image_person = 'images/avatar/' . $imageName;
            $result = array_merge($request->post(), ['image_person' => $image_person]);
        }

        if ($request->hasFile('image_b')) {
            $imageName = time().'b.'.$request->image_b->extension();  
            $request->image_b->move(public_path('images/avatar'), $imageName);
            $image_business = 'images/avatar/' . $imageName;
            $result = array_merge($request->post(), ['image_business' => $image_business]);
        }

        if ($request->password_reset) {
            $result = array_merge($request->post(), ['password' => '1234567890']);
        }
        // $request->validate([
            // 'username' => 'required',
            // 'email' => 'required',
            // 'password' => 'required|min:8',
            // 'password_confirmation' => 'required|same:password',
            // 'email' => 'required|email:rfc,dns|unique:users,email',
            // 'username' => 'required|unique:users,username',
        // ]);
        // $user->fill(array_merge($request->post(), ['image_person' => $image_person], ['image_business' => $image_business]))->save();
        $user->fill($result)->save();
        \LogActivity::addToLog('User edited');
        return redirect()->route('users.index')->with('success','User has been updated successfully');
    }
}
