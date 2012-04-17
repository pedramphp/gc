<?php


/**
 *
 * Description
 *
 *
 * @name			PACKAGE NAME
 * @see				PACKAGE REFFER URL
 * @package			PACKAGE
 * @subpackage		SUBPACKAGE
 * @author			Mahdi Pedramrazi
 * @category		backend
 * @access			Mexo Programming Team
 * @version			1.0
 * @since			  Dec 21, 2010
 * @copyright		Mexo LLC
 *
 * @example
 * <code>
 * <?php
 *
 * ?>
 * </code>
 *
 */


class SiteSettings {
	
	public static  $tools;
	public function __construct(){}
	
	public function setTemplate(){
		
		//LiteFrame::SetTemplateFolderName("default");
		//LiteFrame::SetTemplateColorName("dark");
		self::$tools= new Tools();
		
	}/* </ SetTemplate > */
	
	public function setTemplateColor(){
		
		//LiteFrame::IncludeStyle('reset.css','rules.css','default.css','footer.css');
		
	} /* </ SetTemplateColor > */
	
	public function setCoreJavascript(){
		LiteFrame::IncludeJavascript('default.js');
		
		if( LiteFrame::getActiveAction() === 'portfolio' ){
			LiteFrame::IncludeLibraryJavascript('fancybox/jquery.mousewheel.pack.js');
			LiteFrame::IncludeLibraryJavascript('fancybox/jquery.fancybox.pack.js');
			LiteFrame::IncludeLibraryJavascript('fancybox/helpers/jquery.fancybox-thumbs.js');
			LiteFrame::IncludeLibraryStyle('fancybox/jquery.fancybox.css');
			LiteFrame::IncludeLibraryStyle('fancybox/helpers/jquery.fancybox-thumbs.css');
		}		
		
		
		if( LiteFrame::getActiveAction() === 'contact' ){
			
			LiteFrame::IncludeLibraryJavascript(array('plugins/jquery.ba-bbq.min.js',));
			LiteFrame::ExternalJavascript('http://maps.google.com/maps/api/js?sensor=false');
			LiteFrame::IncludeLibraryJavascript('plugins/jquery.googlemap.js');
			
		}

		
		/*LiteFrame::IncludeLibraryJavascript('plugins/jquery.gotop.js');
		LiteFrame::IncludeJavascript('default.js');
		if( SiteHelper::GetAction() === 'tools' ){
			LiteFrame::ExternalJavascript('http://connect.facebook.net/en_US/all.js#appId=133202353404448&&amp;xfbml=1');
		}else{
			LiteFrame::ExternalJavascript('http://connect.facebook.net/en_US/all.js#xfbml=1');
		}
		*/
		
	} /* </ SetCoreJavascript > */
	
} /* </ SiteSettings > */
	
?>