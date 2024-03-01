<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class RegisterController extends Controller
{
    
    public function updateDataUser(Request $request)
    {
        $register = new User();

        if ($request->id) {
            $register = User::find($request->id);
        }

        $register->name = $request->input('name');
        $register->email = $request->input('email');
        $register->cpf = $request->input('cpf');
        $register->cel = $request->input('cel');
        $register->cep = $request->input('cep');
        $register->uf = $request->input('uf');
        $register->city = $request->input('city');
        $register->end = $request->input('end');
        $register->num = $request->input('num');
        $register->comp = $request->input('comp');
        $register->bairro = $request->input('bairro');
        $register->ref = $request->input('ref');
        $register->save();

        return ['validade' => true, 'msg' => 'Salvo com sucesso.'];
    }

    public function getRegister($id)
    {
        $register = User::find($id);
        return [$register];
    }
}


