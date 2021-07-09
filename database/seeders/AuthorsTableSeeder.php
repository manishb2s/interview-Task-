<?php

namespace Database\Seeders;

use Str;
use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Author::factory()
            ->count(50)
            ->create(['uuid' => Str::repeat('uuid', 16)]);
    }
}
