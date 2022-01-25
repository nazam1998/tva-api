<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index()
    {

        $entreprises = Entreprise::all()->pluck('tva');

        return response()->json([
            'message' => 'Entreprise récupérées avec succès',
            'data' => $entreprises,
            'statut' => 200
        ]);
    }
    public function show($tva)
    {
        $entreprise = Entreprise::where('tva', $tva)->first();

        return response()->json([
            'message' => 'Entreprise récupérée avec succès',
            'data' => $entreprise,
            'statut' => 200
        ]);
    }
}
