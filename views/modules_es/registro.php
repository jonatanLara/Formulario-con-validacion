<div class="container">
    <h3 class="text-center">Inscripción al evento</h3>
    <p class="justificado"> <span>Costo de participación:</span> 400 dólares para extranjeros y 150 dólares para nacionales-mexicanos</p>
    <h3 class="text-center">Notas:</h3>
    <ul>
        <li>
            Gracias a la generosa contribución de un donante, todos los participantes mexicanos
            benefician de un precio especial,
            la contribución del donante cubre la diferencia entre extranjeros y nacionales.
        </li>
        <li>
            Los residentes en Campeche tendrán opción de becas, favor de contactar a Coesicydet.
        </li>
    </ul>
    <p>Para los participantes extranjeros (no nacionales de México) les recomendamos que la forma mas sencilla de pagar es en efectivo, en USD o Euros (400 USD = 3250 Euros). Esto puede hacerse:
    </p>
    <ul><li>a)  En la mesa-registro en la recepción del Hotel Gamma Campeche (domingo de 14:00 a 18:00 horas, lunes de 10:00 a 12:00 horas) o
        </li>
    <li> b)   el martes en el Centro de Convenciones de Campeche</li></ul>





    Gracias a la contribucion generosa de un donante, cada participante de Mexico cuenta con 250 USD para cubrir el registro de 400 USD. Por lo tanto solo quedan a pagar 150 USD (3000 Pesos) a cada participante de Mexico

    Exclusivamente para los nacionales de México pagos en transferencia, PayPal o efectivo en Pesos Mexicanos, 150 USD = 3,000 pesos

</div>
<!--<div class="flexbox center">
    <div class="col-80">
        <div class="container text-center flexbox center">
            <form class="form-horizontal col-60" method="POST" >
                <h3 class="text-center">Inscripción al evento</h3>

                <div class="form-group">
                    <label for="nombre" class="col-md-3 control-label">Nombre </label>
                    <div class="col-md-9">
                        <input type="text" id="nombre" name="Registronombre" required placeholder="Nombre Completo" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label for="correo" class="col-md-3 control-label">Correo Electrónico</label>
                    <div class="col-md-9">
                        <input type="email" id="correo" name="Registrocorreo" required placeholder="ejemplo@ejemplo.com" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label for="institucion" class="col-sm-3 control-label">Institución</label>
                    <div class="col-sm-9">
                        <input type="text" id="institucion" name="Registroinstitucion" required placeholder="Nombre de la institución" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label for="pais" class="col-sm-3 control-label">País</label>
                    <div class="col-sm-9">
                        <input type="text" id="pais"  name="Registropais" required placeholder="Nombre de tu país" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pais" class="col-sm-3 control-label">Forma de pago</label>
                    <div class="col-sm-9">
                        <select name="select" class="form-control">
                            <option value="value1">Pago en efectivo</option>
                            <option value="value2" selected>Pago depósito a cuenta</option>
                            <option value="value3">Pago por PayPal</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-info">Enviar</button>
                    </div>
                </div>
            </form>
            <?php
/*            $envioEmail = new MvcController();
            */?>

        </div>
    </div>

</div>-->

