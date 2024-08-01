<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            0 => [
                'template' => 'v1',
                'money' => 100.50,
                'created_at' => date('Y-m-d H:i:s')
            ],
            1 => [
                'template' => 'v2',
                'money' => 45,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
