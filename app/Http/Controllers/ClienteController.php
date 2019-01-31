<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
   	public function create(Request $request){
		$cliente = new Cliente;
		
		$cliente->nome = $request->nome;
		$cliente->telefone = $request->telefone;
		$cliente->dataDeNascimento = $request->dataDeNascimento;
		$cliente->cpf = $request->cpf;
		$cliente->save();
		return response()->json([$cliente]);
	}
}


