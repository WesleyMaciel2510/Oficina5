@extends('layouts.app')
@section('page_title', 'Cadastrar Usuarios')

@section('content')

<link href="{{ asset('css/projeto.css') }}" rel="stylesheet">

<div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))

        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
        @endforeach
 </div> 
   
     <div class="col-sm-6">
        <a style="float:left; margin-top: 100px; margin-left: 100px" href="/usuarios">
            <button type="button" id="btn" class="btn btn-primary">VOLTAR</button>
        </a>
    </div>
      
            <div id="titulo" class="col-sm-12" style="text-align: center;">
            <h3 style="font-size: 30px; color:black; font-weight: bold; margin-top: -100px;">CRIAÇÃO DE USUÁRIOS</h3>
        </div>
    <form class="" action="/usuarios" method="POST">
        <form method="post" action="">            
            
            <div class="form-group col-sm-10"></div>

            <div class="form-group col-sm-3" style="margin-left: 100px">
                <label>Nome:</label>   
                <input  class="input form-control" name="nome">               
            </div>

            <div class="form-group col-sm-3">
                <label>Email:</label>
                <input  class="input form-control" name="email">               
            </div>

            <div class="form-group col-sm-3" style="margin-right:40px">
                <label>Senha:</label>
                <input type="password"  class="input form-control" name="password">               
            </div>
                   
            <div class="form-group col-sm-12" style="text-align: center; margin-bottom: 50px;">               
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input id="btn" type="submit" name="name" class="btn btn-primary" value="CADASTRAR" style="margin-top: 10%; padding: 15px;">
            </div>
        </form>
    </form>

@endsection