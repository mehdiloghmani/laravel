<?php

namespace Database\Seeders;

use App\Models\clip;
use Illuminate\Database\Seeder;

class clipseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        clip::factory()->create([
            'name'=>'Best Clip' 
 
         ]);        
         clip::factory()->count(15)->create();
    }
}
