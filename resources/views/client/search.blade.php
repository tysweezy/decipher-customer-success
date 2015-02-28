@extends('app')

@section('content')
    <h2>Clients</h2>

   	@if(count($clients) === 0)
		<div class="alert alert-info">No results.</div>
	 @else

	 <table class="table table-striped">
	 	<tr>
	 		<th>Company Name</th>
	 		<th>Edit</th>
	 	</tr>

	 	@foreach($clients as $client)
			<tr>
				<td><a href="/client/{{{ $client->id }}}">{{ $client->client_name }}</a></td>
				<td><a href="/client/{{{ $client->id }}}/edit" class="btn btn-warning">Edit</a></td>

			</tr>
	 	@endforeach
	 </table>

	 @endif
@stop