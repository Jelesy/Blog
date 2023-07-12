<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder {
    public function run() {
        // создать 20 постов блога
        \App\Models\Post::factory()->count(20)->create();
    }
}
