<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" id="sent-button" data-toggle="modal" data-target="#sent-modal">
    Enter Email Sent Data
</button>

<div class="modal fade" id="sent-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Email Sent Data</h4>
            </div>
            <div class="modal-body">

				@if ($errors->any())
    				<ul class="alert alert-danger">
        	        @foreach ($errors->all() as $error)
            			<li>{{ $error }}</li>
        	        @endforeach
    				</ul>
	            @endif 
                
                {!! Form::open(['url' => '/client/' . $client->id . '/sent/data', 'method' => 'post']) !!}

                    <div class="form-group">
                        {!! Form::label('apr_14', 'April 2014') !!}
                        {!! Form::text('apr_14', null, ['class' => 'form-control']) !!}
                    </div>

                     <div class="form-group">
                        {!! Form::label('may_14', 'May 2014') !!}
                        {!! Form::text('may_14', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('jun_14', 'June 2014') !!} 
                        {!! Form::text('jun_14', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('jul_14', 'July 2014') !!}
                        {!! Form::text('jul_14', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('aug_14', 'August 2014') !!}
                        {!! Form::text('aug_14', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('sep_14', 'September 2014') !!}
                        {!! Form::text('sep_14', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('oct_14', 'October 2014') !!}
                        {!! Form::text('oct_14', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('nov_14', 'November 2014') !!}
                        {!! Form::text('nov_14', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('dec_14', 'December 2014') !!}
                        {!! Form::text('dec_14', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('jan_15', 'January 2015') !!}
                        {!! Form::text('jan_15', null, ['class' => 'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('feb_15', 'February 2015') !!}
                        {!! Form::text('feb_15', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Submit Email Sent Data', ['class' => 'form-control btn btn-primary']) !!}
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





