<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("photographers")->insert([
            "id"=>1,
            "name"=> "Nick Reynolds",
              "phone"=> "555-555-5555",
              "email"=> "nick.reynolds@domain.co",
              "bio"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
              "profile_picture"=> "img/profile.jpg",
        ]);

        DB::table("images")->insert([
             [
              "id"=>1,
              "photographers_id"=>1,
              "title"=> "Nandhaka Pieris",
              "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
              "img"=> "img/landscape1.jpg",
              "date"=> "2015-05-01",
              "featured"=> true
             ],
            [
                "id"=>2,
                "photographers_id"=>1,
              "title"=> "New West Calgary",
              "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
              "img"=> "img/landscape2.jpg",
              "date"=> "2016-05-01",
              "featured"=> false
            ],
            [
                "id"=>3,
                "photographers_id"=>1,
              "title"=> "Australian Landscape",
              "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
              "img"=> "img/landscape3.jpg",
              "date"=> "2015-02-02",
              "featured"=> false
            ],
            [
                "id"=>4,
                "photographers_id"=>1,
              "title"=> "Halvergate Marsh",
              "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
              "img"=> "img/landscape4.jpg",
              "date"=> "2014-04-01",
              "featured"=> true
            ],
            [
                "id"=>5,
                "photographers_id"=>1,
              "title"=> "Rikkis Landscape",
              "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
              "img"=> "img/landscape5.jpg",
              "date"=> "2010-09-01",
              "featured"=> false
            ],
            [
                "id"=>6,
                "photographers_id"=>1,
              "title"=> "Kiddi Kristjans Iceland",
              "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
              "img"=> "img/landscape6.jpg",
              "date"=> "2015-07-21",
              "featured"=> true
            ]
        ]);
    }
}
