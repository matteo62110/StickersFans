<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produit;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        //SELECT * FROM produits

        $produits = Produit::with('category')->get();
        //dd($produits);
        //$categories = Category::where('is_online',1)->get();


        return view('shop.index',compact('produits'));
    }

    public function produit(Request $request){
        //echo "page produit";
        //dd($request->id);

        $produit = Produit::find($request->id);
        //$categories = Category::where('is_online',1)->get();

        return view('shop.produit', compact('produit'));
    }

    public function viewByCategory(Request $request){

        //$produits = Produit::where('category_id',$request->id)->get();
        //$categories = Category::where('is_online',1)->get();
        $category=Category::find($request->id);
        $produits = $category->produits();
        return view('shop.categorie',compact('produits', 'category'));
    }

    public function viewByTag(Request $request){

        $tag=Tag::find($request->id);
        $produits = $tag->produits;
        return view('shop.categorie',compact('produits', 'tag'));
    }
}
