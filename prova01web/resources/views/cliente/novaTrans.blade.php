@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nova Transação</div>
    
                    <div class="card-body">
                        <form method="POST" action="gravar/trans">
                            @csrf

                        <input class="invisible" type="number" name="user_id" value="{{Auth::user()->id}}">
                            <div class="form-group row">
                               
                                <select class="form-control" name="tipos_id" >
                                  <option value="" selected disabled>Tipos de Transação:</option>
                                       @foreach ($tiposTrans as $tipo)
                                   <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
                                   @endforeach
                                </select>   
                            </div>
                            
                            <div class="form-group row">
                                <input class="form-control" name="data" type="date">
                            </div> 
                            
                            <div class="form-group row">
                                <input class="form-control" name="valor" type="number" placeholder="Valor:"
                                step="any" min="0">
                            </div>

                            {{-- <div class="form-control row"> --}}
                            
                                <div class="form-check col-md-6">
                                   <input class="form-check-input" type="radio" name="credito"
                                     value="0" checked>
                                   <label class="form-check-label col-md-6" >
                                     Débito:
                                   </label>
                                 </div>
                                 <div class="form-check col-md-6">
                                   <input class="form-check-input " type="radio" name="credito" value="1">
                                   <label class="form-check-label col-md-6">
                                     Crédito:
                                   </label>
                                 </div>
                           {{--  </div> --}}
                            




    
                            <div class="form-group row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection