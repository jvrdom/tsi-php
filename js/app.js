$( document ).ready(function() {
  $('#btnImg').live({
    click: function() {
       var $row = $(this).closest("tr");    // Find the row
       var $text = $row.find(".name").text(); // Find the text

       // Let's test it out
       //alert($text);
       document.getElementById('portadaHidden').value = $text.replace(/\s+/g, '');
    },
    error: function() {
      // do something on error
    }
   });

  $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });

  $(".pagination").wrap("<div class='text-center'></div>");

  $('#barrios-drop').change(function(){
    var nombre = $('#barrios-drop :selected').text();
    document.getElementById('barriohidden').value = nombre;
   });
});