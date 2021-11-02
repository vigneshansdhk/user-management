<?php

namespace App\Http\Controllers;

use App\Models\UserManagement;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users     = UserManagement::get();
        return view('user-management.list-user-management',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user-management.create-user-management');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate([
            'name'           => 'required',
            'email'          => 'required',
            'phone_number'   => 'required|digits:10',
            'date_of_birth'  => 'required',
            'country'        => 'required',
        ]);

        $user_management                = new UserManagement;
        $user_management->name          = $request->name;
        $user_management->email         = $request->email;
        $user_management->phone_number  = $request->phone_number;
        $user_management->date_of_birth = $request->date_of_birth;
        $user_management->country       = $request->country;
        $user_management->save();
        return redirect('list-user');
        Session()->flash('success_message', ' Stored Succesfully');
        
    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserManagement  $userManagement
     * @return \Illuminate\Http\Response
     */
    public function show(UserManagement $userManagement,$id)
    {
        //
        $user_management = UserManagement::find($id);
        return view('user-management.edit-user-management',compact('user_management'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserManagement  $userManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(UserManagement $userManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserManagement  $userManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserManagement $userManagement)
    {
        //
        $validatedData = $request->validate([
            'name'           => 'required',
            'email'          => 'required',
            'phone_number'   => 'required|digits:10',
            'date_of_birth'  => 'required',
            'country'        => 'required',
        ]);

        $user_management                = UserManagement::find($request->id);
        $user_management->name          = $request->name;
        $user_management->email         = $request->email;
        $user_management->phone_number  = $request->phone_number;
        $user_management->date_of_birth = $request->date_of_birth;
        $user_management->country       = $request->country;
        $user_management->save();
        return redirect('list-user');
        Session()->flash('success_message', 'Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserManagement  $userManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserManagement $userManagement,$id)
    {
        //
        $user_management = UserManagement::find($id);
        $user_management->delete();
        return redirect('list-user');
        Session()->flash('success_message', ' Deleted Succesfully');
    }
}
