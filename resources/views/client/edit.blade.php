@extends('app')

@section('content')
<div id="ytd-form">
    @include('partials.ytd')
</div>

    <h2>Edit Client</h2>

@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
    <form method="post" action="http://localhost:8000/client/{{{ $client->id }}}/edit/">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

        <label for="client_name">Client Name</label>
        <input type="text" name="client_name" value="{{{ $client->client_name }}}" class="form-control"/>

        <label for="package">Package</label>
        <input type="text" name="package" value="{{{ $client->package }}}" class="form-control"/>

        <label for="influencer">Influencer</label>
        <input type="text" name="influencer" value="{{{ $client->influencer }}}" class="form-control"/>

        <label for="contract_value">Contract Value</label>
        <input type="text" name="contract_value" value="{{{ $client->contract_value }}}" class="form-control"/>

        <label for="onboarded">Onboarded?</label>
        <input type="checkbox" name="onboarded" value="1"/> <br/>

        <input type="submit" value="Update Client" class="btn btn-primary"/>
    </form>
@stop