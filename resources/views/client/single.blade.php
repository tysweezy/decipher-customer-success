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
   <script src="/js/Chart.js"></script>
   <script>
       (function() {

           // qualified completes
           var ctx = document.getElementById('qualified-completes').getContext('2d');
           var qcChart = {
                labels: ['December', 'January', 'February'],
                datasets: [{
                    data: [20, 55, 18]
                }]
           };

           new Chart(ctx).Line(qcChart, {bezierCurve: false});


           // qualified completes
           var ctx = document.getElementById('launched-surveys').getContext('2d');
           var qcChart = {
               labels: ['A', 'B', 'C'],
               datasets: [{
                   data: [20, 55, 18]
               }]
           };

           new Chart(ctx).Line(qcChart, {bezierCurve: false});

           // helpdesk tickes

           var ctx = document.getElementById('helpdesk-tickets').getContext('2d');
           var qcChart = {
               labels: ['A', 'B', 'C'],
               datasets: [{
                   data: [20, 55, 18]
               }]
           };

           new Chart(ctx).Line(qcChart, {bezierCurve: false});


           // support hours

           var ctx = document.getElementById('support-hours').getContext('2d');
           var qcChart = {
               labels: ['A', 'B', 'C'],
               datasets: [{
                   data: [20, 55, 18]
               }]
           };

           new Chart(ctx).Line(qcChart, {bezierCurve: false});


           // Email Campaigns

           var ctx = document.getElementById('email-campaigns').getContext('2d');
           var qcChart = {
               labels: ['A', 'B', 'C'],
               datasets: [{
                   data: [20, 55, 18]
               }]
           };

           new Chart(ctx).Line(qcChart, {bezierCurve: false});


           // Email Campaigns

           var ctx = document.getElementById('emails-sent').getContext('2d');
           var qcChart = {
               labels: ['A', 'B', 'C'],
               datasets: [{
                   data: [20, 55, 18]
               }]
           };

           new Chart(ctx).Line(qcChart, {bezierCurve: false});
       })();
   </script>
 @stop
@stop