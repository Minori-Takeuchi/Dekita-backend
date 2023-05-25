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
            'id' => 'nDgH6Woe7feqMDqYun2qzYolLNF3',
            'email' => 'gest@gest.com',
            'notice' => 0
        ];
        User::create($param);
    }
}
