@extends('theme.backoffice.layouts.admin')

@section('title','Página demo')
    
@section('head')
@endsection

@section('content')

    <div class="container">
        
        <p class="caption"><strong>Balance Total = $ {{$balance_budgets}} </strong></p>
          <!--Card Panel-->
          <div class="divider"></div>
        <div id="hoverable-table">
            <h4 class="header">Listado de Presupuestos</h4>
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <table class="highlight">
                                <thead>
                                    <tr>                                
                                        <th>Id</th>
                                        <th>Concepto</th>                                                                       
                                        <th>Monto</th>
                                        <th>Tipo de Presupuesto</th>
                                        <th>Fecha de Creación</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>                            
    
    
                                    @foreach ($budjets as $budjet)
                                    <tr> 
                                        <td> {{$budjet->id}} </td>                          
                                        <td> {{$budjet->concept}} </td>                                    
                                        <td>{{$budjet->amount}}</td>
                                        <td>{{$budjet->budget_type}}</td>
                                        <td> {{$budjet->date}} </td> 
                                        <td><a href="{{route('backoffice.budjet.edit',$budjet)}}">Editar</a></td>
                                    </tr>
                                    @endforeach
                                    
                                    
                                
                                    
                                                                         
                                
                                
                                </tbody>
                            </table>
    
                            
    
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
   
  
      
    

                                {{--@foreach ($entry_budjets as $entry_budjet)
                                <tr> 
                                    <td> {{$entry_budjet}} </td>                          
                                    
                                    <td><a href="{{route('backoffice.budjet.edit',$budjet)}}">Editar</a></td>
                                </tr>
                                @endforeach--}}
                                
                                
   

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
