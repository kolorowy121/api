<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Travel2;

class Travel2TableSeeder extends Seeder
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
            $table = new Travel2();
            $table->o_name = $faker->company;
            $table->o_city = $faker->city;
            $table->o_desc = $faker->text(200);
            $table->o_country = $faker->country;
            $table->o_bprice = $faker->numberBetween(100,10000);
            $table->o_link = "2";
            $table->save();

        }
    }
}
