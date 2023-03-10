@extends('layout.app', ["current" =>"produtos"])

@section('body')
<header>



</header>
    <div class="card-border">
        <div class = "card-body">
            <h5 class ="card-title">Cadastro de produtos</h5>
        @if(is_countable($prods) && count($prods) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Categoria</th>
                        <th>Nome</th>
                        <th>Quantidade no Estoque</th>
                        <th>Preço</th>
                        <th>Departamento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <body>

                    @if(!empty($prods))
                        @foreach($prods as $prod)
                        <!--<tr>
                            <td>{{$prod->id}}</td>
                            <td>{{$prod->categoria}}</td>
                            <td>{{$prod->nome}}</td>
                            <td>{{$prod->estoque}}</td>
                            <td>{{ 'R$ ' . number_format($prod->preco, 2, ',', '.') }}</td>
                        -->
                        </tr>
                        @endforeach
                    @endif
                </body>
            </table>
        @endif
        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary" role="button" onClick="novoProduto()">Novo produto</a>

        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="dlgProdutos">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formProduto">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo produto</h5>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="id" class="form-control">
                        <div class="form-group">
                            <label for="nomeProduto" class="control-label">Nome do Produto</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="precoProduto" class="control-label">Preço</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="precoProduto" placeholder="Preço do produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="quantidadeProduto" class="control-label">Quantidade</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="quantidadeProduto" placeholder="Quantidade do produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="categoriaProduto" class="control-label">Categoria</label>
                            <div class="input-group">
                                <select class="form-control" id="categoriaProduto"><option selected>Selecione </option></select>


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
<script type="text/javascript">



    function novoProduto() {
        $('#id').val('');
        $('#nomeProduto').val('');
        $('#precoProduto').val('');
        $('#quantidadeProduto').val('');
        $('#dlgProdutos').modal('show');
    }

    function carregarCategorias() {
        $.getJSON('/api/categorias', function(data) {
            for(i=0;i<data.length;i++) {
                opcao = '<option value ="' + data[i].id + '">' +
                    data[i].nome + '</option>';
                $('#categoriaProduto').append(opcao);
            }
        });
    }
    $(function (){
        carregarCategorias();
    });
</script>
@endsection
