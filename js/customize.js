// customize JavaScript Document
$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});


$("#maian-menu").click(function(){
  $("#submenu-item1").slideToggle(200);
});
$("#myTab").click(function(e) {
        if (!$(e.target).is('#maian-menu, #maian-menu *')) {
            $("#submenu-item1").hide(400);
        }
    });
$("#toggle").click(function () {

    // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: $('.mySelect').val() };

    // Set the duration (default: 400 milliseconds)
    var duration = 500;

    $('#sidebar').toggle(effect, options, duration);
});

$('.dropdown-toggle').click(function() {
//$(this).next('.dropdown-menu').parent().toggleClass('open');
$(this).next('.dropdown-menu').slideToggle(200);
});

$(document).click(function(e) {
        if (!$(e.target).is('.dropdown-menu, .dropdown-menu *')) {
            $(".dropdown-menu").hide(200);
        }
    });

$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})