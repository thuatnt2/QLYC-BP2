<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Category;

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        $categories = [
            [
                "symbol"      => "ANQG",
                "description" => "An ninh quốc gia",
            ],
            [
                "symbol"      => "HN",
                "description" => "Hiềm nghi",
            ],
            [
                "symbol"      => "ST",
                "description" => "Sưu tra",
            ]
        ];
        foreach ($categories as $category) {

            Category::create($category);
        }
    }

}