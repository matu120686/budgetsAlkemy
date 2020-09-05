@extends('theme.backoffice.layouts.admin')

@section('title','Página demo')
    
@section('head')
@endsection

@section('content')    
   {{--<h6>Contenido de la App</h6>--}}

   <div class="section">
        <p class="caption">Completar formulario para un nuevo Presupuesto</p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">                                
                            <span class="card-title">Crear Presupuesto</span>
                            <div class="row">
                                <form  class="col s12" method="POST" action="{{route('backoffice.budjet.update',$budjet)}}">

                                    {{ csrf_field() }}
                                    {{method_field('PUT')}}

                                    <div class="row">
                                        <div class="input-field col s12">
                                        <input id="concept" type="text" name="concept" value=" {{$budjet->concept}}">
                                            <label for="concept">Concepto</label>
                                               @if ($errors->has('concept'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong >{{ $errors->first('concept') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                                <input id="budget_type" type="text" name="budget_type" value=" {{$budjet->budget_type}}" disabled>
                                             <label for="budget_type">Tipo de Presupuesto</label>
                                                {{--@if ($errors->has('budget_type'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong >{{ $errors->first('budget_type') }}</strong>
                                                    </span>
                                                @endif --}}
                                        </div>                                          
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="amount" type="number" name="amount" value="{{$budjet->amount}}">
                                            <label for="amount">Monto</label>
                                               @if ($errors->has('amount'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong >{{ $errors->first('amount') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="date" type="date"  name="date" value="{{$budjet->date}}">
                                            <br>                                            
                                               @if ($errors->has('amount'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong >{{ $errors->first('date') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit">Actualizar
                                            <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                
            </div> 
        </div>
    </div>       
   
@endsection

@section('foot')    
@endsection
    





