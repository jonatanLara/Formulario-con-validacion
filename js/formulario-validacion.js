
$(document).on("ready",inicio);

function inicio(){
  var v0=0,v1=0,v2=0,v3=0,v4=0,v4_1=0,v5=0,v6=0,v7=0,v8=0,v9=0,v9_1=0,v10=0,v11=0,v12=0,
  v13=0,v14=0,v15=0,v16=0,v17=0,v18=0,v19=0,v20=0,v21=0,v22=0,
  v23=0,v24=0,v25=0,v26=0,v27=0,v28=0,v29=0;
  $("span.help-block").hide();
  $("#alertaFormulario").hide();
  selectClaveArq();
  //$("#btnvalidar").click(validar);//
  $("#btnvalidar").click(function(){
    v0 = validar('select-clave');//clave
    v1 = validar('select-clave-consorcio');//consorcio
    v3 = validar('validacionServer02');//dir zona aqr
    v4 = validar('validacionServer03');//dir contc Correo
    v4_1= validar('validacionServer03_1');// telefono del dir
    v5 = validar('customRadioInline3');//
    v2 = validar('customRadioInline1');//
    v6 = validar('validacionServer04');//
    v7 = validar('validacionServer05');//
    v8 = validar('validacionServer06');//
    v9 = validar('validacionServer07');// correo
    v9_1 = validar('validacionServer07_1');
    v10 = validar('validacionServer08');//
    v11 = validar('fechaVigenciaInicio');//fecha inicio de actividades
    v12 = validar('fechaVigenciaFinal');
    v13 = validar('validacionServer09');
    v14 = validar('customRadioInline5'); //
    v15 = validar('fechaInicioEntrega'); // no esta funcionando
    v16 = validar('validacionServer10');
    v17 = validar('fechaIncioActividad');//fecha de inicio de actividades}
    v18 = validar('validacionServer11');//
    v19 = validar('validacionServer12');//
    v20 = validar('validacionServer13');//
    v21 = validar('validacionServer14');
    v22 = validar('validacionServer15');//
    v23 = validar('validacionServer16');//
    v24 = validar('validacionServer17');//
    v25 = validar('validacionServer18');
    v26 = validar('validacionServer19');//
    v27 = validar('validacionServer20');//
    v28 = validar('validacionServer21');//
    v29 = validar('validacionServer22');


    if (v0 === false || v1===false || v2===false || v3 === false || v4 === false|| v4_1 === false || v5 === false ||
        v6===false || v7===false || v8 === false || v9 === false || v9_1 === false || v10 === false|| v11===false ||
        v12 === false || v13 === false || v14 === false || v15 === false || v16 === false || v17 === false
        || v18 ===false || v19 === false || v20 === false || v21===false || v22 === false || v23 === false
        || v24 === false || v25 === false || v26 === false || v27 === false || v28 ===false || v29 === false) {
    //  alert("Es necesario llenar los campos solicitados");
        //$("#modalInicio").modal('show');
        //$("#mensaje-modal").html("Es necesario llenar todos los campos");
        modalError();

    }else{
      //$("#alertaFormulario").addClass("alert alert-success fade show");
        //  alert("enviando datos");
        modalSuccess();
      // los datos se enviaron corectamente
      //$("#alertaFormulario").show();
    }
  })
  $("#validacionServer02").keyup(function(){
    v1 = validar('validacionServer02')
    validar(v1);
  })
  $("#validacionServer08").keyup(function(){
    v10 = validar('validacionServer08')
    validar(v10);
  })
  $("#validacionServer03_1").keyup(function(){
    v4_1 = validar('validacionServer03_1')
    validar(v4_1);
  })
  $("#validacionServer03").keyup(function(){
    v4 = validar('validacionServer03')
    validar(v4);
  })
  $("#validacionServer07").keyup(function(){
    v9 = validar('validacionServer07')
    validar(v9);
  })
  $("#validacionServer07_1").keyup(function(){
    v9_1 = validar('validacionServer07_1')
    validar(v9_1);
  })
  $("#validacionServer14").keyup(function(){
    v21 = validar('validacionServer14')
    validar(v21);
  })
}
// funciones para modal alert
function modalError(){
  $("#icono_modal").remove()
  $("#modalInicio").modal('show');
  $("#mensaje-modal").html("Es necesario llenar todos los campos");
  $("#contenedor").append("<img src='images/error.png' id='icono_modal' class='img-responsive'width= '120' style='display: block; margin-left: auto;margin-right: auto;'>");
}
function modalSuccess(){
  $("#icono_modal").remove()
  $("#modalInicio").modal('show');
  $("#mensaje-modal").html("Los datos han sido enviado correctamente");
  $("#contenedor").append("<img src='images/check.png' id='icono_modal' class='img-responsive'width= '120' style='display: block; margin-left: auto;margin-right: auto;'>");
}
//--------

