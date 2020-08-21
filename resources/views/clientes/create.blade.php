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
            <h3 class="page-header"><i class="fa fa-plus-square-o""></i> Novo Cliente</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Novo</li>
              <li><i class="fa fa-shopping-basket"></i><a href="{{ route('listar_produtos') }}">Clientes</a></li>
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
                      <label for="nome" class="control-label col-lg-2">Nome do cliente<span>*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nome" name="nome" type="text"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cpf" class="control-label col-lg-2">CPF <span>*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cpf" type="text" name="cpf"  />
                      </div>
                      <br>
                      <div class="form-group ">
                        <label for="valorgasto" class="control-label col-lg-2" style="margin-left:10px;" >Valor Gasto <span>*</span></label><br>
                        <div class="col-lg-10">
                          <input class="form-control " id="valorgasto" type="number" name="valorgasto"  style="width: 788px; margin-left:10px;"  />
                        </div>
                        <br>
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
