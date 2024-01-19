<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bodegas = Bodega::all();
        return view('bodegas.index', [
            'bodegas' => $bodegas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bodegas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar la petición:
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'ubicacion' => 'required|string',
            'telefono' => 'required|string|max:9'
        ]);
        /* Si la validación falla se redirigirá al usuario 
        a la página previa. Si pasa la validación, el controlador 
        continuará ejecutándose.
        */

        // Insertar el artículo en la BBDD tras su validación.
        Bodega::create($validated);

        return redirect(route('bodegas.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bodega $bodega)
    {
        return view('bodegas.show', [
            'bodega' => $bodega
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bodega $bodega)
    {
        return view('bodegas.edit', [
            'bodega' => $bodega
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bodega $bodega)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'ubicacion' => 'required|string',
            'telefono' => 'required|string'
        ]);

        $bodega->update($validated);
        return redirect(route('bodegas.show', $bodega));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bodega $bodega)
    {
        $bodega->delete();
        return redirect(route('bodegas.index'));
    }
}
