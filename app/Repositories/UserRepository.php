<?php 

namespace App\Repositories;

use App\User;

/**
* User Repository
*/
class UserRepository
{
	const USER_CLASS = User::class;
	
	function __construct()
	{
		$this->valid_filterable_fields =['blocked'];
	}

	public function all($request)
	{
		return $this->USER_CLASS::all();
	}

}