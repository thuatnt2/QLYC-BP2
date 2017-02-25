<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Unit;

class UnitTableSeeder extends Seeder {

    public function run()
    {
        $units = [
            [
                "symbol" => "PA88",
                "description"   => "An ninh chính trị tư tưởng",
                "block"  => "AN",
            ],
            [
                "symbol" => "PA92",
                "description"   => "xxxxxxxxx",
                "block"  => "AN",
            ],
            [
                "symbol" => "PC45",
                "description"   => "Phòng chống mà túy",
                "block"  => "CS",
            ]
        ];
        foreach ($units as $unit) {

            Unit::create($unit);
        }
    }

}