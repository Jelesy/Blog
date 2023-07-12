<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
    public function run() {
        // создать 4 пользователей сайта
        \App\Models\User::factory()->count(4)->create();
    }
}
