<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inicio = \App\Models\Inicio::first();
        return view('Landing.Inicio', compact('inicio'));
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
    public function show(Inicio $inicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inicio = \App\Models\Inicio::first();
        return view('Dashboard.EditarInicio', compact('inicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'img1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'img2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'img3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'img4' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $inicio = Inicio::findOrFail($id);

        $nombreParaImg1 = $inicio->img1;
        $nombreParaImg2 = $inicio->img2;
        $nombreParaImg3 = $inicio->img3;
        $nombreParaImg4 = $inicio->img4;

        if ($request->hasFile('img1')) {
            $archivo = $request->file('img1');
            $nombreParaImg1 = time() . '_' . $archivo->getClientOriginalName();
            $archivo->storeAs('inicio', $nombreParaImg1, 'public');
        }

        if ($request->hasFile('img2')) {
            $archivo = $request->file('img2');
            $nombreParaImg2 = time() . '_' . $archivo->getClientOriginalName();
            $archivo->storeAs('inicio', $nombreParaImg2, 'public');
        }

        if ($request->hasFile('img3')) {
            $archivo = $request->file('img3');
            $nombreParaImg3 = time() . '_' . $archivo->getClientOriginalName();
            $archivo->storeAs('inicio', $nombreParaImg3, 'public');
        }

        if ($request->hasFile('img4')) {
            $archivo = $request->file('img4');
            $nombreParaImg4 = time() . '_' . $archivo->getClientOriginalName();
            $archivo->storeAs('inicio', $nombreParaImg4, 'public');
        }

        $inicio->forceFill([
            'img1' => $nombreParaImg1,
            'img2' => $nombreParaImg2,
            'img3' => $nombreParaImg3,
            'img4' => $nombreParaImg4,
        ])->save();

        return redirect()->route('panel')->with('success', 'Contenido actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inicio $inicio)
    {
        //
    }
}
