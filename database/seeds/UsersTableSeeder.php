<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'test@test.com',
                    'email' => 'test@test.com',
                    'password' => bcrypt('test@test.com'),
                ],
                [
                    'name' => 'test1@test.com',
                    'email' => 'test1@test.com',
                    'password' => bcrypt('test1@test.com'),
                ],
                [
                    'name' => 'test2@test.com',
                    'email' => 'test2@test.com',
                    'password' => bcrypt('test2@test.com'),
                ],
                [
                    'name' => 'test3@test.com',
                    'email' => 'test3@test.com',
                    'password' => bcrypt('test3@test.com'),
                ],
            ]
        );
    }
}
