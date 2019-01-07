$(document).ready(function(){

  $(".buttonContainer").click(function() {
      $('html, body').animate({
          scrollTop: $("#listContainer").offset().top
      },800);
  });

  $("#travelButton").click(function() {
    $('html, body').animate({
        scrollTop: $("#listContainer").offset().top
    },800);
  });

  $("#travelButton1").click(function() {
    $('html, body').animate({
        scrollTop: $("#googleMapsContainer").offset().top
    },800);
  });

  $('.parallax').parallax();
  Materialize.updateTextFields();
  
    // $('.carousel').carousel();
    // $('.carousel').carousel('prev');
  
    $('.carousel').carousel({   
      shift: 250
    });

    $('#calculatePrice').click(function(e) {
      e.preventDefault();
      var q = $('#salis').val();
      console.log(q);
      var y = $('#asmenys').val();
      var z = $('#naktys').val();
      var x = + q + (+y * (+z * 83));
      $('#rezultatas').text('Pasirinktos kelionės kaina: ' + x + 'Eur');
    });
 

  
  });