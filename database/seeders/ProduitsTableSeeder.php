<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produit= new Produit();
        $produit->nom = "Stickers RCLens";
        $produit->prix_ht = 7;
        $produit->description = "Lot de 50 stickers RCLens";
        $produit->photo_principale = "corons.png";
        $produit->category_id=1;
        $produit->save();

        $produit= new Produit();
        $produit->nom = "Stickers Magic Fans";
        $produit->prix_ht = 7;
        $produit->description = "Lot de 50 stickers Magic Fans";
        $produit->photo_principale = "magicfans.jpg";
        $produit->category_id=1;
        $produit->save();

        $produit= new Produit();
        $produit->nom = "Stickers Bad Gones";
        $produit->prix_ht = 7;
        $produit->description = "Lot de 50 stickers Bad Gones";
        $produit->photo_principale = "badgones.jpg";
        $produit->category_id=1;
        $produit->save();

        $produit= new Produit();
        $produit->nom = "Stickers Ultra Paris";
        $produit->prix_ht = 7;
        $produit->description = "Lot de 50 stickers Ultra Paris";
        $produit->photo_principale = "ultraparis.jpg";
        $produit->category_id=1;
        $produit->save();

        $produit= new Produit();
        $produit->nom = "Stickers Kaotic Group";
        $produit->prix_ht = 7;
        $produit->description = "Lot de 50 stickers Kaotic Group";
        $produit->photo_principale = "kaoticgroup.jpg";
        $produit->category_id=1;
        $produit->save();

        $produit= new Produit();
        $produit->nom = "Stickers DVE";
        $produit->prix_ht = 7;
        $produit->description = "Lot de 50 stickers DVE";
        $produit->photo_principale = "dve.jpg";
        $produit->category_id=1;
        $produit->save();

        $produit= new Produit();
        $produit->nom = "Stickers Brigade Loire";
        $produit->prix_ht = 7;
        $produit->description = "Lot de 50 stickers Brigade Loire";
        $produit->photo_principale = "brigadeloire.jpg";
        $produit->category_id=1;
        $produit->save();

        $produit= new Produit();
        $produit->nom = "Stickers Roazhon Celtic Cup";
        $produit->prix_ht = 7;
        $produit->description = "Lot de 50 stickers Roazhon Celtic Cup";
        $produit->photo_principale = "roazhon.jpg";
        $produit->category_id=1;
        $produit->save();

        $produit= new Produit();
        $produit->nom = "Stickers Ultra Boys 90";
        $produit->prix_ht = 7;
        $produit->description = "Lot de 50 stickers Ultra Boys 90";
        $produit->photo_principale = "ultraboys90.jpg";
        $produit->category_id=1;
        $produit->save();
    }
}
