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
        $this->call(RoleSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(StackholderRoleSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(WarehouseSeeder::class);
    }
}
