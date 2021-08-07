<?php
class rpcapi {
	public function __construct($ip, $port, $username, $password) {
		$this->ip = $ip;
		$this->port = $port;
		$this->username = $username;
		$this->password = $password;
		$this->args = array();
		$this->args = explode("/", $_GET["route"]);
		$this->call = $this->args[0];
		unset($this->args[0]);
		$this->args = array_values($this->args);
	}
	function call_api($method, $params) {
		$message = json_encode(
			array('jsonrpc' => '2.0', 'id' => 1, 'method' => $method, 'params' => $params)
		);
		$requestHeaders = [
			'Content-type: application/json'
		];

		$ch = curl_init("http://".$this->username.":".$this->password."@".$this->ip.":".$this->port."/");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $requestHeaders);
		
		$response = curl_exec($ch);
		return json_decode($response, true);
		curl_close($ch);
	}
	public function make_call() {
		print_r($this->args);
		$call = $this->call_api($this->call, $this->args);
		return $call;
	}
}
?>
