@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="ol-md-12">
        @if ($tipos==null)
            <div class="alert alert-info">
                Não há tipos de Trasações cadastrada.
            </div>
        @else
        <div class="card-header">Listagem de Tipos de transação</div>
        <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <th>ID</th>
                    <th>Tipo Trans...</th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($tipos as $tipo)
                        <tr onclick="#">
                            <td >{{ $tipo['id'] }}</td>
                            <td>{{ $tipo['nome'] }}</td>
                            <a href="#">Trans</a>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            
        @endif
    </div>
</div>
    
@endsection