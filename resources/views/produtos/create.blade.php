@extends('layout')

@section('titulo')
    <title>{{ $titulo }}</title>
@endsection


@section('cabecalho')
Adicionar Produtos
@endsection


@section('conteudo')




<section id="container" class="">
    <section id="main-content">
      <section class="wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-plus-square-o""></i> Novo Produto</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Novo</li>
              <li><i class="fa fa-shopping-basket"></i><a href="{{ route('listar_produtos') }}">Produtos</a></li>
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


        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Formulário
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="">
                  @csrf
                    <div class="form-group ">
                      <label for="nome" class="control-label col-lg-2">Nome do produto<span>*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nome" name="nome" type="text"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="preco" class="control-label col-lg-2">Preço por KG <span>*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control "id="preco" type="number" name="preco"  />
                      </div>
                      <br>
                      <div class="form-group ">
                        <label for="qtd" class="control-label col-lg-2" style="margin-left:10px;" >Quantidade <span>*</span></label><br>
                        <div class="col-lg-10">
                        <input class="form-control " id="qtd" type="number" name="qtd"  style="width: 788px; margin-left:10px;"  />
                        </div>
                        <br>
                        <div class="form-group " >
                            <label for="validade" class="control-label col-lg-2" style="margin-left:30px;" >Validade <span>*</span></label><br>
                            <div class="col-lg-10">
                              <input class="form-control " id="validade" type="text" name="validade"  style="width: 788px; margin-left:30px;"  />
                            </div>
                    </div>
                    <div class="form-group"  style=" margin-left:10px;">
                      <div class="col-lg-offset-2 col-lg-10" style="margin-left:10px;">
                        <button class="btn btn-primary" type="submit">Adicionar</button>
                        <a class="btn btn-danger" href="/produtos">Voltar</a>
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
