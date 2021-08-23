@extends('main')

<form method="post" action="/enquetes/{{ $enquete->id }} ">
    @csrf
    @method('patch')
    @include('enquetes.partials.form')
</form>
