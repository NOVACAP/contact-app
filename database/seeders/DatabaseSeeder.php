<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //other option
        // $this->call([
        //     CompaniesTableSeeder::class,
        //     ContactsTableSeeder::class,
        // ]);
        //
        // Company::factory()->count(10)->create();
        // Contact::factory()->count(50)->create();
        //otheer option
        // Company::factory()->has(
        //     Contact::factory()->count(3)
        // )
        // ->count(10)
        // ->create();

        //or use has[relationship] - laravel9
        Company::factory()->hasContacts(3)->count(10)->create();

    }
}
