
<div class="flexbox center">
    <div class="col-80">
        <div class="">
            <h3 class="text-center">Envíe su Propuesta</h3>
            <p class="justificado">
                Todo trabajo presentado en el Simposio Internacional será publicado en la revista científica del COESICYDET.
                <br>
                Para esto cada propuesta es evaluada por el Comité Científico ayudada por otros expertos en el ramo. Solicitamos
                enviar un resumen del trabajo propuesto, con fecha límite del 15 de agosto.
            </p>
            <p class="justificado">El resumen debe cumplir los siguientes requisitos:</p>
            <ul>
                <li>En forma clara explicar cómo el trabajo propuesto encaja dentro de la temática del Seminario Internacional</li>
                <li>El resumen no debe exceder una página en formato A4</li>
                <li>Los autores del trabajo propuesto deben ser debidamente identificados con nombre(s), institución(es)
                    y direcciones postales y electrónicas.</li>
            </ul>
            <p class="justificado">Se convoca atentamente a presentar trabajos sobre los siguientes temas:</p>
            <ul>
                <li>Uso de la tecnología especial para el manejo de áreas protegidas</li>
                <li>Apoyo a investigación arqueológica</li>
                <li>Apoyo a actividades de sustentabilidad</li>
                <li>Monitoreo del hábitat y/o biodiversidad</li>
                <li>Apoyo a material educativo</li>
                <li>Apoyo a los Objetivos de Desarrollo Sustentable de Naciones Unidas</li>
                <li>Desafíos encontrados en el manejo de sitios culturales y/o naturales</li>
                <li>Cualquier otro tema relevante a la temática del Simposio</li>
            </ul>
            <p class="justificado">Instrucciones: Favor de preparar el resumen en el formato indicado en esta página y
                cargar el documento en formato WORD usando el proceso indicado en esta página.</p>
            <a href="image/Organizadores/Formato-para-los-Resumenes.docx" target="_blank"> <i class="fa fa-file-word-o" aria-hidden="true"></i> Formato para los Resumenes <i class="fa fa-download" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
<hr>
<div class="formulario flexbox center">
    <div class="col-80">
        <div class="container text-center flexbox center">
            <!--<form class="form-horizontal" method="POST" enctype="multipart/form-data">
                <h3 class="text-center">Envíe su Propuesta</h3>

                <div class="form-group">
                    <label for="nombre" class="col-sm-3 control-label">Nombre</label>
                    <div class="col-sm-6">
                        <input type="text" id="nombre" name="Ponencianombre" required placeholder="Nombre completo" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label for="correo" class="col-sm-3 control-label">Correo Electrónico</label>
                    <div class="col-sm-6">
                        <input type="email" id="correo" name="Ponenciacorreo" required placeholder="ejemplo@ejemplo.com" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label for="institucion" class="col-sm-3 control-label">Institución</label>
                    <div class="col-sm-6">
                        <input type="text" id="institucion" name="Ponenciainstitucion" required placeholder="Nombre de la institución" class="form-control" autofocus>

                    </div>
                </div>

                <div class="form-group">
                    <label for="pais" class="col-sm-3 control-label">País</label>
                    <div class="col-sm-6">
                        <input type="text" id="pais"  name="Ponenciapais" required placeholder="Nombre de tu país" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="titulo" class="col-sm-3 control-label">Nombre de ponencia</label>
                    <div class="col-sm-6">
                        <input type="text" id="titulo" name="Ponenciatitulo" required placeholder="Este sera el título de tu ponencia" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion" class="col-sm-3 control-label">Nombre de Coautores e Instituciones, (favor de poner cada autor en líneas diferentes)</label>
                    <div class="col-sm-6">
                        <textarea required name="Ponenciadescripcion" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="archivo" class="col-sm-3 control-label">Cargar archivo</label>
                    <div class="col-sm-6">
                        <input type="file" required name="archivo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-offset-3">
                        <button type="submit" class="btn btn-info">Enviar</button>
                    </div>
                </div>
            </form>-->
            <?php
                $envioEmail = new MvcController();
                #$envioEmail -> correoController();
                $envioEmail -> sendEmail();
            ?>
            <!-- /form -->
        </div>
    </div>

</div>