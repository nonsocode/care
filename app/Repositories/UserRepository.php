<?php 

namespace App\Repositories;

use App\DriverRequest;
use App\User;

/**
* User Repository
*/
class UserRepository
{
	const USER_CLASS = User::class;
	
	public function all($request)
	{
		return $this->USER_CLASS::all();
	}

	public static function buildUserFromDriverRequest(DriverRequest $dr){
		$user = new User;
		$names =  preg_split("/\s/",$dr->name);
		$user->first_name = count($names) > 2 ? join(" ",array_slice($names,0,count($names))) : $names[0];
		$user->last_name= $names[1];
		$user->username = static::generateUsername($dr->name);
		$user->address = $dr->address;
		$user->phone = $dr->phone;
		$user->email = $dr->email;
		$user->save();
		return $user;
	}

	public static function generateUsername($username = null, $count = 0)
	{
		$username= preg_replace("/\s/", "", $username);
		if ($count >= 20 || $username == null) {
			return str_random(10);
		}
		if (User::whereUsername($username)->count()) {
			$count++;
			return static::generateUsername($username.$count, $count);
		}
		return $username;
	}

}