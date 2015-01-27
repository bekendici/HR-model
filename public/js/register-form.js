/* FUNCTIONS FOR SHOWING AND HIDING STEPS INCLUDING VALIDATION RESTRICTIONS */

$(document).ready(function(){
	$('#next1').click(function(){
        if($('#firstname').val().length == 0 && $('#lastname').val().length == 0 && $('#username').val().length == 0  && $('#password').val().length == 0 ){
            //alert('Molimo popunite sva navedena polja kako biste mogli nastaviti s registracijom.');
            bootbox.alert("In order to proceed, you need to fill in all the data first. Thank you", function() {
                
            });
        }
        else if($('#firstname').val().length<3 || $('#lastname').val().length <3 || $('#username').val().length <6  || $('#password').val().length <8 || $('#re_password').val().length <8 || $('#re_password').val() != $('#password').val() ){
           // alert("dddddd");
        }else{
            $('#step1-container').hide(500);
            $('#step2-container').show(500);
        }
	});
	$('#previous1').click(function(){
		$('#step1-container').show(500);
		$('#step2-container').hide(500);
	});
	$('#next2').click(function(){
        if($('#date_of_birth').val().length == 0 && $('#jmbg').val().length == 0 && $('#email').val().length == 0  && $('#re_email').val().length == 0 ){
            bootbox.alert("In order to proceed, you need to fill in all the data first. Thank you", function() {
                
            });
        }
        else if($('#date_of_birth').val().length<10 || $('#jmbg').val().length != 13  || $('#email').val().length <6  || $('#re_email').val().length <8 || $('#email').val() != $('#re_email').val()   ){
           // alert("dddddd");

        }else{
    		$('#step2-container').hide(500);
    		$('#step3-container').show(500);
        }
	});
	$('#previous2').click(function(){
		$('#step2-container').show(500);
		$('#step3-container').hide(500);
	});
});

/* BACKGROUND SLIDER */

 $.backstretch([
	"images/background1.jpg",
	"images/background.png",
	"images/background4.jpg"
	],
{duration: 3000, fade: 1500});

/* VALIDATION */

  $(document).ready(function() {

    $('#registration-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstname: {
                message: 'The first name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 20,
                        message: 'The first name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The first name can only consist of alphabetical, number and underscore'
                    }
                }
            },
            lastname: {
                message: 'The last name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 20,
                        message: 'The last name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The last name can only consist of alphabetical, number and underscore'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    },
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
                        field: 'password'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            date_of_birth: {
                validators: {
                    notEmpty: {
                        message: 'The date is required and cannot be empty'
                    },
                    date: {
                        format: 'DD/MM/YYYY'
                    }
                }
            },
            jmbg: {
                message: 'The JMBG number is not valid',
                    validators: {
                    notEmpty: {
                        message: 'The JMBG number is required'
                    },
                    digits: {
                        message: 'The value can contain only digits'
                    },
                    stringLength: {
                        min: 13,
                        max: 13,
                        message: 'The JMBG must be 13 characters long'
                    },
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            re_email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    },
                    identical: {
                        field: 'email',
                        message: 'Email addresses do not match'
                    }
                }
            },
            phone_number: {
                message: 'The phone number is not valid',
                    validators: {
                    notEmpty: {
                        message: 'The phone number is required'
                    },
                    digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'The city is required and can\'t be empty'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'The state is required and can\'t be empty'
                    }
                }
            },
            register_checkbox: {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Please confirm your choice'
                    }
                }
            }
        }
    });


});