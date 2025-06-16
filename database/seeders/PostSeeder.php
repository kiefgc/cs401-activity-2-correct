<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeding Post then attach user id on it
        $users = User::all();

        if ($users->count() === 0) {
            echo "No users found, please run UserSeeder first.\n";
            return;
        }

        Post::factory(10)->create([
            'user_id' => $users->random()->id,
        ]);

        //////////

        // Attach categories of Post
        $categories = Category::all();
        $posts = Post::all();

        foreach ($posts as $post) {
            $randomCats = $categories->random(rand(1, 3));
            $post->categories()->attach($randomCats);
        }
    }
}
