<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Detailsreclamation;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class DetailReclamation extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Detailsreclamation::all();

        if ($all!==null){
            return response()->json(
                [
                    "status"=>200,
                    "data"=>$all
                ],200
            );
        } else {
            return response()->json([
                [
                    "pas de donnees"
                ], 404
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
        if ($show!==null){
            return response()->json(
                [
                    "status"=>200,
                    "data"=>$show
                ]
            );
        } else {
            return response()->json([
                [
                    "data"=>"pas de donnees"
                ], 404
            ]);
        }

    }

    public function v($nif){
        $show = Reclamation::find($nif); 
        if ($show!==null){
            return response()->json(
                [
                    "status"=>200,
                    "data"=>$show
                ]
            );
        } else {
            return response()->json([
                [
                    "data"=>"pas de donnees"
                ], 404
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
