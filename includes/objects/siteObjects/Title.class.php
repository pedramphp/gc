<?php 

	class Title extends SiteObject {

		public function __construct(){
			parent::__construct();
		}


		public function process(){

			$title = "Page Title";
			switch(LiteFrame::getActiveAction()){	
				case "homepage";
					$title = "Custom Home Builder Virginia | New Home Builder Virginia | Luxury Home Builder VA";
					break;
				case "portfolio":
					$title = "Professional Construction Work Gallery | Goal Construction";	
					break;
				case "services":
					$title = "Commercial Construction VA | General Contractor Virginia | Home Remodeling Virginia";	
					break;
				case "strategy":
					$title = "Our Construction Strategies -  Goal Construction";	
					break;		
				case "contact":
					$title = "Contact Goal Construction | Contact Us";	
					break;		
				case "brands":
					$title = "Construction Brands | Goal Construction";	
					break;		
				case "faq":
					$title = "Frequently Asked Construction Questions | Goal Construction";	
					break;		
				case "about":
					$title = "About Goal Construction | About Us";	
					break;					

			}
			$this->results = $title;

		}

	}


?>
