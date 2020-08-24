$(document).ready(function(){
    $('#showpass').click(function(){
        if($('#pass').attr('type') == 'text'){
            $('#pass').attr('type', 'password');
            $('#showpass').val('Mostrar Contraseña');
        }else{
            $('#pass').attr('type', 'text');
            $('#showpass').val('Ocultar Contraseña');
        }
    });
});