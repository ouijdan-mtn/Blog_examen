<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post; // Import the Post model

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::factory()->count(10)->create();
    }
}
