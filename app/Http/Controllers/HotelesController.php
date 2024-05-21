<?php

namespace App\Http\Controllers;
use App\Models\Hoteles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HotelesController extends Controller
{
    public function index()
    {
        $hotel = Hoteles::orderBy('created_at','ASC')->get();

        return view('hoteles.index', compact('hotel'));
        
    }

    public function create()
    {
        return view('hoteles.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nombre' => 'required',
        ])->validate();

        Hoteles::create($request->all());

        return redirect()->route('hoteles')->with('success','Hotel agregado correctamente');

    }

    public function update(Request $request, string $id){
        Validator::make($request->all(), [
            'nombre' => 'required',
        ])->validate();

        $hoteles = Hoteles::findOrFail($id);

        $hoteles->update([
            'nombre' => $request->input('nombre'),
        ]);

        return redirect()->back()->with('success', 'Nombre de hotel actualizado correctamente');
    }
}
