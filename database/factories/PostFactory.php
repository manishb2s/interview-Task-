<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Author;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $faker = Faker::create();

        $authors = collect(Author::all())
            ->filter(static fn ($a) => $a)
            ->reverse()
            ->map(static fn ($a) => $a)
            ->reverse()
            ->toArray();

        return [
            'id' => null,
            'author_id' => $faker->randomElement($authors),
            'created_at' => time(),
            'updated_at' => time(),
        ];
    }
}
