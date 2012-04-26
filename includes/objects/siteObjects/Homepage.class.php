<?php 

	class Homepage extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
		
				$images = array();
				$catsLen = 1;
				$len = 16;
				$portfolioId = "general";
				$subCatkey = null;
				for($i=1; $i<=$len; $i++){
					if( $i < 10 ){ $index = "0$i"; }
					else{ $index = $i; }
					if($catsLen == 1){
						$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolioId."/pic-".$portfolioId."-".$index.".jpg",
										 "galleryUrl"=>LiteFrame::BuildActionUrl("portfolio")."&amp;catId=".$portfolioId);
					}else{
						$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolioId."/$subCatKey"."/pic-".$subCatKey."-".$index.".jpg");
					}
				}
				
				
				
				$catsLen = 1;
				$len = 6;
				$portfolioId = "bar";
				$subCatkey = null;
				for($i=1; $i<=$len; $i++){
					if( $i < 10 ){ $index = "0$i"; }
					else{ $index = $i; }
					if($catsLen == 1){
						$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolioId."/pic-".$portfolioId."-".$index.".jpg",
										 "galleryUrl"=>LiteFrame::BuildActionUrl("portfolio")."&amp;catId=".$portfolioId);
					}else{
						$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolioId."/$subCatKey"."/pic-".$subCatKey."-".$index.".jpg");
					}
				}
				
				
				$catsLen = 1;
				$len = 4;
				$portfolioId = "wine-cellar";
				$subCatkey = null;
				for($i=1; $i<=$len; $i++){
					if( $i < 10 ){ $index = "0$i"; }
					else{ $index = $i; }
					if($catsLen == 1){
						$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolioId."/pic-".$portfolioId."-".$index.".jpg",
										 "galleryUrl"=>LiteFrame::BuildActionUrl("portfolio")."&amp;catId=".$portfolioId);
					}else{
						$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolioId."/$subCatKey"."/pic-".$subCatKey."-".$index.".jpg");
					}
				}
				
				
				
				
				
			
			
				$this->results = array("portfolio"=>$images);
			
		}
	}
?>