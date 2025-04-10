<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function edit()
    {
        $user = Auth::guard('admin')->user();

        return view('dashboard.password.edit', [
            'user' => $user,
        ]);
    }


    public function update(Request $request)
    {
        $user = Auth::guard('admin')->user();
        $request->validate([
            'password'              => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
            'current_password'      => 'required ',
        ]);
        $user->forceFill([
            'password' => Hash::make($request->input('password')),
        ])->save();

        $request->session()->flash('success', 'Password Changed');
        return redirect()->back();

    }
}
