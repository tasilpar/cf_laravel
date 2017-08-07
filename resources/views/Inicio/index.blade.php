@extends('template')
@section('content')
<h2>Bem Vindo ao Consulta Fácil - O melhor software para construção de Consultas WEB</h2>
<h3>Funcionalidades</h3><hr>
<ul>
    @foreach($aFuncionalidades as $funcionalidade)
    <li>{{ $funcionalidade }}</li>
    @endforeach    
</ul>


@stop
