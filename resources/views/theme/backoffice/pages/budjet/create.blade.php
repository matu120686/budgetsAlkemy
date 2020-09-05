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
                                <form  class="col s12" method="POST" action="{{route('backoffice.budjet.store')}}">

                                    {{ csrf_field() }}

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="concept" type="text" name="concept">
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
                                            <select name="budget_type" id="budget_type" class="validate">
                                              <option value="" disabled selected>-- Tipo --</option>
                                              <option value="ingreso">Ingreso</option>
                                              <option value="egreso">Egreso</option>
                                            </select>
                                            <label for="budget_type">Tipo de Presupuesto</label>
                                                @if ($errors->has('budget_type'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong >{{ $errors->first('budget_type') }}</strong>
                                                    </span>
                                                @endif  
                                          </div>                                          
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="amount" type="number" min="0" name="amount">
                                            <label for="amount">Monto</label>
                                               @if ($errors->has('amount'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong >{{ $errors->first('amount') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light right" type="submit">Guardar
                                                <i class="material-icons right">send</i>
                                                </button>
                                            </div>
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
    





{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
