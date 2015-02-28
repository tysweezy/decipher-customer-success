<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" id="ytd-button" data-toggle="modal" data-target="#ytd-modal">
    Enter YTD Data
</button>

<div class="modal fade" id="ytd-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">YTD Data</h4>
            </div>
            <div class="modal-body">

				@if ($errors->any())
    				<ul class="alert alert-danger">
        	        @foreach ($errors->all() as $error)
            			<li>{{ $error }}</li>
        	        @endforeach
    				</ul>
	            @endif 
                <form action="http://localhost:8000/client/{{ $client->id }}/ytd/data" method="post">  

  					 <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

                    <h3>Year-To-Date (Completes)</h3>

                    <label for="complete_ytd_used">Used Completes YTD</label>
                    <input type="text" name="complete_ytd_used" placeholder="Used Completes YTD (Number)" class="form-control" />


                    <label for="complete_ytd_available">Available Completes YTD</label>
                    <input type="text" name="complete_ytd_available" placeholder="Available Completes YTD (Number)" class="form-control" />

                    <h3>YTD (Support Hours)</h3>

                    <label for="support_hours_ytd_used">Used Support Hours YTD</label>
                    <input type="text" name="support_hours_ytd_used" placeholder="Used Support Hours YTD (Number)" class="form-control"/>

                    <label for="support_hours_ytd_available">Available Support Hours YTD</label>
                    <input type="text" name="support_hours_ytd_available" placeholder="Available Support Hours (Number)" class="form-control"/> <br>

                    <h3>YTD (Training Hours)</h3>

                    <label for="training_ytd_used">Used Training Hours YTD</label>
                    <input type="text" name="training_ytd_used" placeholder="Used Support Hours YTD (Number)" class="form-control"/>

                    <label for="training_ytd_available">Available Training Hours YTD</label>
                    <input type="text" name="training_ytd_available" placeholder="Available Support Hours (Number)" class="form-control"/> <br>


                    <input type="submit" value="Save YTD Data" class="btn btn-primary">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





