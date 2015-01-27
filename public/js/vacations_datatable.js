$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'top'
    });
});

$(document).ready(function(){

    $('.ok-btn').click(function(){
        var themonths=['January','February','March','April','May','June',
        'July','August','September','October','November','December'];

        var todaydate=new Date();
        var curmonth=todaydate.getMonth()+1; //get current month (1-12)
        var curyear=todaydate.getFullYear(); //get current year

        $("#chooseMonth").change(function (){
          console.log(this.value);

          var themonth=parseInt(this.value)+1;
          var calendarstr=buildCal(themonth, curyear, "main", "month", "daysofweek", "days", 0);

          if (document.getElementById)
              document.getElementById("calendarspace").innerHTML=calendarstr;
        });

        $("#chooseMonth").append('<option value="'+(curmonth-1)+'" selected="yes">Current Month</option>');

        for (i=0; i<12; i++) //display option for 12 months of the year
            //document.getElementById("chooseMonth").innerHTML='<option value="'+i+'">'+themonths[i]+' '+curyear+'</option>';
          $("#chooseMonth").append('<option value="'+i+'">'+themonths[i]+' '+curyear+'</option>');

        //write out current month's calendar to start
        document.getElementById("calendarspace").innerHTML=buildCal(curmonth, curyear, "main", "month", "daysofweek", "days", 0);
                                        
    });
});

$(document).ready(function() {
  $(function(){
        $.ajax({
            url: 'http://localhost/hrmodel/vacation_service/get_free_days.php',
            data: {},
            dataType: 'json',
            success: function (data) {

            // Check if received data is indeed JSON Object and not a string

                if (data.substring) {
                    console.log('is string');
                } else{
                    console.log('is not string');
                }

            // Initialize Datatable

                var table = $('#vacations').DataTable( {
                   "bAutoWidth" : false,
                   "bProcessing": true,
                   "bSearchable" : true,
                   "bSortable" : true,
                   "bFilter": true,
                   "bInfo": true,
                   "bPaginate" : true,
                   "data" : data,
                   "columns": [
                        { "data": "user_id",
                            "visible": false,
                            "searchable": false
                        },
                        { "data": "ime" },
                        { "data": "prezime" },
                        { "data": "broj_dana_godisnjeg" },
                        { "data": "broj_iskoristenih_dana" },
                        { "data": "trenutno_na_godisnjem" },
                        { "data": "preostalo_dana_godisnjeg" },
                        { "data": "broj_dana_bolovanja" },
                        { "data": "trenutno_na_bolovanju" }
                    ]
                } );
               
           // Highlighting rows

                var lastIdx = null;

               $('#vacations tbody').on( 'mouseover', 'td', function () {
                   var colIdx = table.cell(this).index().column;
                 
                   if ( colIdx !== lastIdx ) {
                       $( table.cells().nodes() ).removeClass( 'highlight' );
                       $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                    }
                } )
                .on( 'mouseleave', function () {
                   $( table.cells().nodes() ).removeClass( 'highlight' );
                } );

            // Send user_id of selected row to PHP script

                $('#vacations tbody').on( 'click', 'tr', function () {
                   var id = table.row( this ).data().user_id;
                   id = parseInt(id);
                   console.log(id);

                  // $(this).addClass('chosenUser');
                  // window.location = 'http://localhost/hrmodel//public/vacations-calendar.php';
                 // $('.small-container').show(200);

                   $.ajax({
                        type: 'POST',
                        url: 'http://localhost/hrmodel/vacation_service/get_free_for_user.php',
                        data: { user_id : id },
                        dataType: 'json',
                        success: function (msg) {
                          console.log("juju "+msg);
                        },
                        error: function( req, status, err )
                        {
                           console.log("nesto ", status, err);
                        }
                    } );
                 });

            } // End of ajax : success
        }); // End of .ajax request
    }); // End of function()
}); // End of document.ready()

