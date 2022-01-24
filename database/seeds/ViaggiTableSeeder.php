<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Viaggio;


class ViaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker)
    {
        Viaggio::truncate();

        for($i = 0; $i < 10; $i++ ){
            $new_viaggio = new Viaggio();
            $new_viaggio->travel_name = $faker->text(20);
            $new_viaggio->date = $faker->date('Y_m_d');
            $new_viaggio->date_return = $faker->date('Y_m_d');
            $new_viaggio->amount = $faker->numberBetween(50, 100);

            $new_viaggio->save();
        }
    }
}
