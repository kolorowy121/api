<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Travel1;
use Faker\Factory;

class Travel1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 100; $i++)
        {
            $table = new Travel1();
            $table->o_name = $faker->company;
            $table->o_city = $faker->city;
            $table->o_desc = $faker->text(200);
            $table->o_country = $faker->country;
            $table->o_bprice = $faker->numberBetween(100,10000);
            $table->o_link = "1";
            $table->save();

        }
    }
}
