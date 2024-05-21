<?php

namespace App\Http\Controllers;
use App\Models\Tipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TiposController extends Controller
{
    public function index()
    {
        $tipos = Tipos::orderBy('created_at','ASC')->get();

        return view('tipos.index', compact('tipos'));
        
    }

    public function create()
    {
        return view('tipos.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nombre' => 'required',
        ])->validate();

        Tipos::create($request->all());

        return redirect()->route('tipos')->with('success','Tipo de habitacion agregada correctamente');

    }

    public function update(Request $request, string $id){
        Validator::make($request->all(), [
            'nombre' => 'required',
        ])->validate();

        $tipos = Tipos::findOrFail($id);

        $tipos->update([
            'nombre' => $request->input('nombre'),
        ]);

        return redirect()->back()->with('success', 'Nombre de tipo de habitacion actualizado correctamente');
    }
}
