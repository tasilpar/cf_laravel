@extends('template')
@section('content')
<h2>Perfis Cadastrados</h2>
<ul>
    @foreach($perfis as $perfil)
    <li>{{ $perfil->nome }}</li>
    @endforeach    
</ul>
@stop


