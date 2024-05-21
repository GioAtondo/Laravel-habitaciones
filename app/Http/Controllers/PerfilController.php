<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerfilController extends Controller
{
    public function updatePerfil(Request $request, string $id){
        $usuario = User::findOrFail($id);

        $usuario->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('success', 'Perfil Actualizado correctamente!');
    }


}
