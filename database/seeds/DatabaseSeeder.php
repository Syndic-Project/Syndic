<?php

use App\Models\Syndic;
use App\Models\Ville;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// Import DB and Faker services


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        //        $gender = $faker->randomElement(['male', 'female']);


        $ville = Ville::all()->pluck('id')->toArray();
        $syndic = Syndic::all()->pluck('id')->toArray();
        $residence = \App\Models\Residence::all()->pluck('id')->toArray();
        foreach (range(1, 20) as $index) {
            DB::table('blocs')->insert([
                'nom_bloc' => $faker->name,
                'id_residence' => $faker->randomElement($residence),
                'id_ville' => $faker->randomElement($ville),
                'adresse' => $faker->address,
                'id_syndic' => $faker->randomElement($syndic),



                //                'name' => $faker->name($gender),
                //                'email' => $faker->email,
                //                'username' => $faker->username,
                //                'phone' => $faker->phoneNumber,
                //                'dob' => $faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }
    }
}
