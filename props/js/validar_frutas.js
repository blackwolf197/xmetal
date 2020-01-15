function validarfrutas(){

var nombre = document.getElementById('nombre').value;
var cantida = document.getElementById('cantida').value;
var color = document.getElementById('tcolor').selectedIndex;
var sabor = document.getElementById('tsabor').selectedIndex;

if (nombre.length == 0) {
document.getElementById("nombre").style.boxShadow = '0 0 15px red';
document.getElementById("nombre").placeholder = "Debe ingresar el nombre de la fruta"; 

return false;
}else{
document.getElementById("nombre").style.boxShadow = '0 0 15px green';	
}

if (isNaN(cantida) || cantida.length == 0) {
document.getElementById("cantida").style.boxShadow = "0 0 15px red";

return false;
}else{
document.getElementById("cantida").style.boxShadow = " 0 0 15px green";	
}

if (color == 0) {
document.getElementById("tcolor").style.boxShadow = " 0 0 15px red";

return false;

}else{
document.getElementById("tcolor").style.boxShadow = " 0 0 15px green";	
}

if (sabor == 0) {
document.getElementById("tsabor").style.boxShadow = "0 0 15px red";

return false;
}else{
document.getElementById("tsabor").style.boxShadow = "0 0 15px green";
	
}

return true;

}