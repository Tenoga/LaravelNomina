<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index', ['users'=>User::where('is_admin', 0)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create', ['users'=>User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $newUser = new User();
        $newUser ->name = $request->get('name');
        $newUser ->email = $request->get('email');
        $newUser ->phone = $request->get('phone');
        $newUser ->hours = $request->get('hours');
        $newUser ->category = $request->get('category');
        $newUser ->password = $request->get('password');

        $newUser -> save();
        // $newUser->assignRole('Vendedor');
        return redirect('/usuers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userInfo = User::findOrFail($id);
        return view('users.show', ['user'=>$userInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view ('users.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $userUpdt = User::find($id);
        $userUpdt ->name = $request->get('name');
        $userUpdt ->email = $request->get('email');
        $userUpdt ->phone = $request->get('phone');
        $userUpdt ->hours = $request->get('hours');
        if ($request->password != null ) {
            $userUpdt ->password = Hash::make($request->get('password'));
        };     
        if ($request->is_admin != null ) {
            $is_admin = $request->is_admin === 'true' ? true: false;
            $userUpdt ->is_admin = $is_admin;
        };        
        $userUpdt -> save();

        // if ($userUpdt->is_admin) {
        //     $userUpdt->assignRole('Admin');
        // }else {
        //     $userUpdt->assignRole('Vendedor');
        // }

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/users');
    }
    public function drop($id)
    {
        $dropUser=User::findOrFail($id);
        return view('users.drop', ['dropUser'=>$dropUser]);
    }
}
