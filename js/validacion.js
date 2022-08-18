function verificar(){
    var v1=0,v2=0,v3=0,v4=0,v5=0,v6=0,v7=0,v8=0;
    v1=validacion('nombre');
  /*  v2=validacion('edad');
    v3=validacion('telefono');
    v4=validacion('correo');
    v5=validacion('ciudad');
    v9=validacion('municipio');
    v6=validacion('institucion');
    v7=validacion('nivel');
    v8=validacion('edzna');*/

    if (v1===false ) {//|| v2===false || v3===false || v4===false || v5===false || v6===false ||v7===false || v8===false || v9===false)
        // $("#exito").hide();
        // $("#error").show(); error
    }else{
        //$("#error").hide();
        //$("#exito").show();

        //$("#formulario").submit();
    }
}
function validacion(campo){
    // var a=0;
    if (campo==='nombre'){
        codigo = document.getElementById(campo).value;
        if( codigo == null || codigo.length == 0 || /^\s+$/.test(codigo) ) {
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "col-md-4 inputGroupContainer has-error has-feedback");
            //$('#'+campo).parent().children('span').text("Este Campo es requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            console.log("datos Correctos");
            return false;
        }
        else
        {
            console.log("datos Correctos");
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }

    }
    if (campo==='edad'){
        codigo = document.getElementById(campo).value;
        if( codigo == null || codigo.length == 0 || /^\s+$/.test(codigo) ) {
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "col-md-4 inputGroupContainer has-error has-feedback");
            //$('#'+campo).parent().children('span').text("Este Campo es requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            console.log("datos Correctos");
            return false;

        }
        else
        {
            console.log("datos Correctos");
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }

    }
    if (campo==='telefono'){
        codigo = document.getElementById(campo).value;
        if( codigo == null || codigo.length == 0 || isNaN(codigo) ) {
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "col-md-4 inputGroupContainer has-error has-feedback");
         //   $('#'+campo).parent().children('span').text("Este Campo es requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;

        }
        else
        {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", " has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }

    }
    if (campo==='correo'){
        codigo = document.getElementById(campo).value;
        if( codigo == null || codigo.length == 0 || /^\s+$/.test(codigo) ) {
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "col-md-4 inputGroupContainer has-error has-feedback");
       //     $('#'+campo).parent().children('span').text("Este Campo es requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;

        }
        else
        {

            if (!(/\S+@\S+\.\S+/.test(codigo))) {
                $("#glypcn"+campo).remove();
                $('#'+campo).parent().parent().attr("class", "has-error has-feedback");
              //  $('#'+campo).parent().children('span').text("Ingrese un Email valido").show();
                $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                return false;
            }
            else{
                $("#glypcn"+campo).remove();
                $('#'+campo).parent().parent().attr("class", "has-success has-feedback");
                $('#'+campo).parent().children('span').hide();
                $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");

                return true;
            }
        }

    }
    if (campo==='ciudad'){
        codigo = document.getElementById(campo).value;
        if( codigo == null || codigo.length == 0 || /^\s+$/.test(codigo) ) {
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "col-md-4 inputGroupContainer has-error has-feedback");
            //$('#'+campo).parent().children('span').text("Este Campo es requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;

        }
        else
        {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }

    }
    if (campo==='municipio'){
        codigo = document.getElementById(campo).value;
        if( codigo == null || codigo.length == 0 || /^\s+$/.test(codigo) ) {
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "col-md-4 inputGroupContainer has-error has-feedback");
            //$('#'+campo).parent().children('span').text("Este Campo es requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;

        }
        else
        {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }

    }
    if (campo==='institucion'){
        codigo = document.getElementById(campo).value;
        if( codigo == null || codigo.length == 0 || /^\s+$/.test(codigo) ) {
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "col-md-4 inputGroupContainer has-error has-feedback");
           // $('#'+campo).parent().children('span').text("Este Campo es requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;

        }
        else
        {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }

    }
    if (campo==='nivel'){
        codigo = document.getElementById(campo).value;
        if( codigo == null || codigo.length == 0 || /^\s+$/.test(codigo) ) {
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "has-error has-feedback");
            //$('#'+campo).parent().children('span').text("Este Campo es requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;

        }
        else
        {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }

    }
    if (campo==='edzna'){
        opciones = document.getElementsByName(campo);
        var seleccionado = false;
        for(var i=0; i<opciones.length; i++) {
            if(opciones[i].checked) {
                seleccionado = true;
                break;
            }
        }

        if(!seleccionado) {
            $('#si').parent().parent().parent().attr("class", "col-md-4 inputGroupContainer has-error has-feedback");
            $('#si').parent().parent().next().append("<span id='sexo'  class='glyphicon glyphicon-remove form-control-feedback'></span>");


            return false;
        }
        else{
            $("#sexo").remove();
            $('#no').parent().parent().parent().attr("class", "has-success");
            return true;
        }
    }
}
