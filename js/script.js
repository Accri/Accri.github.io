$(document).ready(function(){
    $('#botonEnviado').click(function(){
        var errores = '';
        
        //Validar el nombre ===============================
        if ( $('#nombre').val() == '' ){
            errores += '<p>El nombre</p>';
            $('#nombre').css("border-bottom-color", "#F14B4B")
        }else{
            $('#nombre').css("border-bottom-color", "#D1D1D1")
        }
        //Validar el correo ===============================
        if ( $('#mail').val() == '' ){
            errores += '<p>El correo electronico</p>';
            $('#mail').css("border-bottom-color", "#F14B4B")
        }else{
            $('#mail').css("border-bottom-color", "#D1D1D1")
        }
        //Validar el mensaje ===============================
        if ( $('#mensaje').val() == '' ){
            errores += '<p>El mensaje</p>'
        }
        //Enviando mensaje ============================
        if(errores == '' == false){
            var mensajeModal = '<div class="modeloError">'+
                                    '<div class="modeloMensaje">'+
                '<h3>Te falto completar</h3>'+ 
                errores+'<span id="botonCerrar">Cerrar</span>'+
                                    '</div>'+                
                                '</div>'
            
            $('body').append(mensajeModal);
                
        }
        
        //Boton de Cerrar ===================================
        $('#botonCerrar').click(function(){
            $('.modeloError').remove();
        });
    
    });
});