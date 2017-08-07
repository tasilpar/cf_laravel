
@extends('template')
@section('content')
<h2>Usuários Cadastrados</h2>
<ul>
    @foreach($usuarios as $usuario)
    <li>{{ $usuario->login }}</li>
    @endforeach    
</ul>
@stop

