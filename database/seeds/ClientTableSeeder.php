<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Client;
use App\Ytd;
use App\Completes;
use App\Survey;
use App\Support;
use App\EmailCampaigns;
use App\EmailSent;
use App\Helpdesk;

class ClientTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker\Factory::create();

		for ($i = 0; $i < 20; $i++) {
			$client = Client::create([
				'client_name'  => $faker->company,
				'package'      => 'starter',
				'influencer'   =>  $faker->name,
				'onboarded'    =>  $faker->boolean 
			]);



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
	}
}