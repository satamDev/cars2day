<script type="text/javascript">
	$(document).ready(function(){	
	
		<?php if($this->session->has_userdata('recently_viewed')){	?>
			$('body').addClass('hdrwhite');	//when recently viewed section have data then it works
			get_recently_viewed_cars();
			get_first_ten_cars();
			get_wishlisted_cars();

			    $(window).scroll(function () {
					if ($(this).scrollTop() > 20 ) {
						$('header.header').addClass('fixed');
						$('body').removeClass('hdrwhite');
					} else {
						$('header.header').removeClass('fixed');
						$('body').addClass('hdrwhite');
					}
				});
		<?php }?>


	});
	function get_recently_viewed_cars(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_recently_viewed",
			success: function (response){				
				let data = JSON.parse(response);
				$("#recently_viewed").empty();
				$(".recently_viewed_loader").hide();
				$.each(data, function(key, val){
					$("#recently_viewed").append('<div class="productslideinr">'+
                        '<div class="prodthmb">'+
                            '<div class="prodthmbimgwrp">'+
                                '<a href="<?=base_url()?>'+'details/'+val.id+'" class="prodthmbimg d-block">'+
                                    '<img src="'+ val.image +'" alt="" class="w-100">'+
                                '</a>'+
                            '</div>'+
                            '<div class="prodcaption">'+
                                '<a href="<?=base_url()?>'+'details/'+val.id+'"><h3>'+val.title+'</h3></a>'+
                                '<div class="prodcat">'+val.fuelType+' |  '+val.color+'</div>'+
                                '<div class="prodthmbprc">&#8377; '+val.price+'</div>'+
                                '<small class="shipinfo d-block">Free Shipping from Car2Day</small>'+
                            '</div>'+
                        '</div> '+
                    '</div>');
				});
				$(".slick-slider").slick('refresh');	
			}
		});

		// WISHLIST BUTTON DESIGN BELOW

		// '<a class="wishbtn" href="javascript:void(0)">'+
	 //        '<svg height="26" width="26" fill="#e74141" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 485.3 485.3" style="enable-background:new 0 0 485.3 485.3;" xml:space="preserve">'+
	 //            '<path d="M349.6,28.95c-36.3,0-70.5,14.2-96.2,39.9l-10.6,10.6L232,68.65c-25.7-25.7-59.9-39.9-96.2-39.9c-36.2,0-70.3,14.1-96,39.8S0,128.35,0,164.65s14.2,70.4,39.9,96.1l190.5,190.5l0.4,0.4c3.3,3.3,7.7,4.9,12,4.9c4.4,0,8.8-1.7,12.1-5l190.5-190.5c25.7-25.7,39.9-59.8,39.9-96.1s-14.1-70.5-39.8-96.1C419.9,43.05,385.8,28.95,349.6,28.95zM421.2,236.75l-178.3,178.4L64.2,236.45c-19.2-19.2-29.8-44.7-29.9-71.9c0-27.1,10.5-52.6,29.7-71.8c19.2-19.1,44.7-29.7,71.7-29.7c27.2,0,52.7,10.6,72,29.9l22.9,22.9c6.4,6.4,17.8,6.4,24.3,0l22.8-22.8c19.2-19.2,44.8-29.8,71.9-29.8s52.6,10.6,71.8,29.8c19.2,19.2,29.8,44.7,29.7,71.9C451.1,192.05,440.5,217.55,421.2,236.75z"/>'+
	 //        '</svg>'+
	 //    '</a>'+
	}

	function get_first_ten_cars(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_first_ten_cars",
			cache: false,
			success: function(response){
		        // console.log(response);
		        let data = JSON.parse(response);
		        $("#first_ten_recomandations").empty();
				$(".first_ten_recomandations_loader").hide();
		        $.each(data, function(key,val){
		        	if(typeof val.id !== 'undefined'){
		        		$("#first_ten_recomandations").append('<div class="productslideinr">'+
	                        '<div class="prodthmb">'+
	                            '<div class="prodthmbimgwrp">'+
	                                '<a href="<?=base_url()?>'+'details/'+val.id+'" class="prodthmbimg d-block">'+
	                                    '<img src="'+ val.image +'" alt="" class="w-100">'+
	                                '</a>'+
	                            '</div>'+
	                            '<div class="prodcaption">'+
	                                '<a href="<?=base_url()?>'+'details/'+val.id+'"><h3>'+val.title+'</h3></a>'+
	                                '<div class="prodcat">'+val.fuelType+' |  '+val.color+'</div>'+
	                                '<div class="prodthmbprc">&#8377; '+val.price+'</div>'+
	                                '<small class="shipinfo d-block">Free Shipping from Car2Day</small>'+
	                            '</div>'+
	                        '</div> '+
	                    '</div>');
		        	}		        	
		        });
			},
			error: function () {
		        console.log("error");
		    }
		});
	}

	function get_wishlisted_cars(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_wishlisted_cars",
			success: function (response){				
				let data = JSON.parse(response);
				$("#wishlisted_cars").empty();
				$(".wishlist_loader").hide();
				$.each(data, function(key, val){
					$("#wishlisted_cars").append('<div class="productslideinr">'+
                        '<div class="prodthmb">'+
                            '<div class="prodthmbimgwrp">'+
                                '<a href="<?=base_url()?>'+'details/'+val.id+'" class="prodthmbimg d-block">'+
                                    '<img src="'+ val.image +'" alt="" class="w-100">'+
                                '</a>'+
                            '</div>'+
                            '<div class="prodcaption">'+
                                '<a href="<?=base_url()?>'+'details/'+val.id+'"><h3>'+val.title+'</h3></a>'+
                                '<div class="prodcat">'+val.fuelType+' |  '+val.color+'</div>'+
                                '<div class="prodthmbprc">&#8377; '+val.price+'</div>'+
                                '<small class="shipinfo d-block">Free Shipping from Car2Day</small>'+
                            '</div>'+
                        '</div> '+
                    '</div>');
				});
				$(".slick-slider").slick('refresh');	
			}
		});
	}


</script>