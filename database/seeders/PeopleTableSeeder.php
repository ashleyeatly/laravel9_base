<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $c = new Person();
        $c->title = "Mr";
        $c->first_name = "Ashley";
        $c->surname = "Eatly";
        $c->address= "Ferryside 19";
        $c->save();

        $c2 = new Person();
        $c2->title = "Mrs";
        $c2->first_name = "Annette";
        $c2->surname = "Eatly";
        $c2->address= "Ferryside 19 too";
        $c2->save();

        // do a 50 count seeder
        Person::factory(50) ->create();
    }
}
