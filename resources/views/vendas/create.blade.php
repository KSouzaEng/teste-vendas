@extends('layout')

@section('cabecalho')
    Salvar uma Venda
@endsection


@section('conteudo')


<section id="container" class="">
    <section id="main-content">
      <section class="wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-cart-arrow-down""></i> Nova Venda</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Novo</li>
              <li><i class="fa fa-cart-arrow-down"></i><a href="{{ route('listar_vendas') }}">Vendas</a></li>
              <li><i class="fa fa-plus-square-o"></i>Adicionar</li>
            </ol>
          </div>
        </div>


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <script>
            function getId(){
                var teste = parseInt(document.getElementById("qtdv").value,10);
                var teste2 =parseInt(document.getElementById("preco").value,10);
              //  var total = teste + teste2;
             // alert(teste.value+"+"+teste2.value+"="+total.value);
             // alert(teste);
             // alert(teste2);
             // alert(total);
              document.getElementById('total').value = teste * teste2;

            }

        </script>


        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Formulário
              </header>
              <div class="panel-body">
                <table class="table table-striped table-advance table-hover">
                    <tbody>

                    <tr>
                        <th><i class="fa fa-fruit"></i> Nome do Produto</th>
                        <th><i class="fa fa-shopping-basket"></i>Preço por quilo</th>
                        <th><i class="fa fa-shopping-basket"></i>Quantidade em estoque</th>


                    @foreach ($produtos as $p )
                    <tr>
                        <td>{{ $p->nome  }}</td>
                        <td>{{ $p->preco  }}</td>
                        <td>{{ $p->qtd  }}</td>

                    </tr>
                    @endforeach

                   </tbody>
                </table>
                <hr>
                <hr>
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="">
                  @csrf
                   <div class="form-group">
                        <label class="control-label col-lg-2" for="inputSuccess">Produto</label>
                        <div class="col-lg-10">

                        <select name="produto_id" id="produto_id" class="form-control m-bot15">
                            @foreach($produtos as $produto)
                                <option value= "{{ $produto->id }}"> {{ $produto->nome }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="inputSuccess">Quantidade de produtos a serem comprados</label>
                        <input class="form-control " id="qtdv" type="text" name="qtdv" onblur="getId(this.value)"  style="width: 787px; margin-left:12px;"  />
                    </div>


                    <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Preço do Produto em Kg</label>
                    <input class="form-control "type="text"   value="{{ $produto->preco }}"  style="width: 787px; margin-left:12px;"  id="preco" onblur="getId(this.value)" />
                    </div>

                    <div class="form-group">
                        <label for="preçoTotal" style=" margin-left:10px;">Preço Total</label>
                        <input class="form-control " id="total" type="text" name="total" style="width: 787px; margin-left:12px;"  />
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2" for="inputSuccess">Vendedores</label>
                        <div class="col-lg-10">
                        <select name="usuario_id" id="usuario_id" class="form-control m-bot15">
                          @foreach($usuarios as $usuarios)
                                <option value= "{{ $usuarios->id }}"> {{ $usuarios->nome }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Adicionar</button>
                        <a class="btn btn-danger" href="/vendas">Voltar</a>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
    </section>
</section>


@endsection
