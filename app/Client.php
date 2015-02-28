<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {


	protected $table = 'clients';

    protected $fillable = ['client_name', 'package', 'influencer', 'contract_value', 'onboarded'];


    public function scopeSearch($query, $search)
    {	
    	return $query->where('client_name', 'LIKE', "%$search%"); 
    }

    public function ytd()
    {
    	return $this->belongsTo('Ytd');
    }
}
