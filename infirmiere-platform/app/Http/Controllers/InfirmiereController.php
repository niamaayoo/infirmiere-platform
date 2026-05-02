<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infirmiere;

class InfirmiereController extends Controller
{
    public function index()
    {
        $infirmieres = Infirmiere::with('user')->get();
        return view('infirmieres.index', compact('infirmieres'));
    }

    public function search(Request $request)
    {
        $query = Infirmiere::with('user');

        if ($request->specialite) {
            $query->where('specialite', 'like', '%' . $request->specialite . '%');
        }

        $infirmieres = $query->get();

        return view('infirmieres.index', compact('infirmieres'));
    }
}
