<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css"/>
<title>Votos Premios Estela</title>
<link rel="stylesheet" href="css.css">
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.livequery.js"></script>

<script type="text/javascript">
 $(document).ready(function()
 {
	$('.totalstatsbutton').livequery("mouseenter", function(e){
		$('.tooltip3').show();
		$('.totalstats').fadeIn(200);
	}).livequery("mouseleave", function(e){
		$('.tooltip3').hide();
		$('.totalstats').fadeOut(200);
	});
});

</script>
<?
include_once('INCLUDES/functions.inc.php');
?>
<?
include("dbcon.php");
?>

<script>
function myFunction(value) {
    var txt;
    var id=value;
    var name=nombre;
    console.log(id);
    var r = confirm("Está seguro de votar por este Artista?");
    if (r == true) {

        window.location = 'http://musicartes.org/votopremiosestela/voting.php?value='+id;
    }

}
</script>
</head>
<!--body id="top"-->
  <section id="banner" data-video="images/galaxy.jpg">
    <div class="inner">
      <header>
        <h1>VOTOS PREMIOS ESTELA 2016</h1>
        <p>15 CATEGORIAS<br />
        58 SOLISTAS<br/> HONRANDO LA MUSICA<br/> Y LOS MUSICOS.</p>
        <?

 extract($_SESSION);
if($id_votante==null)
{
	echo "Usuario no autenticado";
  	echo'<script>window.location="http://musicartes.org/votopremiosestela/";</script>';

}else
{
	 $id_votante=$_SESSION['id_votante'];
	 echo "<p><small>Bienvenid@</small><p>";
	 echo "<p><small>".$name."</small></p>";

}

?>
      </header>
      <a href="#main" class="more"><h2>Vota aquí</h2></a>
    </div>
  </section>
  <!-- Main -->

  <br clear="all" />

  <br clear="all" />
    <br clear="all" />
      <br clear="all" />

<br clear="all" /><br clear="all" />
<br clear="all" />
<br clear="all" />
<div id="wrap">
            <!--div class="wrap"-->
  <!-- Main -->


    <div id="main">

      <div class="inner">
      <!-- Boxes -->
        <div class="thumbnails">

          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/Musicaetnica/Grupo.jpg" alt="" /></a>
            <div class="inner">
              <br />
              <a  class="button fit" onclick="myFunction(1)">VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/Musicaetnica/Elvira.jpg" alt="" /></a>
            <div class="inner">
              <br />
              <a  class="button fit" onclick="myFunction(2)" >VOTAR</a>

            </div>
          </div>
          <div class="box">
            <a  class="image fit"><img src="images/FLYERS/Musicaetnica/cuy.jpg" alt="" /></a>
            <br/>
              <div class="inner">
                 <a onclick="myFunction(3)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a  class="image fit"><img src="images/FLYERS/Musicaetnica/sofia.jpg" alt="" /></a>
            <div class="inner">
               <a onclick="myFunction(5)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a  class="image fit"><img src="images/FLYERS/Musicaetnica/rabinal.jpg" alt="" /></a>
            <div class="inner">
               <a onclick="myFunction(6)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a  class="image fit"><img src="images/FLYERS/MusicaAcad/Sergio.jpg" alt="" /></a>
            <div class="inner">
               <a onclick="myFunction(7)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaAcad/Adriana.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(8)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaAcad/Cuarteto.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(10)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaAcad/OSN.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(11)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaAcad/CuartetoCont.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(12)" class="button fit" >VOTAR</a>
            </div>
          </div>

