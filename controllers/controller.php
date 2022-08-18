<?php
class MvcController{

    #bloque de llamar a la plantilla
    public static function pagina(){
      include_once  'views/template.php';
    }

    #bloque de interacion de usuario con los enlaces
    public static function enlacesPaginasController(){
        #eliminar el warning
        #ini_set ('display_errors', 'Off');

        $respuesta ="";
        if(isset($_GET['idioma'])){
            if($_GET['idioma']=='es'){
                $enlacesController = $_GET['action'];
                $respuesta = Paginas::enlacesPaginasModelEs($enlacesController);
            }
            elseif ($_GET['idioma']=='en'){
                $enlacesController = $_GET['action'];
                $respuesta = Paginas::enlacesPaginasModelEn($enlacesController);
            }
        }
        //$respuesta = Paginas::enlacesPaginasModelEn($enlacesController);

        include_once $respuesta;
    }
    #bloque enviar correo  + pdf
    public static function emailRegistroPonencia(){
        ini_set("sendmail_from","contacto@coesicydet.com");
        if(isset($_POST['Ponencianombre'])) {
            #variables para los campos de texto
            $nombre = strip_tags($_POST["Ponencianombre"]);
            $correo = strip_tags($_POST["Ponenciacorreo"]);
            $institucion = strip_tags($_POST["Ponenciainstitucion"]);
            $pais = strip_tags($_POST["Ponenciapais"]);
            $titulo = strip_tags($_POST["Ponenciatitulo"]);
            $descripcion = strip_tags($_POST["Ponenciadescripcion"]);

            #variables para loa datos del archivo
            $nameFile = $_FILES['archivo']['name'];#nombre del archivo
            $sizeFile = $_FILES['archivo']['size'];#tamaño del archivo
            $typeFile = $_FILES['archivo']['type'];#tipo de archivo
            $tempFile = $_FILES['archivo']['tmp_name']; #nombew temporal

            #
            $fecha = time();
            $fechaFormato = date("j/n/Y", $fecha);

            //$correoDestino = "jonatan2332@hotmail.com";
            $correoDestino = "consejocienciacampeche@yahoo.com.mx, coesicydet@gmail.com, mariohernandez@coesicydet.com, simposio@coesicydet.com, carlosrodriguez@hotmail.com";

            #asunto del correo
            $asunto = "Enviado por " . $nombre;

            // -> mensaje en formato Multipart MIME
            $cabecera = "MIME-VERSION: 1.0\r\n";
            $cabecera .= "Content-type: multipart/mixed;";
            //$cabecera .="boundary='=P=A=L=A=B=R=A=Q=U=E=G=U=S=T=E=N='"
            $cabecera .= "boundary=\"=C=T=E=C=\"\r\n";
            $cabecera .= "From: {$correo}";

            //Primera parte del cuerpo del mensaje
            $cuerpo = "--=C=T=E=C=\r\n";
            $cuerpo .= "Content-type: text/plain";
            $cuerpo .= "charset=utf-8\r\n";
            $cuerpo .= "Content-Transfer-Encoding: 8bit\r\n";
            $cuerpo .= "\n\n"; // línea vacía
            $cuerpo .= "Mensaje: " . $descripcion . "\n\n";

            // -> segunda parte del mensaje (archivo adjunto)
            //    -> encabezado de la parte
            $cuerpo .= "--=C=T=E=C=\r\n";
            $cuerpo .= "Content-Type: application/octet-stream; ";
            $cuerpo .= "name=" . $nameFile . "\r\n";
            $cuerpo .= "Content-Transfer-Encoding: base64\r\n";
            $cuerpo .= "Content-Disposition: attachment; ";
            $cuerpo .= "filename=" . $nameFile . "\r\n";
            $cuerpo .= "\r\n"; // línea vacía

            $fp = fopen($tempFile, "rb");//abrir
            $file = fread($fp, $sizeFile); #lectura y indico el tamaño de lectura
            fclose( $fp );
            $file = chunk_split(base64_encode($file));

            $cuerpo .= "$file\r\n";
            $cuerpo .= "\r\n"; // línea vacía
            // Delimitador de final del mensaje.
            $cuerpo .= "--=C=T=E=C=--\r\n";

            //Enviar el correo
            if (mail($correoDestino, $asunto, $cuerpo, $cabecera)) {
                echo '<div id ="popMensaje" class="caja-de-mensaje">
                        <span class="fa fa-check"></span>
                        <h1>¡Mensaje Enviado!</h1>
                        <a id="popClose">Close</a>
                       </div>';
            } else {
                echo '<div id ="popMensaje" class="caja-de-mensaje">
                        <span class="fa fa-times" style="color:tomato"></span>
                        <h1>¡Ocurrio un error al enviar el mensaje!</h1>
                        <a id="popClose">Close</a>
                       </div>';
            }
        }
    }

