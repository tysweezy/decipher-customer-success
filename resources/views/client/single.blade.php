@extends('app')

@section('content')
    <p>Client Name: {{ $client->client_name }}</p>


 <!-- bar charts -->

<div class="row">

</div>


  <div class="row">

   <div class="col-md-6">
       <h3>Qualified Completes</h3>
       <canvas id="qualified-completes" width="500" height="250"></canvas>
   </div>


      <div class="col-md-6">
       <h3>Launched Surveys</h3>
       <canvas id="launched-surveys" width="500" height="250"></canvas>

     </div>
  </div>


<div class="row">

    <div class="col-md-6">
        <h3>Helpdesk Tickets</h3>
        <canvas id="helpdesk-tickets" width="500" height="250"></canvas>
    </div>


    <div class="col-md-6">
        <h3>Support Hours</h3>
        <canvas id="support-hours" width="500" height="250"></canvas>

    </div>
</div>


<div class="row">

    <div class="col-md-6">
        <h3>Email Campaigns</h3>
        <canvas id="email-campaigns" width="500" height="250"></canvas>
    </div>


    <div class="col-md-6">
        <h3>Emails Sent</h3>
        <canvas id="emails-sent" width="500" height="250"></canvas>

    </div>
</div>




 @section('scripts')

 @stop
@stop