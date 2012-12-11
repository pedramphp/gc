<?php 

	class Meta extends SiteObject {

		public function __construct(){
			parent::__construct();
		}


		public function process(){
			$description = "Home builder Virginia - Goal construction is a leading custom new home builder in Virginia. We've been building custom homes in Virginia for over 15 years. Build your dream home with Goal Construction!";

			$keyword = "custom home builder virginia, home builder virginia, new home builder virginia,  luxury home builder virginia,  home builder va,  custom home builder va, new home builder va";
			switch(LiteFrame::getActiveAction()){	
				case "services":
					$description = "General contactor of Goal Construction Virginia provides commercial construction, home remodeling &  government construction services in VA. Contact our general contactor Virginia for your construction needs at 703-568-5888.";
					$keyword = "commercial construction va, home remodeling virginia, general contractor virginia,  residentail construction va,  home remodeling va";
					break;
				case "portfolio":
					$keyword = "wine cellar design, home theater design, kitchen remodeling Virginia, fire place design, deck design and restoration, bathroom design, millwork design, interior trim design, custom closet design, Cornish design, custom handrail design, bar remodeling virginia";
					break;
				case "strategy":
					$description = "Goal Construction follows step-by-step process to build you dream home. It includes design, finance, construction phases.";
					$keyword = "phases of construction, Construction Strategies, Construction Strategies of Goal construction, construction financing phases";
					break;
				case "brands":
					$keyword = "pocket door construction, frameless cabinet construction, door construction details, frameless kitchen cabinet construction, cabinet door construction";
					break;
				case "about":
					$description = "Goal Construction has become a well-trusted name in constucrion industry in Virginia. Contact us if you want to build your new home!";
					$keyword = "About Goal Construction, Goal Construction Virginia, Goal Construction va";
					break;
				case "contact":
					$description = "Contact Goal Construction if you want to build your luxury new home at 703-568-5888. For Free Consultation, Call Us Now.";
					$keyword = "Contact Goal Construction,  Contact Goal Construction va,  Contact Goal Construction virginia, commercial construction company mclean virginia, residential construction company mclean virginia, construction management companies mclean virginia";
					break;
				case "faq":
					$keyword = "house construction, construction home, new home builders, custom build your own home, remodeling a home, brand new homes construction, northern virginia custom homebuilders ,log home builders, general contractor, luxury home builders, new custom home builder, new construction questions";
					break;

			}
			$this->results["keyword"] = $keyword;
			$this->results["description"] = $description;

		}

	}


?>
