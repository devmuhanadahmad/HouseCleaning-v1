<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserRequist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $request = Request();
        $users = User::latest()->paginate(15);
        $user= new User();
        return view('dashboard.user.index', compact('users','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {

        User::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => Hash::make($request->post('password')),
            //'status'=>$request->post('status'), //default active
        ]);

        Session::flash('success','Operation accomplished successfully');
        return redirect()->back();
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'email' => 'required|email|unique:users,email,'.$id,
        ]);
        $user=User::findOrFail($id);
        $user->update([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => Hash::make($request->post('password')),
            //'status'=>$request->post('status'), //default active
        ]);

        Session::flash('success','Operation accomplished successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        Session::flash('success','Operation accomplished successfully');
        return redirect()->back();
    }
}
