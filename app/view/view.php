<?php
class View{
    private $header;
    private $action;
    private $footer;

    public function __construct($Action){
        $this->action = $Action;
        //session_start();
    }

    function getHTMLstuff(){
        $htmlStuff="<!DOCTYPE html>
        <html>
        <head>
            <title> SYF | ".$this->action."</title>
            <meta charset='UTF-8'> 
                <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'>
                <link rel='stylesheet' type='text/css' href='../app/css/bootstrap.min.css'>
                <link rel='stylesheet' type='text/css' href='../app/css/font-awesome.min.css'>
                <link rel='stylesheet' type='text/css' href='../app/css/font-awesome.css'>
                <link rel='stylesheet' type='text/css' href='../app/css/templatemo_misc.css'>
                <link rel='stylesheet' type='text/css' href='../app/css/templatemo_style.css'>
                <link rel='stylesheet' type='text/css' href='app/css/styles.css' />
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link rel='stylesheet' type='text/css' href='../app/css/styles.css' />
                <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
        </head>
        <body>
        ";
        return $htmlStuff;
    }

    function getHeader(){
            $this->header = "<header>
                            <h2></h2>
                            </header>
                            ";
            return $this->header;
    }

    function getFooter(){
            $this->footer= "</div>
                           <footer>SHARE YOUR FILES ♥ </footer>";
            return $this->footer;
    }

    function getHTMLclosure(){
            return "
                        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
                        <script src='../app/js/functions.js'></script>
                    </body>
                            </html>";
    }

    function getSideBar($action){
            $listElements = "";

            switch ($action) {
                case "Inicio":
                            $listElements = "<li class='about'><a class='active' href='../UserController/inicio'>Inicio</a></li>
                                                <li class='portfolio'><a href='../UserController/misArchivos'>Mis Archivos</a></li>
                                                <li class='contact'><a href='../UserController/amigos'>Amigos</a></li>
                                <li class='home'><a href='../UserController/cerrarSesion'>Cerrar sesión</a></li>";
                    break;
                case "Mis archivos":
                            $listElements = "<li class='about'><a href='../UserController/inicio'>Inicio</a></li>
                                                <li class='portfolio'><a class='active' href='../UserController/misArchivos'>Mis Archivos</a></li>
                                                <li class='contact'><a href='../UserController/amigos'>Amigos</a></li>
                                <li class='home'><a href='../UserController/cerrarSesion'>Cerrar sesión</a></li>";
                    break;
                case "Amigos":
                            $listElements = "<li class='about'><a href='../UserController/inicio'>Inicio</a></li>
                                                <li class='portfolio'><a href='../UserController/misArchivos'>Mis Archivos</a></li>
                                                <li class='contact'><a class='active' href='../UserController/amigos'>Amigos</a></li>
                                <li class='home'><a href='../UserController/cerrarSesion'>Cerrar sesión</a></li>";
                    break;
                case "Cerrar sesión":
                            $listElements = "<li class='about'><a href='../UserController/inicio'>Inicio</a></li>
                                                <li class='portfolio'><a href='../UserController/misArchivos'>Mis Archivos</a></li>
                                                <li class='contact'><a href='../UserController/amigos'>Amigos</a></li>
                                <li class='home'><a class='active' href='../UserController/cerrarSesion'>Cerrar sesión</a></li>";
                    break;
                default:
                            $listElements = "<li class='about'><a href='../UserController/inicio'>Inicio</a></li>
                                                <li class='portfolio'><a href='../UserController/misArchivos'>Mis Archivos</a></li>
                                                <li class='contact'><a href='../UserController/amigos'>Amigos</a></li>
                                <li class='home'><a href='../UserController/cerrarSesion'>Cerrar sesión</a></li>";
            }

            $userHome = "<div id='main-sidebar' class='hidden-xs hidden-sm'>
            <div class='logo'>
                    <a href='../UserController/perfil'><h1>".$_SESSION["username"]."</h1></a>
                    <span>".$_SESSION["name"]."</span>
            </div> 
            <div class='navigation'>
            <ul class='main-menu'>
                ".$listElements."
            </ul>
            </div> <!-- /.navigation -->
    </div> <!-- /#main-sidebar -->
    ";
            return $userHome;
    }
    
    function getContainerStart(){
        return "<div id='main-content'>
                <div class='container-fluid'>";
    }

    function getContainerEnd(){
        return "</div>
                </div>";
    }
}
?>