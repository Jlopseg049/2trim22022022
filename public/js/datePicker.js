$(()=>{
    $.datetimepicker.setLocale('es');

    $('#dateInicio').datetimepicker({
        format:'d/m/Y H:i',
        minDate:0,
        });
        $('#dateFin').datetimepicker({
            format:'d/m/Y H:i',
            minDate:new Date( $('#dateInicio').val().split(' ')[0].split('/')[2] + '/' +
                              $('#dateInicio').val().split(' ')[0].split('/')[1] + '/' + 
                              $('#dateInicio').val().split(' ')[0].split('/')[0]),
            });
            /*
            
            let fecha1 = new Date( $('#dateInicio').val().split(' ')[0].split('/')[2] + '/' +
            $('#dateInicio').val().split(' ')[0].split('/')[1] + '/' + 
            $('#dateInicio').val().split(' ')[0].split('/')[0]);
            let fecha2 = new Date()
            $('#dateInicio').val().split(' ')[1].split(':')[1] + ':' +
$('#dateInicio').val().split(' ')[1].split(':')[0]
            */
        $('#dateInicio').on('change',()=>{
            $('#dateFin').datetimepicker({
                format:'d/m/Y H:i',
                minDate:new Date( $('#dateInicio').val().split(' ')[0].split('/')[2] + '/' +
                $('#dateInicio').val().split(' ')[0].split('/')[1] + '/' + 
                $('#dateInicio').val().split(' ')[0].split('/')[0]),
                minTime: ($('#dateFin').val().split(' ')[0].split('/')[2] + '/' +
                          $('#dateFin').val().split(' ')[0].split('/')[1] + '/' + 
                          $('#dateFin').val().split(' ')[0].split('/')[0] == 
                          $('#dateInicio').val().split(' ')[0].split('/')[2] + '/' +
                          $('#dateInicio').val().split(' ')[0].split('/')[1] + '/' + 
                          $('#dateInicio').val().split(' ')[0].split('/')[0])?
                            $('#dateInicio').val().split(' ')[1].split(':')[1] + ':' +
                            $('#dateInicio').val().split(' ')[1].split(':')[0]:false
            });
        })

})
