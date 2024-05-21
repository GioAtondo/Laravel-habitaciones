<?php

namespace App\Http\Controllers;
use App\Models\Cambio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CambioController extends Controller
{
    public function index()
    {
        $cambio = Cambio::orderBy('created_at','ASC')->get();

        return view('cambio', compact('cambio'));
        
    }

    public function update(Request $request, string $id)
    {
        $cambio = Cambio::findOrFail($id);

        $cambio->update($request->all());

        return redirect()->route('cambio')->with('success', 'Cambio actualizado correctamente');
    }

}
