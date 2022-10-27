<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this-> faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
           // 'body' => '<p>'. implode( '</p><p>', $this->faker->paragraphS(mt_rand(3,6))). '</p>',
           'body' => collect ($this->faker->paragraphS(mt_rand(3,6)))
                    ->map(fn($p)=>"<p>$p</p>")
                    ->implode(''),
           'user_id'=> mt_rand(1,3),
            'category_id'=>mt_rand(1,2)
            
        ];
    }
}
