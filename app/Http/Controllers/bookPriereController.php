<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bookPriereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Book::all();

        if ($all !== null) {
            return response()->json(
                [
                    'status' => 200,
                    'data' => $all
                ],
                404
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'data' => 'pas de donnees disponible'
                ],
                404
            );
        }
    }
   
    public function bookId($bookId)
    {
        $book = Book::find($bookId);

        if($book !==null)
        {
            return response()->json([
                'stattus'=>200,
                'data'=>$book
            ]);
        } else 
        {
            return response()->json(
                [
                    'status'=>404,
                    'data'=>'pas de donnee'
                ], 404
                );
        }
    }
    public function priere()
    {
        // $boo
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
    public function show(string $id)
    {
        //
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