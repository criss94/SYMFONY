<?php

class GoogleAuth
{

	protected $client;

	function __construct(Google_Client $googleClient = null){
		$this->client = $googleClient;
		if ($this->client) {
			$this->client->setClientId('678858883681-suick7cjrh6461ukoa05f779f8nakthp.apps.googleusercontent.com');
			$this->client->setClientSecret('qvVAaBwIcDylhrJH5kiJLecJ');
			$this->client->setRedirectUri('http://localhost');
			$this->client->setScopes("email");
		}
	}

	/*public function isLoggedIn(){
		return isset($_SESSION['access_token']);
	}*/

	public function getAuthUrl(){
		return $this->client->createAuthUrl();
	}

	public function setToken($token){
		$_SESSION['access_token'] = $token;
		$this->client->setAccessToken($token);
	}

	public function checkRedirectCode(){
		if(isset($_GET['code'])){
			$this->client->authenticate($_GET['code']);
			$this->setToken($this->client->getAccessToken());
			//$data_user = $this->getPayload();
			//echo $data_user['payload']['email'];
			return true;
		}
		return false;
	}

	public function getPayload(){
		$data_user = $this->client->verifyIdToken()->getAttributes();
		return $data_user;
	}

}