    public static function correoController(){
        if (isset($_FILES) && (bool) $_FILES){
            $allowedExtensions = array("pdf","doc","docx");

            $files = array();
            foreach ($_FILES as $name => $file) {
                $file_name = $file['name'];
                $temp_name = $file['tmp_name'];
                $file_type = $file['type'];
                $path_parts = pathinfo($file_name);
                $ext = $path_parts['extension'];
                if (!in_array($ext, $allowedExtensions)) {
                    die("File $file_name has the extensions $ext which is not allowed");
                }
                array_push($files, $file);
            }
            $nombre = strip_tags($_POST["Ponencianombre"]);
            $correo = strip_tags($_POST["Ponenciacorreo"]);
            $institucion = strip_tags($_POST["Ponenciainstitucion"]);
            $pais = strip_tags($_POST["Ponenciapais"]);
            $titulo = strip_tags($_POST["Ponenciatitulo"]);
            $mensaje = strip_tags($_POST["Ponenciadescripcion"]);

            #asunto del correo
            $asunto = "Enviado por " . $nombre;

            $correoDestino = "jonatan2332@hotmail.com";

            $cabecera ="From: $correo";

            $semi_rand = md5(time());
            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

            $cabecera .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
            $mensaje = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $mensaje . "\n\n";
            $mensaje .= "--{$mime_boundary}\n";

            //preparar el archivo
            for ($x = 0; $x < count($files); $x++) {
                $file = fopen($files[$x]['tmp_name'], "rb");
                $data = fread($file, filesize($files[$x]['tmp_name']));
                fclose($file);
                $data = chunk_split(base64_encode($data));
                $name = $files[$x]['name'];
                $mensaje .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                    "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                $mensaje .= "--{$mime_boundary}\n";
            }
            #sent
            if (mail($correoDestino, $asunto, $mensaje, $cabecera)){
                echo "mensaje enviado";
            }else{
                echo "error al enviar el mensaje ";
            }
        }
    }

