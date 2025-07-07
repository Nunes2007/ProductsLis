<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProductsController extends Controller
{   
    public function home()
    {
        $sql = Produto::all();
        return view('home', ['produtos' => $sql]);
    }

    public function create() 
    {
        return view('create');
    }

    //insere dados no banco
    public function insert(Request $request)
    {
        Produto::create($request->all());
        return redirect()->route('produtos-index');
    }

    //busca o item pelo id
    public function edit($id)
    {
        $sql = Produto::where('id', $id)->first();

        if(!empty($sql))
        {
            return view('edit', ['produtos' => $sql]);
        } else {
            return redirect()->route('produtos-index');
        }
    }

    //busca o id e atualiza meus dados no banco
    public function update(Request $request, $id)
    {   $data = [
            'nome' => $request->nome,
            'descrição' => $request->descrição
        ];

        Produto::where('id', $id)->update($data);
        return redirect()->route('produtos-index');
    }

    //deleta os dados no banco pelo id
    public function destroy($id)
    {
        Produto::where('id', $id)->delete();
        return redirect()->route('produtos-index');
    }
}

