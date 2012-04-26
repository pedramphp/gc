<?php 

	class Portfolio extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
			
			$portfolios = array();
			
			$portfolios[] = array(
			     "id" => "general",
			     "title" => "General",
			     "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in pretium neque. Morbi mollis condimentum urna, vitae aliquet dui ornare.",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "General",
			             "size" => 16
			         )
			     )
			 );

			$portfolios[] = array(
			     "id" => "bar",
			     "title" => "Bar",
			     "desc" => "Click here to browse and experience the most magnificent Bar photo gallery built and developed by Goal Construction.",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Bar",
			             "size" => 19
			         )
			     )
			 );
			 
			 $portfolios[] = array(
			      "id" => "wine-cellar",
			      "title" => "Wine Cellar",
			      "desc" => "Click here to browse and experience the most magnificent Wine Cellar photo gallery built and developed by Goal Construction.",
			      "image-cats" => array(
			          "-1" => array(
			              "title" => "Wine Cellar",
			              "size" => 10
			          )
			      )
			  );
			  
			  
			  $portfolios[] = array(
			      "id" => "home-theater",
			      "title" => "Home Theater",
			      "desc" => "Click here to browse and experience the most magnificent Home Theater photo gallery built and developed by Goal Construction.",
			      "image-cats" => array(
			          "-1" => array(
			              "title" => "Home Theater",
			              "size" => 30
			          )
			      )
			  );
			  
			  $portfolios[] = array(
			      "id" => "kitchen",
			      "title" => "Kitchen",
			      "desc" => "Click here to browse and experience the most magnificent Home Theater photo gallery built and developed by Goal Construction.",
			      "image-cats" => array(
			          "-1" => array(
			              "title" => "Kitchen",
			              "size" => 15
			          )
			      )
			  );
			  
			  $portfolios[] = array(
  			     "id" => "fireplace",
  			     "title" => "Fire Place",
  			     "desc" => "Click here to browse and experience the most magnificent Fire Place photo gallery built and developed by Goal Construction.",
  			     "image-cats" => array(
  			         "-1" => array(
  			             "title" => "Fire Place",
  			             "size" => 17
  			         )
  			     )
			  );
			  			
			  
			  			
  			$portfolios[] = array(
  			     "id" => "deck",
  			     "title" => "Deck",
  			     "desc" => "Click here to browse and experience the most magnificent Dock photo gallery built and developed by Goal Construction.",
  			     "image-cats" => array(
  			         "-1" => array(
  			             "title" => "Deck",
  			             "size" => 18
  			         )
  			     )
  			 );
  			
  			$portfolios[] = array(
  			     "id" => "bathroom",
  			     "title" => "Bathroom",
  			     "desc" => "Click here to browse and experience the most magnificent Bathroom photo gallery built and developed by Goal Construction.",
  			     "image-cats" => array(
  			         "-1" => array(
  			             "title" => "Bathroom",
  			             "size" => 14
  			         )
  			     )
  			 );
			  
			  
			$portfolios[] = array(
			     "id" => "millwork",
			     "title" => "Millwork",
			     "desc" => "Click here to browse and experience the most magnificent Millword photo gallery built and developed by Goal Construction.",
			     "image-cats" => array(
			         "library" => array(
			             "title" => "Library",
			             "size" => 17
			         ),
			         "home-office" => array(
			             "title" => "Home Office",
			             "size" => 14
			         ),
			         "wine-rack" => array(
			             "title" => "Wine Rack",
			             "size" => 31
			         ),
			         "book-case" => array(
			             "title" => "Bookcase",
			             "size" => 51
			         ),
			         "mantel" => array(
			             "title" => "Mantel",
			             "size" => 33
			         ),
			         "billiard-room" => array(
			             "title" => "Billiard Room",
			             "size" => 6
			         ),
			         "others" => array(
			             "title" => "Others",
			             "size" => 11
			         )
			     )
			 );
			
			$portfolios[] = array(
			     "id" => "interior-trim",
			     "title" => "Interior Trim",
			     "desc" => "Click here to browse and experience the most magnificent Interior Trim photo gallery built and developed by Goal Construction.",
			     "image-cats" => array(
			         "case-opening" => array(
			             "title" => "Case Opening",
			             "size" => 72
			         ),
			         "crown" => array(
			             "title" => "Crown",
			             "size" => 31
			         ),
			         "chair-rail" => array(
			             "title" => "Chair Rail",
			             "size" => 30
			         ),
			         "wall" => array(
			             "title" => "Wall",
			             "size" => 70
			         ),
			         "ceiling" => array(
			             "title" => "Ceiling",
			             "size" => 40
			         ),
			         "window" => array(
			             "title" => "Window",
			             "size" => 41
			         ),
			         "door" => array(
			             "title" => "Door",
			             "size" => 20
			         )
			     )
			 );
			/*
			 $portfolios[] = array(
			     "id" => "cabinet",
			     "title" => "Cabinet",
			     "desc" =>  "Click here to browse and experience the most magnificent Cabinet photo gallery built and developed by Goal Construction.",
			     "image-cats" => array(
			         "kitchen" => array(
			             "title" => "Kitchen",
			             "size" => 74
			         ),
			         "wet-bar" => array(
			             "title" => "Wet Bar",
			             "size" => 11
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
			*/
			 $portfolios[] = array(
			     "id" => "closet",
			     "title" => "Closet",
			     "desc" =>  "Click here to browse and experience the most magnificent Closet photo gallery built and developed by Goal Construction.",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Closet",
			             "size" => 45
			         )
			     )
			 );
			
			$portfolios[] = array(
			     "id" => "column",
			     "title" => "Column",
			     "desc" =>  "Click here to browse and experience the most magnificent Column photo gallery built and developed by Goal Construction.",
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
			     "desc" =>  "Click here to browse and experience the most magnificent Cornish photo gallery built and developed by Goal Construction.",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Cornish",
			             "size" => 13
			         )
			     )
			 );
			
			 $portfolios[] = array(
			     "id" => "handrail",
			     "title" => "Handrail",
			     "desc" =>  "Click here to browse and experience the most magnificent Handrail photo gallery built and developed by Goal Construction.",
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
				$catActive = true; 
				foreach($portfolios as $key => $portfolio){
					
					if( $portfolio["id"] != $vars['catId'] ){ continue; }
					$catTitle =  $portfolio["title"];
					$portfolioId = $portfolio["id"];
					$catsLen = count($portfolio['image-cats']);
					foreach($portfolio['image-cats'] as $subCatKey => $subCat){
						$subcatQuery = ($subCatKey != -1) ? "&amp;subCatId=".$subCatKey : "";
						$subCats[] = array(
							"title" => $subCat["title"], 
							"url" =>  LiteFrame::BuildActionUrl()."&amp;catId=".$vars['catId'].$subcatQuery,
							"active" => (isset($vars['subCatId']) && $vars['subCatId'] == $subCatKey )?true:false
						);
						if(  $foundAllImages ){ continue; }
						
						
						if( isset($vars['subCatId']) && $vars['subCatId'] == $subCatKey ){
							$subCatTitle = $subCat["title"];
							$catActive = false; 
							for($i=1; $i<=$subCat['size']; $i++){
								if( $i < 10 ){ $index = "0$i"; }
								else{ $index = $i; }
								$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolio["id"]."/$subCatKey"."/pic-".$subCatKey."-".$index.".jpg");
							}
							$foundAllImages = true;
						}
						else if(!isset($vars['subCatId'])){
							for($i=1; $i<=$subCat['size']; $i++){
								if( $i < 10 ){ $index = "0$i"; }
								else{ $index = $i; }
								if($catsLen == 1){
									$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolio["id"]."/pic-".$portfolio["id"]."-".$index.".jpg");
									if($i == 1){ 
										array_shift($subCats);
										$subCats[0]["active"] = true;
									}
									
								}else{
									$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolio["id"]."/$subCatKey"."/pic-".$subCatKey."-".$index.".jpg");
								}
							}
						}
					}
				
				}
				
				
				
				$pagesize = 9;
				$pageId = 1;
				if(isset($vars['pageId'])){
					$pageId = $vars['pageId'];				
				}
				$subcatQuery = "";
				if(isset($vars['subCatId'])){
					$subcatQuery = ($vars['subCatId'] != -1) ? "&amp;subCatId=".$vars['subCatId'] : "";
				}
				$currentUrl = LiteFrame::BuildActionUrl()."&amp;catId=".$vars['catId'].$subcatQuery;
				
				$start = $pagesize * ($pageId-1);
				$total = ceil(count($images) / $pagesize);
				$images = array_slice($images, $start, $pagesize);
				
				
				$breadcrumb = array(
					array("title"=>"Home","active"=>true,"url"=>LiteFrame::GetApplicationPath()),
					array("title"=>"Portfolio","active"=>true,"url"=>LiteFrame::BuildActionUrl("portfolio"))					
				);
				
				
				$breadcrumb[] = array("title"=> $catTitle, "active"=>!$catActive, "url"=>LiteFrame::BuildActionUrl()."&amp;catId=".$vars['catId']);
				
				if(!$catActive){
					$breadcrumb[] = array("title"=> $subCatTitle, "active"=>$catActive);
				}
				$this->results = array("gallery"=>true,"subCats"=> $subCats, "images" => $images, "pageId"=>$pageId, "total"=> $total,"paginationUrl"=>$currentUrl,"breadcrumb"=>$breadcrumb);
			
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
				
				
				
				$pagesize = 6;
				$pageId = 1;
				if(isset($vars['pageId'])){
					$pageId = $vars['pageId'];				
				}
				$start = $pagesize * ($pageId-1);
				$total = ceil(count($cats) / $pagesize);
				$cats = array_slice($cats, $start, $pagesize);
				
				
				$this->results = array("cats"=>$cats, "gallery"=>false, "pageId"=>$pageId, "total"=> $total,"paginationUrl"=>LiteFrame::BuildActionUrl());
			}
			
		}
		
	}


?>