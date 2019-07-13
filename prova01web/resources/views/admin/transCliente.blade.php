@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
                <div class="ol-md-12">
                    @if ($trans==null)
                        <div class="alert alert-info">
                            Não há Trasações cadastrada. {{$nome}}
                        </div>
                    @else
                    <div class="card-header">Listagem de Transações</div>
                    <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Data</th>
                                <th>Tipo</th>
                                <th>Valor</th>
                                <th>Opção</th>
                                <th></th>
                                <th></th>
                                </thead>
                                <tbody>
                                @foreach($trans as$tran)
                                    <tr>
                                        <td>{{$tran['id'] }}</td>
                                        <td>{{date('d/m/Y',strtotime($tran['data']))}}</td>
                                        <td>{{$tran['tipos_id']}}</td>
                                        <td>{{$tran['valor'] }}</td>
                                        @if ($tran['credito']==0)
                                        <td> Débito</td>
                                        @else
                                        <td> Crédito</td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    @endif
                </div>
            </div> 

@endsection