    public static function sendEmail(){
        if($_POST && isset($_FILES['archivo'])){
            $from_email         = 'noreply@coesicydet.com'; //from mail, it is mandatory with some hosts
            $recipient_email    = 'jonatan2332@hotmail.com,mariohernandez@coesicydet.com,simposium@coesicydet.com,coesicydet@gmail.com'; //recipient email (most cases it is your personal email)

            // Capture los datos POST del formulario HTML
            $sender_name    = filter_var($_POST["Ponencianombre"], FILTER_SANITIZE_STRING); //sender name
            $reply_to_email = filter_var($_POST["Ponenciacorreo"], FILTER_SANITIZE_STRING); //sender email used in "reply-to" header
            $title        = filter_var($_POST["Ponenciatitulo"], FILTER_SANITIZE_STRING); //get subject from HTML form
            $institution       = filter_var($_POST["Ponenciainstitucion"], FILTER_SANITIZE_STRING); //get subject from HTML form
            $country       = filter_var($_POST["Ponenciapais"], FILTER_SANITIZE_STRING); //get subject from HTML form
            //$subject        = filter_var($_POST["subject"], FILTER_SANITIZE_STRING); //get subject from HTML form
            $message        = filter_var($_POST["Ponenciadescripcion"], FILTER_SANITIZE_STRING); //message
            $subject = "Registro de Ponencias " . $sender_name;
            /* //don't forget to validate empty fields
            if(strlen($sender_name)<1){
                die('Name is too short or empty!');
            }
            */

            //Obtener datos de archivos cargados
            $file_tmp_name    = $_FILES['archivo']['tmp_name'];
            $file_name        = $_FILES['archivo']['name'];
            $file_size        = $_FILES['archivo']['size'];
            $file_type        = $_FILES['archivo']['type'];
            $file_error       = $_FILES['archivo']['error'];

            if($file_error > 0)
            {
                die('Error de carga o no se cargaron archivos');
            }
            //leer del archivo cargado y el contenido de base64_encode para el correo
            $handle = fopen($file_tmp_name, "r");
            $content = fread($handle, $file_size);
            fclose($handle);
            $encoded_content = chunk_split(base64_encode($content));

            $boundary = md5("sanwebe");
            //encabezado
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "From:".$from_email."\r\n";
            $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

            //plain text
            $body = "--$boundary\r\n";
            $body .= "Content-Type: text/plain; charset=utf-8\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $message1 ="\n Nombre: ".$sender_name ."\n Correo Electrónico: ".
                $reply_to_email."\n Institución =".
                $institution ."\n País: ".$country.
                "\n Nombre de ponencia: ".$title."\n";
            $message2=$message1. " \n". $message;
            $body .= chunk_split(base64_encode($message2));

            //attachment
            $body .= "--$boundary\r\n";
            $body .="Content-Type: $file_type; name=".$file_name."\r\n";
            $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
            $body .="Content-Transfer-Encoding: base64\r\n";
            $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
            $body .= $encoded_content;

            // $sentMail = @mail($recipient_email, $subject, $body, $headers);
            if(mail($recipient_email, $subject, $body, $headers)) //output success or failure messages
            {
                echo '<div id ="popMensaje" class="caja-de-mensaje">
                        <span class="fa fa-check"></span>
                        <h1>¡Mensaje Enviado!</h1>
                        <a id="popClose">Close</a>
                       </div>';
            } else {
                echo '<div id ="popMensaje" class="caja-de-mensaje">
                        <span class="fa fa-times" style="color:tomato"></span>
                        <h1>¡Ocurrio un error al enviar el mensaje!</h1>
                        <a id="popClose">Close</a>
                       </div>';
            }
        }
    }
    public static function ponentesEsController(){
        $respuesta = Datos::ponentesEs('biografia');
        foreach ($respuesta as $row => $item){
            echo '<div class="caja-container">
                    <img src="image/'.$item["image"].'"  class="img-responsive" alt="Simposio Campeche México">
                    <div class="overlaN">
                        <div class="text">
                            <a href="#myModalEs'.$item["idbiografia"].'" role="button" data-toggle="modal" href="" class="btn btn-info">Biografía</a>
                        </div>
                    </div>
                 </div>
                 ';
        }
    }
    public static function ponentesModalController(){
        $respuesta = Datos::ponentesEs('biografia');
        foreach ($respuesta as $row => $item){
            echo '<div id="myModalEs'.$item["idbiografia"].'" class="modal" data-easein="perspectiveDownIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">'.$item["nombre"].'</h4>
                        </div>
                        <div class="modal-body">
                            <p class="justificado">'.$item["biografia"].'</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
             ';
        }

    }

    public static function ponentesEnController(){
        $respuesta = Datos::ponentesEn('biography');
        foreach ($respuesta as $row => $item){
            echo '<div class="caja-container">
                    <img src="image/'.$item["image"].'"  class="img-responsive" alt="Simposio Campeche México">
                    <div class="overlaN">
                        <div class="text">
                            <a href="#myModalEn'.$item["idbiography"].'" role="button" data-toggle="modal" href="" class="btn btn-info">Biography</a>
                        </div>
                    </div>
                 </div>';
        }
    }
    public static function ponentesModalenController(){
        $respuesta = Datos::ponentesEn('biography');
        foreach ($respuesta as $row => $item){
            echo '<div id="myModalEn'.$item["idbiography"].'" class="modal" data-easein="perspectiveDownIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">'.$item["name"].'</h4>
                        </div>
                        <div class="modal-body">
                            <p class="justificado">'.$item["biography"].'</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
                    </div>
                </div>
            </div>
             ';
        }

    }

