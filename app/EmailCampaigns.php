<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailCampaigns extends Model {

	protected $table = 'emailcampaigns';

	protected $fillable = ['apr_14', 'may_14', 'jun_14', 'jul_14', 'aug_14', 'sep_14', 'oct_14', 'nov_14', 'dec_14', 'jan_15', 'feb_15', 'client_id'];

}
