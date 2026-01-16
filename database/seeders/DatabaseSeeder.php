<?php

namespace Database\Seeders;

use App\Models\Tour;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Tour::insert([
            'title' => 'Холзан - питомник хищных птиц (г.Сысерть)',
            'date' => '2025-08-09',
            'price' => '2010',
            'image' => 'resources/images/tour3.jpg'
        ]);
        Tour::insert([
            'title' => 'Обзорная экскурсия по Челябинску',
            'date' => '2025-07-01',
            'price' => '650',
            'image' => 'resources/images/tour4.jpg'
        ]);

    }
}
