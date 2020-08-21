@extends('layout')


@section('titulo')
    <title>{{ $titulo }}</title>
@endsection

@section('cabecalho')
Produtos
@endsection


@section('conteudo')



    <section id="main-content">
    <section class="wrapper">
    <link rel="icon" type="imagem/png" href="{{ asset ('/imgs/demeter.ico')}}" />

        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-shopping-basket"></i> Clientes</h3>


                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i>Novo</li>
                    <li><i class="fa fa-shopping-basket"></i>Clientes</li>
                </ol>
            </div>
        </div>
        </div>

        @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
        @endif

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tabela de Clientes
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <tbody>

                            <tr>
                                <th><i class="fa fa-key"></i> ID</th>
                                <th><i class="fa fa-user"></i> Nome</th>
                                <th><i class="fa fa-gears"></i> CPF</th>
                                <th><i class="fa fa-money"></i> Valor da compra</th>
                                <th><i class="fa fa-calendar-check-o"></i> Data de Criação</th>
                                <th><i class="fa fa-gears"></i> Ações</th>
                            </tr>

                            @foreach ($cliente as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->nome }}</td>
                                <td>{{ $c->cpf }}</td>
                                <td>{{ $c->valorgasto }}</td>
                                <td>{{ $c->data_criacao }}</td>
                                <td>
                                <span class="d-flex">
                                    <form method="get" action= "{{ route('editar_cliente', $c->id)}}"    >
                                        @csrf
                                        <button class="btn btn-success btn-sm mr-1" >
                                        <i class="fa fa-pencil"></i>
                                        </button>

                                    </form>
                                    <form method="post" action= "{{ route('cliente_delete', $c->id)}}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $c->nome )}}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm " >
                                        <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </span>
                                </td>
                            </tr>
                            @endforeach
                           </tbody>
                        </table>
                    </section>
                </div>
            </div>

            <a class="btn btn-primary " href="{{ route('form_criar_cliente')}}" >Adicionar</a>

    </section>
</section>




@endsection

