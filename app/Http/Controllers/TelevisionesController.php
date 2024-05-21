<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TelevisionesController extends Controller
{
 
    public function mxl()
    {
        $hab = DB::select('
            SELECT id, (SELECT nombre FROM tipos WHERE id=habitaciones.tipo_id) as Tipo, precio
            FROM `habitaciones`
            WHERE hoteles_id = 1 AND vida = 1 ORDER BY precio DESC
        ');

        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);

        return view('tv.mxl',['hab' => $hab, 'cambio' =>$cambio]);
        
    }

    public function calafia()
    {
        $hab = DB::select('
            SELECT id, (SELECT nombre FROM tipos WHERE id=habitaciones.tipo_id) as Tipo, precio
            FROM `habitaciones`
            WHERE hoteles_id = 2 AND vida = 1 ORDER BY precio DESC
        ');

        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);

        return view('tv.calafia',['hab' => $hab, 'cambio' =>$cambio]);
        
    }

    public function hmo()
    {
        $hab = DB::select('
            SELECT id, (SELECT nombre FROM tipos WHERE id=habitaciones.tipo_id) as Tipo, precio
            FROM `habitaciones`
            WHERE hoteles_id = 3 AND vida = 1 ORDER BY precio DESC
        ');

        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);

        return view('tv.hermosillo',['hab' => $hab, 'cambio' =>$cambio]);
        
    }

    public function lapaz()
    {
        $hab = DB::select('
            SELECT id, (SELECT nombre FROM tipos WHERE id=habitaciones.tipo_id) as Tipo, precio
            FROM `habitaciones`
            WHERE hoteles_id = 4 AND vida = 1 ORDER BY precio DESC
        ');

        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);

        return view('tv.lapaz',['hab' => $hab, 'cambio' =>$cambio]);
        
    }

    public function sanluis()
    {
        $hab = DB::select('
            SELECT id, (SELECT nombre FROM tipos WHERE id=habitaciones.tipo_id) as Tipo, precio
            FROM `habitaciones`
            WHERE hoteles_id = 5 AND vida = 1 ORDER BY precio DESC
        ');

        $cambio = DB::select('SELECT dolar FROM cambios WHERE id = ?', [1]);

        return view('tv.sanluis',['hab' => $hab, 'cambio' =>$cambio]);
        
    }

}
