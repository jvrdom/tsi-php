var tipo_content;
var barrio_content;

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

  $('#apt-link').click(function() {
        tipo_content = $(this).text();
  });

  $('#casa-link').click(function() {
        tipo_content = $(this).text();
  });

  $('#barrio-link').click(function() {
        barrio_content = $(this).text();
  });

  $('#wizard').smartWizard({
    transitionEffect:'fade',
    onLeaveStep:fillFields,
    onFinish:onFinishCallback
  });
      
  function fillFields(obj){
    var step_num = obj.attr('rel');
    if(step_num == 2){
      var nombre = $('#Cliente_nombre').val();
      $('#nombre').text(nombre);
      var email = $('#Cliente_email').val();
      $('#email').text(email);
      var telefono = $('#Cliente_telefono').val();
      $('#telefono').text(telefono);
      var direccion = $('#Cliente_direccion').val();
      $('#direccion').text(direccion);  
    }
    return true;
  }

  function onFinishCallback(){

    var parametros = {
      "fecha" : $('#fecha').text(),
      "nombre" : $('#nombre').text(),
      "email" : $('#email').text(),
      "telefono" : $('#telefono').text(),
      "direccion" : $('#direccion').text(),
      "id_inmueble": id_inmueble
    };

    $.ajax({
      data: parametros,
      type: "POST",
      url: 'http://localhost/tsi-php/index.php/ajax/prueba',
      success:  function (response) {
        $("#resultado").html(response);
        //alert(response);
      }
    })

  }     

  $('#calendar').fullCalendar({
      height: 400,
      defaultView: 'agendaWeek',
      weekends: false,
      header: {
      left: 'prev,next today',
      center: 'title',
      right: 'agendaWeek,agendaDay'
    },
    selectable: true,
    selectHelper: true,
    editable: true,
    select: function(start, end) {
      var title = 'Cita Agendada';
      var eventData;
      if (title) {
        eventData = {
          title: title,
          start: start,
          end: end,
        };  
        $('#calendar').fullCalendar('renderEvent', eventData, true);
        var timeFormat = moment(eventData.start).format("LLL");
        $('#fecha').text(timeFormat);
      }
      $('#calendar').fullCalendar('unselect');
    },
  });   

  $('#cliente-form').css('visibility', 'visible'); 

});