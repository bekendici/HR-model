// Prvo putem ajaxa povuci podatke i smjestiti ih u varijablu aktivnosti
      var aktivnosti = [];
 
        $.ajax({
          
          url: 'http://localhost/hrmodel/public/pages/activities-selectAll.php',
          data:{},
          dataType:'json',
          async: false,
          success: function(data){
          aktivnosti = data;

          }
        });

//prikaz i filtriranje aktivnosti
jQuery(document).ready(function($) {

  $('#price_filter').val('0-500');
  $("#price_slider").slider({
    range: true,
    min: 0,
    max: 500,
    values:[0, 500],
    step: 5,
    slide: function(event, ui) {
      $("#price_range_label").html('$' + ui.values[ 0 ] + ' - $' + ui.values[ 1 ] );
      $('#price_filter').val(ui.values[0] + '-' + ui.values[1]).trigger('change');
    }
  });

  $('#kategorija_filter :checkbox').prop('checked', true);
  $("#mjeseci :checkbox").prop('checked', true);

FilterJS(aktivnosti, "#lista_aktivnosti", {
    template: '#template',
    criterias:[
      {field: 'kategorija', ele: '#kategorija_filter :checkbox'},
      {field: 'mjesec', ele: '.months'}
    ],
    search: { ele: '#search_box' }
  });
});


