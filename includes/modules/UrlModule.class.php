<?php



	
	
class UrlModule {
	
	public static $IMAGE_CAT_PATH;
	
	public function __construct(){
		self::$IMAGE_CAT_PATH = LiteFrame::GetImagePath()."portfolio/";		
	}
}
new UrlModule();

?>