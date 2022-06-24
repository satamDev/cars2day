<script type="text/javascript">
	$(document).ready(function(){
		var car_id = <?=$this->uri->segment(2)?>;
		fetch_car_images(car_id);

		$("#book_test_drive").submit(function(e) {
			e.preventDefault();

		    var form = $(this);
		    var actionUrl = form.attr('action');
		    if($("#book_test_drive_name").val().length != 0){
		    	if($("#book_test_drive_mobile").val().length === 10){
			    $.ajax({
			        type: "POST",
			        url: actionUrl,
			        data: form.serialize(), 
			        success: function(response){
			        	$("#book_test_drive")[0].reset();
			        	let res = JSON.parse(response);

			        	Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: res,
						  showConfirmButton: false,
						  timer: 4000
						});
			          	// console.log(response); 
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
	});

	function fetch_car_images(car_id){
		$.ajax({
			type:'get',
			url:'<?=base_url()?>fetch_car_images',
			catch:false,
			data:{'car_id':car_id},
			success:function(response){
				var obj = jQuery.parseJSON(response);
				$.each(obj, function(key,value) {

				  	$('.'+value.type).append('<div class="crdtlssliderbox text-center"><a href="" data-toggle="modal" data-target="#detailsmodal"><img src="'+value.image+'" class="w-100" alt=""></a></div>');

				  	$('.car_image_thumb').append('<div class="thumbnail-image"><div class="thumbImg"><img src="'+value.image+'" alt="slider-img"></div></div>');

				  	$('.car_image_main').append('<div class="slider-banner-image"><a href="'+value.image+'" data-fancybox ><img src="'+value.image+'" alt="Car-Image"></a></div>');

				});
				$('.slider360').slick('refresh');
				// $('.exterior').slick('refresh');
				// $('.interior').slick('refresh');
				// $('.slider-nav').slick('refresh');
        		// ('.slider-for').slick('refresh');
			}
		});
	}
</script>

