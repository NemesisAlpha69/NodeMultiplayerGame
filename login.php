<?php
session_start();
include("dbcon.php");
?>
<?
$userip = $_SERVER['REMOTE_ADDR'];
$_SESSION['ip_votante']=$userip;
extract($_POST);

if("" == trim($_POST['name'])||"" == trim($_POST['email']))
{
    echo '<script>alert("Tienes que registrar tu nombre y correo antes de votar!!");</script>';
    //header('Location: http://www.musicartes.org/');
    echo'<script>window.location="http://musicartes.org/votopremiosestela/index.html";</script>';
    end();

}else
{

//$checkemail=mysql_query("SELECT * FROM votantes WHERE email='$email'");
//$checke_mail=mysql_num_rows($checkemail);
//if($checke_mail>0)
//{
  //echo'<script language="javascript">alert("El correo que has ingresado ya ha sido registrado, intenta con otro");</script>';
  //echo"<script>location.href='index.html'</script>";
//}
//else
//{
  //este link nos sivre cuando ya terminen las votaciones y redireccionar y ya no registrar mas usuarios
  echo'<script>window.location="http://musicartes.org";</script>';
  $query_votante=mysql_query(
  "INSERT INTO `votantes`
  (`nombre`, `email`,`userip`)
  VALUES ('$name','$email','$userip')");
  //verificamos consulta
    if (!$query_votante)
     {
        die('Consulta no válida: ' . mysql_error());
     }
    echo "bienvenido";
    echo $name;
    echo $email;

    mysql_query($query_votante);

    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $id_votante=mysql_insert_id();
    $_SESSION['id_votante']=$id_votante;
    //header('Location: http://www.musicartes.org/votopremiosestela/index.php');
    //redireccionamos al usuario donde se despliegan todas las opciones de voto
//    echo'<script>window.location="http://musicartes.org/votopremiosestela/index.php";</script>';

  //}

}
?>
