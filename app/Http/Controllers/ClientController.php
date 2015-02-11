<?php namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests;
use App\Http\Requests\CreateClientPostRequest;
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
	    //$request = \Request::all();

        Client::create($request->all());

        return redirect('/');
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

        return view('client.single')->with('client', $client);
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
		//
	}

}
