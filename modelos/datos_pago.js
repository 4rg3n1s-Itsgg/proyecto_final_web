function mostrar()
{
	var tipo_pago = new Array(document.getElementById('E_Pago'));
	if ( tipo_pago[0].checked) {
			document.getElementById("Efectivo").style.display = "block";
			document.getElementById("Cuadricula").style.display = "block";
		}else if ( tipo_pago[1].checked) {
			document.getElementById("Efectivo").style.display = "none";
			document.getElementById("Cuadricula").style.display = "block";
		}else if (tipo_pago[2].checked) {
			document.getElementById("Efectivo").style.display = "none";
			document.getElementById("Cuadricula").style.display = "block";
		} else{
			document.getElementById("Tarjeta").style.display = "none";
			document.getElementById("Efectivo").style.display = "none";
			document.getElementById("Paypal").style.display = "none";	
			document.getElementById("Cuadricula").style.display = "none";
		};
};
	/*for (var i = 0; i <= 3; i++) {
		if ( a[i].value=="1") {
			document.getElementById("Tarjeta").style.display = "none";
			document.getElementById("Efectivo").style.display = "block";
			document.getElementById("Paypal").style.display = "none";
			document.getElementById("Cuadricula").style.display = "block";
		}else if ( a[i].value == "2") {
			document.getElementById("Tarjeta").style.display = "block";
			document.getElementById("Efectivo").style.display = "none";
			document.getElementById("Paypal").style.display = "none";
			document.getElementById("Cuadricula").style.display = "block";
		}else if (a[i].value == "3") {
			document.getElementById("Tarjeta").style.display = "none";
			document.getElementById("Efectivo").style.display = "none";
			document.getElementById("Paypal").style.display = "block";	
			document.getElementById("Cuadricula").style.display = "block";
		} else{
			document.getElementById("Tarjeta").style.display = "none";
			document.getElementById("Efectivo").style.display = "none";
			document.getElementById("Paypal").style.display = "none";	
			document.getElementById("Cuadricula").style.display = "none";
		}
	};
};
	/*var x = document.getElementById('E_Pago') ;
	var y = document.getElementById('T_Pago');
	var z = document.getElementById('P_Pago');
	console.log()
	if (x.checked) 
	{
		document.getElementById("Tarjeta").style.display = "none";
		document.getElementById("Efectivo").style.display = "block";
		document.getElementById("Paypal").style.display = "none";
		document.getElementById("Cuadricula").style.display = "block";
	} else if (y.checked) 
	{
		document.getElementById("Tarjeta").style.display = "block";
		document.getElementById("Efectivo").style.display = "none";
		document.getElementById("Paypal").style.display = "none";
		document.getElementById("Cuadricula").style.display = "block";
	} else if (z.checked)
	{
		document.getElementById("Tarjeta").style.display = "none";
		document.getElementById("Efectivo").style.display = "none";
		document.getElementById("Paypal").style.display = "block";	
		document.getElementById("Cuadricula").style.display = "block";
	} else
	{
		document.getElementById("Tarjeta").style.display = "none";
		document.getElementById("Efectivo").style.display = "none";
		document.getElementById("Paypal").style.display = "none";	
		document.getElementById("Cuadricula").style.display = "none";
	}		
} */
var pago = new Array (document.getElementById('Abonado'), document.getElementById('Completo')) ;
function pagar()
{
	if (pago[0].checked) 
	{
		document.getElementById('P_Abonado').style.display= "block"
		document.getElementById('P_Completo').style.display = "none"
	} else if (pago[1].checked) 
	{
		document.getElementById('P_Abonado').style.display= "none"
		document.getElementById('P_Completo').style.display = "block"
	} else
	{
		document.getElementById('P_Abonado').style.display= "none"
		document.getElementById('P_Completo').style.display = "none"
	}
}

function valor(){
	
}