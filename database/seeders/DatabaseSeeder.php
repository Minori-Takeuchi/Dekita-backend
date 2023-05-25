<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TimezoneTableSeeder::class);
        $this->call(ChildrenTableSeeder::class);
    }
}
