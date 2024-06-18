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


public function update(Request $request, string $id) {
    // Find the user by their ID (assuming $request->id contains the user's ID)
    $user = User::findOrFail($id);
    $ubah = $user->photo;

    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $namaFile = $ubah->photo;
        $photo->move(public_path('/images/Profil'), $namaFile);
        $ubah = $namaFile; // Update the file name in the database
    }
    // Update the fields that are fillable
    $user->update ([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'address' => $request->input('address'),
        'phone' => $request->input('phone'),
    ]);

    // Check if a new password is provided and update it if necessary
    if ($request->has('password')) {
        $user->password = bcrypt($request->password); // Hash the new password
    }

    // Save the updated user record
    $user->save();

    return redirect()->intended(route('pembeli.profilpembeli'));
}

}
