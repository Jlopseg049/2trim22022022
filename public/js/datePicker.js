$(()=>{
    $.datetimepicker.setLocale('es');
    $('#reserva_fechaFin').prop( "disabled", true );
    $('#reserva_fechaInicio').datetimepicker({
        format:'d/m/Y H:i',
        minDate:0,
        });
        $('#reserva_fechaFin').datetimepicker({
            format:'d/m/Y H:i',
            minDate:new Date( $('#reserva_fechaInicio').val().split(' ')[0].split('/')[2] + '/' +
                              $('#reserva_fechaInicio').val().split(' ')[0].split('/')[1] + '/' + 
                              $('#reserva_fechaInicio').val().split(' ')[0].split('/')[0]),
            });
            /*
            
            let fecha1 = new Date( $('#reserva_fechaInicio').val().split(' ')[0].split('/')[2] + '/' +
            $('#reserva_fechaInicio').val().split(' ')[0].split('/')[1] + '/' + 
            $('#reserva_fechaInicio').val().split(' ')[0].split('/')[0]);
            let fecha2 = new Date()
            $('#reserva_fechaInicio').val().split(' ')[1].split(':')[1] + ':' +
$('#reserva_fechaInicio').val().split(' ')[1].split(':')[0]
            */
        $('#reserva_fechaInicio').on('change',()=>{
            fechaInicio = new Date( $('#reserva_fechaInicio').val().split(' ')[0].split('/')[2] + '/' +
                                    $('#reserva_fechaInicio').val().split(' ')[0].split('/')[1] + '/' + 
                                    $('#reserva_fechaInicio').val().split(' ')[0].split('/')[0] + ' ' +
                                     
                                    $('#reserva_fechaInicio').val().split(' ')[1].split(':')[0] + ':'  +
                                    $('#reserva_fechaInicio').val().split(' ')[1].split(':')[1]);
            
        if($('#reserva_fechaInicio').val()!=""){
            $('#reserva_fechaFin').prop( "disabled", false );

            $('#reserva_fechaFin').datetimepicker({
                format:'d/m/Y H:i',
                minDate: fechaInicio,
                        //($('#reserva_fechaFin').val().split(' ')[0].split('/')[2] + '/' +
                        //   $('#reserva_fechaFin').val().split(' ')[0].split('/')[1] + '/' + 
                        //   $('#reserva_fechaFin').val().split(' ')[0].split('/')[0] == 
                        //   $('#reserva_fechaInicio').val().split(' ')[0].split('/')[2] + '/' +
                        //   $('#reserva_fechaInicio').val().split(' ')[0].split('/')[1] + '/' + 
                        //   $('#reserva_fechaInicio').val().split(' ')[0].split('/')[0])?
                        //     $('#reserva_fechaInicio').val().split(' ')[1].split(':')[1] + ':' +
                        //     $('#reserva_fechaInicio').val().split(' ')[1].split(':')[0]:false
            });
            if($('#reserva_fechaFin').val()!=""){

                fechaFin = new Date( $('#reserva_fechaFin').val().split(' ')[0].split('/')[2] + '/' +
                $('#reserva_fechaFin').val().split(' ')[0].split('/')[1] + '/' + 
                $('#reserva_fechaFin').val().split(' ')[0].split('/')[0] + ' ' +
                 
                $('#reserva_fechaFin').val().split(' ')[1].split(':')[0] + ':'  +
                $('#reserva_fechaFin').val().split(' ')[1].split(':')[1]);

                if( fechaFin.getTime() - fechaInicio.getTime() <=-1){
                    $('#reserva_fechaFin').val('')
                }
            }
        }else{
            $('#reserva_fechaFin').prop( "disabled", true );
            $('#reserva_fechaFin').val('')
        }

        });
        $('#reserva_fechaFin').on('change',()=>{
            fechaFin = new Date( $('#reserva_fechaFin').val().split(' ')[0].split('/')[2] + '/' +
            $('#reserva_fechaFin').val().split(' ')[0].split('/')[1] + '/' + 
            $('#reserva_fechaFin').val().split(' ')[0].split('/')[0] + ' ' +

            $('#reserva_fechaFin').val().split(' ')[1].split(':')[0] + ':'  +
            $('#reserva_fechaFin').val().split(' ')[1].split(':')[1]);

            if(fechaFin.getTime() - fechaInicio.getTime() >= 0){
            numHoras = (fechaFin.getTime() - fechaInicio.getTime()) / 3600000;
            precioTotal = "<p>Precio total: " + Number.parseFloat(parseInt($("#precioHora").text()) * numHoras).toFixed(2) +"€</p>";
            // debugger;   
            $("#precioTotal").empty();
            $("#precioTotal").append(precioTotal);
                $("#reserva_precio").prop("value",Number.parseFloat(parseInt($("#precioHora").text()) * numHoras).toFixed(2) )
        }
        });
})
