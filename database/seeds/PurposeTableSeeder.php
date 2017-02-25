<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Purpose;

class PurposeTableSeeder extends Seeder {

    public function run()
    {
        $purposes = [
            [
                "symbol" => "BP5",
                "group"   => "BP5",
                "description" => "Yêu cầu biện pháp 5",
            ],
            [
                 "symbol" => "định vị",
                 "group"   => "locate",
                 "description" => "Yêu cầu định vị",
            ],
            [
                 "symbol" => "LT_BP2",
                 "group"   => "LT_BP2",
                 "description" => "Yêu cầu lâm thời BP2",
            ],
            [
                 "symbol" => "CĐ_BP2",
                 "group"   => "CĐ_BP2",
                 "description" => "Yêu cầu cố định BP2",
            ],
        ];
        foreach ($purposes as $purpose) {

            Purpose::create($purpose);
        }
    }

}