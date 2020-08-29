<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'sajad',
            'email' => 'sajad@gmail.com',
            'password' => bcrypt('12345678'),
            'roles' => '1',
            'pic' => 'images/avatar/avatar-7.png',
        ]);
    }
}
