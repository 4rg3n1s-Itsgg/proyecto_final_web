<?php
include "../modelos/conexion.php";
session_start();
if (!isset($_SESSION["NAME"])) {
  header("location: ../index.php");
  return;
}
$consult=$_GET["date"];
$db="Kreden_ArtDB";
$cn=mysqli_connect($server,$user,$contra,$db);
if ($consult == "all") {
  $cl="SELECT * FROM factura";
} elseif ($consult == "now") {
  $fecha=date("Ymd");
  $cl="SELECT * FROM factura WHERE CONVERT(DATE,'Fecha de pedido',2) ='$fecha'";
}

$qr=mysqli_query($cn,$cl);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Index | Kreden-Art</title>
  <link rel="stylesheet" href="../estilos/style.css">
  <style type="text/css">
        a:link, a:visited, a:active {
            text-decoration:none;
        }
    </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Left Menu -->
<div id="leftmenu">
  
  <div id="date_time">
    <div id="date" class="semi_arc e4">
      <div class="semi_arc_2 e4_1">
        <div class="counterspin4"></div>
      </div>
        <div style="font-size: 40px; margin-top: 25px;">04</div>
        <div style="font-size: 25px;">January</div>
    </div>
    
    <div id="time" class="arc e1">
        <div style="font-size: 23px; margin-left: -10px; margin-top: 23px;">23:41</div>
        <div style="font-size: 15px; margin-left: 40px; margin-top: -30px; display; inline;">31</div>
        <div style="font-size: 17px; margin-top: 10px;">Tuesday</div>
    </div>
  </div>
  
  <p class="title">Barra de</p>
  <div class="hline title_underline"></div>
  
  
  <p class="title">Navegacion</p>
  <div class="hline title_underline"></div> 
  
  <div class="menu">
    <nav id="nav">
      <ul >
      <li><button class="menuitem"> <span class="entypo-right-open"/> <p class="caption"><a href="./index.html" class="caption">Inicio</a>  </p> </button></li>
      <li><button class="menuitem"> <span class="entypo-right-open"/> <p class="caption"><a href="./consulta.html" class="caption">Consulta</a>  </p> </button>
        <ul>
          <li><button class="menuitem"> <span class="entypo-right-open"/> <p class="caption"><a href="./consulta.html" class="caption">Por nombre</a>  </p> </button></li>
          <li><button class="menuitem"> <span class="entypo-right-open"/> <p class="caption"><a href="./consulta.html" class="caption">Por codigo</a>  </p> </button></li>
        </ul>
      </li>
      <li><button class="menuitem"> <span class="entypo-right-open"/> <p class="caption"><a href="../vistas/fecha.php?date=all" class="caption">Todos los pedidos realisados</a>  </p> </button> 
        <ul>
          <li><button class="menuitem"> <span class="entypo-right-open"/> <p class="caption"><a href="../vistas/fecha.php?date=now" class="caption">Hoy</a>  </p> </button></li>
          <li><button class="menuitem"> <span class="entypo-right-open"/> <p class="caption"><a href="../vistas/fecha.php?date=week" class="caption">Esta semana</a>  </p> </button></li>
          <li><button class="menuitem"> <span class="entypo-right-open"/> <p class="caption"><a href="../vistas/fecha.php?date=mes" class="caption">Este mes</a>  </p> </button></li>
        </ul>
      </li>
      <li><button class="menuitem"> <span class="entypo-right-open"/> <p class="caption"><a href="../modelos/sesion_out.php" class="caption">Salir</a>  </p> </button></li>
    </ul>
    </nav>
    
  </div>
  
</div>


<!-- Right Menu -->
<div id="rightmenu">
  <center><h1>Pedidos Realizados</h1></center>
	
	<div>
		<table border="1">
      <tr>
        <th>Cliente</th>
        <th>Articulo</th>
        <th>Estilo</th>
        <th>Cantidad</th>
        <th>Valor unitario</th>
        <th>Valor total</th>
        <th>Fecha de pedido</th>
        <th>Fecha de entregra</th>
        <th>Estado</th>
        <th>Pagado</th>
      </tr>
      <?php 
        if($qr){
        while ($rw=mysqli_fetch_array($qr)) {?>
          <tr>
            <td><?php echo $rw['Cliente']?></td>
            <td><?php echo $rw['Articulo']?></td>
            <td><?php echo $rw['Estilo']?></td>
            <td><?php echo $rw['cantidad']?></td>
            <td><?php echo $rw['valor unitario']?></td>
            <td><?php echo $rw['valor total']?></td>
            <td><?php echo $rw['Fecha de pedido']?></td>
            <td><?php echo $rw['Fecha de entrega']?></td>
            <td><?php echo $rw['Estado']?></td>
            <td><?php echo $rw['Pagado']?></td>
          </tr>
        <?php } 
        } else{ ?>
          <tr>
            <td colspan="10" align="center">No hay registros</td>
          </tr>
        <?php } ?>  
    </table>
	</div>
	
</div>



<!-- Arc Reactor -->
<div id="arc_container">
  <div class="arc_reactor">
    <div class="case_container">
      <div class="e7">
        <div class="semi_arc_3 e5_1">
          <div class="semi_arc_3 e5_2">
            <div class="semi_arc_3 e5_3">
              <div class="semi_arc_3 e5_4"></div>
            </div>
          </div>
        </div>
        <div class="core2"></div>
      </div>
      <ul class="marks">
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
      </ul>
    </div>
  </div>
</div>



<!-- Particles -->
<!-- Left Menu Particles -->
<canvas id="particle1" width="20" height="500"></canvas>

<canvas id="particle1_1" width="40" height="510"></canvas>

<canvas id="particle1_2" width="40" height="510"></canvas> 

<div id="particle1_3">
  > > > >
</div>

<div id="particle2">▶<br/>▶<br/>▶</div>
<div id="particle3" class="vline"/>
<div id="particle4" class="vline"/>
<div id="particle5" class="vline"/>
<div id="particle6" class="vline"/>
<div id="particle7" class="vline"/>
<div id="particle8" class="vline"/>
<div id="particle9" class="vline"/>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src= '../modelos/particulas.js'></script>
</body>
</html>
