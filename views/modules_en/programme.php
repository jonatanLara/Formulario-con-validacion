<div class="programa flexbox center">
    <div class="container">
        <h3 class="text-center">Our honorary keynote speakers</h3>
        <div class="container">
            <p class="text-center"><strong>(Click on the images to see the CV)</strong></p>
            <div class="flexbox center">
                <?php
                $programas = new MvcController();
                $programas ->ponentesEnController();
                $programas ->ponentesModalenController();
                ?>
            </div>
        </div>
        <div class="container">
            <div class="container">
                <div style="padding: 15px">
                    <div class="col-md-6">
                        <div class="video">
                            <video controls style="width: 100%; height: auto" src="multimedia/simposio.mp4"></video>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-center"><img src="image/logo.png" style="width: 100px" height="auto" alt=""><a href="../../multimedia/program.pdf" target="_blank"><i class="fa fa-download"></i> Download Programme</a></h4>
                        <h4 class="text-center"><img src="multimedia/grupal.jpg" style="width: 100px" height="auto" alt=""><a href="../../multimedia/grupal.jpg" target="_blank"><i class="fa fa-download"></i> Download Groupal Photo</a></h4>
                    </div>
                </div>
            <!--<div class="alert alert-info" role="alert">
            <!--<h3 class="text-center">Programa General</h3>
            <div class="container ">
                <div class="card-header"><h4><i class="fa fa-calendar"></i> Itinerarios de Vuelos</h4></div>
                <div class="card-block p-0">
                    <table class="table table-bordered table-sm m-0">
                        <thead class="">
                        <tr>
                            <th>AEROLÍNEA</th>
                            <th>NÚMERO DE VUELO</th>
                            <th>HORARIO DE LLEGADA</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="https://www.aeromexico.com/" target="_blank">Aeromexico</a></td>
                            <td>AM2440</td>
                            <td>07:52 horas</td>
                        </tr>
                        <tr>
                            <td><a href="https://www.aeromexico.com/" target="_blank">Aeromexico</a></td>
                            <td>AM2442</td>
                            <td>19:43 horas</td>
                        </tr>
                        <tr>
                            <td><a href="https://www.interjet.com.mx/" target="_blank">Interjet</a></td>
                            <td>3504</td>
                            <td>11:20 horas</td>
                        </tr>
                        <tr>
                            <td><a href="https://www.interjet.com.mx/" target="_blank">Interjet</a></td>
                            <td>3506</td>
                            <td>18:45 horas</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="alert alert-success"><i class="glyphicon glyphicon-info-sign"></i> Nota: Se tendrá personal del COESICYDET recibiendo a expositores indicando los taxis con convenio para el traslado al hotel sede el día 31 de marzo del 2017.</div>
                <div class="alert alert-warning"><i class="glyphicon glyphicon-warning-sign"></i> Nota: En caso de no encontrar disponibilidad de vuelos, explorar la opción por Mérida Yucatán.</div>
            </div>-->
            <!--<div class="">
                <div class="card-header">
                    <h4 class="text-center">
                        <i class="fa fa-calendar"></i> Programme in a glance</h4>
                </div>
                <div class="col-md-4">
                    <div class="card-block p-0">
                        <h5 style="text-align: center;font-weight: bold">Tuesday</h5>
                        <h5 style="text-align: center">September 18th, 2018</h5>
                        <table class="table table-bordered table-sm m-0">
                            <thead class="">
                            <tr>

                                <th>Hour</th>
                                <th>ACTIVITY</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>09:00 - 09:30 am</td>
                                <td>Registration</td>
                            </tr>
                            <tr>
                                <td>09:30 - 11:00 am</td>
                                <td>Official Opening </td>
                            </tr>
                            <tr>
                                <td>11:00 - 11:30 am</td>
                                <td>Keynote</td>
                            </tr>
                            <tr>
                                <td>11:30 - 12:00 am</td>
                                <td>Coffee break</td>
                            </tr>
                            <tr>
                                <td>12:00 - 12:30 am</td>
                                <td>Keynote</td>
                            </tr>
                            <tr>
                                <td>12:30 - 01:00 pm</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>01:00 - 01:30 pm</td>
                                <td>LUNCH</td>
                            </tr>
                            <tr>
                                <td>01:30 - 01:50 pm</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>01:50 - 02:10 pm</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>02:10 - 02:30 pm</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>02:30 - 02:50 pm</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>02:50 - 03:20 pm</td>
                                <td>Coffee Break</td>
                            </tr>
                            <tr>
                                <td>03:20 - 03:40 pm</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>03:40 - 04:00 pm</td>
                                <td>Keynote</td>
                            </tr>
                            <tr>
                                <td>04:00 - 05:00 pm</td>
                                <td>Round table discussion</td>
                            </tr>
                            <tr>
                                <td>05:00 - 05:30 pm</td>
                                <td>Conclusions</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-block p-0">
                        <h5 style="text-align: center;font-weight: bold">Wednesday</h5>
                        <h5 style="text-align: center">September 19th, 2018</h5>
                        <table class="table table-bordered table-sm m-0">
                            <thead class="">
                            <tr>
                                <th>HOUR</th>
                                <th>ACTIVITY</th>
                            </tr>
                            </thead>
                            <tbody>
                                <td>09:30 - 10:00 am</td>
                                <td>Keynote</td>
                            </tr>
                            <tr>
                                <td>10:00 - 10:30 am</td>
                                <td>Keynote</td>
                            </tr>
                                <tr>
                                    <td>10:30 - 11:00 am</td>
                                    <td>Coffee Break</td>
                                </tr>
                            <tr>
                                <td>11:30 – 11:50 am</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>11:50 – 12:10 am</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>12:10 – 12:30 am</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>12:30 – 02:00 pm</td>
                                <td>LUNCH</td>
                            </tr>
                            <tr>
                                <td>02:15 pm</td>
                                <td>Departure to the Edzná Maya Archaeological Site</td>
                            </tr>
                            <tr>
                                <td>07:00 pm</td>
                                <td>Back to Campeche</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-block p-0">
                        <h5 style="text-align: center;font-weight: bold">Thursday</h5>
                        <h5 style="text-align: center">September 20th, 2018</h5>
                        <table class="table table-bordered table-sm m-0">
                            <thead class="">
                            <tr>
                                <th>HOUR</th>
                                <th>ACTIVITY</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>09:30 - 10:00 am</td>
                                <td>Keynote</td>
                            </tr>
                            <tr>
                                <td>10:00 - 10:30 am</td>
                                <td>Keynote</td>
                            </tr>
                            <tr>
                                <td>10:30 - 11:00 am</td>
                                <td>Keynote</td>
                            </tr>
                            <tr>
                                <td>11:00 - 11:30 am</td>
                                <td>Coffee break</td>
                            </tr>
                            <tr>
                                <td>11:30 - 11:50 am</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>11:50 - 12:10 am</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>12:10 - 12:30 am</td>
                                <td>Technical Session</td>
                            </tr>
                            <tr>
                                <td>12:30 - 02:00 pm</td>
                                <td>LUNCH</td>
                            </tr>
                            <tr>
                                <td>02:10 - 03:30 pm</td>
                                <td>Overall discussion roundtable</td>
                            </tr>
                            <tr>
                                <td>03:30 - 04:00 pm</td>
                                <td>Keynote</td>
                            </tr>
                            <tr>
                                <td>04:00 - 04:30 pm</td>
                                <td>Conclusions</td>
                            </tr>
                            <tr>
                                <td>04:30 - 05:00 pm</td>
                                <td>Closing Remarks</td>
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