<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }


    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Mengupdate data pengguna
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone_number = $validatedData['phone_number'];
        $user->address = $validatedData['address'];

        // Mengupdate password jika ada perubahan
        if (!empty($validatedData['password'])) {
            $user->password = bcrypt($validatedData['password']);
        }

        // Mengupload gambar baru jika ada
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('imageprofile/' . $user->image);
            $image = $request->file('image');
            $image->storeAs('public/imageprofile', $image->hashName());
            $user->image = $image->hashName();
        }
        /** @var \App\Models\User $user **/
        $user->save();

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

}
