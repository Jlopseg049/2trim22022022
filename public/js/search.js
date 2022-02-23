$(()=>{
    //Llamaremos a cada módulo de búsqueda "buscador",
    //por el momento, solo nos vemos en la necesidad de 
    //utilizar un unico tipo debuscador, pero en 
    // caso de necesitar alguno más, los llamaremos
    // "buscador-{campoBuscar}"

    // <!DOCTYPE html>
    // <html lang="en">
    // <head>
    //   <meta charset="utf-8">
    //   <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    //   <title>StromZu</title>
    //   <meta content="" name="description">
    //   <meta content="" name="keywords">
    // <script src="https://kit.fontawesome.com/a8b39d6af2.js" crossorigin="anonymous"></script>
    //   <link href="{{asset('img/favicon.png')}}" rel="icon">
    //   <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    
    //   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    //   <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    
    //   <link href="{{asset('css/style.css')}}" rel="stylesheet">
    
    
    // </head>
    // <main>
    // <section id="portfolio" class="portfolio">
    //   <div class="container">
    
    //         <div class="section-title" data-aos="fade-up">
    //           <h2>  </h2>
    //           <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
    //         </div>
    //Buscador de canales +buscador-Canal+
    
    var busqueda = $('<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200"></div>')


    $(document.body).on('keyup', $('input[id=buscador]'),function() {
  
            $.getJSON("https://www.stromzu.com:8000/canal/find/" + ($('#buscador').val().length != 0 ? 
                                                                    $('#buscador').val() : "all"),
                function (data, textStatus, jqXHR) {
                    canales = data.response;
                    $('#bloqueCanales').hide()
                    $('#bloqueCanales').empty();
                 $('#bloqueCanales').append(canales);
                    $('#bloqueCanales').show();
                    
                });
      
    });
});
