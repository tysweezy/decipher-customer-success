@extends('app')

@section('content')

<h2>Create Client</h2>

@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="http://localhost:8000/client/create">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

    <label for="client_name">Client Name</label>
    <input type="text" name="client_name" placeholder="Client Name" class="form-control"/>

    <label for="package">Package</label>
    <input type="text" name="package" placeholder="Package" class="form-control"/>

    <label for="influencer">Influencer</label>
    <input type="text" name="influencer" placeholder="Influencer" class="form-control"/>

    <label for="contract_value">Contract Value</label>
    <input type="text" name="contract_value" placeholder="Contract Value" class="form-control"/>

    <label for="onboarded">Onboarded?</label>
    <input type="checkbox" name="onboarded" value="1"/> <br/>

    <input type="submit" value="Create Client" class="btn btn-primary"/>

</form>

@stop