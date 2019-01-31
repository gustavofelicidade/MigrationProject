<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Livro;

use App\Http\Resources\LivroResource;

class LivroController extends Controller
{
    public function create(Request $request){
		$livro = new Livro;
		
		$Livro->qtdEmprestada = $request->qtdEmprestada;
		$livro->qtdEstoque = $request->qtdEstoque;
		$livro->anoDelancamento = $request->anoDelancamento;
		$livro->versao = $request->versao;
		$livro->editora = $request->editora;
		$livro->autor = $request->autor;
		$livro->titulo = $request->titulo;

		$livro->save();
		return response()->json([$livro]);
	}

}

	
	public function show($id)
	{
		$livros = Livros::findOrFail($id);
		return response()->json([$livro]);

}


	public function update(Request $request, $id)
	{
		$livro = Livro::findOrFail($id);
		if($request->qtdEmprestada)
		$livro->qtdEmprestada = $request->qtdEmprestada;
		if($request->qtdEstoque)
		$livro->qtdEstoque = $request->qtdEstoque;
		if($request->anoDelancamento)
		$livro->anoDelancamento = $request->anoDelancamento;
		if($request->versao)
		$livro->versao = $request->versao;
		if($request->editora)
		$livro->editora = $request->editora;
		if($request->autor)
		$livro->autor = $request->autor;
		if($request->titulo)
		$livro->titulo = $request->titulo;
		return response()->json([$livro]);

}


	public function delete($id)
	{
		Livros::destroy($id);
		return response()->json([‘DELETADO’]);

}