<!---->
          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Produccionhistorica/valses.jpg" alt="" /></a>
          <div class="inner">
                 <a onclick="myFunction(13)" class="button fit" >VOTAR</a>
          </div>
          </div>

          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Produccionhistorica/lib.jpg" alt="" /></a>
          <div class="inner">
                 <a onclick="myFunction(14)"  class="button fit" >VOTAR</a>
          </div>
          </div>

          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Produccionhistorica/sombras.jpg" alt="" /></a>
          <div class="inner">
                 <a onclick="myFunction(15)" class="button fit" >VOTAR</a>
          </div>
          </div>

          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Produccionhistorica/Paquetecuetes.jpg" alt="" /></a>
          <div class="inner">
                 <a onclick="myFunction(16)" class="button fit" >VOTAR</a>
          </div>
          </div>

          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Produccionhistorica/secretaria.jpg" alt="" /></a>
          <div class="inner">
                 <a onclick="myFunction(17)" class="button fit" >VOTAR</a>
          </div>
          </div>
          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Produccionhistorica/alt.jpg" alt="" /></a>
          <div class="inner">
                 <a onclick="myFunction(18)" class="button fit" >VOTAR</a>
          </div>
          </div>

          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/Produccionhistorica/estova.jpg" alt="" /></a>

              <div class="inner">
                 <a onclick="myFunction(19)" class="button fit" >VOTAR</a>
               </div>
          </div>

          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Produccion/tambor.jpg" alt="" /></a>

          <div class="inner">
                 <a onclick="myFunction(20)" class="button fit" >VOTAR</a>
          </div>
          </div>

          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Produccion/imaginaria.jpg" alt="" /></a>
          <div class="inner">
                   <a onclick="myFunction(21)" class="button fit" >VOTAR</a>
          </div>
          </div>

          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Produccion/Cumbia.jpg" alt="" /></a>
          <div class="inner">
                 <a onclick="myFunction(22)" class="button fit" >VOTAR</a>
          </div>
          </div>

        <div class="box">
        <a   class="image fit"><img src="images/FLYERS/Produccion/Rise.jpg" alt="" /></a>
        <div class="inner">
                 <a onclick="myFunction(23)" class="button fit" >VOTAR</a>
        </div>
        </div>
        <div class="box">
        <a   class="image fit"><img src="images/FLYERS/Produccion/sugarmama.jpg" alt="" /></a>
        <div class="inner">
                 <a onclick="myFunction(24)" class="button fit" >VOTAR</a>
        </div>
        </div>

          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Cancion/luna.jpg" alt="" /></a>
          <div class="inner">

                 <a onclick="myFunction(25)" class="button fit" >VOTAR</a>
          </div>
          </div>
          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Cancion/magdaang.jpg" alt="" /></a>
          <div class="inner">
                 <a onclick="myFunction(26)" class="button fit" >VOTAR</a>
          </div>
          </div>


          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Cancion/FerLpz.jpg" alt="" /></a>
          <div class="inner">
                 <a onclick="myFunction(27)" class="button fit" >VOTAR</a>
          </div>
          </div>

          <div class="box">
          <a   class="image fit"><img src="images/FLYERS/Cancion/Napo.jpg" alt="" /></a>
          <div class="inner">
                 <a onclick="myFunction(28)" class="button fit" >VOTAR</a>
          </div>
          </div>
<div class="box">
  <a   class="image fit"><img src="images/FLYERS/Cancion/Fnd_Sch.jpg" alt="" /></a>
  <div class="inner">
                 <a onclick="myFunction(29)" class="button fit" >VOTAR</a>
  </div>
</div>

<div class="box">
  <a   class="image fit"><img src="images/FLYERS/Virtuosismo/Hedras.jpg" alt="" /></a>
  <div class="inner">
                 <a onclick="myFunction(30)" class="button fit" >VOTAR</a>
  </div>
</div>
<div class="box">
  <a   class="image fit"><img src="images/FLYERS/Virtuosismo/Fernando.jpg" alt="" /></a>
  <div class="inner">
                 <a onclick="myFunction(31)" class="button fit" >VOTAR</a>
  </div>
</div>

<div class="box">
  <a   class="image fit"><img src="images/FLYERS/Virtuosismo/Pedro.jpg" alt="" /></a>
  <div class="inner">
                 <a onclick="myFunction(32)" class="button fit" >VOTAR</a>
  </div>
</div>


