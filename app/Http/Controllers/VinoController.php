<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Vino;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Bodega $bodega)
    {
        return view('vinos.create', compact('bodega'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Bodega $bodega)
    {
        $vino = new Vino;

        $vino->nombre = $request->nombre;
        $vino->tipo = $request->tipo;
        $vino->anyo = $request->anyo;
        $vino->alcohol = $request->alcohol;
        $vino->descripcion = $request->descripcion;

        $bodega->vinos()->save($vino);

        /* Alternativa:
        $comentario->articulo_id = $articulo->id;
        $comentario->save();
        */

        return redirect()->route('bodegas.show', $bodega);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vino $vino, Bodega $bodega)
    {
        return view('vinos.show', ['vino' => $vino, 'bodega' => $bodega]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vino $vino, Bodega $bodega)
    {
        return view('vinos.edit', ['vino' => $vino, 'bodega' => $bodega]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Bodega $bodega, Vino $vino)
    {
        $validate = $request->validate([
            'nombre' => 'required|string',
            'tipo' => 'required|string',
            'anyo' => 'required|integer',
            'alcohol' => 'required|integer',
            'descripcion' => 'required|string',

        ]);
        $vino->update($validate);
        return redirect(route('bodegas.show', $bodega));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vino $vino, Bodega $bodega)
    {
        $vino->delete();
        return redirect(route('bodegas.show', $bodega));
    }
}
