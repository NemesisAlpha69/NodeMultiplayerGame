<?php
session_start();
?>
<?
error_reporting(E_ALL);

include("dbcon.php");

?>
<?
$userip = $_SERVER['REMOTE_ADDR'];

extract($_SESSION);

if(!isset($_SESSION['name']) && empty($_SESSION['email']))
{
   echo ('undefined index error!');
   echo'<script>window.location="http://musicartes.org/votopremiosestela/";</script>';
}else
{
if(@$_REQUEST['value'])
{
	$value = mysql_real_escape_string($_REQUEST['value']);
	$value = strip_tags($value);

	if($value)
	{
		$result = mysql_query("select userip from polling_ip_ where userip='$userip'");
		$num    = mysql_num_rows($result);
	}

			$query_up="update nominados_premios_estela set votes = votes+1 where id = $value";

		mysql_query($query_up);
		$date=date("Y/m/d");
		$id_votante=$_SESSION['id_votante'];
		$que = "insert into polling_ip_(userip,id_votante,voto,date) values ('$userip','$id_votante','$value','$date')";      
		mysql_query( $que);
		session_destroy() ;

  	$result=mysql_query("select * from nominados_premios_estela");

  	$gettotal = mysql_num_rows($result);

}

}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>VOTOS PREMIOS ESTELA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top" >
				<section id="banner" background="images/premio.png" >
					<div class="inner">
						<header>
							<h2>PREMIOS ESTELA 2016</h2>
							<h5>PREMIOS DE LA MÚSICA. GUATEMALA</h5>
							<!--p>15 CATEGORIAS</p-->
								<h2>GRACIAS POR TU VOTO</h2>
						</header>
						<a href="#main" class="more"><h1>Learn More</h1></a>
						<div class="col-md-12" id="main" style="max-width:400px;">
							<h5>pulsa la imagen para salir</h5>
							<a href="http://musicartes.org/"><img src="images/estela_p.jpg" alt="" style="max-width:400px;"  /></a>
						</div>
					</div>
				</section>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>
