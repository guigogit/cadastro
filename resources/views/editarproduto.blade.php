@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos/{{$prod->id}}"  method="POST">
            @csrf <!-- Lembrar de sempre usar esse token -->

            <div class="form-group">
                <label for="nomeProduto">Nome do produto </label>
                <input type="text" class="form-control" name="nome" value="{{$prod->nome}}"
                id="nome" placeholder="Produto">
            </div>
            <div class="form-group">
                <label for="nomeProduto">Quantidade no estoque </label>
                <input type="text" class="form-control" name="estoque" value="{{$prod->estoque}}"
                id="estoque" placeholder="Produto">
            </div>
            <div class="form-group">
                <label for="nomeProduto">Preço </label>
                <input type="text" class="form-control" name="preco" value="{{$prod->preco}}"
                id="preco" placeholder="Produto">
            </div>
            <div>
            <select class="custom-select mr -sm-2" id="inlineFormCustomSelect" name = "categoria_id">
                <option selected>Selecione </option>
                    @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}" {{$prod->categoria_id == $categoria->id ? 'selected' : ''}}>{{$categoria->nome}} </option>
                    @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>

</div>

@endsection
