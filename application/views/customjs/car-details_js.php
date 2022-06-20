<script type="text/javascript">
	$(document).ready(function(){
		var car_id = <?=$this->uri->segment(2)?>;
		fetch_car_images(car_id);
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

