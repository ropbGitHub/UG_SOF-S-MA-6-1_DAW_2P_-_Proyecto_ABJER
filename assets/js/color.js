const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const formulariof = document.getElementById('formulariof');
const inputsed = document.querySelectorAll('#formularioed input');

const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    //pregunta: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    //respuesta: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
}

const campos = {
    nombre: false,
    apellido: false,
    //pregunta: false,
    //respuesta: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;
        case "apellido":
            validarCampo(expresiones.apellido, e.target, 'apellido');
            break;
        /* case "pregunta":
             validarCampo(expresiones.pregunta, e.target, 'pregunta');
             break;
         case "respuesta":
             validarCampo(expresiones.respuesta, e.target, 'respuesta');
             break;*/
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
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
    if (campos.nombre && campos.apellido /*&& terminos.checked && campos.pregunta && campos.respuesta*/) {

        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
        }, 5000);

        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario__grupo-correcto');
        });


        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

        var ajaxUrl = "index.php?c=qa&f=nuevo";
        var formElement = document.querySelector("#formulario");
        var formDatos = new FormData(formElement);
        request.open("POST", ajaxUrl, true);
        request.send(formDatos);

        formulario.reset();
        window.location.replace("index.php?c=qa&f=index");

    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
});

formulariof.addEventListener('submit', (e) => {
    e.preventDefault();

    const terminos = document.getElementById('terminos');
    if (campos.cedula && campos.nombre && campos.correo && campos.telefono && terminos.checked) {

        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
        }, 5000);

        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario__grupo-correcto');
        });


        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

        var ajaxUrl = "index.php?c=qa&f=editar";
        var formElement = document.querySelector("#formulario");
        var formDatos = new FormData(formElement);
        request.open("POST", ajaxUrl, true);
        request.send(formDatos);

        formulario.reset();
        window.location.replace("index.php?c=qa&f=index");

    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
});