function validar(x){
  //alert("validar");
  //seleccionar una opcion
  if(x==='select-clave'){
    valor = document.getElementById(x).value;
    if (valor == 0) {
        //$('.error').text("Seleccione una Casa de Apuestas");
        $("#glypcn"+x).remove();
        //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
        $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
        $('#'+x).parent().children("span").text("Seleciona una clave").show();
        //agregaremos e
        return false;
    } else {
        //$('.errors').hide();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        return true;
    }
  }
  //seleccionar una opcion consorcio
  if(x==='select-clave-consorcio'){
    valor = document.getElementById(x).value;
    if (valor == 0) {
        //$('.error').text("Seleccione una Casa de Apuestas");
        $("#glypcn"+x).remove();
        //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
        $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
        $('#'+x).parent().children("span").text("Seleciona una clave").show();
        //agregaremos e
        return false;
    } else {
        //$('.errors').hide();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        return true;
    }
  }
  //este ya no existe
  if (x==='validacionServer01') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-8 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-8 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  //directorZonaAq
  if (x==='validacionServer02') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  //director contacto correo
  if (x==='validacionServer03') {
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-3 has-error has-feedback");
      $('#'+x).parent().children("span").text("Ingresa un correo electronico").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else if (!emailRegex.test(valor)) {
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-3 has-error has-feedback");
      $('#'+x).parent().children("span").text("Ingresa un correo electronico").show();
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }else{
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-3 has-success has-feedback");
      $('#'+x).parent().children("span").text("").show();
      $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
      return true;
    }
  }
  //director contacto telefono
  if (x==='validacionServer03_1') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-3 has-error has-feedback");
      $('#'+x).parent().children("span").text("Ingresar u número teléfonico").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else if(isNaN(valor)){
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-3 has-error has-feedback");
      $('#'+x).parent().children("span").text("Solo acepto números teléfonicos").show();
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-3 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // radio button
  if (x==='customRadioInline1'){
      // obtenemos todos los input radio del grupo horario que esten chequeados
      // si no hay ninguno lanzamos alerta
      if(!document.querySelector('input[name="customRadioInline1"]:checked')) {
        //alert('Error, rellena el campo horario');
        $('#'+x).parent().parent().attr("class", "form-group col-md-6 has-error has-feedback");
        $('#'+x).parent().parent().children("span").text("Selecciona una opción").show();
        return false;
      }else{
        //alert('enviando datos');
        return true;
      }
  }
  // radio button
  if (x==='customRadioInline3'){
      // obtenemos todos los input radio del grupo horario que esten chequeados
      // si no hay ninguno lanzamos alerta
      if(!document.querySelector('input[name="customRadioInline2"]:checked')) {
        //alert('Error, rellena el campo horario');
        $('#'+x).parent().parent().attr("class", "form-group col-md-6 has-error has-feedback");
        $('#'+x).parent().parent().children("span").text("Selecciona una opción").show();
        return false;
      }else{
        //alert('enviando datos');
        return true;
      }
  }
  //Oficios de autorización del consejo
  if (x==='validacionServer04') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  //proyecto de investigacion
  if (x==='validacionServer05') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  //Investigador titular
  if (x==='validacionServer06') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  //contacto del investigador cooreo
  if (x==='validacionServer07') {
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-3 has-error has-feedback");
      $('#'+x).parent().children("span").text("Ingresa un correo electronico").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else if (!emailRegex.test(valor)) {
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-3 has-error has-feedback");
      $('#'+x).parent().children("span").text("Ingresa un correo electronico").show();
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }else{
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-3 has-success has-feedback");
      $('#'+x).parent().children("span").text("").show();
      $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
      return true;
    }
  }
  //contacto del investigador telefono
  if (x==='validacionServer07_1') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-3 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else if(isNaN(valor)){
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-3 has-error has-feedback");
      $('#'+x).parent().children("span").text("Solo acepto valores númericos").show();
      return false;
    }
    else{
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-3 has-success has-feedback");
      $('#'+x).parent().children("span").text("").show();
      $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
      return true;
    }
  }
  //monto total del proyecto
  if (x==='validacionServer08') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().parent().attr("class", "form-group col-md-4 has-error has-feedback");
      $('#'+x).parent().parent().children("span").text("Tienes que ingresar el monto en número").show();
      //agregaremos e
      return false;
    }
    else if(isNaN(valor)){
      $("#glypcn"+x).remove();
      $('#'+x).parent().parent().attr("class", "form-group col-md-4 has-error has-feedback");
      $('#'+x).parent().parent().children("span").text("Solo acepto valores númericos").show();
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().parent().attr("class", "form-group col-md-4 has-success has-feedback");
        $('#'+x).parent().parent().children("span").text("").show();
        return true;
    }
  }
  // Fecha de inicio vigencia
  if(x=== 'fechaVigenciaInicio'){
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-4 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-4 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Fecha de Vigencia final
  if(x=== 'fechaVigenciaFinal'){
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-4 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-4 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Programa presupuestal
  if (x==='validacionServer09') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-4 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-4 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // radio button
  if (x==='customRadioInline5'){
      // obtenemos todos los input radio del grupo horario que esten chequeados
      // si no hay ninguno lanzamos alerta
      if(!document.querySelector('input[name="customRadioInline3"]:checked')) {
        //alert('Error, rellena el campo horario');
        $('#'+x).parent().parent().attr("class", "form-group col-md-4 has-error has-feedback");
        $('#'+x).parent().parent().children("span").text("Selecciona una opción").show();
        return false;
      }else{
        //alert('enviando datos');
        return true;
      }
  }
  // Fecha de inicio de entrega de requerimientos de la vigencia del proyecto
  if(x === 'fechaInicioEntrega'){
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-4 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-4 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // resguardos
  if (x==='validacionServer10') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Fecha de inicio de actividades
  if(x=== 'fechaIncioActividad'){
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-4 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // avance fisico
  if (x==='validacionServer11') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // avancee Financiero
  if (x==='validacionServer12') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Conservación
  if (x==='validacionServer13') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Enlace Conservación
  if (x==='validacionServer14') {
    var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Debe ser un enlace ejemplo https://drive.com").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else if (!regexp.test(valor)) {
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
        $('#'+x).parent().children("span").text("Debe ser un enlace ejemplo https://drive.com").show();
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Infraestructora
  if (x==='validacionServer15') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Enlace Infraestructura
  if (x==='validacionServer16') {
    var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
        $('#'+x).parent().children("span").text("Debe ser un enlace ejemplo https://drive.com").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else if (!regexp.test(valor)) {
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
        $('#'+x).parent().children("span").text("Debe ser un enlace ejemplo https://drive.com").show();
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Señaletica
  if (x==='validacionServer17') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Enlace Señaletica
  if (x==='validacionServer18') {
    var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
        $('#'+x).parent().children("span").text("Debe ser un enlace ejemplo https://drive.com").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else if (!regexp.test(valor)) {
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Debe ser un enlace ejemplo https://drive.com").show();
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Mueseografía
  if (x==='validacionServer19') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Enlace Mueseografía
  if (x==='validacionServer20') {
    var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
        $('#'+x).parent().children("span").text("Debe ser un enlace ejemplo https://drive.com").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else if (!regexp.test(valor)) {
      $("#glypcn"+x).remove();
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Debe ser un enlace ejemplo https://drive.com").show();
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Restauradora
  if (x==='validacionServer21') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
  // Observaciones
  if (x==='validacionServer22') {
    valor = document.getElementById(x).value;
    if (valor == null || valor.length == 0  ||  /^\s+$/.test(valor)){
      $("#glypcn"+x).remove();
      //mi referenica actual es valor | el metodo parent() encuentra al padre de la referencia | attr premite cambiar el atributo
      $('#'+x).parent().attr("class", "form-group col-md-6 has-error has-feedback");
      $('#'+x).parent().children("span").text("Tienes que ingresar los datos solicitados").show();
      //agregaremos e
      $('#'+x).parent().append("<span id='glypcn"+x+"' class='fa fa-times form-control-feedback'></span>");
      return false;
    }
    else {// este campo es valido
        $("#glypcn"+x).remove();
        $('#'+x).parent().attr("class", "form-group col-md-6 has-success has-feedback");
        $('#'+x).parent().children("span").text("").show();
        $('#'+x).parent().parent().append("<span id='glypcn"+x+"' class='fa fa-check form-control-feedback'></span>");
        return true;
    }
  }
}

function inNumeric(valor){
  return /^-?\s+$/.test(valor)
}

function isUrl(s) {
    var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
    return regexp.test(s);
}

function selectClaveArq(){
  var data=[{'0':'Selecciona un clave'},{'1':'04CLK'},{'2':'04EDZ'},{'3':'04JAI'},{'4':'04TIG'},{'5':'07PLQ'},{'6':'23KOH'},{'7':'23MEC'},
  {'8':'23MUY'},{'9':'23TUM'},{'10':'23COB'},{'11':'31CHC'},{'12':'31CHZ'},{'13':'31DZI'},{'14':'31EKB'},{'15':'31KAB'},
  {'16':'31LAB'},{'17':'31OXK'},{'18':'31SAY'},{'19':'31UXM'},{'20':'31XLA'}];

  $.each(data, function(key, value){
    var i = Object.keys(value)[0];
    $("select#select-clave").append($("<option/>").val(i).text(value[i]));
  })
}
