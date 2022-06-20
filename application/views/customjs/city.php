<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="<?=base_url()?>assets/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?=base_url()?>assets/css/sweetalert2.css">
<script type="text/javascript">
	$(document).ready(function(){
		$(".loader").show();
		
		<?php if($this->uri->segment(1)=='list'){?>

			<?php if(isset($_GET['type'])){?> fetch_cars('bodyType@<?=$_GET["type"]?>'); clear();
			<?php }elseif(isset($_GET['brand'])){?> fetch_cars('brand@<?=$_GET["brand"]?>'); clear();
			<?php }elseif(isset($_GET['price'])){?> fetch_cars('price@<?=$_GET["price"]?>');
			<?php }else{ ?>
				get_all_cars();
			<?php } ?>

			get_bodytype();
			get_brand();
			get_model();
			get_fueltype();
			get_transmissiontype();
			get_color();
			build_compare_box();

			$(".compare_box").removeClass("d-flex");

		<?php } ?>
		<?php if($this->uri->segment(1)==''){?>
			
		<?php } ?>

		<?php if($this->uri->segment(1)=='store'){?>
			get_car_list_city_wise();
		<?php } ?>

		$('#switch').change(function() {
	        if(this.checked) {
	            $(".compare_box").addClass("d-flex");
	        }else{
	        	// console.log(2);
	        	$(".compare_box").removeClass("d-flex");
	        }      
	    });
	});

	function get_all_cars(page = 0){
		$(".loader").show();
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>welcome/show_car_list",
			cache: false,
			data:{'page':page},
			success: function(response){
		        $(".loader").hide();
		        $("#car-lists").html(response);
		        refresh_car_count();
			},
			error: function () {
		        console.log("error");
		    }
		});
	}	

	function filter_cars(filter_name){
		var remember = document.getElementById(filter_name);
		if (remember.checked) {
			fetch_cars(filter_name);
		} else {
			//when un-checked the filter option
			unfetch_cars(filter_name);
		}
		refresh_car_count()
	}

	function fetch_cars(filter_name) {
		$(".loader").show();
		$("#car-lists").hide();
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>welcome/filter_car",
			data : {'filter_name' : filter_name},
			cache: false,
			success: function(response){
		        $(".loader").hide();
		        $("#car-lists").show();
		        $("#car-lists").html(response);
			},
			error: function () {
		        console.log("error");
		    }
		});
	}

	function unfetch_cars(filter_name) {
		$(".loader").show();
		$("#car-lists").hide();
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>welcome/unfilter_car",
			data : {'filter_name' : filter_name},
			cache: false,
			success: function(response){
		        $(".loader").hide();
		        $("#car-lists").show();
		        $("#car-lists").html(response);
		        // console.log(response);
			},
			error: function () {
		        console.log("error");
		    }
		});
	}

	function clear() {
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>welcome/destroy_filter_session",
			cache: false,
			success: function(response){
		       
			},
			error: function () {
		        console.log("error");
		    }
		});
	}    

	$("#slider").ionRangeSlider({
	    onFinish: function (data) {
	        window.location.replace('<?=base_url()?>list?price='+data.from);
	    },
	});

	function get_bodytype(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_bodytype",
			success: function (response){
				$(".bodytype").html(response);
			}
		})
	}

	function get_brand(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_brand",
			success: function (response){
				$(".brand").html(response);
			}
		})
	}

	function get_model(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_model",
			success: function (response){
				$(".model").html(response);
			}
		})
	}

	function get_fueltype(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_fueltype",
			success: function (response){
				$(".fueltype").html(response);
			}
		})
	}

	function get_transmissiontype(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_transmissiontype",
			success: function (response){
				$(".transmissiontype").html(response);
			}
		})
	}

	function get_color(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_color",
			success: function (response){
				$(".color").html(response);
			}
		})
	}

	$("#Selling").submit(function(e) {
		e.preventDefault();

	    var form = $(this);
	    var actionUrl = form.attr('action');
	    
	    if($("#selling_name").val().length != 0){
	    	if($("#selling_mobile").val().length === 10){
			    $.ajax({
			        type: "POST",
			        url: actionUrl,
			        data: form.serialize(), 
			        success: function(response){
			        	$("#Selling")[0].reset();
			        	Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Your request successfully accepted',
						  showConfirmButton: false,
						  timer: 3000
						});
			        }
			    });
			}else{
				Swal.fire({
					icon: 'error',
					text: 'Mobile Number Must Be 10 Digits'
				})
			}
		}else{
			Swal.fire({
				icon: 'error',
				text: 'Please give a proper name'
			})
		}
	});

	$("#Treading").submit(function(e) {
		e.preventDefault();

	    var form = $(this);
	    var actionUrl = form.attr('action');
	    if($("#treading_name").val().length != 0){
	    	if($("#treading_mobile").val().length === 10){
			    $.ajax({
			        type: "POST",
			        url: actionUrl,
			        data: form.serialize(), 
			        success: function(response){
			        	$("#Treading")[0].reset();
			        	Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Your request successfully accepted',
						  showConfirmButton: false,
						  timer: 3000
						});

			          	console.log(response); 
			        }
			    });
		    }else{
				Swal.fire({
					icon: 'error',
					text: 'Mobile Number Must Be 10 Digits'
				})
			}
		}else{
			Swal.fire({
				icon: 'error',
				text: 'Please give a proper name'
			})
		}
	});
	

	var removeByAttr = function(arr, attr, value){
	    var i = arr.length;
	    while(i--){
	       if( arr[i] 
	           && arr[i].hasOwnProperty(attr) 
	           && (arguments.length > 2 && arr[i][attr] === value ) ){ 

	           arr.splice(i,1);

	       }
	    }
	    return arr;
	}

	var car_to_compare = [];
	function add_compare(id, image){

		if(car_to_compare.length < 6){
			if($(".comparebtn_"+id).is(':checked')){
			    $("#btndot_"+id).addClass("compareactive");		    
				car_to_compare.push({'image':image, 'id':id});
				build_compare_box();
			}else{
			    $("#btndot_"+id).removeClass("compareactive");
			    removeByAttr(car_to_compare, 'id', id); 
			    build_compare_box();		    
			}
		}else{
			Swal.fire('Maximum 5 cars you can compare');
		}

		compare_checkbox();
	}

	function compare_checkbox() {
		if(car_to_compare.length == 0){			
			$('#switch').prop('checked', false); // Unchecks it
			$(".compare_box").removeClass("d-flex");
		}else{
			$('#switch').prop('checked', true);
       		$(".compare_box").addClass("d-flex");
		}
	}

	function remove_top_comp_close_btn(value){
		removeByAttr(car_to_compare, 'id', value);
		$("#btndot_"+value).removeClass("compareactive");
		build_compare_box();

		compare_checkbox();
	}

	function build_compare_box(){
		$(".compare_recent").empty();
		let blank_fileds = 5;
		
		for (var key in car_to_compare) {
			if (car_to_compare.hasOwnProperty(key)) {
				var val = car_to_compare[key];
				$(".compare_recent").append('<div id="com_'+val.id+'" class="compimg mx-1 active" style="background:url('+val.image+'); background-repeat: no-repeat;background-size: cover;background-position: center center;"><button type="button" class="compcls" onclick="remove_top_comp_close_btn(\''+val.id+'\')"><svg width="16" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M0 0h24v24H0z" fill="none"></path><path d="M9.2 7.8L7.8 9.2l2.8 2.8-2.8 2.8 1.4 1.4 2.8-2.8 2.8 2.8 1.4-1.4-2.8-2.8 2.8-2.8-1.4-1.4-2.8 2.8zM4.9 4.9a10 10 0 1014.2 0A10 10 0 004.9 5zm12.8 12.8a8 8 0 110-11.4 8 8 0 010 11.4z"></path></svg></button></div>');							
			}
			if(key == 0) blank_fileds = 4;
			else blank_fileds = blank_fileds - 1;
		}

        for (let i = 0; i < blank_fileds; i++) {        	
			$(".compare_recent").append('<div class="compimg mx-1 a1" style="background-repeat: no-repeat;background-size: cover;background-position: center center;"><button type="button" class="compcls"><svg width="16" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M0 0h24v24H0z" fill="none"></path><path d="M9.2 7.8L7.8 9.2l2.8 2.8-2.8 2.8 1.4 1.4 2.8-2.8 2.8 2.8 1.4-1.4-2.8-2.8 2.8-2.8-1.4-1.4-2.8 2.8zM4.9 4.9a10 10 0 1014.2 0A10 10 0 004.9 5zm12.8 12.8a8 8 0 110-11.4 8 8 0 010 11.4z"></path></svg></button></div>');
		}

		if(blank_fileds === 5)
			$(".go_btn").css("background-color", "gray");
        else
        	$(".go_btn").css("background-color", "red");
	}

	function go_for_compare(){
		if(car_to_compare.length > 1){
			let compare_car_ids = [];
			for (var key in car_to_compare) {
				if (car_to_compare.hasOwnProperty(key)) {
					var val = car_to_compare[key];
					compare_car_ids.push(val.id);					
				}
			}
			window.location.href = '<?=base_url()?>compare_cars?cars='+compare_car_ids;
		}else{
			Swal.fire('Firstly choose cars to compare')
		}
	}

	function add_to_wishlist(id) {
		if($("#Path_53_"+id).hasClass("love_fill_red")){
			$("#Path_53_"+id).removeClass("love_fill_red");
		}else{
			$("#Path_53_"+id).addClass("love_fill_red");
		}
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>add_to_wishlist",
			data:{'id':id},
			success:function(response){				
			}
		});
	}

	function refresh_car_count(){
		// $.ajax({
		// 	type: "GET",
		// 	url: "<?=base_url()?>car_count",
		// 	success:function(response){					
		// 		var data = JSON.parse(response);
		// 		$(".select_matches").text(data.totalElements);
		// 	}
		// });
	}

	function get_car_list_city_wise(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_car_city_wise",
			success:function(response){
				$(".city_wise_cars").html(response);
				$(".city_wise_cars").slick('refresh');
			}
		});
	}

	function show_featuers(car){
		$('#featmodal').modal('show');
		$(".featuers_loader").show();
		$("#basic_specifications").hide();
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>welcome/get_car_featuers",
			cache: false,
			data:{'car':car},
			success: function(response){
		        let data = JSON.parse(response);
		        $("#basic_specifications").show();
		        $(".featuers_loader").hide();
		        $("#modal_vehicleNo").text(data[0].vehicleNo);
				$("#modal_year").text(data[0].year);
				$("#modal_mileage").text(data[0].mileage);
				$("#model_kilometers").text(data[0].kilometers);
				$("#model_city").text(data[0].carAvailableAt);
				$("#model_noofowners").text(data[0].noofowner);
				$("#modal_seat").text(data[0].seat);
				$("#modal_warranty").text(data[0].warranty);
				$("#modal_engine").text(data[0].engine);
				$("#modal_rctextidity").text(data[0].rcvalidity);
				$("#modal_insurancetextidity").text(data[0].insurancevalidity);
				if(data[0].isCertified){
					$("#modal_isCertified").text("YES");
				}else{
					$("#modal_isCertified").text("NO");
				}
				$("#modal_certifiedRefNo").text(data[0].certifiedRefNo);
			},
			error: function () {
		        console.log("error");
		    }
		});
	}

	async function share_car(share_url, class_id){
		const shareData = {		    
		    url: share_url
		}
		// title: 'MDN',
		// text: 'Learn web development on MDN!',

		const btn = document.querySelector('.shbtn_'+class_id);
		//const resultPara = document.querySelector('.result');

		// Share must be triggered by "user activation"
		// btn.addEventListener('click', async () => {
			try {
				await navigator.share(shareData)
			} catch(err) {}
	  	// });
	}
	
</script>