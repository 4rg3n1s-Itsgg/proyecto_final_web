function preciototal() {
	var c = document.getElementById('cantidad').value;
	var p = document.getElementById('Pu').value;
	var t = c*p;
	document.getElementById('Total').value=t.toFixed(2)
}