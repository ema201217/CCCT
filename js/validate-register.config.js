var onloadCallback = function () {
  grecaptcha.render('ReCaptcha', {
    sitekey: '6Lf31UAcAAAAABrw2DUMZXzCldUObT0L4lEoBJcP',
    theme: 'light',
    size: 'normal',
  })
}

const errorContainer =
  '#errorFirstName, #errorLastName, #errorEmail, #errorDNI, #errorPhone, #errorAddress, #errorUsername, #errorPassword, #errorTerms'
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
  email: {
    required: true,
    email: true,
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
    maxlength: 20,
  },
  terms: {
    required: true,
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
  email: {
    required: 'Email requerido',
    email: 'Email invalido',
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
  terms: {
    required: '',
  },
}

const options = {
  errorContainer,
  errorClass,
  validClass,
  rules,
  messages,
  debug: true,
  submitHandler: (form,event) => {
 
      var response = grecaptcha.getResponse();

        event.preventDefault()
        if (response.length == 0) {
          Swal.fire({
            position: 'center',
            title: 'Debes aceptar el reCaptcha',
            showConfirmButton: false,
            showCloseButton: true,
            imageUrl: 'https://c.tenor.com/lx2WSGRk8bcAAAAC/pulp-fiction-john-travolta.gif',
            imageWidth: 170,
            imageHeight: 170,
          })
        } else {
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Usuario registrado con éxito',
            showConfirmButton: false,
            timer: 2000,
          }).then(() => {
            form.submit()
          })
        }
  },
}

if ($('#form-register')[0]) {
  const elementsForm = $('#form-register')[0].elements
  for (let i = 0; i < elementsForm.length - 1; i++) {
    $(elementsForm[i]).val($(elementsForm[i]).val().trim())
  }

  $('#form-register').validate(options)
}
