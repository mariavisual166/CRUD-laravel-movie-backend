<?php

namespace App\Http\Controllers;

use App\pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pelicula = pelicula::get();
        echo json_encode($Pelicula);
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
        $Pelicula = new pelicula();
        $Pelicula->name = $request->input('name');
        $Pelicula->des = $request->input('des');
        $Pelicula->gener = $request->input('gener');
        $Pelicula->save();
        echo json_encode($Pelicula);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $peliculaId)
    {
      
        $Pelicula = pelicula::find($peliculaId);

        $Pelicula->name = $request->input('name');
        $Pelicula->des = $request->input('des');
        $Pelicula->gener = $request->input('gener');
        $Pelicula->save();
        echo $Pelicula;
        //echo json_encode($Pelicula);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy($peliculaId)
    {
        $Pelicula = pelicula::find($peliculaId);
        $Pelicula->delete();
         echo json_encode("$Pelicula");
    }
}
