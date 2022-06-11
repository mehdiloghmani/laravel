<?php

namespace Database\Seeders;

use App\Models\clip;
use Illuminate\Database\Seeder;
use Database\Seeders\clipseeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         $this->call(clipseeder::class);
    }
}
