<?php

namespace App\Http\Controllers;

use App\Models\Ns2;
use Illuminate\Http\Request;

class Ns2Controller extends Controller
{
    public function index()
    {
        $videos = Ns2::all();

    return view('ns2.index', compact('videos'));
    }

    public function create()
    {
        return view('ns2.create');
    }

    public function store(Request $request)
    {
        $video = new Ns2;
        $video-> titre = $request->input('titre');
        $video->objectif = $request->input('objectif');
        $video->lien = $request->input('lien');
        $video->commentaire = $request->input('commentaire');
        $video->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ns2  $ns2
     * @return \Illuminate\Http\Response
     */
    public function show(Ns2 $ns2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ns2  $ns2
     * @return \Illuminate\Http\Response
     */
    public function edit(Ns2 $ns2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ns2  $ns2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ns2 $ns2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ns2  $ns2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ns2 $ns2)
    {
        //
    }
}
