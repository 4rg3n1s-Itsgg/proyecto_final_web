<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./estilos/style_login.css">
		<title>Login | Kredent-Art </title>
		<?php
			session_start();
			if(isset($_SESSION["error"])){?>
				<script language="javascript">alert("ERROR USUARIO Y/O CONTRASENA INCORRECTO");</script>
			<?php } ?>
	</head>
	<body>
		<div id="logo"> 
		  <h1><i>Kreden-Art</i></h1>
		</div> 
		<section class="stark-login">
		  
		  <form action="modelos/sesion_start.php" method="POST">	
		    <div id="fade-box">
		      <input type="text" name="username" id="username" placeholder="Usuario" required id="Usuario">
		        <input type="password" name="password" placeholder="Contraseña" required id="Contrasena">
		          
		          <button><input type="submit" value="Ingresar"></button>
		        </div>
		      </form>
		      <div class="hexagons">
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <span>&#x2B22;</span>
		        <br>
		          <span>&#x2B22;</span>
		          <span>&#x2B22;</span>
		          <span>&#x2B22;</span>
		          <span>&#x2B22;</span>
		          <span>&#x2B22;</span>
		          <span>&#x2B22;</span>
		          <span>&#x2B22;</span>
		          <span>&#x2B22;</span>
		          <span>&#x2B22;</span>
		          <span>&#x2B22;</span>
		          <span>&#x2B22;</span>
		          <br>
		            <span>&#x2B22;</span>
		            <span>&#x2B22;</span>
		            <span>&#x2B22;</span>
		            <span>&#x2B22;</span> 
		            <span>&#x2B22;</span>
		            <span>&#x2B22;</span>
		            <span>&#x2B22;</span>
		            <span>&#x2B22;</span>
		            <span>&#x2B22;</span>
		            <span>&#x2B22;</span>
		            <span>&#x2B22;</span>
		            <span>&#x2B22;</span>
		            
		            <br>
		              <span>&#x2B22;</span>
		              <span>&#x2B22;</span>
		              <span>&#x2B22;</span>
		              <span>&#x2B22;</span>
		              <span>&#x2B22;</span>
		              <span>&#x2B22;</span>
		              <span>&#x2B22;</span>
		              <span>&#x2B22;</span>
		              <span>&#x2B22;</span>
		              <span>&#x2B22;</span>
		              <span>&#x2B22;</span>
		              <br>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		                <span>&#x2B22;</span>
		              </div>      
		            </section> 
		            
		            <div id="circle1">
		              <div id="inner-cirlce1">
		                <h2> </h2>
		              </div>
		            </div>
		            
		            
		            
		            <ul>
		              <li></li>
		              <li></li>
		              <li></li>
		              <li></li>
		              <li></li>
		            </ul>
	</body>
</html>