<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserTableSeeder::class,
            RoleTableSeeder::class,
            RoleUserTableSeeder::class,
            PermissionTableSeeder::class,
            PermissionRoleTableSeeder::class,
            AdminBankAccountTableSeeder::class,
        ]);
    }
}
