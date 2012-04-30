<?php 

	class Meta extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
			$description = "We build your dream house,we work closely with clients, architects, and subcontractors toward the common goal of successful project delivery";
			
			$keyword = "house construction,construction home,new home builders,custom build your own home,remodeling a home,brand new homes construction,northern virginia custom homeuilders,log home builders,general contactor,luxury home builders,new custome home builder";
			switch(LiteFrame::getActiveAction()){	
				case "services":
					$keyword = "additions to homes cost,home remodling websites,house remodeling plans,home repair contractor,house remodel plans,remodeling architects,remodeling designers,ideas for home additions,home renovation,custom home construction";
					break;
				case "portfolio":
					$keyword = "professional portfolio,residential construction portfolio,custom home building portfolio,brand new homes portfolio";
					break;
				case "strategy":
					$keyword = "home construction financing,home lenders, new construction financing,renovation loans,house plans,building loans,residential construction financing";
					break;
				case "brands":
					$keyword = "pocket door construction,frameless cabinet construction, door construction details, frameless kitchen cabinet,construction,cabinet door construction";
					break;
				case "about":
					$keyword = "home builder,new home builders,luxury home building,build your own home,design your own home,custom luxury home builders,custom home plan,custom build homes,new home builders,home construction";
					break;
						
			}
			$this->results["keyword"] = $keyword;
			$this->results["description"] = $description;
			
		}
		
	}


?>
