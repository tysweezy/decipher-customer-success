@extends('app')

@section('content')
    <h2>Clients</h2>

    <ul class="clients">
        @foreach($clients as $client)
           <li><a href="/client/{{{ $client->id }}}">{{ $client->client_name }}</a></li>
        @endforeach
    </ul>
@stop