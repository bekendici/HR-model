$(document).ready(function(){
 $('#timepicker1').timepicker();

$('#date_of_activities').datepicker({
                    format: "dd/mm/yyyy"
                }); 

$('#date_of_activities').datepicker()
    .on('changeDate', function(){
        //console.log('pali');


      //  $('#registration-form').bootstrapValidator('validateField', 'date_of_birth');

        $('#activities-form').data('bootstrapValidator')
            .updateStatus('date_of_activities', 'NOT_VALIDATED')
            .validateField('date_of_activities');
    });
	
	
	
	$('#activities-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
         
            date_of_activities: {
                validators: {
                    notEmpty: {
                        message: 'The date is required and cannot be empty'
                    },
                    date: {
                        format: 'DD/MM/YYYY'
                    }
                }
            }
		}
    });
	});