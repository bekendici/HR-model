

 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('img').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imginp").change(function(){
        readURL(this);
    });
	
	
	/*Validation*/
	 $(document).ready(function() {

    $('#passChange').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            
            
            old_password: {
                validators: {
                    notEmpty: {
                        message: 'You must enter old password'
						
                    },
                 
                  
                }
            }, 
			new_password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                   /* different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    },*/
                    stringLength: {
                        min: 8,
                        message: 'The password must have at least 8 characters'
                    }
                }
            },
            re_password: {
                validators: {
                    notEmpty: {},
                    identical: {
                        field: 'new_password'
                    },
                   /* different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
*/                }
            },
           
           
        }
    });
	 });