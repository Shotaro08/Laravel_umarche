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
                'password' => Hash::make('pass1111'),
                'created_at' => '2022/03/29 13:28:00',
                ],
            [
                'name' => 'test2',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('pass2222'),
                'created_at' => '2022/03/29 13:28:00',
            ],
            [
                'name' => 'test3',
                'email' => 'test3@gmail.com',
                'password' => Hash::make('pass3333'),
                'created_at' => '2022/03/29 13:28:00',
            ],
            [
                'name' => 'test4',
                'email' => 'test4@gmail.com',
                'password' => Hash::make('pass4444'),
                'created_at' => '2022/03/29 13:28:00',
            ],
            [
                'name' => 'test5',
                'email' => 'test5@gmail.com',
                'password' => Hash::make('pass5555'),
                'created_at' => '2022/03/29 13:28:00',
            ],

            [
                'name' => 'test6',
                'email' => 'test6@gmail.com',
                'password' => Hash::make('pass6666'),
                'created_at' => '2022/03/29 13:28:00',
            ],
            [
                'name' => 'test7',
                'email' => 'test7@gmail.com',
                'password' => Hash::make('pass7777'),
                'created_at' => '2022/03/29 13:28:00',
            ],
        ]);
    }
}