    public static function paypalRegistroController(){
        if(isset($_POST["paypalnombre"])){
            $datosController = array(
                "paypalnombre"=>$_POST["paypalnombre"],
                "paypalcorreo"=>$_POST["paypalcorreo"],
                "paypalinstitucion"=>$_POST["paypalinstitucion"],
                "paypalpais"=>$_POST["paypalpais"],
                "paypalpago"=>"paypal",
                "paypalestatus"=>"0");
            $respuesta = Datos::agregarPagoPaypalModel($datosController,"inscripcion");

            $desinatario ="jonatan2332@hotmail.com";
            $asunto ="Inscripcion al evento ".$_POST["efectivonombre"];

            $carta ="Nombre: ".$_POST['efectivonombre']. "\n";
            $carta .="Correo" .$_POST['efectivocorreo']. "\n";
            $carta .="Insitución" .$_POST["efectivoinstitucion"]. "\n";
            $carta .="País" .$_POST["efectivopais"]. "\n";
            $carta .="Pago: Paypal \n";
            /*if (mail($desinatario,$asunto,$carta)){
                echo '<script>var e = document.getElementById("SectionPaypalRegistro");
            e.style.display = "none"; </script>';
                echo '<p class="alert alert-success">Registro exitoso, completa el pago para terminar tu registro </p>
                  <div class="flexbox center">
                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="Y4KYZYLA3YQM8">
                            <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                     </form>
                  </div>'};*/
            echo '<script>var e = document.getElementById("SectionPaypalRegistro");
            e.style.display = "none"; </script>';
            echo '<p class="alert alert-success">Registro exitoso, completa el pago para terminar tu registro </p>
                  <div class="flexbox center">
                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="Y4KYZYLA3YQM8">
                            <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                     </form>
                  </div>';

        }
    }
    public static function transferenciasRegistroController(){
        if(isset($_POST["transferencianombre"])){
            $datosController = array(
                "transferencianombre"=>$_POST["transferencianombre"],
                "transferenciacorreo"=>$_POST["transferenciacorreo"],
                "transferenciainstitucion"=>$_POST["transferenciainstitucion"],
                "transferenciapais"=>$_POST["transferenciapais"],
                "transferenciapago"=>"transferencia",
                "transferenciaestatus"=>"0");
            $respuesta = Datos::agregarPagoTransferenciaModel($datosController,"inscripcion");
            # echo '<script>var e = document.getElementById("SectionTransferenciaRegistro"); e.style.display = "none"</script>';

            $desinatario ="jonatan2332@hotmail.com";
            $asunto ="Inscripcion al evento ".$_POST["transferencianombre"];

            $carta ="Nombre: ".$_POST['transferencianombre']. "\n";
            $carta .="Correo" .$_POST['transferenciacorreo']. "\n";
            $carta .="Insitución" .$_POST["transferenciainstitucion"]. "\n";
            $carta .="País" .$_POST["transferenciapais"]. "\n";
            $carta .="Pago: Transferencia \n";
            /* if (mail($desinatario,$asunto,$carta)){
                 echo '<div id ="popMensaje" class="caja-de-mensaje">
                         <span class="fa fa-check"></span>
                         <h1>¡Registro Exitoso!</h1>
                             <p>Detalles del banco</p>
                         <dl class="param"><dt>Banco: </dt>
                             <dd> BBVA Bancomer</dd>
                         </dl>
                         <dl class="param">
                             <dt>Número de cuenta: </dt>
                             <dd>0111810405</dd>
                         </dl>
                         <dl class="param">
                             <dt>CLABE:</dt>
                             <dd>012050001118104055</dd>
                         </dl>
                         <p><strong>Nota:</strong>La confirmación del pago podrá realizarse al siguiente correo electrónico forthics@hotmail.com.</p>
                         <a class="btn btn-primary btn-block" type="submit" href="fichadepago.pdf"> <i class="fa fa-print" aria-hidden="true"></i> Imprimir </a>
                         <a id="popClose">Close</a>
                         </div>';
             }*/
            echo '<script>var e = document.getElementById("ContenedorPrincipal");
            e.style.display = "none"; </script>';
            echo '<div class="tab-content active" id="Contenedors">
              <div class="tab-pane active" id="nav-tab-">
              <p class="alert alert-success">¡Registro Exitoso! Te recordamos que puedes enviar tu recibo de depósito por correo electrónico o presentarlo en el evento</p>
                        <p>Detalles del banco</p>
                        <dl class="param"><dt>Banco: </dt>
                            <dd> BBVA Bancomer</dd>
                        </dl>
                        <dl class="param">
                            <dt>Número de cuenta: </dt>
                            <dd>0111810405</dd>
                        </dl>
                        <dl class="param">
                            <dt>CLABE:</dt>
                            <dd>012050001118104055</dd>
                        </dl>
                        <p><strong>Nota:</strong>La confirmación del pago podrá realizarse al siguiente correo electrónico forthics@hotmail.com.</p>
                        <a class="btn btn-primary btn-block" type="submit" href="fichadepago.pdf"> <i class="fa fa-print" aria-hidden="true"></i> Imprimir </a>


              </div>
        </div>';

        }
    }
    public static function efectivoRegistroController(){
        if(isset($_POST["efectivonombre"])){
            $datosController = array(
                "efectivonombre"=>$_POST["efectivonombre"],
                "efectivocorreo"=>$_POST["efectivocorreo"],
                "efectivoinstitucion"=>$_POST["efectivoinstitucion"],
                "efectivopais"=>$_POST["efectivopais"],
                "efectivociudad"=>$_POST["efectivociudad"],
                "efectivopago"=>"efectivo",
                "efectivoestatus"=>"0");
            $respuesta = Datos::agregarPagoEfectivoModel($datosController,"inscripcion");
            # echo '<script>var e = document.getElementById("SectionEfectivoRegistro"); e.style.display = "none"</script>';
            $desinatario ="jonatan2332@hotmail.com";
            $asunto ="Inscripcion al evento ".$_POST["efectivonombre"];

            $carta ="Nombre: ".$_POST['efectivonombre']. "\n";
            $carta .="Correo" .$_POST['efectivocorreo']. "\n";
            $carta .="Insitución" .$_POST["efectivoinstitucion"]. "\n";
            $carta .="País" .$_POST["efectivopais"]. "\n";
            $carta .="Pago: efectivo \n";

            /* if (mail($desinatario,$asunto,$carta)){
                 echo '<div id ="popMensaje" class="caja-de-mensaje">
                         <span class="fa fa-check"></span>
                         <h1>¡Registro Exitoso! Te recordamos que en el evento se recibirá el pago por un monto de 200 USD</h1>
                         <a id="popClose">Close</a>
                         </div>';
             }else{}*/
            echo '<script>var e = document.getElementById("ContenedorPrincipal");
            e.style.display = "none"; </script>';
            echo '<div class="tab-content active" id="ContenedorPrincipal">
              <div class="tab-pane active" id="nav-tab-">
              <p class="alert alert-success">¡Registro Exitoso! Te recordamos que en el evento se recibirá el pago por un monto de 200 USD</p>

              </div>
        </div>';
        }

    }

