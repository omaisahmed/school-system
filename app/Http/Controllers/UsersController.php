<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('students.index');
        $users = Users::latest()->paginate(5);
    
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Users $user)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'role'=> 'required',

        ]);

        Users::where('id', $user->id)
        ->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            // 'password' => Hash::make($user['password']),
            // 'password' => md5($request->input('password')),
            'role' => $request->input('role'),
            
        ]);

        // Users::create([
        //     'name' => $user['name'],
        //     'email' => $user['email'],
        //     'password' => Hash::make($user['password']),
        //     'role' => $user['role'],
        // ])->where('id', $user->id);

        // Users::create($request->all());
        return redirect()->route('users.index')->with('success','User Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Users $user)
    {
        // return redirect()->route('students.index');
        return view('users.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $user)
    {
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $user)
    {

        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'role'=> 'required',

        ]);

        Users::where('id', $user->id)
        ->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
            
        ]);

        // $request->user()->fill([
        //     'password' => Hash::make($request->password)
        // ])->save();
        // Students::update($request->all());
        return redirect()->route('users.index')->with('success','User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','User Deleted Successfully!');
    }
}
