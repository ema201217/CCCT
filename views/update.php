<?php
include '../functions/CRUD_USERS.php';
$user = get_user_by_id($_GET['id']);

include './partials/header.php';
?>
<main class="my-4 d-flex flex-column align-items-center" id="register">
  <section class="text-center my-5">
    <h2 class="fw-bold mb-1">FORMULARIO</h2>
    <p class="text-muted my-0 fs-4">Actualizar</p>
    <form id="form-update" action="../functions/validation_update.php?id=<?php echo $_GET[
        'id'
    ]; ?>" method="post"
      class="row g-3 needs-validation" novalidate>
      <div class="container d-flex justify-content-center text-start">
        <div class="row justify-content-center align-items-center col-8">
          <!-- INPUT FIRST NAME -->
          <!-- |||||||||||||||| -->
          <div class="my-2 col-12 col-lg-6">
            <div class="form-floating">
              <input type="text" name="firstName" id="validationCustom01" placeholder="Nombre"
                value="<?php echo $user['firstName']; ?>" class="form-control" required>
              <label for="name">Nombre</label>
            </div>
            <span id="errorFirstName2"></span>
          </div>


          <!-- INPUT LAST NAME -->
          <!-- ||||||||||||||| -->
          <div class="my-2 col-12 col-lg-6">
            <div class="form-floating">
              <input type="text" name="lastName" placeholder="Apellido" value="<?php echo $user[
                  'lastName'
              ]; ?>"
                class="form-control" required>
              <label for="">Apellido</label>
            </div>
            <span id="errorLastName2"></span>
          </div>

          <!-- INPUT EMAIL -->
          <!-- ||||||||||| -->
          <div class="my-2 col-12 col-lg-6">
            <div class="form-floating">
              <input type="text" name="email" placeholder="Email" value="<?php echo $user[
                  'email'
              ]; ?>" class="form-control" disabled>
              <label for="">Email</label>
            </div>
            <span id="errorEmail2"></span>
          </div>

          <!-- INPUT DNI -->
          <!-- ||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="number" name="dni" id="dni" placeholder="DNI" value="<?php echo $user[
                  'dni'
              ]; ?>" class="form-control" required>
              <label for="">DNI</label>
            </div>
            <span id="errorDNI2"></span>
          </div>

          <!-- INPUT PHONE -->
          <!-- ||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="number" name="phone" id="phone" placeholder="Teléfono" value="<?php echo $user[
                  'phone'
              ]; ?>"
                class="form-control" required>
              <label for="">Teléfono</label>
            </div>
            <span id="errorPhone2"></span>
          </div>

          <!-- INPUT ADDRESS -->
          <!-- ||||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="text" name="address" id="address" placeholder="Dirección" class="form-control" value="<?php echo $user[
                  'address'
              ]; ?>" required>
              <label for="">Dirección</label>
            </div>
            <span id="errorAddress2"></span>
          </div>

          <!-- INPUT USERNAME -->
          <!-- |||||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $user[
                  'username'
              ]; ?>" class="form-control" required>
              <label for="">Usuario</label>
            </div>
            <span id="errorUsername2"></span>
          </div>

         <!-- INPUT PASSWORD -->
          <!-- |||||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating d-flex">
              <input type="password" class="form-control" id="password" name="pass" value="<?php echo $user[
                  'password'
              ]; ?>" placeholder="Contraseña" required>
              <div class="input-group-prepend icon-container">
                <span class="input-group-text h-100 bg-white border-0"><i class="fa-solid fa-eye text-dark"
                    onclick='seePass(event)'></i></span>
              </div>
              <label for="">Contraseña</label>
            </div>
          </div>
          <span id="errorPassword2"></span>


          <script>
          /* Funcion para visualizar el password */
          const seePass = ({
            target
          }) => {
            let $inputPass = document.querySelector('#password');
            $inputPass.type = $inputPass.type === "password" ? "text" : "password";
            if ($inputPass.type === "password") {
              target.classList.add('fa-eye', 'text-dark');
              target.classList.remove('fa-eye-slash', 'text-danger');
            } else {
              target.classList.remove('fa-eye', 'text-dark');
              target.classList.add('fa-eye-slash', 'text-danger');
            }
          }
          </script>

          <!-- BUTTON SUBMIT -->
          <!-- ||||||||||||| -->
          <div class="my-2 d-flex gap-4">
            <a href="listUsers.php" class="btn btn-danger w-100">Cancelar</a>
            <button type="submit" id="btnResumen" name="save" class="btn btn-success w-100">Guardar</a>
          </div>

        </div>
      </div>
      </div>
    </form>

  </section>
</main>

<?php include './partials/footer.php'; ?>
<script src="../js/validate-update.config.js"></script>