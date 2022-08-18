
<div class="flexbox center">
    <div class="col-80">
        <div class="">
            <h3 class="text-center">Call for Papers</h3>
            <p class="justificado">
                All papers presented at the International Symposium will be published at the Scientific Journal of  COESICYDET
                (The State Council for Scientific Research and Technological Development for the State of Campeche (in Spanish COESICYDET)).
                <br>
                Please submit an abstract (no later than 15th of August) following the guidelines explained in this web page.
            </p>
            <p class="justificado">The abstract should be no longer than one A4 format, in English or Spanish.</p>
            <ul>
                <li>Explain how your work make a contribution in the Symposium</li>
                <li>Your abstract must to be no more than one page in format A4</li>
                <li>The authors have to write the name, institute, address and e-mail</li>
            </ul>
            <p class="justificado">Papers to be presented will cover the following themes:</p>
            <ul>
                <li>Using space technologies for the management and monitoring of protected areas</li>
                <li>Assistance to archaeological research</li>
                <li>Assistance towards sustainability</li>
                <li>Monitoring biodiversity habitat</li>
                <li>Support to educational packages</li>
                <li>Support to the UN Agenda 2030</li>
                <li>Problems found and lessons learnt while managing a heritage site</li>
                <li>Another topic related with the Symposium</li>
            </ul>
            <p class="justificado">Instructions: Please prepare your abstract in the format requiered in this website, upload the document
                in WORD format (.docx)</p>
            <a href="image/Organizadores/Abstract-Files.docx" target="_blank"> <i class="fa fa-file-word-o" aria-hidden="true"></i> Format Example <i class="fa fa-download" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
<hr>
<div class="formulario flexbox center">
    <div class="col-80">
        <div class="container text-center flexbox center">
            <!--<form class="form-horizontal" method="POST" enctype="multipart/form-data">
                <h3 class="text-center">Send your abstract</h3>

                <div class="form-group">
                    <label for="nombre" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="nombre" name="Ponencianombre" required placeholder="Name" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label for="correo" class="col-sm-3 control-label">E-mail</label>
                    <div class="col-sm-6">
                        <input type="email" id="correo" name="Ponenciacorreo" required placeholder="example@example.com" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label for="institucion" class="col-sm-3 control-label">Institution</label>
                    <div class="col-sm-6">
                        <input type="text" id="institucion" name="Ponenciainstitucion" required placeholder="Institution Name" class="form-control" autofocus>

                    </div>
                </div>

                <div class="form-group">
                    <label for="pais" class="col-sm-3 control-label">Country</label>
                    <div class="col-sm-6">
                        <input type="text" id="pais" name="Ponenciapais" required  placeholder="Country" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="titulo" class="col-sm-3 control-label">Paper Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="titulo" name="Ponenciatitulo" required placeholder="This is the title of your abstract" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion" class="col-sm-3 control-label">Co-author name and institutions (please, each author in different line)</label>
                    <div class="col-sm-6">
                        <textarea required  name="Ponenciadescripcion" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="archivo" class="col-sm-3 control-label">Upload File</label>
                    <div class="col-sm-6">
                        <input type="file" required name="archivo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-offset-3">
                        <button type="submit" class="btn btn-info">Send</button>
                    </div>
                </div>
            </form>-->
            <?php
            $envioEmail = new MvcController();
            $envioEmail -> sendEmail();
            ?>
            <!-- /form -->
        </div>
    </div>

</div>