<?php
include './partials/header.php'; 
if(!empty($_SESSION["user"])){
  header("Location: index.php");
}
?>

<main class="d-flex flex-column align-items-center scroll-margin-top-40 login" id="login">
  <section class="text-center">
    <h2 class="fw-bold mb-1">FORMULARIO</h2>
    <p class="text-muted my-0 fs-4">Login</p>
    <div class="row justify-content-center gap-2">
        
    <div class="col-12 col-md-7 card">
        <h3>User Admin</h3>
    <p class="text-muted">email: admin@admin.com</p>
    <p class="text-muted">password: 1234567890</p>
    </div>
    <div class="col-12 col-md-7 card">
        <h3>User regular</h3>
    <p class="text-muted">email: test@test.com</p>
    <p class="text-muted">password: 1234567890</p>
    </div>
    </div>
    <form action="../functions/login-verify.php" method="post">
      <div class="container d-flex justify-content-center my-4">
        <div class="row justify-con tent-center col-12 col-md-6 col-lg-6">


          <!-- INPUT EMAIL -->
          <!-- ||||||||||| -->
          <div class="my-2 col-12">
            <div class="form-floating">
              <input type="text" name="email" placeholder="Email" class="form-control">
              <label for="">Email</label>
            </div>
            <span class="error text-danger"></span>
          </div>


          <!-- INPUT PASSWORD -->
          <!-- ||||||||||| -->
          <div class="my-2 col-12">
            <div class="form-floating d-flex">
              <input type="password" name="pass" class="form-control" id="password" placeholder="Contraseña">
              <div class="input-group-prepend icon-container">
                <span class="input-group-text h-100 bg-white border-0"><i class="fa-solid fa-eye text-dark"
                    onclick='seePass(event)'></i></span>
              </div>
              <label for="">Contraseña</label>
            </div>
            <span class="error text-danger"><?php if (!empty($_GET['error'])) {
                echo $_GET['error']
                    ? 'El email o contraseña son incorrectas'
                    : '';
            } ?>
            </span>
          </div>

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

          <!-- INPUT REMEMBER -->
          <!-- ||||||||||| -->
          <div class="my-2 col-12">
            <input type="checkbox" id="remember" name="remember" class="form-check-input">
            <label for="remember" class="form-check-label">Recordarme (CREAR COOKIE)</label>
          </div>



          <div class="my-2 d-flex gap-1">
            <a href="register.php#register" class="btn btn-primary col-6">No tengo cuenta</a>
            <button type="submit" id="btnResumen" name="btn-register" class="btn btn-success col-6">Ingresar</button>
          </div>
        </div>
      </div>
      </div>
    </form>
  </section>
</main>