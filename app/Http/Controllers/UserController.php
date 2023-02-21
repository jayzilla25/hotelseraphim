<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;
use App\Models\Residents;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('users.users', ['users' => User::latest()->filter(request(['search']))->paginate(10)]);
    }
    public function create()
    {
        return view('users.createusers');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => ['required', Rule::unique('Users')],
            "email" => ['required', Rule::unique('users', 'email')],
            "password" => ['required'],
            "type" => ['required'],
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        $validated['password'] = Hash::make($validated['password']);
        $log = array('action' => 'created', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'user profile', 'receiver_name' => $validated['name']);
        User::create($validated);
        Log::create($log);
        return back()->with('status', 'New user successfully created');
    }

    public function useredit(User $user)
    {
        return view('users.editusers', ['user' => $user]);
    }

    public function userprofilestore(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'email'],
            'type' => ['required']
        ]);
        if ($validator->fails()) {
            return redirect('/users/' . $user->id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        $log = array('action' => 'updated', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'user profile', 'receiver_name' => $user->name);
        $user->update($validated);
        Log::create($log);
        return back()->with('status', 'User updated successfully!');
    }

    public function userpasswordstore(Request $request, User $user)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }

        $log = array('action' => 'updated', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'user password', 'receiver_name' => $user->name);
        #Update the new Password
        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        Log::create($log);

        return back()->with("status", "Password changed successfully!");
    }

    public function destroy(User $user)
    {
        if ($user->id == auth()->id()) {
            return back()->with('error', 'User cannot delete own user profile');
        }
        $log = array('action' => 'deleted', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'user profile', 'receiver_name' => $user->name);
        // dd($log);
        $user->delete();
        Log::create($log);
        return back()->with('status', 'User deleted successfully');
    }

    public function createresidenthelper(User $user)
    {
        $resident = Residents::latest()->first();
        // dd($resident);
        // dd($household);
        $data = array('id' => $user->id, 'fullname' => ($user->name), 'address' => $user->email);
        // dd($data);
        return view('residents.createadduser', array('users' => User::latest()->filter(request(['search']))->paginate(50), 'data' => $data, 'resident' => $resident));
    }
}
