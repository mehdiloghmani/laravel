<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class clipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'url' => 'https://ads.asset.aparat.com/aparat-ads/ec1a1d6a7083cfcf465cfc1b69b0e6e333632873-480p.apt/chunk.m3u8',
            'length'=>$this->faker->randomNumber(3),  
            'slug'=>$this->faker->slug(),
            'discription'=>$this->faker->realText(),
            'thumbnail'=>'http://127.0.0.1:8000/Theme/images/favorite/04.png?random'. rand(1,99)
        ];
    }
}
