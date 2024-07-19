<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role owner
        $ownerRole = Role::create([
            'name' => 'owner'
        ]);

        // Buat role buyer
        $buyerRole = Role::create([
            'name' => 'buyer'
        ]);

        // Buat user dengan role owner
        $user = User::create([
            'name' => 'Alifta Pemilik',
            'email' => 'alifta@owner.com',
            'password' => bcrypt('123456')
        ]);

        // Assign role ke user
        $user->assignRole($ownerRole);
    }
}

