@extends('layout')

@section('titulo')
    <title>{{ $titulo }}</title>
@endsection


@section('cabecalho')
    Editar Clientes cadastrados
@endsection


@section('conteudo')



<section id="container" class="">
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-pencil""></i> Editar Produto</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Novo</li>
              <li><i class="fa fa-shopping-basket"></i><a href="{{ route('listar_produtos') }}">Clientes</a></li>
              <li><i class="fa fa-pencil"></i>Editar</li>
            </ol>
          </div>
        </div>


        @if(!empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endif

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
                Editar
              </header>
              <div class="panel-body">
                <div class="form">

                  <form class="form-validate form-horizontal" action=" {{route('cliente_update', $cliente->id )}}" method="post" id="feedback_form" >
                  @method('PUT')
                  @csrf
                    <div class="form-group ">
                      <label for="nome" class="control-label col-lg-2">Nome do Cliente<span>*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nome" name="nome" minlength="5" type="text" value="{{ $cliente->nome ?? ''}}" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="preco" class="control-label col-lg-2">CPF <span>*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cpf" type="text" name="cpf" value="{{ $cliente->cpf  ?? ''}}" />
                      </div>
                    </div>

                    <div class="form-group ">
                        <label for="preco" class="control-label col-lg-2">Valor Gasto<span>*</span></label>
                        <div class="col-lg-10">
                          <input class="form-control " id="valorgasto" type="text" name="valorgasto" value="{{ $cliente->valorgasto ?? '' }}" />
                        </div>
                      </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-success" >Salvar</button> <!--type="submit"-->
                        <a class="btn btn-danger" href="/clientes">Voltar</a>
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
