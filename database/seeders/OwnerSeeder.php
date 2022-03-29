<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('passtest1'),
                'created_at' => '2022/03/29 13:28:00',
                ],
            [
                'name' => 'test2',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('passtest2'),
                'created_at' => '2022/03/29 13:28:00',
            ],
            [
                'name' => 'test3',
                'email' => 'test3@gmail.com',
                'password' => Hash::make('passtest3'),
                'created_at' => '2022/03/29 13:28:00',
            ],
        ]);
    }
}
