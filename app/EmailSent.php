<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailSent extends Model {

	protected $table = 'emailsent';

	protected $fillable = ['apr_14', 'may_14', 'jun_14', 'jul_14', 'aug_14', 'sep_14', 'oct_14', 'nov_14', 'dec_14', 'jan_15', 'feb_15', 'client_id'];

}
