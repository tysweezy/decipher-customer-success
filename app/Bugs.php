<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bugs extends Model {

	/** @var string
     *
     * db table bugs
     */
    protected $table = 'bugs';

    /**
     *
     * @return many-to-many relationship
     */
    public function clients()
    {

    }

}
