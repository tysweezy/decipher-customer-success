@extends('app')

@section('content')
    <h4>Company Name: {{ $client->client_name }}</h4>
    <h4>Package: {{ $client->package }}</h4>
    <h4>Decision Maker: {{ $client->influencer }}</h4>
    <h4>Contract Value: {{ $client->contract_value }}</h4>

<!-- YTD -->
<div class="row">

    <div class="col-md-4">
        <div id="completes_ytd"></div>
    </div>

    <div class="col-md-4">
        <div id="support-hours-ytd"></div>
    </div>

    <div class="col-md-4">
        <div id="training-hours-ytd"></div>
    </div>

</div>


  <div class="row">

   <div class="col-md-6">
        <div id="completes"></div>
   </div>

      <div class="col-md-6">
          <div id="surveys"></div>
     </div>
  </div>


<div class="row">

    <div class="col-md-6">
        <div id="support-hours"></div>
    </div>


    <div class="col-md-6">
        <div id="email-campaigns"></div>
    </div>
</div>


<div class="row">

    <div class="col-md-6">
        <div id="emails-sent"></div>
    </div>


    <div class="col-md-6">
        <div id="helpdesk-tickets"></div>
    </div>
</div>

 @section('scripts')
     <script src="/js/highcharts.js"></script>
     <script src="/js/modules/exporting.js"></script>
    <script type="text/javascript">
        (function() {

            var YTD_data = {
                completes : {
                    id : '#completes_ytd',
                    title : 'Completes YTD',
                    xAxisText : 'Completes',
                    yAxisText : 'Completes (Qualified)',
                    series1data : [155455],
                    series2data : [200000]
                },
                support : {
                    id : '#support-hours-ytd',
                    title : 'Support Hours YTD',
                    xAxisText : 'Support Hours',
                    yAxisText : 'Hours',
                    series1data : [48],
                    series2data : [60]
                },
                training : {
                    id : '#training-hours-ytd',
                    title : 'Training Hours YTD',
                    xAxisText : 'Training Hours',
                    yAxisText : 'Hours',
                    series1data : [1],
                    series2data : [6]
                },
            }


            for (d in YTD_data) {
                var data = YTD_data[d];
                $(data.id).highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: data.title
                    },
                    xAxis: {
                        categories: [data.xAxisText]
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: data.yAxisText
                        }
                    },
                    tooltip: {
                        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
                        shared: true
                    },
                    series: [{
                        name: 'Used',
                        data: data.series1data
                    }, {
                        name: 'Available',
                        data: data.series2data
                    }],
                    exporting: {
                        enabled: false
                    }
                });
            }


            $('#completes').highcharts({
                title: {
                    text: 'Completes',
                },
                xAxis: {
                    categories: ['Apr 14','May 14','Jun 14','Jul 14','Aug 14','Sep 14','Oct 14','Nov 14','Dec 14','Jan 15','Feb 15']
                },
                yAxis: {
                    title: {
                        text: 'Completes'
                    }
                },
                series: [{
                    name: 'Completes',
                    data: [1448,14910,13784,11563,21555,14035,13133,20883,19366,23650,1595]
                }],
                exporting: {
                    enabled: false
                }
            });

        })();

        $('#surveys').highcharts({
            title: {
                text: 'Created/Launched Surveys'
            },
            xAxis: {
                categories: ['Apr 14','May 14','Jun 14','Jul 14','Aug 14','Sep 14','Oct 14','Nov 14','Dec 14','Jan 15','Feb 15']
            },
            series: [{
                type: 'column',
                name: 'Created Surveys',
                data: [5,31,24,40,23,18,12,13,7,8,0]
            }, {
                type: 'column',
                name: 'Launched Surveys',
                data: [8,19,18,20,23,14,27,18,20,13,3]
            }],
            exporting: {
                enabled: false
            }
        });


        $('#support-hours').highcharts({
            title: {
                text: 'Support Hours',
            },
            xAxis: {
                categories: ['Apr 14','May 14','Jun 14','Jul 14','Aug 14','Sep 14','Oct 14','Nov 14','Dec 14','Jan 15','Feb 15']
            },
            yAxis: {
                title: {
                    text: 'Hours'
                }
            },
            series: [{
                name: 'Support Hours',
                data: [0,0,0,0,38.25,2.25,2.25,2.5,.25,1.5,0]
            }],
            exporting: {
                enabled: false
            }
        });

        $('#email-campaigns').highcharts({
            title: {
                text: 'Email Campaigns',
            },
            xAxis: {
                categories: ['Apr 14','May 14','Jun 14','Jul 14','Aug 14','Sep 14','Oct 14','Nov 14','Dec 14','Jan 15','Feb 15']
            },
            yAxis: {
                title: {
                    text: 'Campaigns'
                }
            },
            series: [{
                name: 'Email Campaigns',
                data: [0,0,0,0,0,0,0,0,0,0,0]
            }],
            exporting: {
                enabled: false
            }
        });



        $('#emails-sent').highcharts({
            title: {
                text: 'Emails Sent',
            },
            xAxis: {
                categories: ['Apr 14','May 14','Jun 14','Jul 14','Aug 14','Sep 14','Oct 14','Nov 14','Dec 14','Jan 15','Feb 15']
            },
            yAxis: {
                title: {
                    text: 'Emails'
                }
            },
            series: [{
                name: 'Emails Sent',
                data: [0,0,0,0,0,0,0,0,0,0,0]
            }],
            exporting: {
                enabled: false
            }
        });


        $('#helpdesk-tickets').highcharts({
            title: {
                text: 'Helpdesk Tickets',
            },
            xAxis: {
                categories: ['Apr 14','May 14','Jun 14','Jul 14','Aug 14','Sep 14','Oct 14','Nov 14','Dec 14','Jan 15','Feb 15']
            },
            yAxis: {
                title: {
                    text: 'Tickets'
                }
            },
            series: [{
                name: 'Helpdesk Tickets',
                data: [0,0,0,0,0,0,0,0,0,0,0]
            }],
            exporting: {
                enabled: false
            }
        });

    </script>
 @stop
@stop