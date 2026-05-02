<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use Illuminate\Support\Facades\Auth;

class RendezVousController extends Controller
{
    public function store(Request $request)
    {
        RendezVous::create([
            'patient_id' => Auth::id(),
            'infirmiere_id' => $request->infirmiere_id,
            'date' => $request->date,
            'heure' => $request->heure,
            'status' => 'en_attente'
        ]);

        return redirect()->back()->with('success', 'Rendez-vous demandé');
    }

    public function updateStatus(Request $request, $id)
    {
        $rdv = RendezVous::findOrFail($id);

        $rdv->update([
            'status' => $request->status
        ]);

        return redirect()->back();
    }
}