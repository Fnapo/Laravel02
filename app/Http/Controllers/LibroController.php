<?php

namespace App\Http\Controllers;

use App\Modelos\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth'); // Protección de ciertas rutas.
        //$this->middleware('biblio'); // Protección de ciertas rutas.
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libros = Libro::orderBy('id')->paginate();

        return view('libros/libroIndex', compact('libros'));
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
     * @param  \App\Modelos\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
        $libro = Libro::findOrFail($libro->id);

        return view('libros/libroShow', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modelos\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modelos\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modelos\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
