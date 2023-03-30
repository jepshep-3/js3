function soloNumeros(evt) {
	var e = evt || window.event;
	var key = e.keyCode || e.which;
	if (!e.shiftKey && !e.altKey && !e.ctrlKey && key >= 48 && key <= 57 || key >= 96 && key <= 105 || key == 8 || key == 9 || key == 13 || key == 37 || key == 39 || key == 46) {
		e.returnValue = true;
	} else {
		e.returnValue = false;
		if (e.preventDefault) e.preventDefault();
	}
}

function mueveCursorFin(obj) {
	if (!(obj.updating)) {
		obj.updating = true;
		var oldValue = obj.value;
		obj.value = '';
		setTimeout(function() {
			obj.value = oldValue;
			obj.updating = false;
		}, 1);
	}
}

function validateEmail(evt) {
	evt.value = evt.value.replace(/[^a-zA-Z0-9\.\@\-\_\+\s]/g, "");
}

function validaNumeroCuenta(e) {
	tecla = (document.all) ? e.keyCode : e.which;
	if (document.all) origen = origen = event.srcElement;
	else origen = e.target;
	cadena = origen.value;
	valor = "";
	if (cadena.length == 1) {
		if (cadena == "4") {
			origen.value = cadena;
			return true;
		} else {
			origen.value = "";
			return true;
		}
	}
	if (cadena.length == 2) {
		if (cadena == "40") {
			origen.value = cadena;
			return true;
		} else {
			origen.value = "4";
			return true;
		}
	}
	if (cadena.length == 3) {
		if (cadena == "406") {
			origen.value = cadena;
			return true;
		} else {
			origen.value = "40";
			return true;
		}
	}
	if (cadena.length == 13) {
		origen.value = cadena.substring(0, 12);
		return true;
	}
	for (i = 0; i < cadena.length; i++) {
		aux = cadena.substr(i, 1);
		num = parseInt(aux);
		if (!isNaN(num)) {
			valor = valor + aux;
		}
	}
	origen.value = valor;
	return true;
}

function formatoNumero(input) {
	var num = input.value.replace(/\,/g, '');
	num = num.replace('.', '');
	if (!isNaN(num)) {
		num = num.toString().split('').reverse().join('').replace(/(?=\d*\,?)(\d{3})/g, '$1,');
		num = num.split('').reverse().join('').replace(/^[\,]/, '');
		input.value = num;
	} else {
		input.value = input.value.replace(/[^\d\,]*/g, '');
	}
}

function letrasNumeros(evt) {
	var e = evt || window.event;
	var key = e.keyCode || e.which;
	if (!e.shiftKey && !e.altKey && !e.ctrlKey && key >= 48 && key <= 57 || key >= 65 && key <= 90 || key >= 97 && key <= 122 || key == 27 || key == 127 || key == 13 || key == 32 || key == 9 || key == 8) {
		e.returnValue = true;
	} else {
		e.returnValue = false;
		if (e.preventDefault) e.preventDefault();
	}
}

function numerosPunto(evt) {
	var e = evt || window.event;
	var key = e.keyCode || e.which;
	if (!e.shiftKey && !e.altKey && !e.ctrlKey && key >= 48 && key <= 57 || key >= 96 && key <= 105 || key == 8 || key == 9 || key == 13 || key == 37 || key == 39 || key == 46 || key == 190 || key == 110) {
		e.returnValue = true;
	} else {
		e.returnValue = false;
		if (e.preventDefault) e.preventDefault();
	}
}

function validaMonto(input) {
	var num = input.value.replace(/\,/g, '');
	if (!isNaN(num)) {
		if (num.indexOf('.') > -1) {
			num = num.split('.');
			num[0] = num[0].toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1,').split('').reverse().join('').replace(/^[\.]/, '');
			if (num[1].length > 2) {
				tot = num[1].length - 2;
				num[1] = num[1].substring(0, num[1].length - tot);
			}
			input.value = num[0] + '.' + num[1];
		} else {
			input.value = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1,').split('').reverse().join('').replace(/^[\,]/, '');
		}
	} else {
		input.value = input.value.substring(0, input.value.length - 1);
	}
	var valor = input.value.substring(0, 1);
	if (valor == ',') {
		input.value = input.value.substring(1, input.value.length);
	}
}

function changeImage(a) {
	document.getElementById("imagenConfig").src = a;
}

function changeImageI(a) {
	document.getElementById("imgBeneficiarioInterno").src = a;
}

function changeImageE(a) {
	document.getElementById("imgBeneficiarioExterno").src = a;
}

function justNumbers(e) {
	var key = window.Event ? e.which : e.keyCode;
	return ((key >= 48 && key <= 57) || (key == 8));
}

function ocultar(id) {
	try {
		document.getElementById(id).style.display = 'none';
	} catch (err) {}
}

function adjustPositionandOpenDialog(jqr) {
	/**var tfactivecli = jqr.context.activeElement.getBoundingClientRect();
	var parent = jqr;
	var wD = jqr[0].offsetWidth;
	var hD = jqr[0].offsetHeight;
	parent.offset({
		top: (($(window).height() / 2) + $(window).scrollTop()) - 150,
		left: (($(window).width() / 2) + $(window).scrollLeft()) - 157
	});*/
}

function ServerFail() {
	var URLactual = window.location;
	var xhttp = new XMLHttpRequest();
	try {
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 0) {
				alert("Ha ocurrido un error inesperado porfavor recargue la pÃ¡gina");
			}
		};
		xhttp.open("POST", URLactual, true);
		xhttp.send();
	} catch (e) {
		;
	}
}

function mensajeRedireccion() {
	var device = navigator.userAgent;
	var mensaje = $('#mesaje').val();
	if (device.match(/iPhone|iPad|iPod/i) || device.match(/Android/i) || device.match(/Iphone/i) || device.match(/IEMobile/i) || device.match(/Mobile/i) || device.match(/Windows Phone/i) || device.match(/windows mobile/i)) {
		if (device.match(/iPhone/i)) {
			conf = confirm(mensaje);
			if (conf) {
				window.location = "https://itunes.apple.com/mx/app/jep-movil/id957463204?mt=8";
			}
		}
		if (device.match(/Android/i) && device.match(/Mobile|mobile/i)) {
			conf = confirm(mensaje);
			if (conf) {
				window.location = "https://play.google.com/store/apps/details?id=com.jepmovil";
			}
		}
	}
}

function mensajeRedireccion() {
	var device = navigator.userAgent;
	if (device.match(/iPhone|iPad|iPod/i) || device.match(/Android/i) || device.match(/Iphone/i) || device.match(/IEMobile/i) || device.match(/Mobile/i) || device.match(/Windows Phone/i) || device.match(/windows mobile/i)) {
		if (device.match(/iPhone/i)) {
			PF('alertaDispositivoNavigator').show();
		}
		if (device.match(/Android/i) && device.match(/Mobile|mobile/i)) {
			PF('alertaDispositivoNavigator').show();
		}
	}
}

function paginaRedireccion() {
	var device = navigator.userAgent;
	if (device.match(/Android/i)) {
		window.location = "https://play.google.com/store/apps/details?id=com.jepmovil";
	} else {
		window.location = "https://itunes.apple.com/mx/app/jep-movil/id957463204?mt=8";
	}
}