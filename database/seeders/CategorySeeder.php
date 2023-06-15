<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
			'title' => 'Банки',
			'slug' => 'banki',
		]);
        Category::create([
			'title' => 'Бутылки',
			'slug' => 'butilki',
		]);
        Category::create([
			'title' => 'Преформы',
			'slug' => 'preformy',
		]);
        Category::create([
			'title' => 'ПЭТ-преформа для банок',
			'slug' => 'pet-preforma-dlja-butilok',
		]);
        Category::create([
			'title' => 'Пресс-формы',
			'slug' => 'press-formy',
		]);
        Category::create([
			'title' => 'Крышки',
			'slug' => 'krishki',
		]);
    }
}
