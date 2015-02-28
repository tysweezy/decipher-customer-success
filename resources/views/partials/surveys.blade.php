<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" id="surveys-button" data-toggle="modal" data-target="#surveys-modal">
    Enter Surveys Data
</button>

<div class="modal fade" id="surveys-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Launched/Completed Surverys Data</h4>
            </div>
            <div class="modal-body">

                @if ($errors->any())
                    <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                @endif 
                
                {!! Form::open(['url' => '/client/' . $client->id . '/surveys/data', 'method' => 'post']) !!}

                    <div class="form-group">
                        <h4>April</h4>

                        {!! Form::label('apr_14_created', 'April Created 2014') !!}
                        {!! Form::text('apr_14_created', null, ['class' => 'form-control']) !!}

                        {!! Form::label('apr_14_launched', 'April Launched 2014') !!}
                        {!! Form::text('apr_14_launched', null, ['class' => 'form-control']) !!}
                    </div>

                     <div class="form-group">
                        <h4>May</h4>

                        {!! Form::label('may_14_created', 'May Created 2014') !!}
                        {!! Form::text('may_14_created', null, ['class' => 'form-control']) !!}

                        {!! Form::label('may_14_launched', 'May Launched 2014') !!}
                        {!! Form::text('may_14_launched', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <h4>June</h4>

                        {!! Form::label('jun_14_created', 'June Created 2014') !!} 
                        {!! Form::text('jun_14_created', null, ['class' => 'form-control']) !!}

                        {!! Form::label('jun_14_launched', 'June Launched 2014') !!} 
                        {!! Form::text('jun_14_launched', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <h4>July</h4>

                        {!! Form::label('jul_14_created', 'July Created 2014') !!}
                        {!! Form::text('jul_14_created', null, ['class' => 'form-control']) !!}

                        {!! Form::label('jul_14_launched', 'July Launched 2014') !!}
                        {!! Form::text('jul_14_launched', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <h4>August</h4>

                        {!! Form::label('aug_14_created', 'August Created 2014') !!}
                        {!! Form::text('aug_14_created', null, ['class' => 'form-control']) !!}

                        {!! Form::label('aug_14_launched', 'August Launched 2014') !!}
                        {!! Form::text('aug_14_launched', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <h4>September</h4>

                        {!! Form::label('sep_14_created', 'September Created 2014') !!}
                        {!! Form::text('sep_14_created', null, ['class' => 'form-control']) !!}


                        {!! Form::label('sep_14_launched', 'September Launched 2014') !!}
                        {!! Form::text('sep_14_launched', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <h4>October</h4>

                        {!! Form::label('oct_14_created', 'October Created 2014') !!}
                        {!! Form::text('oct_14_created', null, ['class' => 'form-control']) !!}


                        {!! Form::label('oct_14_launched', 'October Launched 2014') !!}
                        {!! Form::text('oct_14_launched', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <h4>November</h4>

                        {!! Form::label('nov_14_created', 'November Created 2014') !!}
                        {!! Form::text('nov_14_created', null, ['class' => 'form-control']) !!}

                        {!! Form::label('nov_14_launched', 'November Launched 2014') !!}
                        {!! Form::text('nov_14_launched', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <h4>December</h4>

                        {!! Form::label('dec_14_created', 'December Created 2014') !!}
                        {!! Form::text('dec_14_created', null, ['class' => 'form-control']) !!}

                        {!! Form::label('dec_14_launched', 'December Launched 2014') !!}
                        {!! Form::text('dec_14_launched', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <h4>January</h4>

                        {!! Form::label('jan_15_created', 'January Created 2015') !!}
                        {!! Form::text('jan_15_created', null, ['class' => 'form-control']) !!}


                        {!! Form::label('jan_15_launched', 'January Launched 2015') !!}
                        {!! Form::text('jan_15_launched', null, ['class' => 'form-control']) !!}
                    </div>


                    <div class="form-group">
                        <h4>February</h4>

                        {!! Form::label('feb_15_created', 'February Created 2015') !!}
                        {!! Form::text('feb_15_created', null, ['class' => 'form-control']) !!}


                        {!! Form::label('feb_15_launched', 'February Launched 2015') !!}
                        {!! Form::text('feb_15_launched', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Submit Survey Data', ['class' => 'form-control btn btn-primary']) !!}
                    </div>

                {!! Form::close() !!}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





