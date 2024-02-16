<?php

namespace Database\Seeders;

use App\Models\roles;
use App\Models\userRoles;
use App\Models\users;
use Illuminate\Database\Seeder;

class DefaultAdminUserSeeder extends Seeder
{
    public function run(): void
    {
        users::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'first_name' => 'admin',
            'last_name' => 'admin',
            'nick_name' => 'admin',
        ]);

        roles::create([
            'name' => 'Admin',
        ]);

        userRoles::create([
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }
}
