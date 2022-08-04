<?php include './partials/header.php'; ?>

<main class="my-4 d-flex flex-column align-items-center" id="register">
  <section class="text-center my-5">
    <h2 class="fw-bold mb-1">FORMULARIO</h2>
    <p class="text-muted my-0 fs-4">Registro</p>
    <form id="form-register" action="../functions/validation_create.php" method="post" class="row g-3">
      <div class="container d-flex justify-content-center text-start">
        <div class="row justify-content-center align-items-center col-8">
          <!-- INPUT FIRST NAME -->
          <!-- |||||||||||||||| -->
          <div class="my-2 col-12 col-lg-6">
            <div class="form-floating">
              <input type="text" name="firstName" placeholder="Nombre" value="" class="form-control" required>
              <label for="">Nombre</label>
            </div>
            <span id="errorFirstName"></span>
          </div>


          <!-- INPUT LAST NAME -->
          <!-- ||||||||||||||| -->
          <div class="my-2 col-12 col-lg-6">
            <div class="form-floating">
              <input type="text" name="lastName" placeholder="Apellido" value="" class="form-control" required>
              <label for="">Apellido</label>
            </div>
            <span id="errorLastName"></span>
          </div>

          <!-- INPUT EMAIL -->
          <!-- ||||||||||| -->
          <div class="my-2 col-12 col-lg-6">
            <div class="form-floating">
              <input type="text" name="email" placeholder="Email" value="" class="form-control" required>
              <label for="">Email</label>
            </div>
            <span id="errorEmail"></span>
          </div>

          <!-- INPUT DNI -->
          <!-- ||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="text" name="dni" id="dni" placeholder="DNI" value="" class="form-control" required>
              <label for="">DNI</label>
            </div>
            <span id="errorDNI"></span>
          </div>

          <!-- INPUT PHONE -->
          <!-- ||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="text" name="phone" id="phone" placeholder="Teléfono" value="" class="form-control" required>
              <label for="">Teléfono</label>
            </div>
            <span id="errorPhone"></span>
          </div>

          <!-- INPUT ADDRESS -->
          <!-- ||||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="text" name="address" id="address" placeholder="Dirección" class="form-control" value=""
                required>
              <label for="">Dirección</label>
            </div>
            <span id="errorAddress"></span>
          </div>

          <!-- INPUT USERNAME -->
          <!-- |||||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="text" name="username" id="username" placeholder="Username" value="" class="form-control"
                required>
              <label for="">Username</label>
            </div>
            <span id="errorUsername"></span>
          </div>

          <!-- INPUT PASSWORD -->
          <!-- |||||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating d-flex">
              <input type="password" class="form-control" id="password" name="pass" placeholder="Contraseña" required>
              <div class="input-group-prepend icon-container">
                <span class="input-group-text h-100 bg-white border-0"><i class="fa-solid fa-eye text-dark"
                    onclick='seePass(event)'></i></span>
              </div>
              <label for="">Contraseña</label>
            </div>
          </div>
          <span id="errorPassword"></span>

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

          <!-- INPUT TERMS -->
          <!-- ||||||||||| -->
          <div class="my-4 col-12 col-lg-6 text-center">
            <input type="checkbox" id="terms" name="terms" class="form-check-input" value="on">
            <label for="terms" class="form-check-label">Aceptar términos y condiciones</label>
            <span id="errorTerms"></span>
          </div>

          <!-- reCaptcha -->
          <!-- <script src="https://www.google.com/recaptcha/api.js" async></script> -->
          <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async>
          </script>

          <div class="my-4 col-12 col-lg-6">
            <div class="g-recaptcha" id="ReCaptcha"></div>
          </div>

          <!-- reCaptcha End-->


          <!-- BUTTON SUBMIT -->
          <!-- ||||||||||||| -->
          <div class="my-2 d-flex gap-4">
            <a href="login.php#login" class="btn btn-primary w-100">Ya tengo cuenta</a>
            <button type="submit" id="btnResumen" name="btn-register" class="btn btn-success w-100">Registrarse</a>
          </div>

        </div>
      </div>
      </div>
    </form>

  </section>
</main>



<?php include './partials/footer.php'; ?>
<script src="../js/validate-register.config.js"></script>