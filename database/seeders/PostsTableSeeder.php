<?php

namespace Database\Seeders;

use Str;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Post::factory()
            ->count(50)
            ->create(['author_id' => Str::random(32)]);
    }
}
