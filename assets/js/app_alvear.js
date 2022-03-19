//crear
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

//editar
const formularioed = document.getElementById('formularioed');
const inputsed = document.querySelectorAll('#formularioed input');

const expresiones = {
	cedula: /^\d{10}$/, // 10 numeros
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	// fecha: /^\d{8}$/, // 8 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{10}$/ // 10 numeros.
}

const campos = {
	cedula: false,
	nombre: false,
	// fecha: false,
    // motivo: false,
	correo: false,
	telefono: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "cedula":
			validarCampo(expresiones.cedula, e.target, 'cedula');
		break;
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		// case "fecha":
		//  	validarCampo(expresiones.fecha, e.target, 'fecha');
		// break;
		// case "motivo":
        //     validarCampo(expresiones.motivo, e.target, 'motivo');
		// break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

inputsed.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
 	e.preventDefault();

 	const terminos = document.getElementById('terminos');
 	if(campos.cedula && campos.nombre && campos.correo && campos.telefono && terminos.checked ){

 		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
 		setTimeout(() => {
 			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
 		}, 5000);

 		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
 			icono.classList.remove('formulario__grupo-correcto');
 		});

		
			var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

			var ajaxUrl  = "index.php?c=contacto&f=nuevo";
			var formElement = document.querySelector("#formulario");
			var formDatos= new FormData(formElement); 
			request.open("POST",ajaxUrl ,true);
			request.send(formDatos);

			formulario.reset();
			window.location.replace("index.php?c=contacto&f=index");
		
 	} else {
 		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
 	}
});

formularioed.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');
	if(campos.cedula && campos.nombre && campos.correo && campos.telefono && terminos.checked ){

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});

	   
		   var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

		   var ajaxUrl  = "index.php?c=contacto&f=editar";
		   var formElement = document.querySelector("#formulario");
		   var formDatos= new FormData(formElement); 
		   request.open("POST",ajaxUrl ,true);
		   request.send(formDatos);

		   formulario.reset();
		   window.location.replace("index.php?c=contacto&f=index");
	   
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});