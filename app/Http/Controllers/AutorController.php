<?php

namespace App\Http\Controllers;

use App\Modelos\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $autores = Autor::orderBy('id')->paginate();

        return view('autores/autorIndex', compact('autores'));
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
     * @param  \App\Modelos\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        //
        $autor = Autor::findOrFail($autor->id);

        return view('autores/autorShow', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modelos\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modelos\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modelos\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        //
    }
}
