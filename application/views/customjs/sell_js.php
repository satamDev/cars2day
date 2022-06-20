<script type="text/javascript">

	$("#license_plate").submit(function(e) {
		e.preventDefault();

	    var form = $(this);
	    var actionUrl = form.attr('action');
	    if($("#license_plate_name").val().length != 0){
	    	if($("#license_plate_mobile").val().length === 10){
		    $.ajax({
		        type: "POST",
		        url: actionUrl,
		        data: form.serialize(), 
		        success: function(response){
		        	$("#license_plate")[0].reset();
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

	$("#vin").submit(function(e) {
		e.preventDefault();

	    var form = $(this);
	    var actionUrl = form.attr('action');
	    if($("#vin_name").val().length != 0){
	    	if($("#vin_mobile").val().length === 10){
			    $.ajax({
			        type: "POST",
			        url: actionUrl,
			        data: form.serialize(), 
			        success: function(response){
			        	$("#vin")[0].reset();
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

</script>