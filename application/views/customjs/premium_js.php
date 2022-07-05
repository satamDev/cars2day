<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript">
	$(document).ready(function(){
		get_premium_brand();
	});

	function get_premium_brand(){
		$.ajax({
			type: "GET",
			url: "<?=base_url()?>get_premium_brand",
			success: function (response){
				$(".brand").html(response);
			}
		})
	}
</script>