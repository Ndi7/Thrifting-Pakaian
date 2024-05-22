<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'tambah-barang']);
        Permission::create(['name'=>'edit-barang']);
        Permission::create(['name'=>'hapus-barang']);

        Permission::create(['name'=>'tambah-kategori']);
        Permission::create(['name'=>'edit-kategori']);
        Permission::create(['name'=>'hapus-kategori']);

        Permission::create(['name'=> 'lihat-barang']);
        Permission::create(['name'=> 'checkout-barang']);
        Permission::create(['name'=> 'atur-profil']);

        Role::create(['name'=> 'penjual']);
        Role::create(['name'=> 'pembeli']);

        $rolePenjual = Role::findByName('penjual');
        $rolePenjual->givePermissionTo('tambah-barang');
        $rolePenjual->givePermissionTo('edit-barang');
        $rolePenjual->givePermissionTo('hapus-barang');

        $rolePembeli = Role::findByName('pembeli');
        $rolePembeli->givePermissionTo('lihat-barang');
        $rolePembeli->givePermissionTo('checkout-barang');
        $rolePembeli->givePermissionTo('atur-profil');
    }
}
