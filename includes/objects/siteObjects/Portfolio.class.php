<?php 

	class Portfolio extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
			
			$portfolios = array();

			$portfolios[] = array(
			     "id" => "millwork",
			     "title" => "Millwork",
			     "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in pretium neque. Morbi mollis condimentum urna, vitae aliquet dui ornare.",
			     "image-cats" => array(
			         "library" => array(
			             "title" => "Library",
			             "size" => 5
			         ),
			         "home-theater" => array(
			             "title" => "Home Theater",
			             "size" => 5
			         ),
			         "home-office" => array(
			             "title" => "Home Office",
			             "size" => 5
			         ),
			         "wine-rack" => array(
			             "title" => "Wine Rack",
			             "size" => 5
			         ),
			         "bookcase" => array(
			             "title" => "Bookcase",
			             "size" => 5
			         ),
			         "mantel" => array(
			             "title" => "Mantel",
			             "size" => 5
			         ),
			         "billiard-room" => array(
			             "title" => "Billiard Room",
			             "size" => 5
			         ),
			         "others" => array(
			             "title" => "others",
			             "size" => 5
			         )
			     )
			 );
			
			$portfolios[] = array(
			     "id" => "interior-trim",
			     "title" => "Interior Trim",
			     "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in pretium neque. Morbi mollis condimentum urna, vitae aliquet dui ornare.",
			     "image-cats" => array(
			         "case-opening" => array(
			             "title" => "Case Opening",
			             "size" => 71
			         ),
			         "crown" => array(
			             "title" => "Crown",
			             "size" => 30
			         ),
			         "chair-rail" => array(
			             "title" => "Chair Rail",
			             "size" => 34
			         ),
			         "wall" => array(
			             "title" => "Wall",
			             "size" => 71
			         ),
			         "celling" => array(
			             "title" => "Celling",
			             "size" => 39
			         ),
			         "window" => array(
			             "title" => "Window",
			             "size" => 42
			         ),
			         "door" => array(
			             "title" => "Door",
			             "size" => 20
			         )
			     )
			 );
			
			 $portfolios[] = array(
			     "id" => "cabinet",
			     "title" => "Cabinet",
			     "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in pretium neque. Morbi mollis condimentum urna, vitae aliquet dui ornare.",
			     "image-cats" => array(
			         "kitchen" => array(
			             "title" => "Kitchen",
			             "size" => 70
			         ),
			         "wet bar" => array(
			             "title" => "Wet Bar",
			             "size" => 10
			         ),
			         "vanity" => array(
			             "title" => "Vanity",
			             "size" => 3
			         ),
			         "commercial" => array(
			             "title" => "Commercial",
			             "size" => 23
			         )
			     )
			 );
			
			 $portfolios[] = array(
			     "id" => "closet",
			     "title" => "Closet",
			     "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in pretium neque. Morbi mollis condimentum urna, vitae aliquet dui ornare.",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Closet",
			             "size" => 46
			         )
			     )
			 );
			
			$portfolios[] = array(
			     "id" => "column",
			     "title" => "Column",
			     "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in pretium neque. Morbi mollis condimentum urna, vitae aliquet dui ornare.",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Column",
			             "size" => 23
			         )
			     )
			 );
			
			$portfolios[] = array(
			     "id" => "cornish",
			     "title" => "Cornish",
			     "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in pretium neque. Morbi mollis condimentum urna, vitae aliquet dui ornare.",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Cornish",
			             "size" => 12
			         )
			     )
			 );
			
			 $portfolios[] = array(
			     "id" => "handrail",
			     "title" => "Handrail",
			     "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in pretium neque. Morbi mollis condimentum urna, vitae aliquet dui ornare.",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Handrail",
			             "size" => 24
			         )
			     )
			 );
		
			
			
			$vars = LiteFrame::FetchGetVariable();
			if(isset($vars['catId'])){
				$subCats = array();
				$images = array();
				$subCats[] = array(
					"title" => "All", 
					"url" =>  LiteFrame::BuildActionUrl()."&amp;catId=".$vars['catId'],
					"active" => (isset($vars['subCatId']))?false:true
				);
				
				$images = array();
				$foundAllImages = false;
				foreach($portfolios as $key => $portfolio){
					
					if( $portfolio["id"] != $vars['catId'] || $foundAllImages ){ continue; }
					$portfolioId = $portfolio["id"];
					foreach($portfolio['image-cats'] as $subCatKey => $subCat){
						$subCats[] = array(
							"title" => $subCat["title"], 
							"url" =>  LiteFrame::BuildActionUrl()."&amp;catId=".$vars['catId']."&amp;subCatId=".$subCatKey,
							"active" => (isset($vars['subCatId']) && $vars['subCatId'] == $subCatKey )?true:false
						);
						if(  $foundAllImages ){ continue; }
						
						if( $subCatKey == -1){
							$subCatKey = "All";
						}
						if( isset($vars['subCatId']) && $vars['subCatId'] == $subCatKey ){
							for($i=1; $i<=$subCat['size']; $i++){
								if( $i < 10 ){ $index = "0$i"; }
								$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolio["id"]."/$subCatKey"."/pic-".$portfolioId."-".$index.".jpg");
							}
							$foundAllImages = true;
						}
						else if(!isset($vars['subCatId'])){
							for($i=1; $i<=$subCat['size']; $i++){
								if( $i < 10 ){ $index = "0$i"; }
								$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolio["id"]."/$subCatKey"."/pic-".$portfolioId."-".$index.".jpg");
							}
						}
					}
				
				}
			
				$this->results = array("gallery"=>true,"subCats"=> $subCats, "images" => $images);
			
			}else{	
				$cats = array();
				
				foreach($portfolios as $key => $portfolio){
					$counter = 0;
					foreach($portfolio['image-cats'] as $cat){
							$counter+= $cat["size"];
					}
					$cats[] = array(
						"title" => $portfolio["title"],
						"imageUrl" => UrlModule::$IMAGE_CAT_PATH.$portfolio["id"]."/cat-".$portfolio["id"].".jpg",
						"desc" => $portfolio['desc'],
						"url" => LiteFrame::BuildActionUrl()."&amp;catId=".$portfolio["id"],
						"size" => $counter
					);
				
				}
				
				$this->results = array("cats"=>$cats,"gallery"=>false);
			}
			
		}
		
	}


?>