    /*
        public static function newVisits(){
            if(isset($_COOKIE['contador'])){
                echo "Numero de visitas: ".$_COOKIE['contador'];
                setcookie("contador",$_COOKIE['contador']+1, time()+365*24*60*60);
            }else{
                setcookie("contador",1,time()+365*24*60*60);
                echo "Bienvenido por primera vez";
            }
        }

    */
    public static function agregarRegistro(){
            if(isset($_POST['nombre'])){
                $datosController = array(
                    "nombre" => $_POST['nombre'],
                    "edad" => $_POST['edad'],
                    "telefono" => $_POST['telefono'],
                    "correo" => $_POST['correo'],
                    "ciudad" => $_POST['ciudad'],
                    "municipio" => $_POST['municipio'],
                    "institucion" => $_POST['institucion'],
                    "estudio" =>$_POST['nivel'],
                    "etzna" =>$_POST['edzna']
                );
                $respuesta = Datos::agregarRegistroModel($datosController,"registro");
                echo '<div class="alert alert-success" role="alert" id="success_message">¡Gracias<i class="glyphicon glyphicon-thumbs-up"></i> Tu registro al evento fue exitoso! .</div>';
            }
        }

    public static function ViewPagoPaypal(){
        $respuesta = Datos::getPagoPaypalModel();
        $estatus = 0;
        foreach ($respuesta as $row => $item){
            $estatus = $item['estatus'];
            if ($estatus=='0'){
                echo '<tr>
                    <td>'.$item["nombre"].'</td>
                    <td>'.$item["correo"].'</td>
                    <td>'.$item["institucion"].'</td>
                    <td>'.$item["pais"].'</td>
                    <td><button class="btn-danger btn-xs"><i class="fa fa-times" ></i></button></td>
                  </tr>';
            }elseif ($estatus =='1'){
                echo '<tr>
                    <td>'.$item["nombre"].'</td>
                    <td>'.$item["correo"].'</td>
                    <td>'.$item["institucion"].'</td>
                    <td>'.$item["pais"].'</td>
                    <td><button class="btn-success btn-xs"><i class="fa fa-check" ></i></button></td>
                  </tr>';
            }

        }
    }
    public static function ViewPagoTransferencia(){
        $respuesta = Datos::getPagoTransferenciaModel();
        $estatus = 0;
        foreach ($respuesta as $row => $item){
            $estatus = $item['estatus'];
            if ($estatus=='0'){
                echo '<tr>
                    <td>'.$item["nombre"].'</td>
                    <td>'.$item["correo"].'</td>
                    <td>'.$item["institucion"].'</td>
                    <td>'.$item["pais"].'</td>
                    <td><button class="btn-danger btn-xs"><i class="fa fa-times" ></i></button></td>
                  </tr>';
            }elseif ($estatus =='1'){
                echo '<tr>
                    <td>'.$item["nombre"].'</td>
                    <td>'.$item["correo"].'</td>
                    <td>'.$item["institucion"].'</td>
                    <td>'.$item["pais"].'</td>
                    <td><button class="btn-success btn-xs"><i class="fa fa-check" ></i></button></td>
                  </tr>';
            }

        }
    }
    public static function ViewPagoEfectivo(){
        $respuesta = Datos::getPagoEfectivoModel();
        $estatus = 0;
        foreach ($respuesta as $row => $item){
            $estatus = $item['estatus'];
            if ($estatus=='0'){
                echo '<tr>
                    <td>'.$item["nombre"].'</td>
                    <td>'.$item["correo"].'</td>
                    <td>'.$item["institucion"].'</td>
                    <td>'.$item["pais"].'</td>
                    <td><button id="'.$item["id_inscripcion"].'" name="estatus" value="1" class="btn-danger btn-xs"><i class="fa fa-times" ></i></button></td>
                  </tr>';
            }elseif ($estatus =='1'){
                echo '<tr>
                    <td>'.$item["nombre"].'</td>
                    <td>'.$item["correo"].'</td>
                    <td>'.$item["institucion"].'</td>
                    <td>'.$item["pais"].'</td>
                    <td><button class="btn-success btn-xs"><i class="fa fa-check" ></i></button></td>
                  </tr>';
            }

        }
    }
    public static function ViewPagoCampeche(){
        $respuesta = Datos::getPagoCampecheModel();
        foreach ($respuesta as $row => $item){
            echo '<tr>
                    <td>'.$item["nombre"].'</td>
                    <td>'.$item["correo"].'</td>
                    <td>'.$item["ciudad"].'</td>
                    <td>'.$item["municipio"].'</td>
                    <td>'.$item["institucion"].'</td>
                    <td>'.$item["estudio"].'</td>
                    <td>'.$item["etzna"].'</td>
                  </tr>';
        }
    }
}
?>
