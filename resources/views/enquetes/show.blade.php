@extends('main')

<h1><b>Enquete {{ $enquete->nome }}</b></h1>
<a href="/">Voltar </a>

<form method="post" action="/votos">
    @csrf
    @include('votos.create')
</form>

@foreach($enquete->voto as $voto)
    {{ $voto->nome }} <br>
    <form action="/votos/{{ $voto->id }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" onclick="return confirm('Tem certeza?');" class="btn btn-danger">Apagar</button> 
    <br>
@endforeach