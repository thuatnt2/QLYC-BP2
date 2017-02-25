<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Kind;

class KindTableSeeder extends Seeder {

    public function run()
    {
        $kinds = [
            [
                "symbol"      => "HS",
                "description" => "Hình sự",
            ],
            [
                "symbol"      => "MT",
                "description" => "Ma túy",
            ],
            [
                "symbol"      => "PĐ",
                "description" => "Phản động",
            ]
        ];
        foreach ($kinds as $kind) {

            Kind::create($kind);
        }
    }

}