

$(()=>{

  var index=$("<div></div>");
  var body=$("main");
  var canales=$("<main></main>")

        //Configuramos el boton de vuelta a inicio para cuando querramos cambiar de pestaña
        //Con intencion de trabajar en la doble navegabilidad de la página

    //Guardemos el body para cambiar a la ventana de canales
    $('#botoncito').on('click',()=>{
      body.hide(2000, function() {
        body.appendTo(index);
            $.getJSON("https://www.stromzu.com:8000/canal/findAll",
                function (data, textStatus, jqXHR) {
                  cabecera = data.responseHead;
                   cuerpo = data.responseBody;
                  canales.empty();
                    canales.append(cabecera);
                    canales.hide();
                    canales.appendTo($(".altoMain"));
                    $('#bloqueCanales').append(cuerpo);
                    canales.show(1500);
                  });
      });      
    });

    $(document.body).on('click', 'button[id=vueltaInicio]', function(){
      $("main").hide(2000, function() {
        $(this).empty().append(index.children().first().children()).show(400);

        // index.appendTo($(".altoMain"));
        // $("main").show(400);
      }
    )} );
  }); 

  