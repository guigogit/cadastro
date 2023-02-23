@extends('layout.app', ["current" =>"produtos"])

@section('body')

<form>
    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <label class= "mr -sm-2" for="inlineFormCustomSelect">Categoria</label>
            <select class="custom-select mr -sm-2" id="inlineFormCustomSelect" name = "categoria_id">
                <option selected>Selecione </option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
            </select>
        </div>
        <div class = "col-auto my-1">
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">

            </div>
        </div>

    </div>
</form>

<div class="card-footer">
    <a href="/produtos/novoproduto" class="btn btn-sm btn-primary" role ="button"> Novo produto </a>
</div>
@endsection


