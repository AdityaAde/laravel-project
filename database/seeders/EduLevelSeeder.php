<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EduLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('edulevel')->insert([
            [
            'name' => 'SMP Sederajat',
            'desc' => 'SMP/MTs',
            ],
            [
            'name' => 'SMA Sederajat',
            'desc' => 'SMA/MA',
            ],
            
        ]);
    }
}
