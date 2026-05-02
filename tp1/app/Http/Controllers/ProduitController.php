<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produits::all();
        return view('produits.index', compact('produits'));
    }

    public function create()
    {
        return view('produits.create');
    }

    public function store(Request $request)
    {
       

        Produits::create($request->all());

        return redirect()->route('produits.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $produit = Produits::findOrFail($id);
        $produit->delete();

        return redirect()->route('produits.index');
    }
}