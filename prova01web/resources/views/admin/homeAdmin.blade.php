@extends('layouts.app')

@section('content')

    <div class="container justify-content-center"
    class="jumbotron" style="margin-top: 15%">

            <a type="button" class="btn btn-primary btn-lg btn-block"
            href="inserir/tiposTrans">Cadastrar Tipode Transação</a>
            <a type="button" 
            class="btn btn-default btn-lg btn-block" href={{ route('register') }}
             >Cadastrar Cliente</a> 
             <a type="button" 
            class="btn btn-default btn-lg btn-block" href='listar/clientes'
             >Listar Clientes</a>                
    </div>
    
@endsection