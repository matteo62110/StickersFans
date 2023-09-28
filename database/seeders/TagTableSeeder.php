<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = new Tag();
        $tag->nom="jaune";
        $tag->save();

        $tag2 = new Tag();
        $tag2->nom="rouge";
        $tag2->save();

        $tag3 = new Tag();
        $tag3->nom="bleu";
        $tag3->save();

        $tag4 = new Tag();
        $tag4->nom="vert";
        $tag4->save();

        $tag5 = new Tag();
        $tag5->nom="noir";
        $tag5->save();

        $tag6 = new Tag();
        $tag6->nom="blanc";
        $tag6->save();
    }
}
