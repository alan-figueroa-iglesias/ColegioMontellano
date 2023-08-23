$(document).ready(main); /*Intrucción que indica que se va a ejecutar la función main
							cuando todo el documento sea cargado*/ 
 
var contador = 1;
 
function main () { //Con esta función se despliegan todas las opciones del menú al hacer click en su icono
	$('.menu-bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});

	//Regresar el menu
	
	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.subs').slideToggle();
	});
}