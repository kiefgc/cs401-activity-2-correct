<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(5)->create();

        $adminRole = Role::where('role_name', 'Admin')->first();
        $user = User::first();

        if ($adminRole && $user) {
            $user->roles()->attach($adminRole->id);
        }

        $nonAdminUsers = User::whereDoesntHave('roles', function ($query) {
            $query->where('role_name', 'Admin');
        })->get();

        $nonAdminRoles = Role::where('role_name', '!=', 'Admin')->get();

        foreach ($nonAdminUsers as $nonAdminUser) {
            $randomRoles = $nonAdminRoles->random(rand(1, 2));
            $nonAdminUser->roles()->attach($randomRoles);
        }
    }
}
