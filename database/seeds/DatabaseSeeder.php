<?php

use App\currency;
use App\discount;
use App\page;
use App\quotation;
use App\RequestItem;
use App\wishList;
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
        quotation::truncate();
        RequestItem::truncate();
        factory(User::class,10)->create();
        factory(quotation::class,10)->create();
        factory(RequestItem::class,20)->create();
        factory(currency::class,5)->create();
        factory(wishList::class,40)->create();
        factory(discount::class,10)->create();
//        factory(page::class,2)->create();

         $this->call(UserSeeder::class);
         $this->call(CategorySeeder::class);
    }
}
