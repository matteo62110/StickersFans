<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $category = new Category();
//        $category->nom = "Ligue 1";
//        $category->is_online=1;
//        $category->save();

//        $category2 = new Category();
//        $category2->nom = "Ligue 2";
//        $category2->is_online=1;
//        $category2->save();

        $category3 = new Category();
        $category3->nom = "Lens";
        $category3->is_online=1;
        $category3->parent_id=1;
        $category3->save();

        $category4 = new Category();
        $category4->nom = "Marseille";
        $category4->is_online=1;
        $category4->parent_id=1;
        $category4->save();

        $category5 = new Category();
        $category5->nom = "Valenciennes";
        $category5->is_online=1;
        $category5->parent_id=2;
        $category5->save();

        $category5 = new Category();
        $category5->nom = "Amiens";
        $category5->is_online=1;
        $category5->parent_id=2;
        $category5->save();
    }
}
