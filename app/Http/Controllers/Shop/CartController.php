<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //ajouter un produit au panier
    public function add(Request $request){

        $produit = Produit::find($request->id);
        Cart::add(array(
            'id' => $produit->id,
            'name' => $produit->nom,
            'price' => $produit->prix_ht,
            'quantity' => $request->qty,
            'attributes' => array('lots'=> $request->lots)
        ));
        return redirect()->route('cart_index');
    }

    public function index(){
        $content = Cart::getContent();
        dd($content);
    }
}

