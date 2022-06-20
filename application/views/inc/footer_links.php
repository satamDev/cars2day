<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/js/popper.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/js/ion.rangeSlider.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.fancybox.min.js"></script>
	<script src="<?=base_url()?>assets/js/slick.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.sumoselect.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?=base_url()?>assets/js/custom.js"></script>
	<script src="<?=base_url()?>assets/js/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/sweetalert2.css">
	</body>
</html>

<script>
	$(document).ready(function(){
		  $(".SlectBox").SumoSelect().sumo.reload();
	});

	$('select.SlectBox').on('sumo:closing', function(sumo) {
	    // Do stuff here
	    // console.log("Drop down closing", sumo.data)
	    var city_name = $("#city_text").text();
	    change_city(city_name);
	    $(".locinfo").removeClass("show")
	});

	$('#city').on('change', function() {
		$("#city_text").html($("#city option:selected").text());		
	});

	function change_city(city){
		console.log(city);
		$.ajax({
			type: "get",
			url: "<?=base_url()?>add_city",
			data:{'city':city},
			cache: false,
			success: function(response){
				// console.log(response)
				window.location.replace('<?=base_url()?>list');
			},
			error: function () {
		        console.log("error");
		    }
		});
	}
	$("#search_car").on("click",function(){
		let search_data = $("#search_c").val();
		if(search_data.length == 0){
			Swal.fire('Try to give any brand name to search cars')
		}else{
			window.location.replace('<?=base_url()?>list?brand='+search_data);
		}
	});	
</script>