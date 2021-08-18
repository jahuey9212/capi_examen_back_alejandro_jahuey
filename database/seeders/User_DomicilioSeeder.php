<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\User_domicilio;
use Illuminate\Database\Seeder;

class User_DomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();
        User_domicilio::factory(100)->create();
    }
}
