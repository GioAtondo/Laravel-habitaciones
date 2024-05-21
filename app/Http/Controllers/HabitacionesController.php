<?php

namespace App\Http\Controllers;
use App\Models\Habitaciones;
use App\Models\Hoteles;
use App\Models\Tipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HabitacionesController extends Controller
{
    public function index()
    {
        $hoteles = Hoteles::all();
        $tipos = Tipos::all();
        return view('habitaciones.create', compact('hoteles','tipos'));
        
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'hoteles_id' => 'required',
            'tipo_id' => 'required',
            'precio' => 'required',
        ])->validate();

        Habitaciones::create($request->all());

        return redirect()->route('nueva.habitacion')->with('success','Habitacion agregada correctamente');

    }

    public function mexicali(){
        $results = DB::table('habitaciones')
        ->select('id',
            DB::raw('(SELECT nombre FROM hoteles WHERE id = habitaciones.hoteles_id) as Hotel'),
            DB::raw('(SELECT nombre FROM tipos WHERE id = habitaciones.tipo_id) as Tipo'),
            'precio'
        )
        ->where('hoteles_id', 1)
        ->where('vida', 1)
        ->get();

        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);

        return view('habitaciones.mxl',['results' => $results, 'cambio' =>$cambio]);
    }

    public function calafia(){
        $results = DB::table('habitaciones')
        ->select('id',
            DB::raw('(SELECT nombre FROM hoteles WHERE id = habitaciones.hoteles_id) as Hotel'),
            DB::raw('(SELECT nombre FROM tipos WHERE id = habitaciones.tipo_id) as Tipo'),
            'precio'
        )
        ->where('hoteles_id', 2)
        ->where('vida', 1)
        ->get();

        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);

        return view('habitaciones.calafia',['results' => $results, 'cambio' => $cambio]);
    }

    public function hermosillo(){
        $results = DB::table('habitaciones')
        ->select('id',
            DB::raw('(SELECT nombre FROM hoteles WHERE id = habitaciones.hoteles_id) as Hotel'),
            DB::raw('(SELECT nombre FROM tipos WHERE id = habitaciones.tipo_id) as Tipo'),
            'precio'
        )
        ->where('hoteles_id', 3)
        ->where('vida', 1)
        ->get();

        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);

        return view('habitaciones.hmo',['results' => $results, 'cambio' => $cambio]);
    }

    public function lapaz(){
        $results = DB::table('habitaciones')
        ->select('id',
            DB::raw('(SELECT nombre FROM hoteles WHERE id = habitaciones.hoteles_id) as Hotel'),
            DB::raw('(SELECT nombre FROM tipos WHERE id = habitaciones.tipo_id) as Tipo'),
            'precio'
        )
        ->where('hoteles_id', 4)
        ->where('vida', 1)
        ->get();

        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);

        return view('habitaciones.paz',['results' => $results, 'cambio' => $cambio]);
    }

    public function slrc(){
        $results = DB::table('habitaciones')
        ->select('id',
            DB::raw('(SELECT nombre FROM hoteles WHERE id = habitaciones.hoteles_id) as Hotel'),
            DB::raw('(SELECT nombre FROM tipos WHERE id = habitaciones.tipo_id) as Tipo'),
            'precio'
        )
        ->where('hoteles_id', 5)
        ->where('vida', 1)
        ->get();

        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);

        return view('habitaciones.sanluis',['results' => $results, 'cambio' => $cambio]);
    }

    public function update(Request $request, string $id){
        $hab = Habitaciones::findOrFail($id);

        $hab->update([
            'precio' => $request->input('precio'),
        ]);

        return redirect()->back()->with('success', 'Precio de habitacion actualizado correctamente');;
    }

    public function bajas(){
        $hab = DB::table('habitaciones')
        ->select('id',
            DB::raw('(SELECT nombre FROM hoteles WHERE id = habitaciones.hoteles_id) as Hotel'),
            DB::raw('(SELECT nombre FROM tipos WHERE id = habitaciones.tipo_id) as Tipo'),
            'precio',
            'vida'
        )
        ->get();
        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);
        return view('bajas',['hab' => $hab, 'cambio' => $cambio]);
    }

    public function baja_habitacion(Request $request, string $id){
        $hab = Habitaciones::findOrFail($id);

        $hab->update([
            'vida' => $request->input('vida'),
        ]);

        return redirect()->back()->with('success', 'Habitacion se dio de baja correctamente');
    }

    public function vida(Request $request, string $id){
        $hab = Habitaciones::findOrFail($id);

        $hab->update([
            'vida' => $request->input('vida'),
        ]);

        return redirect()->back()->with('success', 'Vida de habitacion actualizado correctamente');
    }

    
}