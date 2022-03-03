$(()=>{
    var $registration_form = $("#registration_form");
    //Hacer funciones de check en los repositorios de usuario.  
    $.validator.addMethod("existeEmail",(value,element)=>{
        de
        $.ajax({
            type: "method",
            url: "https://www.stromzu.com:8000/check/email/" + value,
            data: "data",
            dataType: "dataType",
            success: function (response) {
                console.log(response);

            }
        });
    });

    $.validator.addMethod("existeUsuario", (value,element)=>{
        $.ajax({
            type: "method",
            url: "https://www.stromzu.com:8000/check/user/" + value,
            data: "data",
            dataType: "dataType",
            success: function (response) {
                console.log(response);

            }
        });
    });

    if( $registration_form.length ){
        $registration_form.validate({
            rules:{
               "registration_form[email]": {
                    require: true,
                    email:true,
                    existeEmail: true
                },
                "registration_form[username]": {
                    required: true,
                    existeUsuario: true
                },
                "registration_form[nombre]": {
                    required: true
                },
                "registration_form[ap1]": {
                    required: true
                },
                "registration_form[password][first]":{
                    required: true
                },
                "registration_form[password][second]":{
                    required: true,
                    equalTo: '#registration_form_password_first'
                },
                "registration_form[agreeTerms]":{
                    required: true  
                }
            },
            messages:{
                "registration_form[email]": {
                    required: "Necesita un Correo Electronico.",
                    email: 'Correo electrónico inválido.',
                    existeEmail: "Correo ya existente."
                },    
                "registration_form[username]": {
                    required: "Necesita un nombre de Usuario.",
                    existeUsuario: "Nombre de usuario ya existente. "
                }, 
                "registration_form[nombre]": {
                    required: "Necesita un nombre."
                },        
                "registration_form[ap1]": {
                    required: "Necesita un Apellido."
                },
                "registration_form[password][first]":{
                    required: "Necesita una contraseña."
                },   
                "registration_form[password][second]":{
                    required: "Necesita confirmar la contraseña.",
                    equalTo: "Las contraseñas deben ser identicas"
                }, 
                "registration_form[agreeTerms]":{
                    required: "Acepte los términos y condiciones para poder continuar."  
                }
            },
            errorPlacement: function(error, element){
                if (element.is(":checkbox")) {
                    error.appendTo(element.parents(".anim"));
                }else{
                    error.insertAfter(element)
                }
            }
        })
    }
})