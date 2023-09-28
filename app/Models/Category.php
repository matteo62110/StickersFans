<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //Recuperer la categorie parent d'une categorie
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }
    public function childrens(){
        return $this->hasMany(Category::class,'parent_id');
    }
    //Recuperer les produits de la categorie
    public function produitsParent(){
        return $this->hasMany(Produit::class);
    }

    public function produitsChild(){
        return $this->hasManyThrough(Produit::class,Category::class,'parent_id','category_id');
    }

    public function produits(){
        $produits = $this->produitsParent()->with('category')->get()->merge($this->produitsChild()->with('category')->get());
        return $produits;
    }

}
