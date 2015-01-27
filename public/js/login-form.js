
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
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    }
                }
            }
        }
    });
});

/*--- END OF VALIDATION ---*/