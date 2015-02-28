<?php namespace App\Http\Controllers;

use App\Client;
use App\Ytd;
use App\Survey;
use App\Support;
use App\Completes;
use App\EmailCampaigns;
use App\EmailSent;
use App\Helpdesk;
use App\Http\Requests;
use App\Http\Requests\CreateClientPostRequest;
use App\Http\Requests\YtdRequest;
use App\Http\Requests\CompletesRequest;
use App\Http\Requests\SurveysRequest;
use App\Http\Requests\SupportRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;


class ClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		/*$query = Input::get('q');


		if ($query) {
			$clients = Client::search($query)->get();
		} else {
			$clients = Client::all();
		}*/

		
        $clients = Client::all();

	    return view('client.main')->with('clients', $clients);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('client.create');
	}

	/**
	 * Store created client
	 *
     * @param CreateClientPostRequest $request
	 * @return Response
	 */
	public function store(CreateClientPostRequest $request)
	{
        // Create client with all requests from form

        //Client::create($request->all());
        /*Client::create([
            'client_name'    => Input::get('client_name'),
            'package'        => Input::get('package'),
            'influencer'     => Input::get('influencer'),
            'contract_value' => intval(Input::get('contract_value')),
            'onboarded'      => Input::get('onboarded')
        ]);*/

		$client = new Client;

		$client->client_name     = Input::get('client_name');
		$client->package         = Input::get('package');
		$client->influencer      = Input::get('influencer');
		$client->contract_value  = Input::get('contract_value');
		$client->onboarded       = Input::get('onboarded');

		if ($client->save()) {

			// after client is created, create data spaces for them. Starting them off with zeros
			
			// ytd 
			Ytd::create([
				'completes_ytd_used'        => 0,
				'completes_ytd_available'   => 0,
				'support_ytd_used'          => 0,
				'support_ytd_available'     => 0,
				'training_ytd_used'         => 0,
				'training_ytd_available'    => 0,
				'client_id'                 => $client->id
	 		]); 

			// completes
			Completes::create([
				'apr_14'    => 0,
				'may_14'    => 0,
				'jun_14'    => 0,
				'jul_14'    => 0,
				'aug_14'    => 0,
				'sep_14'    => 0,
				'oct_14'    => 0,
				'nov_14'    => 0,
				'dec_14'    => 0,
				'jan_15'    => 0,
				'feb_15'    => 0,
				'client_id' => $client->id 
			]);

			Survey::create([
				'apr_14_created'   => 0,
				'apr_14_launched'  => 0,
				'may_14_created'   => 0,
				'may_14_launched'  => 0,
				'jun_14_created'   => 0,
				'jun_14_launched'  => 0,
				'jul_14_created'   => 0,
				'jul_14_launched'  => 0,
				'aug_14_created'   => 0,
				'aug_14_launched'  => 0,
				'sep_14_created'   => 0,
				'sep_14_launched'  => 0,
				'oct_14_created'   => 0,
				'oct_14_launched'  => 0,
				'nov_14_created'   => 0,
				'nov_14_launched'  => 0,
				'dec_14_created'   => 0,
				'dec_14_launched'  => 0,
				'jan_15_created'   => 0,
				'jan_15_launched'  => 0,
				'feb_15_created'   => 0,
				'feb_15_launched'  => 0,
				'client_id'        => $client->id
			]);

			Support::create([
				'apr_14'    => 0,
				'may_14'    => 0,
				'jun_14'    => 0,
				'jul_14'    => 0,
				'aug_14'    => 0,
				'sep_14'    => 0,
				'oct_14'    => 0,
				'nov_14'    => 0,
				'dec_14'    => 0,
				'jan_15'    => 0,
				'feb_15'    => 0,
				'client_id' => $client->id 	
			]);

			EmailCampaigns::create([
				'apr_14'    => 0,
				'may_14'    => 0,
				'jun_14'    => 0,
				'jul_14'    => 0,
				'aug_14'    => 0,
				'sep_14'    => 0,
				'oct_14'    => 0,
				'nov_14'    => 0,
				'dec_14'    => 0,
				'jan_15'    => 0,
				'feb_15'    => 0,
				'client_id' => $client->id 	
			]);


			EmailSent::create([
				'apr_14'    => 0,
				'may_14'    => 0,
				'jun_14'    => 0,
				'jul_14'    => 0,
				'aug_14'    => 0,
				'sep_14'    => 0,
				'oct_14'    => 0,
				'nov_14'    => 0,
				'dec_14'    => 0,
				'jan_15'    => 0,
				'feb_15'    => 0,
				'client_id' => $client->id 	
			]);

			Helpdesk::create([
				'apr_14'    => 0,
				'may_14'    => 0,
				'jun_14'    => 0,
				'jul_14'    => 0,
				'aug_14'    => 0,
				'sep_14'    => 0,
				'oct_14'    => 0,
				'nov_14'    => 0,
				'dec_14'    => 0,
				'jan_15'    => 0,
				'feb_15'    => 0,
				'client_id' => $client->id 	
			]);

	}


        return redirect('/')->with('success', 'Client Created Successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$client = Client::find($id);

		$ytd = Ytd::where('client_id', '=', $client->id);
		$complete = Completes::where('client_id', '=', $client->id);
		$survey = Survey::where('client_id', '=', $client->id);
		$support = Support::where('client_id', '=', $client->id)->first();
		$campaign = EmailCampaigns::where('client_id', '=', $client->id)->first();
		$sent = EmailSent::where('client_id', '=', $client->id)->first();
		$helpdesk = Helpdesk::where('client_id', '=', $client->id)->first();

		if ($ytd->count() && $complete->count()) {
			$ytd = $ytd->first();
			$complete = $complete->first();
			$survey = $survey->first();

			return view('client.single')
					->with('client', $client)
					->with('ytd', $ytd)
					->with('complete', $complete)
					->with('survey', $survey)
					->with('support', $support)
					->with('campaign', $campaign)
					->with('sent', $sent)
					->with('helpdesk', $helpdesk);
		} else {

			// redirect to edit page if ytd data doesn't exist
			return redirect('/client/' . $client->id . '/edit');
		}

        
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = Client::find($id);

        return view('client.edit')->with('client', $client);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateClientPostRequest $request)
	{
        $client = Client::findOrFail($id);

        $client->update($request->all());

        return redirect('/');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$client = Client::findOrFail($id);

	}

	// YTD data stuff

	/**
	 * Store YTD data by client id.
	 * 
	 * @param int $id
	 * @return Response
	 */
	public function storeYtdData(YtdRequest $ytd, $id)
	{

		$client = Client::findOrFail($id);

		if ($client) {


 				$ytd = Ytd::where('client_id', '=', $client->id)->first();

	 			$ytd->completes_ytd_used        = Input::get('complete_ytd_used');
	 			$ytd->completes_ytd_available   = Input::get('complete_ytd_available');
	 			$ytd->support_ytd_used          = Input::get('support_hours_ytd_used');
	 			$ytd->support_ytd_available     = Input::get('support_hours_ytd_available');
	 			$ytd->training_ytd_used         = Input::get('training_ytd_used');
	 			$ytd->training_ytd_available    = Input::get('training_ytd_available');


	 			$ytd->save();

			return redirect('/client/' . $client->id . '/edit')->with('success', 'YTD data entered successfully.');
		}
	}


	public function storeCompletesData(CompletesRequest $complete, $id) 
	{
		$client = Client::findOrFail($id);

		if ($client) {

		    $complete = Completes::where('client_id', '=', $client->id)->first();

		    $complete->apr_14  = Input::get('apr_14');
		    $complete->may_14  = Input::get('may_14');
		    $complete->jun_14  = Input::get('jun_14');
		    $complete->jul_14  = Input::get('jul_14');
		    $complete->aug_14  = Input::get('aug_14');
		    $complete->sep_14  = Input::get('sep_14');
		    $complete->oct_14  = Input::get('oct_14');
		    $complete->nov_14  = Input::get('nov_14');
		    $complete->dec_14  = Input::get('dec_14');
		    $complete->jan_15  = Input::get('jan_15');
		    $complete->feb_15  = Input::get('feb_15');

		    $complete->save();


			return redirect('/client/' . $client->id . '/edit')->with('success', 'Completes data entered successfully');
		}
	}
 

	public function storeSurveysData(SurveysRequest $survey, $id)
	{
		$client = Client::findOrFail($id);

		if ($client) {
			$survey = Survey::where('client_id', '=', $client->id)->first();

			$survey->apr_14_created   = Input::get('apr_14_created');
			$survey->apr_14_launched  = Input::get('apr_14_launched');

			$survey->may_14_created   = Input::get('may_14_created');
			$survey->may_14_launched  = Input::get('may_14_launched');

			$survey->jun_14_created   = Input::get('jun_14_created');
			$survey->jun_14_launched  = Input::get('jun_14_launched');

			$survey->jul_14_created   = Input::get('jul_14_created');
			$survey->jul_14_launched  = Input::get('jul_14_launched');

			$survey->aug_14_created   = Input::get('aug_14_created');
			$survey->aug_14_launched  = Input::get('aug_14_launched');

			$survey->sep_14_created   = Input::get('sep_14_created');
			$survey->sep_14_launched  = Input::get('sep_14_launched');

			$survey->oct_14_created   = Input::get('oct_14_created');
			$survey->oct_14_launched  = Input::get('oct_14_launched');

			$survey->nov_14_created   = Input::get('nov_14_created');
			$survey->nov_14_launched  = Input::get('nov_14_launched');

			$survey->dec_14_created   = Input::get('dec_14_created');
			$survey->dec_14_launched  = Input::get('dec_14_launched');

			$survey->jan_15_created   = Input::get('jan_15_created');
			$survey->jan_15_launched  = Input::get('jan_15_launched');

			$survey->feb_15_created   = Input::get('feb_15_created');
			$survey->feb_15_launched  = Input::get('feb_15_launched');

			$survey->save();

			return redirect('/client/' . $client->id . '/edit')->with('success', 'Launched/created survey data entered successfully.');
		}
	}

	// support data
	public function storeSupportData(SupportRequest $support, $id)
	{
		$client = Client::findOrFail($id);

		if ($client) {
			
			$support = Support::where('client_id', '=', $client->id)->first();

		    $support->apr_14   = Input::get('apr_14');
		    $support->may_14   = Input::get('may_14');
		    $support->jun_14   = Input::get('jun_14');
		    $support->jul_14   = Input::get('jul_14');
		    $support->aug_14   = Input::get('aug_14');
		    $support->sep_14   = Input::get('sep_14');
		    $support->oct_14   = Input::get('oct_14'); 
		    $support->nov_14   = Input::get('nov_14');
		    $support->dec_14   = Input::get('dec_14');
		    $support->jan_15   = Input::get('jan_15');
		    $support->feb_15   = Input::get('feb_15');

		    $support->save();

		    return redirect('/client/' . $client->id . '/edit')->with('success', 'Support data entered successfully.');
		}
	}

	public function storeEmailCampaignData(SupportRequest $campaign, $id)
	{
		$client = Client::findOrFail($id);

		if ($client) {
			$campaign = EmailCampaigns::where('client_id', '=', $client->id)->first();

		    $campaign->apr_14   = Input::get('apr_14');
		    $campaign->may_14   = Input::get('may_14');
		    $campaign->jun_14   = Input::get('jun_14');
		    $campaign->jul_14   = Input::get('jul_14');
		    $campaign->aug_14   = Input::get('aug_14');
		    $campaign->sep_14   = Input::get('sep_14');
		    $campaign->oct_14   = Input::get('oct_14'); 
		    $campaign->nov_14   = Input::get('nov_14');
		    $campaign->dec_14   = Input::get('dec_14');
		    $campaign->jan_15   = Input::get('jan_15');
		    $campaign->feb_15   = Input::get('feb_15');

		    $campaign->save();
		    return redirect('/client/' . $client->id . '/edit')->with('success', 'Email Campaign data entered successfully.');

		}
	}

	public function storeEmailSentData(SupportRequest $sent, $id)
	{
		$client = Client::findOrFail($id);

		if ($client) {
			$sent = EmailSent::where('client_id', '=', $client->id)->first();

		    $sent->apr_14   = Input::get('apr_14');
		    $sent->may_14   = Input::get('may_14');
		    $sent->jun_14   = Input::get('jun_14');
		    $sent->jul_14   = Input::get('jul_14');
		    $sent->aug_14   = Input::get('aug_14');
		    $sent->sep_14   = Input::get('sep_14');
		    $sent->oct_14   = Input::get('oct_14'); 
		    $sent->nov_14   = Input::get('nov_14');
		    $sent->dec_14   = Input::get('dec_14');
		    $sent->jan_15   = Input::get('jan_15');
		    $sent->feb_15   = Input::get('feb_15');

		    $sent->save();

		  	return redirect('/client/' . $client->id . '/edit')->with('success', 'Email sent data entered successfully.');
		}
	}

	public function storeHelpdeskData(SupportRequest $helpdesk, $id)
	{
		$client = Client::findOrFail($id);

		if ($client) {
			$helpdesk = Helpdesk::where('client_id', '=', $client->id)->first();

		    $helpdesk->apr_14   = Input::get('apr_14');
		    $helpdesk->may_14   = Input::get('may_14');
		    $helpdesk->jun_14   = Input::get('jun_14');
		    $helpdesk->jul_14   = Input::get('jul_14');
		    $helpdesk->aug_14   = Input::get('aug_14');
		    $helpdesk->sep_14   = Input::get('sep_14');
		    $helpdesk->oct_14   = Input::get('oct_14'); 
		    $helpdesk->nov_14   = Input::get('nov_14');
		    $helpdesk->dec_14   = Input::get('dec_14');
		    $helpdesk->jan_15   = Input::get('jan_15');
		    $helpdesk->feb_15   = Input::get('feb_15');

		    $helpdesk->save();

		    return redirect('/client/' . $client->id . '/edit')->with('success', 'Helpdesk data entered successfully.');
		}
	}


	// search
	public function search()
	{
		$query = Input::get('q');


		if ($query) {
			$clients = Client::search($query)->get();
		} else {
			$clients = Client::all();
		}

		return view('client.search')->with('clients', $clients);

	}

}
