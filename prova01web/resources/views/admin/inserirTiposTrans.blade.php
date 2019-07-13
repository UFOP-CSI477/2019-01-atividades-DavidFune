@extends('layouts.app')
@section('content')

    <div class="jumbotron">
        <h2 class="display-6">Insira um tipo de transação!!!</h2>
    </div>
    <div class="container"style="margin-top: 5%">

        <form class="form-control" method="POST" action="salvar/tipoTrans">
                @csrf
            <input type="text" class="form-control form-text"
            name="nome" placeholder="Tipo transação">

            <input type="submit" class="btn btn-primary" style="margin-top: 1%">
        </form>
        
    </div>
    
    
@endsection