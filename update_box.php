<?php
error_reporting(E_ALL);

include("dbcon.php");

$result=mysql_query(
"SELECT * FROM nominados_premios_estela ");


$gettotal = mysql_num_rows($result);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css"/>
<title>Votos Premios Estela</title>
<!--link rel="stylesheet" href="css.css"-->
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.livequery.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--bootstrap table links-->

<!--bootstrap table links-->
  </head>

<body>


<div class="container">
  <div align="center">
  <h2 style="color:rgb(83, 19, 19);" >Resultados Premios Estela 2016</h2>
</div>
  <table class="table">
    <thead>
      <tr>
        <th><h5 style="color:rgb(107, 28, 34);">Nombre Artista</h5></th>
        <!--th>Categoría</th-->
        <th><h5 style="color:rgb(107, 28, 34);">Votos</h5></th>
      </tr>
    </thead>
    <tbody>

<?

while($row=mysql_fetch_array($result))
{
?>
        <tr class="success">
          <td><?php echo $row['nombre']?></td>
          <td><?php echo $row['votes']?></td>
          <td><button type="button" class="totalstatsbutton" onclick=";return false;" >
          <div class="greenBar" style="width:<?php echo $row['votes']*50/$gettotal;?>px">&nbsp;</div>
          </button></td>
        </tr>

  <?
}

?>

</tbody>
</table>
</div>
</body>


  <!-- Plugins JS -->
  <script src="../Bootstrap/assets/js/libs/jquery-1.11.2.min.js"></script>
  <script src="../Bootstrap/bootstrap/js/bootstrap.min.js"></script>
  <script src="../Bootstrap/assets/js/libs/jqBootstrapValidation.js"></script>
  <script src="../Bootstrap/assets/js/libs/imagesloaded.pkgd.min.js"></script>
  <script src="../Bootstrap/assets/js/libs/imagesloaded.js"></script>
  <script src="../Bootstrap/assets/js/libs/jquery.magnific-popup.min.js"></script>
  <script src="../Bootstrap/assets/js/libs/isotope.pkgd.min.js"></script>
  <script src="../Bootstrap/assets/js/libs/ParallaxScrolling.js"></script>
  <script src="../Bootstrap/assets/js/libs/jquery.mailchimp.js"></script>
  <script src="../Bootstrap/assets/js/libs/wow.min.js"></script>
  <script src="../Bootstrap/assets/js/libs/jquery.fittext.js"></script>
  <script src="../Bootstrap/assets/js/libs/jquery.lettering.js"></script>
  <script src="../Bootstrap/assets/js/libs/jquery.textillate.js"></script>
  <!-- Main JS -->
  <script src="../Bootstrap/assets/js/main.js"></script>
</html>