<div class="container">

    <div class="flexbox center">
        <div class="col-80">
            <div class="">
                <div class="panel-body flexbox center">
                    <aside class="col-sm-6" style="border-radius: .25rem;border: 1px solid rgba(0,0,0,.125); padding: 10px">
                        <div class="bs-example" data-example-id="simple-nav-pills">
                            <ul class="nav bg-light nav-pills">
                                <li class="" role="presentation" ><a href="#nav-tab-paypal" data-toggle="pill"><i class="fa fa-paypal"></i>  Paypal</a></li>
                                <li class="" role="presentation" ><a href="#nav-tab-bank" data-toggle="pill"><i class="fa fa-university"></i>  Transferencia</a></li>
                                <li class="" role="presentation" ><a href="#nav-tab-efectivo" data-toggle="pill"><i class="fa fa-money"></i> Pago en Efectivo</a></li></li>
                            </ul>
                            <div class="tab-content" id="ContenedorPrincipal">
                                <div class="tab-pane active" id="nav-tab-paypal">
                                    <div id="SectionPaypalRegistro">
                                        <p class="alert alert-info">Paypal es la forma más fácil de pagar en línea</p>
                                        <form class="form-horizontal " method="POST" >
                                            <div class="form-group">
                                                <label for="nombre" class="col-md-3 control-label">Nombre </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nombre" name="paypalnombre" required placeholder="Nombre Completo" class="form-control" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="correo" class="col-md-3 control-label">Correo Electrónico</label>
                                                <div class="col-md-9">
                                                    <input type="email" id="correo" name="paypalcorreo" required placeholder="ejemplo@ejemplo.com" class="form-control" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="institucion" class="col-sm-3 control-label">Institución</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="institucion" name="paypalinstitucion" required placeholder="Nombre de la institución" class="form-control" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pais" class="col-sm-3 control-label">País</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="pais"  name="paypalpais" required placeholder="Nombre de tu país" class="form-control">
                                                </div>
                                            </div>
                                            <button class="subscribe btn btn-primary btn-block" id="btn-paypal" type="submit"> Confirmar </button>
                                            <br>
                                            <input type="hidden" name="activate" value="nav-tab-paypal">
                                        </form>
                                    </div>

                                </div>

                                <div class="tab-pane " id="nav-tab-bank">
                                    <br>
                                    <div id="SectionTransferenciaRegistro">
                                        <p class="alert alert-info">Presenta tu voucher el día del evento</p>
                                        <form class="form-horizontal " method="POST" >
                                            <div class="form-group">
                                                <label for="nombre" class="col-md-3 control-label">Nombre </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nombre" name="transferencianombre" required placeholder="Nombre Completo" class="form-control" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="correo" class="col-md-3 control-label">Correo Electrónico</label>
                                                <div class="col-md-9">
                                                    <input type="email" id="correo" name="transferenciacorreo" required placeholder="ejemplo@ejemplo.com" class="form-control" autofocus>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="institucion" class="col-sm-3 control-label">Institución</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="institucion" name="transferenciainstitucion" required placeholder="Nombre de la institución" class="form-control" autofocus>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pais" class="col-sm-3 control-label">País</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="pais"  name="transferenciapais" required placeholder="Nombre de tu país" class="form-control">
                                                </div>
                                            </div>
                                            <button class="subscribe btn btn-primary btn-block" id="btn-transferencia" type="submit"> Confirmar </button>
                                            <br>
                                        </form>
                                    </div>

                                </div>

                                <!-- tab-pane.// -->
                                <div class="tab-pane " id="nav-tab-efectivo">
                                    <div id="SectionEfectivoRegistro">
                                        <p class="alert alert-info">En el lugar del evento se recibirá el pago por un monto de 200 USD</p>
                                        <form class="form-horizontal" method="POST" >
                                            <div class="form-group">
                                                <label for="nombre" class="col-md-3 control-label">Nombre </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nombre" name="efectivonombre" required placeholder="Nombre Completo" class="form-control" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="correo" class="col-md-3 control-label">Correo Electrónico</label>
                                                <div class="col-md-9">
                                                    <input type="email" id="correo" name="efectivocorreo" required placeholder="ejemplo@ejemplo.com" class="form-control" autofocus>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="institucion" class="col-sm-3 control-label">Institución</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="institucion" name="efectivoinstitucion" required placeholder="Nombre de la institución" class="form-control" autofocus>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pais" class="col-sm-3 control-label">País</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="pais"  name="efectivopais" required placeholder="Nombre de tu país" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="estado" class="col-sm-3 control-label">Ciudad</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="estado"  name="efectivoestado" required placeholder="Nombre de tu ciudad" class="form-control">
                                                </div>
                                            </div>
                                            <button class="subscribe btn btn-primary btn-block" id="btn-efectivo" type="submit"> Confirmar </button>
                                            <br>
                                        </form>
                                    </div>
                                </div> <!-- tab-pane.// -->

                            </div>
                            <?php $registroPaypal = new MvcController(); $registroPaypal->paypalRegistroController();?>
                            <?php $registroTransferencia = new MvcController(); $registroTransferencia->transferenciasRegistroController(); ?>
                            <?php $registroEfectivo = new MvcController(); $registroEfectivo->efectivoRegistroController(); ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div> <!-- row.// -->

</div>