@extends('main')

<form method="post" action="/enquetes">
    @csrf
    @include('enquetes.partials.form')
</form>

<div class="card-header" id="topo">
    <h1>LISTA DE TODAS AS ENQUETES </h1>
    <h3>Clique no nome para adcionar opções para enquete </h3>
</div>
<div class="corpo">
    <div class="card">
        <div>
            <div>  
                <div>
                @foreach($enquetes->sortBy('id') as $enquete)  
                <table width=100% class="table table-bordered">
                <thead>
                    <tr align="center">
                        <th scope="col">Nome</th>
                        <th scope="col">Data de Inicio</th>
                        <th scope="col">Data de Termino</th>
                        <th scope="col">Status</th>
                        <th scope="col">Alterações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @if( \Carbon\Carbon::now() < $enquete->datafim )
                        <td align="center"><a href="/enquetes/{{$enquete->id}}">{{ $enquete->nome }}</a></td>
                    @else
                        <td align="center">{{ $enquete->nome }}</td>
                    @endif
                        <td align="center">{{ $enquete->created_at }}</td>
                        <td align="center">{{ $enquete->datafim }}</td>
                        <td align="center">
                            @if(  \Carbon\Carbon::now() > $enquete->datafim )
                                Enquete Finalizada
                            @else
                                Enquete em adamento
                            @endif
                        </td>
                        <td align="center">
                            <form method="POST" action="/enquetes/{{ $enquete->id }}">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Tem certeza que quer excluir permanente?');" class="btn btn-danger" name="delete" value="delete">Excluir</button>
                            </form>
                            <a href="/enquetes/{{ $enquete->id }}/edit" class="btn btn-info">Atualizar</a>
                        </td>
                    </tr>
                </tbody>
                </table>
                </div>
            @foreach($enquete->voto as $voto)
                <b>{{ $voto->nome }}</b> 
                Votos:{{ $voto->votos }}
                    @if( \Carbon\Carbon::now() < $enquete->datafim )
                    <form method="POST" action="/votos/{{ $voto->id }}">
                        @csrf
                        @method('patch')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja votar?');" class="btn btn-success" name="somar" value="somar">Votar</button>
                    </form>
                    @endif
                @endforeach
            @endforeach 
            </div>
        </div>
    </div>
</div>