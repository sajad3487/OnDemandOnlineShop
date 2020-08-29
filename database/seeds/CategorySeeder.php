<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'بدون دسته بندی',
            'parent_id' => '0',
            'status' => '1',
            'public' => '1',
            'created_at' => '2020-01-01',
            'updated_at' => '2020-01-01',
        ]);
    }
}
