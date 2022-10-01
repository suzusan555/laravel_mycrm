<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'カット',
                'memo' => 'カットの詳細',
                'price' => 4980,
            ],
            [
                'name' => 'カラー',
                'memo' => 'カラーの詳細',
                'price' => 10000,
            ],
            [
                'name' => 'パーマ(カット込み)',
                'memo' => 'パーマ詳細',
                'price' => 13000,
            ],
        ]);
    }
}
