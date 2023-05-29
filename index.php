<?php 

if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
    $url = strtoupper($_GET['url']);
    switch($url){
        case "HOME":
            require_once "View/home.php";
            break;

        case "CADASTRO":
            require_once "View/formulario.php";
            break;

        case "LOGIN":
            require_once "View/login.php";
        
        
        default :
        require_once "View/home.php";
        break;
    }
}
else                     //senão, vai para uma página padrão, neste caso a home do site
  $url = '404.php';
?>