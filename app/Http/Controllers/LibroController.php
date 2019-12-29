<?php

namespace App\Http\Controllers;

use App\Http\Requests\NuevoLibroRequest;
use App\Http\Requests\ModificarLibroRequest;
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
        return view('libros/libroCreate', ['libro' => null]);
    }
/**
 * Store a newly created resource in storage.
 *
 * @param  \App\Http\Requests\NuevoLibroRequest $request
 * @return \Illuminate\Http\Response
 */
    public function store(NuevoLibroRequest $request)
    {
        //
        $datos = $request->validated();
        $datos['disponibles'] = $datos['obtenidos'];

        Libro::create($datos);

        return redirect()->route('libros.index')->with('estado', 'Libro adquirido ...');
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
        return view('libros/libroEdit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ModificarLibroRequest  $request
     * @param  \App\Modelos\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(ModificarLibroRequest $request, Libro $libro)
    {
        //
        $datos = $request->validated();

        $libro->update($datos);

        return redirect()->route('libros.show', compact('libro'))->with('estado', 'Libro modificado ...');
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
        $libro = Libro::findOrFail($libro->id);

        $libro->delete();

        return redirect()->route('libros.index')->with('estado', 'Libro eliminado ...');
    }
}
