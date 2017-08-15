<?php 

if (!function_exists("appenv")) {
	function appenv($env)
	{
		$env = (array) $env;
		$res = false;
		foreach ($env as $e) {
			$res = $res || (env("APP_ENV") == $e);
		}
		return $res;
	}
}