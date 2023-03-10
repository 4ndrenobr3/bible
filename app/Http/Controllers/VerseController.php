<?php

namespace App\Http\Controllers;

use App\Models\Verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $book)
    {
        $verses = Verse::where('book_id', $book)->get();
        return response()->json($verses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Verse  $verse
     * @return \Illuminate\Http\Response
     */
    public function show(Verse $verse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Verse  $verse
     * @return \Illuminate\Http\Response
     */
    public function edit(Verse $verse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Verse  $verse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Verse $verse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verse  $verse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verse $verse)
    {
        //
    }
}
