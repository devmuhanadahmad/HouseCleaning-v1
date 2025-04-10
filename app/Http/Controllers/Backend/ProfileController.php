<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::guard('admin')->user();

        return view('dashboard.profile.edit', [
            'user' => $user,
            //'countries' => Countries::getNames(App::currentLocale()),
            //'locales' => Languages::getNames(App::currentLocale()),
        ]);
    }
    public function update(Request $request)
    {
        $user = Auth::guard('admin')->user();
        $request->validate([
            'first_name'            => 'nullable|max:255|string',
            'last_name'             => 'nullable|max:255|string',
            'gender'                => 'nullable',
            'phone'                 => 'nullable|string',
            'address'               => 'nullable|max:255|string',
            'image'                 => 'nullable',
        ]);

          // Process the image if it is provided
    if ($request->hasFile('image')) {
        // Store the image in the 'public/images' directory
        $imagePath = $request->file('image')->store('images', 'public');

         //Optionally, you could delete the old image if you are replacing it
         if ($user->profile->image) {
            Storage::delete('public/' . $user->profile->image);
         }

        // Update the profile image path
        $user->profile->image = $imagePath;
    }

    // Update the rest of the profile data
    $user->profile->fill($request->except('image'))->save(); // Exclude the image from mass assignment

        $request->session()->flash('success', 'Profile Changed');
        return redirect()->back();
    }




}
