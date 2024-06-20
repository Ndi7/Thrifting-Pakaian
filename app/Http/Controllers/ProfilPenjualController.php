<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilPenjualController extends Controller
{
    public function index() {
        $profilpnjl = auth()->user();
        return view('penjual.profile.data-profile', compact('profil'));
    }

    public function edit() {
        $profilpnjl = auth()->user();
        return view('penjual.profile.edit-profile', compact('profil'));
    }

    public function store(Request $request)
    {
        $nm = $request->photo;
        $namaFile = 'PRFL' . date('mY') . '_' . rand(100,999) . '.' . $nm->getClientOriginalExtension();

        $nm->move(public_path(). '/images/profile/Seller', $namaFile);

        User::create([
            'photo' => $namaFile,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('penjual.profilpenjual')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, string $id) {
        $user = User::findOrFail($id);

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($user->photo) {
                $oldFilePath = public_path('/images/profile/Seller/' . $user->photo);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Upload foto baru
            $photo = $request->file('photo');
            $namaFile = 'PRFL' . date('mY') . '_' . rand(100,999) . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('/images/profile/Seller'), $namaFile);

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

        return redirect()->route('penjual.profilpenjual')->with('success', 'Profil berhasil diperbarui');
    }
}
