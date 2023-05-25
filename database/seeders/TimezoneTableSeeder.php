<?php

namespace Database\Seeders;

use App\Models\Timezone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimezoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'timezone' => 'まいにち',
        ];
        Timezone::create($param);
        $param = [
            'timezone' => 'いちにち',
        ];
        Timezone::create($param);
        $param = [
            'timezone' => 'あさ',
        ];
        Timezone::create($param);
        $param = [
            'timezone' => 'ひる',
        ];
        Timezone::create($param);
        $param = [
            'timezone' => 'ゆうがた',
        ];
        Timezone::create($param);
        $param = [
            'timezone' => 'よる',
        ];
        Timezone::create($param);
    }
}
