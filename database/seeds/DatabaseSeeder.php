<?php

use App\quotation;
use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        factory(User::class,10)->create();
        factory(quotation::class,10)->create();

        // $this->call(UserSeeder::class);
    }
}
