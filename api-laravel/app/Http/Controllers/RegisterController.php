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
        $register->address = $request->input('address');
        $register->number = $request->input('number');
        $register->complement = $request->input('complement');
        $register->neighborhood = $request->input('neighborhood');
        $register->reference = $request->input('reference');
        $register->save();

        return ['validade' => true, 'msg' => 'Salvo com sucesso.'];
    }
}


