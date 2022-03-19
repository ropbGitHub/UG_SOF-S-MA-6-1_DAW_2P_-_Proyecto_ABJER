/*CONTROL DE FORMULARIO*/
var form = document.getElementById("form_user");
form.addEventListener('submit', dataValidation);
/*
form.addEventListener("submit", (e) => {
  e.preventDefault();
  dataValidation();
});
*/
let cont = 0;

function dataValidation(event) {
  // Variables
  var output = true;
  var regEx_Password = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}$/;
  var regEx_Email = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  // Variables element
  var txt_Username = document.getElementById("username");
  var txt_Email = document.getElementById("email");
  var dt_Birthday = document.getElementById("birthday");
  var txt_Nationality = document.getElementById("nationality");
  var txt_Password1 = document.getElementById("password1");
  var txt_Password2 = document.getElementById("password2");
  // Variables value
  var value_Username = txt_Username.value.trim();
  var value_Email = txt_Email.value.trim();
  var value_Birthday = dt_Birthday.value.trim();
  var value_Nationality = txt_Nationality.value.trim();
  var value_Password1 = txt_Password1.value.trim();
  var value_Password2 = txt_Password2.value.trim();

  messageClear(); // Clear error messages

  // Validation: username
  if (!value_Username) {
    output = false;
    messageWarning(txt_Username, "Campo obligatorio.");
  } else if (txt_Username.length < 5) {
    output = false;
    messageWarning(txt_Username, "Debe tener más de 5 caracteres");
  }

  // Validation: email
  if (!value_Email) {
    output = false;
    messageWarning(txt_Email, "Campo obligatorio.");
  } else if (!regEx_Email.test(value_Email)) {
    output = false;
    messageWarning(txt_Email, "Correo no valido.");
  }

  // Validation: birthday 
  if (!value_Birthday) {
    output = false;
    messageWarning(dt_Birthday, "Campo obligatorio.");
  }

  // Validation: password1
  if (!value_Password1) {
    output = false;
    messageWarning(txt_Password1, "Campo obligatorio.");
  } else if (value_Password1.length < 8) {
    output = false;
    messageWarning(txt_Password1, "Debe tener 8 caracteres cómo mínimo.");
  } else if (!value_Password1.match(regEx_Password)) {
    output = false;
    messageWarning(txt_Password1, "Debe tener al menos una mayúscula., una minúscula. y un número");
  }

  // Validation: password2
  if (!value_Password2) {
    output = false;
    messageWarning(txt_Password2, "Confirme su password");
  } else if (value_Password1 !== value_Password2) {
    output = false;
    messageWarning(txt_Password2, "El password no coincide");
  }

  if (!output) {
    event.preventDefault(); //stop submit
  }

}

function messageWarning(elemento, cadenaMensaje) {
  elemento.focus();
  var nodoPadre = elemento.parentNode;
  var nodoMensaje = document.createElement("span");
  nodoMensaje.textContent = cadenaMensaje;
  nodoMensaje.style.color = "red";
  nodoMensaje.display = "block";
  nodoMensaje.setAttribute("class", "mensajeError");
  nodoPadre.appendChild(nodoMensaje);
}

function messageClear() {
  var mensajes = document.querySelectorAll(".mensajeError");
  for (let i = 0; i < mensajes.length; i++) {
    mensajes[i].remove();// remueve o elimina un elemento de mi doc html
  }
}