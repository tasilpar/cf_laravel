
@extends('template')
@section('content')
<h2>Grupos Cadastrados</h2>
<ul>
    @foreach($grupos as $grupo)
    <li>{{ $grupo->nome }}</li>
    @endforeach    
</ul>
@stop

