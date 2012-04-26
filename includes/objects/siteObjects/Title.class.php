<?php 

	class Title extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
			
			$title = "Page Title";
			switch(LiteFrame::getActiveAction()){	
				case "homepage";
					$title = "Residential Commercial Governmental Construction | Goal Construction";
					break;
				case "portfolio":
					$title = "Professional Construction Work Gallery | Goal Construction";	
					break;
				case "services":
					$title = "Construction Services | Goal Construction";	
					break;
				case "strategy":
					$title = "Construction Strategies | Goal Construction";	
					break;		
				case "contact":
					$title = "Free Consultation, Call Us Now | Goal Construction";	
					break;		
				case "brands":
					$title = "Construction Brands | Goal Construction";	
					break;		
				case "faq":
					$title = "Frequently Asked Construction Questions | Goal Construction";	
					break;		
				case "about":
					$title = "Who We Are, How We Do It, What We Believe In | Goal Construction";	
					break;					
								
			}
			$this->results = $title;
			
		}
		
	}


?>