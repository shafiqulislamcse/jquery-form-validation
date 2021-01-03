$(document).ready(function(){
	$( "#myform" ).validate({
		  rules: {
		    email: {
		      required: true
		    },
		    pwd: {
		      required: true
		    }
		    
		  }
	});
});