<?php
class Paginas{

    public static function enlacesPaginasModelEs($enlacesModel){
        #lista blanca
        if(
            $enlacesModel == "inicio" ||
            $enlacesModel == "programa" ||
            $enlacesModel == "organizadores" ||
            $enlacesModel == "ponencias" ||
            $enlacesModel == "registro" ||
            $enlacesModel == "lugar" ||
            $enlacesModel == "registro-evento" ||
            $enlacesModel == "contactanos"){

            $module =  "views/modules_es/".$enlacesModel.".php";
        }
        #lista por defecto
        else if ($enlacesModel == 'index'){
            $module = "views/modules_es/index.php?action=inicio&idioma=es";
        }
        #lista negra
        else{
            $module = "views/modules_es/index.php?action=inicio&idioma=es";
        }

        return $module;
    }
    public static function enlacesPaginasModelEn($enlacesModel){
        #lista blanca
        if(
            $enlacesModel == "home" ||
            $enlacesModel == "venue" ||
            $enlacesModel == "programme" ||
            $enlacesModel == "organizers" ||
            $enlacesModel == "papers" ||
            $enlacesModel == "registration" ||
            $enlacesModel == "contact"){

            $module =  "views/modules_en/".$enlacesModel.".php";
        }
        #lista por defecto
        else if ($enlacesModel == 'index'){
            $module = "views/modules_en/index.php?action=home&idioma=en";
        }
        #lista negra
        else{
            $module = "views/modules_en/index.php?action=home&idioma=en";
        }

        return $module;
    }
}