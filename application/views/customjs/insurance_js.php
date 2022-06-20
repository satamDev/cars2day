<script type="text/javascript">
	$("#renewal").submit(function(e) {
		e.preventDefault();

	    var form = $(this);
	    var actionUrl = form.attr('action');

	    if($("#renewal_mobile").val().length === 10){
		    if($("#check_renewal_terms").is(':checked')){
		    	$.ajax({
			        type: "POST",
			        url: actionUrl,
			        data: form.serialize(), 
			        success: function(response){
			        	$("#renewal")[0].reset();
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
				  text: 'Please accept Terms and Conditions'
				})
		    }
		}else{
			Swal.fire({
				  icon: 'error',
				  text: 'Mobile Number Must Be 10 Digits'
				})
		}	    
	    
	});

		$("#newcar").submit(function(e) {
		e.preventDefault();

	    var form = $(this);
	    var actionUrl = form.attr('action');

	    if($("#NewCar_mobile").val().length === 10){
		    if($("#check_new_car_terms").is(':checked')){
		    	$.ajax({
			        type: "POST",
			        url: actionUrl,
			        data: form.serialize(), 
			        success: function(response){
			        	$("#newcar")[0].reset();
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
				  text: 'Please accept Terms and Conditions'
				})
		    }
		}else{
			Swal.fire({
				  icon: 'error',
				  text: 'Mobile Number Must Be 10 Digits'
				})
		}	    
	    
	});
</script>