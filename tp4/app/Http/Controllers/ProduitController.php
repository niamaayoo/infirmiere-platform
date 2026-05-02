<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    // 🔍 Afficher + rechercher
    public function index(Request $request)
    {
        $search = $request->search;

        $produits = Produit::when($search, function ($query, $search) {
            return $query->where('nom', 'like', "%$search%");
        })->get(); 

        return view('produits.index', compact('produits'));
    }
    public function create()
{
    return view('produits.create');
}

    // ➕ Ajouter
    public function store(Request $request)
    {
        Produit::create($request->all());
        return redirect()->back();
    }

    // ✏️ Formulaire modification
    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.edit', compact('produit'));
    }

    // ✏️ Modifier
    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->update($request->all());
        return redirect('/');
    }

    // ❌ Supprimer
    public function destroy($id)
    {
        Produit::destroy($id);
        return redirect()->back();
    }
}