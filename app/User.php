<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
	protected $table = "login";
	public $timestamp = false;
	/*const CREATED_AT = "create_time";
	const UPDATED_AT = "update_time";*/
	protected $primaryKey = "id";
}
