<?php
session_start();
if (!isset($_SESSION["NAME"])) {
  header("location: ../index.php");
  return;
}
?>

<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Index | Kreden-Art<?php echo($_SESSION["TAG"]) ?></title>
  <link rel="stylesheet" href="../estilos/style.css">
  <link rel="stylesheet" type="text/css" href="../estilos/Pedidos.css">
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
  <form>
        <fieldset>
          <legend>Datos del Cliente</legend>
          <div>
            <label>Nombre <input></label>
            <label>Apellido <input></label>
            <div>
              <label>Cedula <input></label>
            </div>
          </div>
          <div>
            <label>E-mail <input type="email"></label>

            <label>Celular <input></label>
          </div>
        </fieldset>
        <fieldset>
          <legend>Datos del pedido</legend>
          <div>
            <label for="Articulo">Seleccione articulo</label>
            <select name="Articulo">
              <option value="1">Camisa</option>
              <option value="2">Jarro</option>
              <option value="3">Plato</option>
              <option value="4">Boligrafo</option>
              <option value="5">Llaveros</option>
            </select>
          </div>
          <fieldset>
            <legend>Estilo</legend>
            <label><input type="radio" name="estilo">Sublimado</label>
            <label><input type="radio" name="estilo">Bordado</label>
            <label><input type="radio" name="estilo">Vinilo</label>
          </fieldset>
          <div>
            <table class="pedido">
              <tr >
                <td><label>Cantidad <input id="cantidad" type="number" min="1" style="width: 100px; height: 30px"></label></td>
                <td rowspan="3">
                  <label for="Descripcion">Descripcion</label><br>
                  <textarea name="Descripcion" class="pedido" placeholder="Descripcion detallada dada por el cliente"></textarea>
                </td>
                <td rowspan="3">
                  <label>Forma de pago</label>
                  <ul id="forma_pago">
                    <li><label><input type="radio" name="Pago" value="1" id="E_Pago" onchange="mostrar()">Efectivo</label></li>
                  </ul>
                </td>
                <td rowspan="3" id="Cuadricula" style="display: none;">
                  <div id="Efectivo" class="oculto" style="width: 200px; height: 0px" >
                      <ul class="pago">
                        <li><label for="procien">confimre transacion</label></li>
                        <li><label><input type="radio" value="Abonado" id="Abonado" name="cantidad" onchange="pagar()"> Abonar</label></li>
                        <li><label><input type="radio" value="Completo" name="cantidad" id="Completo" onchange="pagar()"> Completo</label></li>
                      </ul>
                      <input type="number" id="P_Abonado" class="oculto" style="width: 100px; height: 30px" min="5" step="0.01" >
                      <label id="P_Completo" class="oculto"> Gracias por su compra</label>
                  </div style="width: 100px; height: 200px">
                </td>
              </tr>
              
              <tr>
                <td><label>Precio unitario <input id="Pu"  min="1" onblur="preciototal()" type="number" step="0.01" style="width: 100px; height: 30px"></label></td>
              </tr>
              <tr>
                <td><label>Total <input id="Total" readonly style="width: 100px; height: 30px"></td>
              </tr>
            </table>
          </div>
        </fieldset>
        <fieldset>
          <legend>Carga de imagen</legend>
          <label>Imagen Personalizada <input type="file"></label>
        </fieldset>
        <input type="submit" value="Guardar">
      </form>
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
  <script src="../modelos/datos_pago.js"></script>
  <script src="../modelos/calculadora.js"></script>
</body>
</html>
