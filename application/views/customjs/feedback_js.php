<script type="text/javascript">

	$(document).ready(function(){
		// $("#feedback_message").attr('disabled', true)
		$("#feedback_message").hide();

		$('input:radio[name="feedback"]').change(function(){
		    $("#feedback_message").show();
		});

	});

	$("#feedback_form").submit(function(e) {
		e.preventDefault();

	    var form = $(this);
	    var actionUrl = form.attr('action');

	    if($("#feedback_mobile").val().length === 10){
		    if($('input:radio[name="feedback"]').is(':checked')){
		    	$.ajax({
			        type: "POST",
			        url: actionUrl,
			        data: form.serialize(), 
			        success: function(response){
			        	$("#feedback_form")[0].reset();
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
				  text: 'Please give any rating'
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