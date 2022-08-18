<div style="padding: 20px 0">
    <div class="container">
        <ul class="nav bg-light nav-pills">
            <li class="" role="presentation" ><a href="#nav-tab-paypal" data-toggle="pill"><i class="fa fa-paypal"></i>  Paypal</a></li>
            <li class="" role="presentation" ><a href="#nav-tab-bank" data-toggle="pill"><i class="fa fa-university"></i>  Transferencia</a></li>
            <li class="" role="presentation" ><a href="#nav-tab-efectivo" data-toggle="pill"><i class="fa fa-money"></i> Pago en Efectivo</a></li></li>
            <li class="" role="presentation" ><a href="#nav-tab-campeche" data-toggle="pill"><i class="fa fa-home"></i> Campeche</a></li></li>
        </ul>
        <div class="tab-content" id="ContenedorPrincipal">
            <div class="tab-pane active" id="nav-tab-paypal">
                <div id="SectionPaypalRegistro">
                    <div class="caja-cuerpo filterable">
                        <div class="panel-heading">
                            <div class="pull-right">
                                <button class="btn btn-success btn-xs btn-filter " style="width: 150px">
                                    <span class="fa fa-search"></span> Buscar</button>
                            </div>
                        </div>
                        <table class="table table-cell">
                            <thead>
                            <tr class="filters">
                                <th><input type="text" class="form-control" placeholder="NOMBRE" disabled></th>
                                <th><input type="text" class="form-control" placeholder="CORREO" disabled></th>
                                <th><input type="text" class="form-control" placeholder="INSTITUCION" disabled></th>
                                <th><input type="text" class="form-control" placeholder="PAIS" disabled></th>
                                <th><input type="text" class="form-control" placeholder="ESTATUS" disabled></th>
                            </tr>
                            </thead>
                            <tbody id="filas-tabla">
                            <?php $respuestaEfectivo = MvcController::ViewPagoPaypal(); ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane " id="nav-tab-bank">
                <div id="SectionTransferenciaRegistro">
                    <div class="caja-cuerpo filterable">
                        <div class="panel-heading">
                            <div class="pull-right">
                                <button class="btn btn-success btn-xs btn-filter " style="width: 150px">
                                    <span class="fa fa-searchh"></span> Buscar</button>
                            </div>
                        </div>
                        <table class="table table-cell">
                            <thead>
                            <tr class="filters">
                                <th><input type="text" class="form-control" placeholder="NOMBRE" disabled></th>
                                <th><input type="text" class="form-control" placeholder="CORREO" disabled></th>
                                <th><input type="text" class="form-control" placeholder="INSTITUCION" disabled></th>
                                <th><input type="text" class="form-control" placeholder="PAIS" disabled></th>
                                <th><input type="text" class="form-control" placeholder="ESTATUS" disabled></th>
                            </tr>
                            </thead>
                            <tbody id="filas-tabla">
                            <?php $respuestaEfectivo = MvcController::ViewPagoTransferencia(); ?>
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>

            <!-- tab-pane.// -->
            <div class="tab-pane " id="nav-tab-efectivo">
                <div id="SectionEfectivoRegistro">
                    <div class="caja-cuerpo filterable">
                        <div class="panel-heading">
                            <div class="pull-right">
                                <button class="btn btn-success btn-xs btn-filter " style="width: 150px">
                                    <span class="fa fa-search"></span> Buscar</button>
                            </div>
                        </div>
                        <table class="table table-cell">
                            <thead>
                            <tr class="filters">
                                <th><input type="text" class="form-control" placeholder="NOMBRE" disabled></th>
                                <th><input type="text" class="form-control" placeholder="CORREO" disabled></th>
                                <th><input type="text" class="form-control" placeholder="INSTITUCION" disabled></th>
                                <th><input type="text" class="form-control" placeholder="PAIS" disabled></th>
                                <th><input type="text" class="form-control" placeholder="ESTATUS" disabled></th>
                            </tr>
                            </thead>
                            <tbody id="filas-tabla">
                            <?php $respuestaEfectivo = MvcController::ViewPagoEfectivo(); ?>
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane " id="nav-tab-campeche">
                <div id="SectionTransferenciaRegistro">
                    <div class="caja-cuerpo filterable">
                        <div class="panel-heading">
                            <div class="pull-right">
                                <button class="btn btn-success btn-xs btn-filter " style="width: 150px">
                                    <span class="fa fa-search"></span> Buscar</button>
                            </div>
                        </div>
                        <table class="table table-cell">
                            <thead>
                            <tr class="filters">
                                <th><input type="text" class="form-control" placeholder="NOMBRE" disabled></th>
                                <th><input type="text" class="form-control" placeholder="CORREO" disabled></th>
                                <th><input type="text" class="form-control" placeholder="CIUDAD" disabled></th>
                                <th><input type="text" class="form-control" placeholder="MUNICIPIO" disabled></th>
                                <th><input type="text" class="form-control" placeholder="INSTITUCION" disabled></th>
                                <th><input type="text" class="form-control" placeholder="ESTUDIO" disabled></th>
                                <th><input type="text" class="form-control" placeholder="VIAJE" disabled></th>
                            </tr>
                            </thead>
                            <tbody id="filas-tabla">
                            <?php $respuestaEfectivo = MvcController::ViewPagoCampeche(); ?>
                            </tbody>


                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>