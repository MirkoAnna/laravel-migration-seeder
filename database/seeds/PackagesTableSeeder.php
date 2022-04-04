<?php

use App\Package;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i ++) {

            $package = new Package();
            $package->codPackages = $faker->numberBetween(1, 60000);
            $package->country = $faker->word();
            $package->days = $faker->numberBetween(3, 30);
            $package->price = $faker->randomFloat(2, 400, 3000);
            $package->description = null;
            $package->save();

        }
    }
}
