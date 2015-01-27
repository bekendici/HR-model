/* FUNCTIONS FOR HIDING WHOLE CALENDAR POPUP WHEN CLICKED ON 'OK' OR OUTSIDE OF POPUP */
/*
$(document).ready(function(){

	window.onload = function(){$('#vacation-wrapper').hide();};

	setTimeout(function(){ $('#vacation-wrapper').slideDown(500); }, 0);

	$('#ok-btn').click(function(){
		//$('#vacation-wrapper').slideUp(200);
		window.location = 'http://localhost/hrmodel/public/index.php#/vacations_datatable';
	});

    $('body').click(function() {
        //$('#vacation-wrapper').slideUp(200);
        window.location = 'http://localhost/hrmodel/public/index.php#/vacations_datatable';
    });

    $('#vacation-wrapper').click(function(event){
        event.stopPropagation();
    });
});
*/

$(document).ready(function(){

    $('.ok-btn').click(function(){
        var themonths=['January','February','March','April','May','June',
        'July','August','September','October','November','December']

        var todaydate=new Date()
        var curmonth=todaydate.getMonth()+1 //get current month (1-12)
        var curyear=todaydate.getFullYear() //get current year

        function updatecalendar(theselection){
        var themonth=parseInt(theselection[theselection.selectedIndex].value)+1
        var calendarstr=buildCal(themonth, curyear, "main", "month", "daysofweek", "days", 0)
        if (document.getElementById)
            document.getElementById("calendarspace").innerHTML=calendarstr
        }

        document.write('<option value="'+(curmonth-1)+'" selected="yes">Current Month</option>')
        for (i=0; i<12; i++) //display option for 12 months of the year
            document.write('<option value="'+i+'">'+themonths[i]+' '+curyear+'</option>')
    });
});
        