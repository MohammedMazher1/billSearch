<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'محمد مزهر',
            'user_name' => 'mo123',
            'password' => Hash::make('mo123'),
            'type' => 'admin',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'إبراهيم غانم',
            'user_name' => 'ib123',
            'password' => Hash::make('ib123'),
            'type' => 'admin',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
    }
}
