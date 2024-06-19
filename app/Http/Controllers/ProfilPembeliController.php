<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilPembeliController extends Controller
{
    public function index() {
        $profil = auth()->user();
        return view('pembeli.profile.data-profile', compact('profil'));
    }

    public function edit() {
        $profil = auth()->user();
        return view('pembeli.profile.edit-profile', compact('profil'));
    }

    public function store(Request $request)
    {
        $nm = $request->photo;
        $namaFile = 'PRFL' . date('mY') . '_' . rand(100,999) . '.' . $nm->getClientOriginalExtension();

        $nm->move(public_path(). '/images/profile/Buyer', $namaFile);

        User::create([
            'photo' => $namaFile,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('pembeli.profilpembeli')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, string $id) {
        $user = User::findOrFail($id);

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($user->photo) {
                $oldFilePath = public_path('/images/profile/Buyer/' . $user->photo);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Upload foto baru
            $photo = $request->file('photo');
            $namaFile = 'PRFL' . date('mY') . '_' . rand(100,999) . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('/images/profile/Buyer'), $namaFile);

            // Perbarui nama file di database
            $user->photo = $namaFile;
        }

        // Perbarui field yang dapat diisi
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
        ]);

        // Periksa apakah password baru disediakan dan perbarui jika perlu
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        // Simpan perubahan
        $user->save();

        return redirect()->route('pembeli.profilpembeli')->with('success', 'Profil berhasil diperbarui');
    }
}
