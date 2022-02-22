$(function(){
    const $ = require('jquery');

    $(" #Rutina_Canal-ts-control >.item").on('change', ()=>{
        PCanal = $(" #Rutina_Canal-ts-control >.item").text();
        //     $.get("https://localhost:8000/canal/precio" + PCanal, 
        //     function (data, textStatus, jqXHR) {
                
        //     },
        //     "dataType"
        // );
        alert(PCanal);
        
    });
    

})