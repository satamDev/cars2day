<script type="text/javascript">
	$("#Rto").submit(function(e) {
		e.preventDefault();

	    var form = $(this);
	    var actionUrl = form.attr('action');

	    if($("#rto_mobile").val().length === 10){
	    	$.ajax({
		        type: "POST",
		        url: actionUrl,
		        data: form.serialize(), 
		        success: function(response){
		        	$("#Rto")[0].reset();
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
	    
	});

		$("#Carvenience").submit(function(e) {
		e.preventDefault();

	    var form = $(this);
	    var actionUrl = form.attr('action');

	    if($("#Carvenience_mobile").val().length === 10){
	    	$.ajax({
		        type: "POST",
		        url: actionUrl,
		        data: form.serialize(), 
		        success: function(response){
		        	$("#Carvenience")[0].reset();
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
	    
	});
</script>