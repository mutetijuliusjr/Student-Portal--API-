<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        # User Profiles
        foreach ($users as $user) {
            $user->profile;
        }
        # User Roles
        foreach ($users as $user) {
            $user->roles;
        }
        # Student Users
        foreach ($users as $user) {
            $student = $user->student;
            $student->course;
        }
        # Teacher Users
        foreach ($users as $user) {
            $user->instructor;
        }
        
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
		
		return User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $student = $user->student;
        $instructor = $user->instructor;
        $roles = $user->roles;
        $profile = $user->profile;
        return compact('user');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_user = User::find($user);
		$update_user->update($request->all());
		return $update_user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return User::destroy($id);
    }
	
	public function search($email)
    {
        return User::where('email', $email)->get();
    }
}
