<?php 

namespace App\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Multitext{
	protected $text, $username, $password, $recepients = [], $client, $sender;
	/**
	 * Class Constructor
	 */
	public function __construct($message = null)
	{
		$this->username = env('MULTITEXTER_USERNAME');
		$this->password = env('MULTITEXTER_PASSWORD');
		if ($message) {
			$this->text($message);
		};
		$this->client = new Client([
			'base_uri' => 'http://www.MultiTexter.com/tools/geturl/',
			"headers" =>[
				'User-Agent' => "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Safari/537.36 OPR/47.0.2631.39"
			]
		]);
	}

	public function recepients($number)
	{
		$numbers = func_get_args();
		if (count($numbers)) {
			return $this->setMultiexterRecepients($numbers);
		}
		return $this->recepients;
	}

	protected function setMultiexterRecepients($numbers)
	{
		foreach($numbers as $number){
			$this->recepients[] = $this->format($number);
		}
		return $this;
	}

	public function text($text = null)
	{
		return $text ? $this->setText($text) : $this->text;
	}

	protected function format($number)
	{
		$number = (string) $number;
		$number = trim($number);
		$number = preg_replace("/\s|\+|-/","",$number);
		return $number;
	}

	protected function setText($text)
	{
		$this->text = trim($text);
		return $this;
	}

	public function send()
	{
		try {
			$response = $this->client->get('Sms.php', [
				"query"	=> [
					"recipients" => join(',' , $this->recepients),
					"sender" => $this->sender ? $this->sender : config('app.name'), 
					"username" => $this->username,
					"password" => $this->password,
					"message" => $this->text,
				]
			]);
		} catch (ClientException $e) {
			$this->httpError = $e;
			return false;
		}

		return $response->getBody() == "100" ? true : false;
	}
} 