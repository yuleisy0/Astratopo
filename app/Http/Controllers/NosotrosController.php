<?php

namespace App\Http\Controllers;

use App\Models\Nosotros;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nosotros = \App\Models\Nosotros::first(); 
        return view('Landing.Nosotros', compact('nosotros'));
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
        $nosotros = \App\Models\Nosotros::first(); 
        return view('Dashboard.EditNosotros', compact('nosotros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tituloPrincipal' => 'required|string|max:255',
            'descripcionInicial' => 'required|string|max:255',
            'textoDescriptivo' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $nosotros = Nosotros::findOrFail($id);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $ruta = $imagen->storeAs('nosotros', $nombreImagen, 'public');

            // Guardar la nueva ruta en el modelo
            $nosotros->imagen = 'storage/' . $ruta;
        }

        $nosotros->update([
            'tituloPrincipal' => $request->tituloPrincipal,
            'descripcionInicial' => $request->descripcionInicial,
            'textoDescriptivo' => $request->textoDescriptivo,
        ]);

        $nosotros->save();

        return redirect()->route('panel')->with('success', 'Contenido actualizado con éxito.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
