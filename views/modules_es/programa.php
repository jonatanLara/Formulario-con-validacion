<div class="programa flexbox center">
    <div class="container">
        <h3 class="text-center">Ponentes de Conferencias Magistrales</h3>
        <div class="container">
            <p class="text-center"><strong>(Clickear sobre la imagen para ver el CV)</strong></p>
            <div class="flexbox center">
                <?php
                 $programas = new MvcController();
                 $programas ->ponentesEsController();
                 $programas ->ponentesModalController();
                ?>
            </div>
        </div>
        <div class="container">
            <div style="padding: 15px">
                <div class="col-md-6">
                    <div class="video">
                        <video controls style="width: 100%; height: auto" src="multimedia/simposio.mp4"></video>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center"><img src="image/logo.png" style="width: 100px" height="auto" alt=""><a href="../../multimedia/program.pdf" target="_blank"><i class="fa fa-download"></i> Descargar Programa</a></h4>
                    <h4 class="text-center"><img src="multimedia/grupal.jpg" style="width: 100px" height="auto" alt=""><a href="../../multimedia/grupal.jpg" target="_blank"><i class="fa fa-download"></i> Descargar Foto Grupal</a></h4>
                </div>
            </div>

            <!--<div class="alert alert-info" role="alert">
                Nota: Los participantes también pueden registrarse en la mesa-de-registro del lobby del Hotel Gamma Campeche que estará disponible el domingo y lunes de las 15:00 a las 19:00 horas
            </div>
                <div class="card-header">
                    <h4 class="text-center">
                        <i class="fa fa-calendar"></i> Itinerarios de Actividades</h4>
                </div>
                <div class="col-md-4">
                    <div class="card-block p-0">
                        <h5 style="text-align: center;font-weight: bold">Martes</h5>
                        <h5 style="text-align: center">18 de Septiembre del 2018</h5>
                        <table class="table table-bordered table-sm m-0">
                            <thead class="">
                            <tr>
                                <th>HORA</th>
                                <th>ACTIVIDAD</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>09:00 - 09:30 horas</td>
                                <td>Registro</td>
                            </tr>
                            <tr>
                                <td>09:30 - 11:00 horas</td>
                                <td>Inauguración </td>
                            </tr>
                            <tr>
                                <td>11:00 - 11:30 horas</td>
                                <td>Conferencia Magistral</td>
                            </tr>
                            <tr>
                                <td>11:30 - 12:00 horas</td>
                                <td>Coffee break</td>
                            </tr>
                            <tr>
                                <td>12:00 - 12:30 horas</td>
                                <td>Conferencia Magistral</td>
                            </tr>
                            <tr>
                                <td>12:30 - 13:00 horas</td>
                                <td>Ponencias</td>
                            </tr>
                            <tr>
                                <td>13:00 - 13:30 horas</td>
                                <td>LUNCH</td>
                            </tr>
                            <tr>
                                <td>13:30 - 13:50 horas</td>
                                <td>Ponencias</td>
                            </tr>
                            <tr>
                                <td>13:50 - 14:10 horas</td>
                                <td>Ponencias</td>
                            </tr>
                            <tr>
                                <td>14:10 - 14:30 horas</td>
                                <td>Ponencias</td>
                            </tr>
                            <tr>
                                <td>14:30 - 14:50 horas</td>
                                <td>Ponencias</td>
                            </tr>
                            <tr>
                                <td>14:50 - 15:20 horas</td>
                                <td>Coffee Break</td>
                            </tr>
                            <tr>
                                <td>15:20 - 15:40 horas</td>
                                <td>Ponencia</td>
                            </tr>
                            <tr>
                                <td>15:40 - 16:00 horas</td>
                                <td>Conferencia Magistral</td>
                            </tr>
                            <tr>
                                <td>16:00 - 17:00 horas</td>
                                <td>Mesa Redonda de Discusión</td>
                            </tr>
                            <tr>
                                <td>17:00 - 17:30 horas</td>
                                <td>Conclusiones</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-block p-0">
                        <h5 style="text-align: center;font-weight: bold">Miércoles</h5>
                        <h5 style="text-align: center">19 de Septiembre del 2018</h5>
                        <table class="table table-bordered table-sm m-0">
                            <thead class="">
                            <tr>
                                <th>HORA</th>
                                <th>ACTIVIDAD</th>
                            </tr>
                            </thead>
                            <tbody>
                                <td>09:30 - 10:00 horas</td>
                                <td>Conferencia Magistral </td>
                            </tr>
                            <tr>
                                <td>10:00 - 10:30 horas</td>
                                <td>conferencia Magistral</td>
                            </tr>
                            <tr>
                                <td>11:30 – 11:50 horas</td>
                                <td>Ponencias</td>
                            </tr>
                            <tr>
                                <td>11:50 – 12:10 horas</td>
                                <td>Ponencias</td>
                            </tr>
                            <tr>
                                <td>12:10 – 12:30 horas</td>
                                <td>Ponencias</td>
                            </tr>
                            <tr>
                                <td>12:30 – 14:00 horas</td>
                                <td>LUNCH</td>
                            </tr>
                            <tr>
                                <td>14:15 horas</td>
                                <td>Visita al sitio arqueológico Maya de Edzná</td>
                            </tr>
                            <tr>
                                <td>19:00 horas</td>
                                <td>Regreso a Campeche</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-block p-0">
                        <h5 style="text-align: center;font-weight: bold">Jueves</h5>
                        <h5 style="text-align: center">20 de Septiembre del 2018</h5>
                        <table class="table table-bordered table-sm m-0">
                            <thead class="">
                            <tr>
                                <th>HORA</th>
                                <th>ACTIVIDAD</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>09:30 - 10:00 horas</td>
                                <td>Conferencia Magistral</td>
                            </tr>
                            <tr>
                                <td>10:00 - 10:30 horas</td>
                                <td>Conferencia Magistral </td>
                            </tr>
                            <tr>
                                <td>10:30 - 11:00 horas</td>
                                <td>Conferencia Magistral</td>
                            </tr>
                            <tr>
                                <td>11:00 - 11:30 horas</td>
                                <td>Coffee break</td>
                            </tr>
                            <tr>
                                <td>11:30 - 11:50 horas</td>
                                <td>Sesión Técnica</td>
                            </tr>
                            <tr>
                                <td>11:50 - 12:10 horas</td>
                                <td>Sesión Técnica</td>
                            </tr>
                            <tr>
                                <td>12:10 - 12:30 horas</td>
                                <td>Sesión Técnica</td>
                            </tr>
                            <tr>
                                <td>12:30 - 14:00 horas</td>
                                <td>LUNCH</td>
                            </tr>
                            <tr>
                                <td>14:10 - 15:30 horas</td>
                                <td>Mesa Redonda de Discusión</td>
                            </tr>
                            <tr>
                                <td>15:30 - 16:00 horas</td>
                                <td>Conferencia Magistral</td>
                            </tr>
                            <tr>
                                <td>16:00 - 16:30 horas</td>
                                <td>Conclusiones</td>
                            </tr>
                            <tr>
                                <td>16:30 - 17:00 horas</td>
                                <td>Clausura</td>
                            </tr>
                            <tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>-->

        </div>
    </div>
</div>