<?php

class Sms {
	private $_username = '+16788813539';
	private $_password = '2512368';

	public $number;
	public $message;
	public $send = NULL;

	public function __construct($number = '', $message = ''){  
        $this->number = $number;  
        $this->message = $message;  
    }  

    public function __toString(){
    	return $this->_username;
    }

    public function toJson(){
    	$getFields = create_function('$obj', 'return get_object_vars($obj);');
		echo json_encode( array( 'sms' => $getFields($this) ) );
    }

    public function send($show = false){
		$ch = curl_init();    
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

		$url = $this->getUrl();
		$credentials = $this->getCredentials();

		curl_setopt($ch, CURLOPT_URL, $url); 
		
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT,         10);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,  30);
		curl_setopt($ch, CURLOPT_COOKIEJAR,       'cookies.txt');
		curl_setopt($ch, CURLOPT_COOKIEFILE,      'cookies.txt');
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $credentials);

		$result = curl_exec($ch);
		curl_close($ch);

		if($result == 'true'){
			$this->send = true;
		}else{
			$this->send = false;
		}
		
		if($show){
			$this->toJson();		
		}		
    }

    private function getUrl(){
    	return "https://app.heywire.com/LogIn?ReturnUrl=" . urlencode("/home/SendSms/?phoneNumber=".urlencode($this->number)."&message=".urlencode($this->message)."&timeStamp=1382024423");
    }

    private function getCredentials(){
    	return "UserName=" . $this->_username . "&Password=" . $this->_password . "&RememberMe=false";
    }

    public function setNumber($number){
    	$this->number = $number;
    }

    public function setMessage($message){
    	$this->message = $message;
    }
}