<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Reclamation;
use Illuminate\Http\Request;
use App\Models\Detailsreclamation;
use Illuminate\Support\Facades\DB;

class DetailReclamation extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $results = DB::table('reclamation')
        ->select(
            'reclamation.observation',
            'reclamation.referenceCourrier as referenceCourrier',
            'reclamation.typeReclamation as typeReclamation',
            'reclamation.raisonSocial as raisonSocial',
            'reclamation.adresse',
            'reclamation.fk_AgentCreat as fk_AgentCreat',
            'reclamation.nif',
            'reclamation.fk_contribuable as fkcontribuable',
            DB::raw("JSON_ARRAYAGG(JSON_OBJECT('montantConteste', detailsreclamation.montantConteste,'id',detailsreclamation.id, 'motifivationRecours', detailsreclamation.motifivationRecours, 'referenceTitrePerception', detailsreclamation.referenceTitrePerception, 'montantNonConteste', detailsreclamation.montantNonConteste, 'intituleActeGenerateur', detailsreclamation.intituleActeGenerateur, 'typedocument', detailsreclamation.typedocument, 'fkActeGenerateur', detailsreclamation.fkActeGenerateur, 'fk_AgentCreat', detailsreclamation.fk_AgentCreat, 'motivationReclamation', detailsreclamation.motivationReclamation, 'montantDu', detailsreclamation.montantDu, 'devise', detailsreclamation.devise, 'avecSurcis', detailsreclamation.avecSurcis)) as detailsReclamation")
        )
        ->join('detailsreclamation', 'reclamation.id', 'detailsreclamation.fk_Reclamation')
        // ->where('reclamation.nif', $nif)
        ->groupBy('reclamation.observation', 'reclamation.referenceCourrier', 'reclamation.typeReclamation', 'reclamation.raisonSocial', 'reclamation.adresse', 'reclamation.fk_AgentCreat', 'reclamation.nif', 'reclamation.fk_contribuable')
        ->get();

    // Convertir la chaîne JSON en tableau d'objets JSON
    foreach ($results as $item) {
        $item->detailsReclamation = json_decode($item->detailsReclamation);
    }

    $jsonData = json_encode($results);

    return response()->json(['data'=>$results]);

    }
    public function list()
    {
        $all = Reclamation::all();

        if ($all !== null) {
            return response()->json(
                [
                    "status" => 200,
                    "data" => $all
                ],
                200
            );
        } else {
            return response()->json([
                [
                    "pas de donnees"
                ],
                404
            ]);
        }
    }



    public function comb($nif)
    {
        $all = DB::table('reclamation')
            ->select('*')
            ->join('detailsreclamation', 'detailsreclamation.fk_Reclamation', 'reclamation.id')
            ->where('reclamation.nif', $nif)
            ->get();

        if ($all !== null) {
            return response()->json(
                [
                    "status" => 201,
                    "data" => $all
                ]
            );
        } else {
            return response()->json([
                [
                    "status" => 404,
                    "data" => "pas de donnees"
                ],
                404
            ]);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($nif)
    {
        $show = Detailsreclamation::find($nif);
        if ($show !== null) {
            return response()->json(
                [
                    "status" => 201,
                    "data" => $show
                ]
            );
        } else {
            return response()->json([
                [
                    "status" => 404,
                    "data" => "pas de donnees"
                ],
                404
            ]);
        }

    }

    public function v($nif)
    {
        $show = Reclamation::find($nif);
        if ($show !== null) {
            return response()->json(
                [
                    "status" => 200,
                    "data" => $show
                ]
            );
        } else {
            return response()->json([
                [
                    "status" => 404,
                    "data" => "pas de donnees"
                ],
                404
            ]);
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}