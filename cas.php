<?php

class CAS {
	
	private $key = '';

	public function check_key(){
		if( $this->key == '' ) return false;
		else return true;
	}

	public function set_key( $key = '' ){
		$this->key = $key;
	}

	public function translate( $from = '', $to = '', $text = '' ){
		if( $this->check_key() == false ) return ['result'=>false, 'desc'=>'Not set key'];
		if( $from == '' || $to == '' || trim( $text ) == '' ) return ['result'=>false, 'desc'=>'Incomplete query'];
		return $this->query( 'Translation', [ 'from'=>$from, 'to'=>$to, 'text'=> $text ] );
	}

	public function langs(){
		if( $this->check_key() == false ) return ['result'=>false];
		return $this->query( 'GetLangs' );
	}

	public function query( $path = 'v2', $data = false ) {
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_URL => "https://api.cloudapi.stream:8443/" . $path,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => ( ( is_array( $data ) == true ) ? json_encode($data) : "" ),
			CURLOPT_HTTPHEADER => [
				"Content-Type: application/json",
				"X-Key: " . $this->key
			],
		]);
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
			return ['result'=>false];
		} else {
			return json_decode($response,true);
		}
	}
  }


?>







