<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ytd extends Model {

    /**
     * @var string
     * Model is represented for the ytd table
     */
	protected $table = 'ytd';

	protected $fillable = ['completes_ytd_used', 'completes_ytd_available', 'support_ytd_used', 
						   'support_ytd_available', 'training_ytd_used', 'training_ytd_available', 'client_id'];

    
    public function client()
    {
    	return $this->hasOne('Client');
    }

}
