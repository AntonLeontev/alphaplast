<?php

namespace Database\Seeders;

use App\Models\ArticleSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleSection::create([
			'title' => 'Новости из мира ПЭТ',
			'slug' => 'novosti-pet',
		]);
        ArticleSection::create([
			'title' => 'Новости компании',
			'slug' => 'novosti-companii',
		]);
    }
}
