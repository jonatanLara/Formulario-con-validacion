
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/zoomove/1.2.1/zoomove.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <title>Programa de Mejoramiento de Zonas arqueológicas</title>
</head>
<body>
  <div class="main">
    <div class="container">
        <form id="formulario" >
            <h4 class="text-center"><strong>Investigación</strong></h4>
            <br>
            <div class="form-row">

              <div class="form-group col-md-6 ">
                <label for="" class="">Clave zona Arqueológica</label>
                <select class="custom-select form-control " id="select-clave" required>
                </select>
                <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6 ">
                <label for="validacionServer01">Consorcio</label>
                <select class="custom-select form-control " id="select-clave-consorcio" required>
                  <option value ="0" selected>Selecciona un consorcio</option>
                  <option value="1">001</option>
                  <option value="2">002</option>
                  <option value="3">003</option>
                </select>
                <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6">
                  <label for="nombre">Director de la Zona Arqueológica</label>
                  <input type="text" class="form-control is-valid" name="directorZonaAq" id="validacionServer02" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-3">
                  <label for="validacionSever03">Correo</label>
                  <input type="email" class="form-control is-valid" id="validacionServer03" name="contactoDirectorZq" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-3">
                  <label for="validacionSever03">Teléfono</label>
                  <input type="tel" class="form-control is-valid" maxlength="10" id="validacionServer03_1" parent="[0-9]{3}-[0-9]{2}-[0-9]{3}" name="contactoDirectorZq" value="">
                  <span class="help-block"></span>
              </div>
              <!-- Separador -->
              <h4 class="separador "> Generales </h4>

              <div class="form-group col-md-6 ">
                <label class="">Proyecto Elaborado</label>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" name="customRadioInline1" value="si" class="custom-control-input">
                  <label class="custom-control-label" id="customRadioInline1SI" for="customRadioInline1">SI</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="customRadioInline1" value="no" class="custom-control-input">
                  <label class="custom-control-label" id="customRadioInline1NO" for="customRadioInline2">NO</label>
                </div>
                <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6">
                <label class="">Proyecto Aurizado</label>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline3" name="customRadioInline2" value="si" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline3">SI</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline4" name="customRadioInline2" value="no" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline4">NO</label>
                </div>
                <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6">
                  <label for="">Oficios de autorización del consejo</label>
                  <input type="text"  id="validacionServer04" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Proyecto investigación</label>
                  <input type="text"  id="validacionServer05" class="form-control is-valid"name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Investigador titular</label>
                  <input type="text"  id="validacionServer06" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-3">
                  <label for="">Correo</label>
                  <input type="email" id="validacionServer07" class="form-control is-valid" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-3">
                  <label for="validacionSever07_1">Teléfono</label>
                  <input type="tel" class="form-control is-valid" min="1" step="1" maxlength="10" id="validacionServer07_1" parent="[0-9]{3}-[0-9]{2}-[0-9]{3}"  id="validacionServer07_1" name="contactoTelefono" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-4">
                  <label for="">Monto Total del Proyecto</label>
                  <div class="input-group" >
                    <input type="number" id="validacionServer08" class="form-control is-valid" name="" value="">
                    <span class="input-group-addon">MXN</span>
                  </div>
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-4">
                  <label for="">Inicio de la Vigencia del Proyecto</label>
                  <input type="date" class="form-control" id="fechaVigenciaInicio" name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-4">
                  <label for="">Termino de la Vigencia del Proyecto</label>
                  <input type="date" class="form-control" id="fechaVigenciaFinal" name="" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-4">
                  <label for="">Programación presupuestal de requerimientos</label>
                  <input type="text"  id="validacionServer09" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-4 ">
                <label class="">Proyecto Elaborado</label>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline5" name="customRadioInline3" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline5">SI</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline6" name="customRadioInline3" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline6">NO</label>
                </div>
                <span class="help-block"></span>
              </div>

              <div class="form-group col-md-4">
                  <label for="">Inicio de entrega de requerimiento de la Vigencia del Proyecto</label>
                  <input type="date" class="form-control" name="" id="fechaInicioEntrega" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6">
                  <label for="">Resguardos</label>
                  <input type="text" id="validacionServer10" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6">
                  <label for="">Inicio de actividades</label>
                  <input type="date" class="form-control" name="" id="fechaIncioActividad" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6">
                  <label for="">Avance Físico</label>
                  <input type="text" id="validacionServer11" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6">
                  <label for="">Avance Financiero</label>
                  <input type="text" id="validacionServer12" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6">
                  <label for="">Conservación</label>
                  <input type="text" id="validacionServer13" class="form-control is-valid" class="form-control"name="" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6">
                  <label for="">Enlace</label>
                  <input type="text" id="validacionServer14" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Infraestructura</label>
                  <input type="text" id="validacionServer15" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Enlace</label>
                  <input type="text" id="validacionServer16" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Señaletica</label>
                  <input type="text" id="validacionServer17" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Enlace</label>
                  <input type="text" id="validacionServer18" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Mueseografía</label>
                  <input type="text" id="validacionServer19" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Enlace</label>
                  <input type="text" id="validacionServer20" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>

              <div class="form-group col-md-6">
                  <label for="">Restauradora(S)</label>
                  <input type="text" id="validacionServer21" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>
              <div class="form-group col-md-6">
                  <label for="">Observaciones</label>
                  <input type="text" id="validacionServer22" class="form-control is-valid" name="" value="">
                  <span class="help-block"></span>
              </div>



              <div class="form-group col-md-12">
                <button type="button"  class="btn btn-primary btn-lg btn-block" id="btnvalidar" >Enviar</button>
              </div>
            </div>
          </form>
      </div>
  </div>

  <!--Modeal de inicio -->

  <div class="modal fade " id="modalInicio" role="dialog">
    <div class="modal-dialog" style="width: 50% !important;">
        <!-- Modal content-->
        <div class="modal-content flexbox-wrap flexbox-colum" id="promocion">
            <div class="modal-header flexbox flexbox-flex-end" style="border-bottom:none">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body flexbox-wrap flexbox-colum" id="contenedor">

              <h3 id="mensaje-modal" style="text-align: center;"></h3>

            </div>
            <div class="flexbox center">
              <button type="button" class="btn btn-primary" data-dismiss="modal" >Intentar de nuevo</button>
            </div>
            <br>
        </div>
    </div>
  </div>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/buscador.js"></script>
    <script src="js/velocity.min.js"></script>
    <script src="js/velocity.ui.min.js"></script>
    <script src="js/model.js"></script>
    <script src="js/formulario-validacion.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zoomove/1.2.1/zoomove.min.js"></script>


    <script>

        function PopMensaje() {
            $('#modalInicio').animate({
                opacity: 1,
                top: "50%"
            }, 800);
        }

        $(document).ready(function(){
            //esto es para hacer zoom a las imagenes
            $('.zoo-item').ZooMove();
            //---------------------
            AOS.init({
                offset: 200,
                duration: 600,
                easing: 'ease-in-sine',
                delay: 100,
            });
            //---------------------
            $(window).scroll(function(){
                var scrollTop = $(window).scrollTop();
                if (scrollTop > 49) {
                    $('body').addClass('header-fixed');
                    $('#header').css("padding-top","10px");
                } else {
                    $('body').removeClass('header-fixed');
                    $('#header').css("padding-top","0px");
                }
            })
            //-----------------------

        })
    </script>
</body>
</html>
