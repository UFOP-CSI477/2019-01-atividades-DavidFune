@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="ol-md-12">
            @if ($clientes==null)
                <div class="alert alert-info">
                    Não há Clientes cadastrados.
                </div>
            @else
            <div class="card-header">Clientes cadastrados</div>
            <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Trans...</th>
                        <th></th>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td >{{ $cliente['id'] }}</td>
                                <td>{{ $cliente['name'] }}</td>
                                <td>{{ $cliente['email'] }}</td>
                            <td> <a href="trans/cliente/{{$cliente['id']}}"> Click </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
            @endif
        </div>
    </div>
        
    
@endsection