<footer><p>Auteur du site : Jonathan XERRI</p></footer>

<script>

$('#hideAside').on('click', function() {
    $('p').hide(2000);
});

$('#fadeImg').on('click', function() {
    $('img').hide();
});

$('#afficher').on('click', function() {
    $('img').show();
    $('p').show();
});

$('#toggleMenu').on('click', function() {
    $("#load_limit").slideUp(500).delay(5000).slideDown(500);
});

$('dd').on('click', function(event) {
  event.stopPropagation();
      alert($(this).text());

});

var test =  $('dt').mouseenter(function() {
              $(this).next().show();
            });

if () {

}

$('dt').mouseleave(function(){
  $(this).next().hide();
});

$('dt').on('click', function() {
  $(this).next().show();
});

</script>
