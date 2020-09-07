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
        DB::table('pages')->insert([
            'type' => "slider",
            'title' => "با مهویتالی دنیا رو خرید کن",
            'subtitle' => "خرید از تمامی دنیا",
            'second_subtitle' => "شما میتوانید با مهویتالی از تمامی سایت های دنیا خرید کنید",
            'button_text' => "ثبت نام",
            'button_link' => "home",
            'media_path' => "front/img/bg/header-bg-5.jpg",
            'status' => "1",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pages')->insert([
            'type' => "promotional1",
            'title' => "با مهویتالی دنیا رو خرید کن",
            'button_text' => "مشاهده",
            'button_link' => "home",
            'media_path' => "front/img/promotional/13.jpg",
            'status' => "1",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pages')->insert([
            'type' => "promotional2",
            'title' => "با مهویتالی دنیا رو خرید کن",
            'button_text' => "مشاهده",
            'button_link' => "home",
            'media_path' => "front/img/promotional/13.jpg",
            'status' => "1",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pages')->insert([
            'type' => "filtered_one",
            'status' => "1",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pages')->insert([
            'type' => "surprise",
            'title' => "با مهویتالی دنیا رو خرید کن",
            'button_link' => "home",
            'media_path' => "front/img/surprise-image.jpg",
            'status' => "1",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pages')->insert([
            'type' => "filtered_two",
            'status' => "1",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pages')->insert([
            'type' => "banner_1",
            'media_path' => "front/img/banner-add/02-big.jpg",
            'status' => "1",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pages')->insert([
            'type' => "banner_2",
            'media_path' => "front/img/banner-add/02-bg.jpg",
            'status' => "1",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
