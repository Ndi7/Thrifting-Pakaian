<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilPembeliController extends Controller
{
    public function show() {
        $profil = auth()->user(); // Example: Assuming you are using Laravel's authentication
        return view ('pembeli.profilpembeli', compact('profil'));
    }

    public function editForm()
{
    // Assuming you have logic to fetch the authenticated user's profile
    $profil = auth()->user(); // Example: Assuming you are using Laravel's authentication

    return view('pembeli.editprofilpembeli', compact('profil'));
}


    public function update(Request $request) {
        // Find the user by their ID (assuming $request->id contains the user's ID)
        $user = User::findOrFail($request->id);

        // Update the fields that are fillable
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->photo = $request->photo;

        // Check if a new password is provided and update it if necessary
        if ($request->has('password')) {
            $user->password = bcrypt($request->password); // Hash the new password
        }

        // Save the updated user record
        $user->save();

        return redirect()->route('pembeli.profilpembeli', $user->id)->with('success', 'Edit Profil berhasil!');
    }
}
