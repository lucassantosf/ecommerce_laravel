<?php

namespace Database\Seeders;

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
        $this->call(AdminsSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
    }
}
