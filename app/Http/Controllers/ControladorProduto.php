<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;


class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function indexView()
     {
        return view('produtos');


     }


     public function index()
    {
       $prods = Produto::all();
       return $prods->toJson() ;

    }

/*
     public function index()
    {
       $prods = DB::table('produtos')
        ->join('categorias', 'produtos.categoria_id', '=', 'categorias.id')
        ->select('produtos.id as id','produtos.nome as nome', 'categorias.nome as categoria', 'produtos.preco as preco', 'produtos.estoque as estoque')
        ->get();

        return view('produtos',  compact('prods'));
    }
*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*passando as categorias recuperadas para a view novoproduto.blade.php como uma variável $categorias.
         Agora, na view novoproduto.blade.php, você pode usar a variável $categorias para gerar as opções do campo select.
          Para isso, você pode usar a diretiva @foreach do Blade para iterar sobre as categorias e gerar as opções do campo select.
        */
        $categorias = Categoria::all();
        return view('novoproduto', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     *
     */
    public function store(Request $request)
    {
           // Criação de um novo registro na tabela produtos

           $prod = new Produto();
           $prod->nome = $request->input('nome');
           $prod->preco = $request->input('preco');
           $prod->estoque = $request->input('estoque');
           $prod->categoria_id = $request->input('categoria_id');
           $prod->save();
           return json_encode($prod);


        /*
        $prod = new Produto();
        $prod->nome = $request->input('nomeProduto');
        $prod->save();
        return redirect('/produtos');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Produto::find($id);
        $categorias = Categoria::all();

        if(isset($prod)){
            return view('editarproduto', compact('prod','categorias'));
        }
        return redirect('/produtos');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prods = Produto::find($id);
        $categorias = Categoria::all();

        if(isset($prods)){
            $prods->nome = $request->input('nome');
            $prods->estoque = $request->input('estoque');
            $prods->preco = $request->input('preco');
            $prods->categoria_id = $request->input('categoria_id');
            $prods->save();
        }
            //return view('/produtos', compact('prods', 'categorias'));
            return redirect('/produtos');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Produto::find($id);
        if(isset($prod)){
            $prod->delete();
        }
        return redirect('/produtos');
    }
}
