<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->search;
        return view('logro2B.vehiculo', [
            'vehiculos' => Vehiculo::where('estado', true)
                ->with('categoria')
                ->whereHas('categoria', function ($query) use ($search) {
                    if ($search) {
                        return $query->where('categoria', $search);
                    }
                })
                ->get(),
            'categorias' => Categoria::all(),
            'users' => User::all(),
        ]);
    }

    public function store(Request $request)
    {
        Vehiculo::create([
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'color' => $request->color,
            'categoria_id' => $request->categoria_id,
            'user_id' => $request->user_id,
        ]);
        return back();
    }

    public function delete($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->estado = false;
        $vehiculo->save();
        return back();
    }
}
