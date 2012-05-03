<?php 

class ContactUsPage {
	
	private $fullName;
	private $emailAddress;
	private $phoneNumber;
	private $message;
	private $topic;
	private $hear;
	

	
	private static $emailTemplate;
	private static $userEmailTemplate;
	private static $emailTitle = 'The Goal Constructions Website';
	private static $to = 'info@goalconstructioncorp.com,masoud@goalconstructioncorp.com,bobby@goalconstructioncorp.com';
	private static $cc = 'pedramphp@gmail.com';
	private static $subject = "New Message: The Goal Constructions Website Contact Us Form";
	private static $emailLogo;
	private static $bgDate;
	private static $bgMessage;
	private static $divider;
	
	private $request;
	private $services = array();
	
	private static $empty = "(Empty)";
	
	public function __construct( $request ){
	
		$this->request = $request;
	
		self::$emailTemplate = LiteFrame::GetApplicationPath()."email/contact.html";
		self::$userEmailTemplate = LiteFrame::GetApplicationPath().'email/contactUser.html';
		self::$emailLogo = LiteFrame::GetImagePath()."email/logo-goalconstruction.png";
		self::$bgDate = LiteFrame::GetImagePath()."email/bg-date.png";
		self::$bgMessage = LiteFrame::GetImagePath()."email/bg-message.png";
		self::$divider = LiteFrame::GetImagePath()."email/divider.png";
		
		
		foreach( $request as $key => $value ){
			$request[$key] = htmlspecialchars(stripslashes(ucfirst( trim( $value ))));
			if(empty($request[$key]) && $key != 'emailAddr'){
				$request[$key] = self::$empty; 
			}
		}
		$this->fullName =		$request['fullName'];
		$this->emailAddress =	$request['emailAddr'];
		$this->phone =			$request['phoneNumber'];
		$this->message =		$request['msg'];
		$this->topic =          $request['topic'];
		$this->hear = 			$request['whereHear'];
	}

	public function isValid(){
		return filter_var($this->emailAddress, FILTER_VALIDATE_EMAIL) && !empty($this->fullName);
	}
	
	public function submit(){
		
		$services = (empty($this->services)) ? self::$empty : $this->services;
		
		if($services != self::$empty ){		
			$services = implode("\n",$services);
		}
		
		$message = file_get_contents(self::$emailTemplate);
		
		$arrayTplVars = array('{emailLogo}','{fullName}','{emailAddress}','{phone}','{message}','{bgDate}','{divider}','{hear}','{topic}','{bgMessage}','{date}');
		$arrayTplData = array(	self::$emailLogo,
								$this->fullName,
								$this->emailAddress,
								$this->phone,
								$this->message,
								self::$bgDate,
								self::$divider,
								$this->hear,
								$this->topic,
								self::$bgMessage,
								date("M jS, Y H:i A"));
								
		$message = str_replace($arrayTplVars, $arrayTplData, $message);
		
		
		
		$headers = 'From: '.self::$emailTitle.' <'.$this->emailAddress.'> ' . "\r\n";
	//	$headers .- 'CC:' . self::$cc . "\r\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		
		$userMessage = file_get_contents(self::$userEmailTemplate);
		$arrayTplVars = array('{emailLogo}','{fullName}','{message}','{bgDate}','{divider}','{date}');
		$arrayTplData = array(	self::$emailLogo,
								$this->fullName,
								$this->message,
								self::$bgDate,
								self::$divider,
								date("M jS, Y H:i A"));
								
		$userMessage = str_replace($arrayTplVars, $arrayTplData, $userMessage);

		$headersUser = 'From: '.self::$emailTitle.' <'.self::$to.'>'. "\r\n";
		$headersUser .= 'MIME-Version: 1.0' . "\r\n";
		$headersUser .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		if( mail( self::$to, self::$subject, $message, $headers ) &&
			mail( $this->emailAddress, self::$subject, $userMessage, $headersUser )){
			return true;
		}else{
			return false;
		}
		
	}
}
?>
