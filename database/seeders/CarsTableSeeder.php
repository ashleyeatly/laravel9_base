<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $c = new Car();
        $c->make = "Audi";
        $c->model = "Q5";
        $c->person_id = 1;
        $c->save();

        $c2 = new Car();
        $c2->make = "Renault";
        $c2->model = "Meganne";
        $c2->person_id = 1;
        $c2->save();

        $c3 = new Car();
        $c3->make = "Renault";
        $c3->model = "Nova";
        $c3->person_id = 2;
        $c3->save();
    }
}
