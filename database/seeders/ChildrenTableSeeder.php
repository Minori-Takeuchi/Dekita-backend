<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Child;

class ChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => 'nDgH6Woe7feqMDqYun2qzYolLNF3',
            'child_name' => '子供1',
            'generation' => 0,
            'point' => 0,
            'child_img' => 'shark.png',
        ];
        Child::create($param);

        $param = [
            'user_id' => 'nDgH6Woe7feqMDqYun2qzYolLNF3',
            'child_name' => '子供2',
            'generation' => 1,
            'point' => 0,
            'child_img' => 'cherry.png',
        ];
        Child::create($param);
    }
}
