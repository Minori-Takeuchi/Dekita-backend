<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'id' => 'cZZ0CxyjXBaNa72p47o6luKO8uM2',
            'email' => 'shato.min0716@gmail.com',
            'notice' => 0
        ];
        User::create($param);
    }
}
