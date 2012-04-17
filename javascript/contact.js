$(document).ready(function(){
	
	contact.init();
	
	function map(address,sel){
		var map = $(sel).gMap({
			address: address,
			zoom: 16
		});
		map.getLatLng(address,function( latLng, success, error  ){
		  	map.addMarkers([{
				click: function(){},
				latitude: latLng.lat(),
				longitude: latLng.lng()
		  	 }]);
		});
	}
	map("1808 Old Meadow Rd #1414, McLean VA 22102","#head-map");
	map("4816 Dodson Dr. Annandale, VA 22003","#sale-map");
});




var contact = {
	
	enable: true,
	loadingMsg: $("<span class='status loadingMsg'>Sending message please wait</span>"),
	successMsg: $("<span class='status success'>Your message has been successfully sent</span>"),
	errorMsg: $("<span class='status error'>Message was not sent, Please try Again</span>"),
	$button: null,
	init: function(){
	
		this.$button = $(".contact-form a.send-btn");
		this.events();
		$(':text,textarea').val('');	
		$("select").find("option:first").attr("selected","selected");
	},
		
	events: function(){
		this.$button.click( $.proxy(this,"submit") );
	},
	
	submit: function(event){
		event.preventDefault();
		
		if( !this.enable ){ return }
		var status = true;
		$(".contact-form .required").each(function(){
			if( !status ) {return; }
			if( $.trim( $(this).val() ) === "" ){
				alert("Please enter your " + $.trim($(this).prev().text()));
				status = false;
				return;
			}
			
			if( $(this).attr("id") == "emailAddr" && /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test($(this).val()) === false){
				alert("Please enter a valid email address");
				status = false;
			}
		
		});
		if( !status ) {return; }
		
		var $form = $(event.currentTarget).parents("form");
		MBOX.jsonRPC({
			scope: this, 
			api: 'Contact',
			method: 'contactUs',
			data: { params: $.deparam.querystring($form.serialize()) },
			success: function( data, textStatus, jqXH ){
				if( data.SiteData.Contact_contactUs.success ){
					this.hideLoading();
					this.loadSucecssMsg();
					$form.find(':text,textarea').val('');
					$form.find(':checkbox').attr('checked',false);
				}else{
					this.error();
				}
			},
			error: this.error,
			beforeSend: function(){
				this.disableForm();
				this.showLoading()
			}
		});
	},
	
	error: function(){
		
		this.hideLoading();
		this.loadErrorMsg()		
		
	},
	
	
	disableForm: function(){
		this.$button.attr("disabled",true);
		this.enable = false;
	},
	
	enableForm: function(){
		this.$button.removeAttr("disabled");
		this.enable = true;		
	},
	
	showLoading: function(){
		this.$button.parents("p").prepend( this.loadingMsg.clone() );
	},
	
	hideLoading: function(){
		this.$button.parents("p").find(".loadingMsg").remove();
	},
	
	loadSucecssMsg: function(){
		var $successMsg = this.successMsg.clone();
		$successMsg.hide();
		this.$button.parents("p").prepend( $successMsg );
		$successMsg.fadeIn(500).delay('3000').fadeOut(500,$.proxy(function(){
			$successMsg.remove();
			this.enableForm();
		},this));
	},
	
	loadErrorMsg: function(){
		var $errorMsg = this.errorMsg.clone();
		$errorMsg.hide();
		
		this.$button.parents("p").prepend( $errorMsg );
		$errorMsg.fadeIn(500).delay('3000').fadeOut(500,$.proxy(function(){
			$errorMsg.remove();
			this.enableForm();
		},this));	
		
	}
};