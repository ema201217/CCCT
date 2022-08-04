const errorContainer =
  '#errorFirstName2, #errorLastName2, #errorEmail2, #errorDNI2, #errorPhone2, #errorAddress2, #errorUsername2, #errorPassword2'
const errorClass = 'is-invalid'
const validClass = 'is-valid'
const rules = {
  firstName: {
    required: true,
    minlength: 5,
    maxlength: 20,
  },
  lastName: {
    required: true,
    minlength: 5,
    maxlength: 15,
  },
  dni: {
    required: true,
    number: true,
    minlength: 8,
    maxlength: 9,
  },
  phone: {
    required: true,
    number: true,
    minlength: 7,
    maxlength: 11,
  },
  address: {
    required: true,
    minlength: 7,
    maxlength: 50,
  },
  username: {
    required: true,
    minlength: 6,
    maxlength: 20,
  },
  pass: {
    required: true,
    minlength: 8,
  },
}
const messages = {
  firstName: {
    required: 'Nombre requerido',
    minlength: jQuery.validator.format('Nombre invalido'),
    maxlength: jQuery.validator.format('Nombre invalido'),
  },
  lastName: {
    required: 'Apellido requerido',
    minlength: jQuery.validator.format('Apellido invalido'),
    maxlength: jQuery.validator.format('Apellido invalido'),
  },
  dni: {
    required: 'DNI requerido',
    number: 'DNI invalido',
    minlength: jQuery.validator.format('DNI invalido'),
    maxlength: jQuery.validator.format('DNI invalido'),
  },
  phone: {
    required: 'Teléfono requerido',
    number: 'Teléfono invalido',
    minlength: jQuery.validator.format('Teléfono invalido'),
    maxlength: jQuery.validator.format('Teléfono invalido'),
  },
  address: {
    required: 'Dirección requerida',
    minlength: jQuery.validator.format('Dirección invalida'),
    maxlength: jQuery.validator.format('Dirección invalida'),
  },
  username: {
    required: 'Username requerido',
    minlength: jQuery.validator.format('Username invalido'),
    maxlength: jQuery.validator.format('Username invalido'),
  },
  pass: {
    required: 'Contraseña requerida',
    minlength: jQuery.validator.format('Contraseña invalida'),
    maxlength: jQuery.validator.format('Contraseña invalida'),
  },
}

const options = {
  errorContainer,
  errorClass,
  validClass,
  rules,
  messages,
  debug: true,
  submitHandler: (form) => {
    if ($('#form-update').valid()) {
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Usuario actualizado con éxito',
        showConfirmButton: false,
        timer: 2000,
      }).then(() => {
        form.submit()
      })
    } else {
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Algo salio mal',
        showConfirmButton: false,
        timer: 2000,
      })
    }
  },
}

if ($('#form-update')[0]) {
  const elementsForm = $('#form-update')[0].elements
  for (let i = 0; i < elementsForm.length - 1; i++) {
    $(elementsForm[i]).val($(elementsForm[i]).val().trim())
  }
  $('#form-update').validate(options)
}
