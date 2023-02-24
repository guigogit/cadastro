@extends('layout.app', ["current" =>"produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
<form action="/produtos"  method="POST">
    @csrf <!-- Lembrar de sempre usar esse token -->
    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <label class= "mr -sm-2" for="inlineFormCustomSelect">Produto</label>
            <select class="custom-select mr -sm-2" id="inlineFormCustomSelect" name = "categoria_id">
                <option selected>Selecione </option>

                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                    <input type="text" name="nome" placeholder="Nome do produto">
                    <input type="text" name="estoque" placeholder="Quantidade">
                    <input type="number" name="preco" placeholder="Preço do produto">

            </select>
        </div>
        <div class = "col-auto my-1">
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">

            </div>
        </div>

    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>

    </div>
</form>
</div>

</div>

@endsection


