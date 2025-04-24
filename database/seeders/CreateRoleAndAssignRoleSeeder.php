<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CreateRoleAndAssignRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'super_admin', 'guard_name' => 'web']);

        Role::create(['name' => 'admin', 'guard_name' => 'web']);

        Role::create(['name' => 'user', 'guard_name' => 'web']);

        $adminUser = User::create(['name'=> 'admin', 'email'=> 'admin@gmail.com', 'password' => Hash::make("Admin@123")]);

        $superAdminUser = User::create(['name'=> 'super_admin', 'email'=> 'superadmin@gmail.com', 'password' => Hash::make("SuperAdmin@123")]);

        // $adminUser = User::where('name', 'Admin')->where('email', 'admin@gmail.com')->first();

        $adminUser->assignRole('admin');
        $superAdminUser->assignRole('super_admin');
    }
}
