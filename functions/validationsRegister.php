<?php 
$arrErrors = [
  'firstName' => '',
  'lastName' => '',
  'email' => '',
  'dni' => '',
  'phone' => '',
  'address' => '',
  'username' => '',
  'pass' => '',
  'terms' => ''
];

$existErrors = true;

/* Funcion que valida si se realizo un envió de formulario y luego evalúa la condición que recibe como parámetro para definir cual string sera colocado (en este caso la implementación es para un nombre de clase) */
/* La condición del parámetro debe ser para asignar si da true una clase de invalidación, ejemplo una clase text-danger o is-invalid, como en este caso! */
$addClassValidationInputInvalid = fn( bool $conditionFromInvalid): string => 
!empty($_POST)
? ($conditionFromInvalid ? 'is-invalid' : 'is-valid')
: '';

if(!empty($_POST)) {
    include 'varsRequestRegister.php';
    
  /* VALIDATION FirstName */
    switch (true) {
      case empty($firstName):
        $arrErrors['firstName'] = 'El nombre es requerido';
        $existErrors = true;
        break;
      case strlen($firstName) > 15:
        $arrErrors['firstName'] = 'El nombre es muy largo';
        $existErrors = true;
        break;
      case is_numeric($firstName):
        $arrErrors['firstName'] = 'El nombre es invalido';
        $existErrors = true;
        break;
      default:
        $arrErrors['firstName'] = '';
        $existErrors = false;
        break;
    }
  /* VALIDATION LastName */
    switch (true) {
      case empty($lastName):
      case strlen($lastName) > 15:
      case is_numeric($lastName):
        $existErrors = true;
      case empty($lastName):
        $arrErrors['lastName'] = 'El apellido es requerido';
        break;
      case strlen($lastName) > 15:
        $arrErrors['lastName'] = 'El apellido es muy largo';
        break;
      case is_numeric($lastName):
        $arrErrors['lastName'] = 'El apellido es invalido';
        break;
      default:
        $arrErrors['lastName'] = '';
        break;
    }
  /* VALIDATION Email */
    switch (true) {
      case empty($email):
      case !filter_var($email,FILTER_VALIDATE_EMAIL):
        $existErrors = true;
      case empty($email):
        $arrErrors['email'] = 'El email es requerido';
        break;
      case !filter_var($email,FILTER_VALIDATE_EMAIL):
        $arrErrors['email'] = 'El email invalido';
        break;
      default:
        $arrErrors['email'] = '';
        $existErrors = false;
        break;
    }
  /* VALIDATION DNI */
    switch (true) {
      case empty($dni):
         $arrErrors['dni'] = 'El dni es requerido';
         $existErrors = true;
        break;
      case !preg_match('/^\d{8}(?:[-\s]\d{4})?$/',$dni):
         $arrErrors['dni'] = 'El dni es invalido';
         $existErrors = true;
        break;
      default:
      $arrErrors['dni'] = '';
      $existErrors = false;
      break;
    }
  /* VALIDATION Phone */
    switch (true) {
      case empty($phone):
        $arrErrors['phone'] = 'El teléfono es requerido';
        $existErrors = true;
        break;
      case !is_numeric($phone):
        $arrErrors['phone'] = 'El teléfono es invalido';
        $existErrors = true;
        break;
      case strlen($phone) > 10:
         $arrErrors['phone'] = 'El teléfono es invalido';
         $existErrors = true;
        break;
      default:
      $arrErrors['phone'] = '';
      $existErrors = false;
      break;
    }
  
  /* VALIDATION Address */
    switch (true) {
      case empty($address):
        $arrErrors['address'] = 'La dirección es requerido';
        $existErrors = true;
        break;
      case preg_match("/^([a-zA-Z0-9_-]){1,20}$/",$address):
      case strlen($address) > 50:
        $arrErrors['address'] = 'La dirección es invalida';
        $existErrors = true;
        break;
      default:
      $arrErrors['address'] = '';
      $existErrors = false;
      break;
    }
  
  /* VALIDATION Username */
    switch (true) {
      case empty($username):
        $arrErrors['username'] = 'El nombre de usuario es requerido';
        $existErrors = true;
        break;
      case is_numeric($username):
      case strlen($username) > 15:
        $arrErrors['username'] = 'El nombre de usuario es invalida';
        $existErrors = true;
        break;
      default:
      $arrErrors['username'] = '';
      $existErrors = false;
      break;
    }
  /* VALIDATION Password */
    switch (true) {
      case empty($pass):
        $arrErrors['pass'] = 'La contraseña es requerido';
        $existErrors = true;
        break;
      case strlen($pass) < 8:
        $arrErrors['pass'] = 'La contraseña es muy corta';
        $existErrors = true;
        break;
      default:
      $arrErrors['pass'] = '';
      $existErrors = false;
      break;
    }
  /* VALIDATION Terms */
    switch (true) {
      case $terms != 'on':
        $arrErrors['terms'] = 'Debes aceptar los términos y condiciones';
        $existErrors = true;
        break;
      default:
        $arrErrors['terms'] = '';
        $existErrors = false;
        break;
    }
  }
?>