<div class="box">
<a   class="image fit"><img src="images/FLYERS/Virtuosismo/Javier.jpg" alt="" /></a>
<div class="inner">
                 <a onclick="myFunction(33)" class="button fit" >VOTAR</a>
</div>
</div>

<div class="box">
<a   class="image fit"><img src="images/FLYERS/Virtuosismo/Selvin.jpg" alt="" /></a>
<div class="inner">
                 <a onclick="myFunction(34)" class="button fit" >VOTAR</a>
</div>
</div>
<div class="box">
<a   class="image fit"><img src="images/FLYERS/Virtuosismo/FernandoV.jpg" alt="" /></a>
<div class="inner">
                 <a onclick="myFunction(36)" class="button fit" >VOTAR</a>
</div>
</div>

<div class="box">
<a   class="image fit"><img src="images/FLYERS/Virtuosismo/Sergio.jpg" alt="" /></a>
<div class="inner">
                 <a onclick="myFunction(66)" class="button fit" >VOTAR</a>
</div>
</div>
          <!---->
<div class="box">
  <a   class="image fit"><img src="images/FLYERS/BandaEscolar/band1.jpg" alt="" /></a>
  <div class="inner">
            <a onclick="myFunction(51)" class="button fit" >VOTAR</a>
    <br/>
    <br/>
  </div>
</div>

          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/BandaEscolar/san_sebastian.jpg" alt="" /></a>
            <div class="inner">

                 <a onclick="myFunction(49)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/BandaEscolar/bda_latin.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(50)" class="button fit" >VOTAR</a>
            </div>
          </div>

          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/BandaEscolar/band3.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(52)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/BandaEscolar/big_band.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(53)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/BandaEscolar/sandoval.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(54)" class="button fit" >VOTAR</a>
            </div>
          </div>


          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/Carrera/Buonafina.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(48)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a class="image fit"><img src="images/FLYERS/Carrera/Diether.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(45)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/Carrera/Galich.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(46)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/Carrera/estrada.jpg" alt="" /></a>
            <div class="inner">

                 <a onclick="myFunction(47)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a  class="image fit"><img src="images/FLYERS/Carrera/Joaquin.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(44)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/Carrera/ortega.jpg" alt="" /></a>
            <div class="inner">

                 <a onclick="myFunction(43)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaPopular/Ale.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(40)" class="button fit" >VOTAR</a>
            </div>
          </div>

          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaPopular/Francis.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(38)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaPopular/Miseria.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(37)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaPopular/Naik.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(39)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaPopular/wiwo.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(41)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaPopular/chapin.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(42)" class="button fit"  >VOTAR</a>
            </div>
          </div>

          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaSub/Seol.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(60)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaSub/ArsMa.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(64)" class="button fit" >VOTAR</a>
            </div>
          </div>

          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaSub/devo.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(62)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a class="image fit"><img src="images/FLYERS/MusicaSub/MetalR.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(63)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaSub/TheA.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(61)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaSub/invocat.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(65)"  class="button fit" >VOTAR</a>
            </div>
          </div>

          <div class="box">
            <a  class="image fit"><img src="images/FLYERS/MusicaUrbana/Kontra.jpg" alt="" /></a>
            <div class="inner">
                 <a  onclick="myFunction(56)" class="button fit" >VOTAR</a>
            </div>
          </div>

          <div class="box">
            <a class="image fit"><img src="images/FLYERS/MusicaUrbana/Mr-Fer.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(59)" class="button fit" >VOTAR</a>
            </div>
          </div>

          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaUrbana/poescalle.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(58)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a class="image fit"><img src="images/FLYERS/MusicaUrbana/RebecaLane.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(55)" class="button fit" >VOTAR</a>
            </div>
          </div>
          <div class="box">
            <a   class="image fit"><img src="images/FLYERS/MusicaUrbana/mamb.jpg" alt="" /></a>
            <div class="inner">
                 <a onclick="myFunction(57)" class="button fit" >VOTAR</a>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>
<!--/div-->
<!--/div-->
<!--/div-->
  <!--/body-->
</html>
