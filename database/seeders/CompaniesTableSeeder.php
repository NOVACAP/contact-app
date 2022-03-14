<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //use truncate to clear all database data e refresh id to 1
        //DB::table('companies')->truncate();

        // DB::table('companies')->delete();
        // $companies = [1dsdsd, 'asdas'];
        // //usando faker
        // $faker = Faker::create();

        // foreach (range(2, 10) as $index) {
        //     $companies[] = [
        //         //'name' => $name = "Company $index",
        //         //'address' => "Address $name",
        //         //'website' => "Website $name",
        //         //'email' => "Emal $name",
        //         'name' => $faker->company,
        //         'address' => $faker->address,
        //         'website' => $faker->domainName,
        //         'email' => $faker->email,
        //         'created_at' => now(), //now() function php to create current date
        //         'updated_at' => now(),
        //     ];
        // }

        // DB::table('companies')->insert($companies);
        //Company::factory()->count(10)->create();
    }
}
