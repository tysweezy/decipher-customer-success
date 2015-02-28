@extends('app')

@section('content')
    
    <a href="/client/{{ $client->id }}/edit" class="btn btn-warning pull-right">Edit Client Details</a>

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
    <script>
        (function() {

            var YTD_data = {
                completes : {
                    id : '#completes_ytd',
                    title : 'Completes YTD',
                    xAxisText : 'Completes',
                    yAxisText : 'Completes (Qualified)',
                    series1data : [{{ json_encode(intval($ytd->completes_ytd_used)) }}],
                    series2data : [{{ json_encode(intval($ytd->completes_ytd_available)) }}]
                },
                support : {
                    id : '#support-hours-ytd',
                    title : 'Support Hours YTD',
                    xAxisText : 'Support Hours',
                    yAxisText : 'Hours',
                    series1data : [{{ json_encode(intval($ytd->support_ytd_used)) }}],
                    series2data : [{{ json_encode(intval($ytd->support_ytd_available)) }}]
                },
                training : {
                    id : '#training-hours-ytd',
                    title : 'Training Hours YTD',
                    xAxisText : 'Training Hours',
                    yAxisText : 'Hours',
                    series1data : [{{ json_encode(intval($ytd->training_ytd_used)) }}],
                    series2data : [{{ json_encode(intval($ytd->training_ytd_available)) }}]
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
                    data: [{{ json_encode(intval($complete->apr_14)) }}, 
                           {{ json_encode(intval($complete->may_14)) }}, 
                           {{ json_encode(intval($complete->jun_14)) }}, 
                           {{ json_encode(intval($complete->jul_14)) }}, 
                           {{ json_encode(intval($complete->aug_14)) }},
                           {{ json_encode(intval($complete->sep_14)) }},
                           {{ json_encode(intval($complete->oct_14)) }}, 
                           {{ json_encode(intval($complete->nov_14)) }},
                           {{ json_encode(intval($complete->dec_14)) }},
                           {{ json_encode(intval($complete->jan_15)) }},
                           {{ json_encode(intval($complete->feb_15)) }}]
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
                data: [{{ json_encode(intval($survey->apr_14_created)) }},
                {{ json_encode(intval($survey->may_14_created)) }},
                {{ json_encode(intval($survey->jun_14_created)) }},
                {{ json_encode(intval($survey->jul_14_created)) }},
                {{ json_encode(intval($survey->aug_14_created)) }},
                {{ json_encode(intval($survey->sep_14_created)) }},
                {{ json_encode(intval($survey->oct_14_created)) }},
                {{ json_encode(intval($survey->nov_14_created)) }},
                {{ json_encode(intval($survey->dec_14_created)) }},
                {{ json_encode(intval($survey->jan_15_created)) }},
                {{ json_encode(intval($survey->feb_15_created)) }}]
            }, {
                type: 'column',
                name: 'Launched Surveys',
                data: [{{ json_encode(intval($survey->apr_14_launched)) }},
                        {{ json_encode(intval($survey->may_14_launched)) }},
                        {{ json_encode(intval($survey->jun_14_launched)) }},
                        {{ json_encode(intval($survey->jul_14_launched)) }},
                        {{ json_encode(intval($survey->aug_14_launched)) }},
                        {{ json_encode(intval($survey->sep_14_launched)) }},
                        {{ json_encode(intval($survey->oct_14_launched)) }},
                        {{ json_encode(intval($survey->nov_14_launched)) }},
                        {{ json_encode(intval($survey->dec_14_launched)) }},
                        {{ json_encode(intval($survey->jan_15_launched)) }},
                        {{ json_encode(intval($survey->feb_15_launched)) }}]
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
                data: [{{ json_encode(intval($support->apr_14)) }}, 
                           {{ json_encode(intval($support->may_14)) }}, 
                           {{ json_encode(intval($support->jun_14)) }}, 
                           {{ json_encode(intval($support->jul_14)) }}, 
                           {{ json_encode(intval($support->aug_14)) }},
                           {{ json_encode(intval($support->sep_14)) }},
                           {{ json_encode(intval($support->oct_14)) }}, 
                           {{ json_encode(intval($support->nov_14)) }},
                           {{ json_encode(intval($support->dec_14)) }},
                           {{ json_encode(intval($support->jan_15)) }},
                           {{ json_encode(intval($support->feb_15)) }}]
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
                data: [{{ json_encode(intval($campaign->apr_14)) }}, 
                           {{ json_encode(intval($campaign->may_14)) }}, 
                           {{ json_encode(intval($campaign->jun_14)) }}, 
                           {{ json_encode(intval($campaign->jul_14)) }}, 
                           {{ json_encode(intval($campaign->aug_14)) }},
                           {{ json_encode(intval($campaign->sep_14)) }},
                           {{ json_encode(intval($campaign->oct_14)) }}, 
                           {{ json_encode(intval($campaign->nov_14)) }},
                           {{ json_encode(intval($campaign->dec_14)) }},
                           {{ json_encode(intval($campaign->jan_15)) }},
                           {{ json_encode(intval($campaign->feb_15)) }}]
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
                data: [{{ json_encode(intval($sent->apr_14)) }}, 
                           {{ json_encode(intval($sent->may_14)) }}, 
                           {{ json_encode(intval($sent->jun_14)) }}, 
                           {{ json_encode(intval($sent->jul_14)) }}, 
                           {{ json_encode(intval($sent->aug_14)) }},
                           {{ json_encode(intval($sent->sep_14)) }},
                           {{ json_encode(intval($sent->oct_14)) }}, 
                           {{ json_encode(intval($sent->nov_14)) }},
                           {{ json_encode(intval($sent->dec_14)) }},
                           {{ json_encode(intval($sent->jan_15)) }},
                           {{ json_encode(intval($sent->feb_15)) }}]
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
                data: [{{ json_encode(intval($helpdesk->apr_14)) }}, 
                           {{ json_encode(intval($helpdesk->may_14)) }}, 
                           {{ json_encode(intval($helpdesk->jun_14)) }}, 
                           {{ json_encode(intval($helpdesk->jul_14)) }}, 
                           {{ json_encode(intval($helpdesk->aug_14)) }},
                           {{ json_encode(intval($helpdesk->sep_14)) }},
                           {{ json_encode(intval($helpdesk->oct_14)) }}, 
                           {{ json_encode(intval($helpdesk->nov_14)) }},
                           {{ json_encode(intval($helpdesk->dec_14)) }},
                           {{ json_encode(intval($helpdesk->jan_15)) }},
                           {{ json_encode(intval($helpdesk->feb_15)) }}]
            }],
            exporting: {
                enabled: false
            }
        });

    </script>
 @stop
@stop