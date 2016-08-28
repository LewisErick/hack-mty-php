<?php
require '../App_code/Controller.php';
require '../App_code/View.php';
$Controller = new Controller();
if(isset($_POST['Login']))
{

    $user = $_POST['email'];
    $pass = $_POST['password'];
    //echo $user.' '.$pass;
    if($Controller -> Login($user, $pass))
    {
        header("Location: index.php");
    }
    else
    {
        //json_encode("Error usuario o password incorrecto");
        header("Location: user_login.php?error=true");
    }
}
if(isset($_GET['logout']))
{
    $Controller -> Logout();
    header("Location: ../index.html");
}
if(isset($_POST['Register']))
{
    $email = isset($_POST["email"]) ? $_POST['email'] : "";
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $ciudad = isset($_POST["ciudad"]) ? $_POST["ciudad"] : "";
    $pais = isset($_POST["pais"]) ? $_POST["pais"] : "";
    $date = isset($_POST["date"]) ? $_POST["date"] : "";
    //$image = isset($_POST["image"]) ? $_POST["image"] : "";
    //$author = isset($_POST["author"]) ? $_POST["author"] : "";
    //$category = isset($_POST["category"]) ? $_POST["category"] : "";
    if($email == "")
    {
        $status = $Controller -> crearUsuarios($email, $nombre,$date,$ciudad,$pais, $password);
        if($status === true)
        {
            header("Location: index.php");
        }
        else if($status === false)
            header("Location: user_login.php?error=true");
    }
    else
        header("Location: user_login.php?error=campos");
}
if(isset($_POST['guardarNoticiaCSED']))
{
    $id = isset($_POST["id"]) ? $_POST['id'] : "";
    $title = isset($_POST["title"]) ? $_POST["title"] : "";
    $date = isset($_POST["date"]) ? $_POST["date"] : "";
    $textP1 = isset($_POST["textP1"]) ? $_POST["textP1"] : "";
    $Pfile = isset($_FILES["image"]["name"])? $_FILES["image"]["name"] : "";
    $Pfile_tmp = isset($_FILES["image"]["tmp_name"])? $_FILES["image"]["tmp_name"] : "";
    //$image = isset($_POST["image"]) ? $_POST["image"] : "";
    //$author = isset($_POST["author"]) ? $_POST["author"] : "";
    //$category = isset($_POST["category"]) ? $_POST["category"] : "";
    if($id == "")
    {
        $status = $Controller -> crearNoticia($title, $date, $textP1, $Pfile, $Pfile_tmp, "noticiascsedweek");
        if($status === true)
        {
            header("Location: noticiascsedweek.php");
        }
        else if($status === false)
            header("Location: noticiascsedweeknew.php?error=true");
        else
            header("Location: noticiascsednew.php?error=image&id=$status");
    }
    else
    {
        if (isset($_POST["eliminar"]) && $_POST["eliminar"] == 1) {
            if ($Controller -> borrarNoticia($id, "noticiascsedweek"))
            {
                header("Location: noticiascsedweek.php");
            }
        }
        else if($Controller -> actualizarNoticia($id, $title, $date, $textP1, $Pfile, $Pfile_tmp, "noticiascsedweek"))
        {
            header("Location: noticiascsedweeknew.php?id=$id");
        }
        else
            header("Location: noticiascsedweeknew.php?error=true");
    }
}
if(isset($_POST['guardarEvento']))
{
    $id = isset($_POST["id"]) ? $_POST['id'] : "";
    $title = isset($_POST["title"]) ? $_POST["title"] : "";
    $date = isset($_POST["date"]) ? $_POST["date"] : "";
    $textP1 = isset($_POST["textP1"]) ? $_POST["textP1"] : "";
    $PImg = isset($_FILES["image"]["name"])? $_FILES["image"]["name"] : "";
    $PImg_tmp = isset($_FILES["image"]["tmp_name"])? $_FILES["image"]["tmp_name"] : "";
    $Pfile = isset($_FILES["pdf"]["name"])? $_FILES["pdf"]["name"] : "";
    $Pfile_tmp = isset($_FILES["pdf"]["tmp_name"])? $_FILES["pdf"]["tmp_name"] : "";
    //$author = isset($_POST["author"]) ? $_POST["author"] : "";
    //$category = isset($_POST["category"]) ? $_POST["category"] : "";
    //echo "Img: " . ($PImg == "") . " file: " . ($Pfile == "");
    if($id == "")
    {
        $status = $Controller -> crearEvento($title, $textP1, $date, $PImg, $PImg_tmp, $Pfile, $Pfile_tmp, "evento");
        if($status === true)
        {
            header("Location: eventos.php");
        }
        else if($status === false)
            header("Location: eventosnew.php?error=true");
        else
            header("Location: eventosnew.php?id=$status");
    }
    else
    {
        if (isset($_POST["eliminar"]) && $_POST["eliminar"] == 1) {
            if ($Controller -> borrarEvento($id) && $Controller -> borrarFotosEvento($id, "foto"))
            {
                header("Location: eventos.php");
            }
        }
        else
        {
            $status = $Controller -> actualizarEvento($id, $title, $textP1, $date, $PImg, $PImg_tmp, $Pfile, $Pfile_tmp, "evento");
            if($status === true)
            {
                header("Location: eventosnew.php?id=$id");
            }
            else if($status === false)
                header("Location: eventosnew.php?error=true");
            else
                header("Location: eventosnew.php?id=$result");
        }
    }
}
if(isset($_POST['agregarEscuela']))
{
    $escuela = $_POST['escuela'];
    $tipo = $_POST['tipo'];
    $error = $Controller -> crearEscuela($escuela, $tipo);
    if($error == "")
        header("Location: escuelasnew.php");
    else if($error == "existe")
        header("Location: escuelasnew.php?error=existe");
    else
        header("Location: escuelasnew.php?error=db");
}
if(isset($_POST['actualizarEscuela']))
{
    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $activa = isset($_POST["activa"]) ? "1" : "0";
    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "";
    //echo $id . $activa;
    if($Controller -> actualizarEscuela($id, $nombre, $activa, $tipo))
    {
        header("Location: escuelasnew.php");
    }
    else
    {
        header("Location: escuelasnew.php?error=$nombre");
    }
}
if(isset($_POST['fotosEvento']))
{   
    $id = isset($_POST["id"]) ? $_POST['id'] : "";
    $evento = isset($_POST["evento"]) ? $_POST["evento"] : "";
    $Pfile = isset($_FILES["image"]["name"])? $_FILES["image"]["name"] : "";
    $Pfile_tmp = isset($_FILES["image"]["tmp_name"])? $_FILES["image"]["tmp_name"] : "";
    //echo $id . " " . $evento;
    if($id == "")
    {
        header("Location: fotos.php");
    }
    else
    {
        if(isset($_POST["eliminar"]) && $_POST["eliminar"] == 1) {
            if ($Controller -> borrarFotosEvento($id, "foto"))
            {
                header("Location: fotos.php");
            }
        }
        else if($Controller -> actualizarFotosEvento($id, $evento, $Pfile, $Pfile_tmp, "foto"))
        {
            header("Location: fotosnew.php?id=$id");
        }
        else
            header("Location: fotosnew.php?error=true");
    }
}
if(isset($_POST['borrarImagen']))
{
    $idevento = isset($_POST["idevento"]) ? $_POST['idevento'] : "";
    $idimagen = isset($_POST["idimagen"]) ? $_POST['idimagen'] : "";
    echo $idimagen . "  " . $idevento;
    if($Controller -> borrarImagen($idevento, $idimagen, "foto"))
    {
        header("Location: fotosnew.php?id=$idevento");
    }
    else
        header("Location: fotosnew.php?error=true");
}
if(isset($_POST['actualizarAdministrador']))
{
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    $user = isset($_POST['user']) ? $_POST['user'] : "";
    $pass = isset($_POST['password']) ? $_POST['password'] : "";
    $error = $Controller -> actualizarAdministrador($id, $user, $pass, 0);
    if($error == "")
    {
        header("Location: administradornew.php");
    }
    else if($error = "db")
        header("Location: administradornew.php?error=".$error);
    else
        header("Location: administradornew.php?error=".$error);
}

if(isset($_POST['agregarAdministrador']))
{
    $user = isset($_POST['userN']) ? $_POST['userN'] : "";
    $pass = isset($_POST['passN']) ? $_POST['passN'] : "";
    //echo $_POST['user'];
    $error = $Controller -> crearAdministrador($user, $pass, 0);
    if($error == "")
    {
        header("Location: administradornew.php");
    }
    else if($error == "db")
    {
        header("Location: administradornew.php?error=".$error);
    }
    else
        header("Location: administradornew.php?error=".$error);
}
if(isset($_POST['reporte']))
{
    $tipo = $_POST['reporte'];
    $Controller -> getReporte($tipo);
}
class Stack
{
    private $Controller = null;
    private $View = null;
    function getUsuarioActual()
    {
        $View = new View();
        return $View -> getActualUser();
        //$data = $View -> getActualUser();
        //echo $data['username'];
    }
    function validate()
    {
        $View = new View();
        $View -> checkUser();
    }
    function isLogged()
    {
        $View = new View();
        return $View -> haveSession();
    }
    function getBusqueda($category, $dinero, $tiempo)
    {
        $Controller = new Controller();
        return $Controller -> getBusqueda($category, $dinero, $tiempo);
    }
}
?>