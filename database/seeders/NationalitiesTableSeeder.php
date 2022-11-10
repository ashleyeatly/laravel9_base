<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = new Nationality();
        $n->name = 'British';
        $n->save();

        $n1 = new Nationality();
        $n1->name = 'French';
        $n1->save();

        $n2 = new Nationality();
        $n2->name = 'Italian';
        $n2->save();

        $n->people()->attach(1);
        $n->people()->attach(2);
        $n2->people()->attach(2);
    }
}
