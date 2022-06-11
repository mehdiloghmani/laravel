<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;
class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        
        $categories = [
            'ترسناک' => [
                'slug' => 'scary',
                'icon' => 'fa fa-bomb'
            ],
            'درام' => [
                'slug' => 'drama',
                'icon' => 'fa fa-caret-square-o-right'
            ],
            'تاریخی' => [
                'slug' => 'historical',
                'icon' => 'fa fa-times-circle-o'
            ],
            'طنز' => [
                'slug' => 'fun',
                'icon' => 'fa  fa-video-camera'              
            ],
            'جنایی' => [
                'slug' => 'cinema',
                'icon' => 'fa fa-film'
            ],
            'وحشت' => [
                'slug' => 'horror',
                'icon' => 'fa fa-hashtag'
            ],
            'اکشن' => [
                'slug' => 'action',
                'icon' => 'fa  fa-toggle-left (alias)'
             
            ]
        ];
        
        foreach ($categories as $categoryName => $details) {
            Category::create([
                'name' => $categoryName,
                'slug' => $details['slug'],
                'icon' => $details['icon']
            ]);
}
    }
}