<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       // $this->call(AdminsTableSeeder::class);


        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            \App\Models\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        }

    }
}
