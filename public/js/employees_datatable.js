$(document).ready(function() {

    $(function(){
        $.ajax({
            url: 'http://localhost/hrmodel/public/pages/employees_datatables.php',
            data: {},
            dataType: 'json',
            success: function (data) {

            // Check if received data is indeed JSON Object and not a string

                if (data.substring) {
                    console.log('is string');
                } else{
                    console.log('is not string');
                }

            // Setup for individual column search - add a text input to each footer cell

                $('#employees tfoot th').each( function () {
                    var title = $('#employees thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
                } );

            // Initialize Datatable

                var table = $('#employees').DataTable( {
                   "bProcessing": true,
                   "bSearchable" : true,
                   "bSortable" : true,
                   "bFilter": true,
                   "bInfo": true,
                   "bPaginate" : true,
                   "data" : data,
                   "columns": [
                        { "data": "korisnik_id",
                            "visible": false,
                            "searchable": false
                        },
                        { "data": "ime" },
                        { "data": "prezime" },
                        { "data": "3" },
                        { "data": "naziv" }
                    ]
                } );
               
            // Apply the search for each column

                table.columns().eq( 0 ).each( function ( colIdx ) {
                   $( 'input', table.column( colIdx ).footer() ).on( 'keyup change', function () {
                       table
                           .column( colIdx )
                           .search( this.value )
                           .draw();
                   } );
                } );

           // Highlighting rows

                var lastIdx = null;

               $('#employees tbody').on( 'mouseover', 'td', function () {
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

                $('#employees tbody').on( 'click', 'tr', function () {
                   var id = table.row( this ).data().korisnik_id;
                   $(this).addClass('chosenUser');
                   window.location = '#/public_profile.php?user_id=' + id;
/*

                   $.ajax({
                        type: 'POST',
                        url: 'http://localhost/hrmodel/public/pages/public_profile.php',
                        data: { user_id : id },
                        dataType: 'json',
                        success: function (data) {}
                    } );
*/
                } );

            } // End of ajax : success
        }); // End of .ajax request
    }); // End of function()
}); // End of document.ready()

