<?php 

	class MainNav extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
	
			$nav = array(
				"homepage" => array( "value" => "Home" ),
				"services" => array( "value" => "Services" ),
				"portfolio" => array( "value" => "Portfolio" ),
				"strategy" => array( "value" => "Our Strategy" ),
				"brands" => array( "value" => "Brands" ),
				"about" => array( "value" => "About Us" ),
				"contact" => array( "value" => "Contact Us" ),
				"faq" => array( "value" => "FAQ" )
			);		

			foreach($nav as $action => $arr){
			
				if($action == "homepage"){
					$nav[$action]["url"] = LiteFrame::GetApplicationPath();
				}else{
					$nav[$action]["url"] = LiteFrame::BuildActionUrl($action);
				}
				
				$nav[$action]["active"] = (LiteFrame::getActiveAction() == $action)?true:false;
				if( LiteFrame::getActiveAction() == "portfolio-gallery" ){
					$nav["portfolio"]["active"] = true;
				}
			}
			$this->results = $nav;
		}
	}

?>