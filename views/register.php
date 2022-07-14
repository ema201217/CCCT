<?php 
include './partials/header.html';
include '../functions/validationsRegister.php';
include '../functions/CRUD_USERS.php';


if(!isset($_POST['btn-register']) && !$existErrors) {
  $create_user();
}

?>
  <main class="my-4 d-flex flex-column align-items-center" id="register">
    <section class="text-center my-5">
      <h2 class="fw-bold mb-1">FORMULARIO</h2>
      <p class="text-muted my-0 fs-4">Registro</p>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="row g-3 needs-validation" novalidate>
        <div class="container d-flex justify-content-center text-start">
          <div class="row justify-content-center align-items-center col-8">

          <!-- INPUT FIRST NAME -->
          <!-- |||||||||||||||| -->
            <div class="my-2 col-12 col-lg-6">
              <input type="text" name="firstName" id="validationCustom01" placeholder="Nombre" value="<?php if(isset($firstName)) echo $firstName ?>" class="form-control 
            <?php 
              echo $addClassValidationInputInvalid($arrErrors['firstName'] != ''); 
            ?>">
              <span class="text-danger">
                <?php 
                echo $arrErrors['firstName']; 
                ?>
              </span>
            </div>


          <!-- INPUT LAST NAME -->
          <!-- ||||||||||||||| -->
            <div class="my-2 col-12 col-lg-6">
              <input type="text" name="lastName" placeholder="Apellido" 
              value="<?php if(isset($lastName)) echo $lastName ?>" 
              class="form-control <?php 
               echo $addClassValidationInputInvalid($arrErrors['lastName'] != '');
              ?>">
              <span class="text-danger"><?php echo $arrErrors['lastName']; ?></span>
            </div>

          <!-- INPUT EMAIL -->
          <!-- ||||||||||| -->
            <div class="my-2 col-12 col-lg-6">
              <input type="text" name="email" placeholder="Email" 
              value="<?php 
              if(isset($email)) echo $email ?>" 
              class="form-control <?php 
              echo $addClassValidationInputInvalid($arrErrors['email'] != ''); 
              ?>">
              <span class="text-danger"><?php echo $arrErrors['email']; ?></span>
            </div>

          <!-- INPUT DNI --> 
          <!-- ||||||||| -->
            <div class="my-2 col-12 col-lg-6 text-start">
              <input type="number" name="dni" id="dni" placeholder="DNI" 
              value="<?php 
              if(isset($dni)) echo $dni; 
              ?>" 
              class="form-control <?php 
               echo $addClassValidationInputInvalid($arrErrors['dni'] != ''); 
              ?>">
              <span class="text-danger"><?php echo $arrErrors['dni']; ?></span>
            </div>

          <!-- INPUT PHONE -->
          <!-- ||||||||||| -->
            <div class="my-2 col-12 col-lg-6 text-start">
              <input type="number" name="phone" id="phone" placeholder="Teléfono" value="<?php if(isset($phone)) echo $phone ?>" class="form-control 
              <?php 
              echo $addClassValidationInputInvalid($arrErrors['phone'] != '');   
              ?>">
              <span class="text-danger"><?php echo $arrErrors['phone']; ?></span>
            </div>

          <!-- INPUT ADDRESS -->
          <!-- ||||||||||||| -->
            <div class="my-2 col-12 col-lg-6 text-start">
              <input type="text" name="address" id="address" placeholder="Dirección" class="form-control 
              <?php 
              echo $addClassValidationInputInvalid($arrErrors['address'] != '');   
              ?>" 
              value="<?php 
              if(isset($address)) echo "$address" 
              ?>">
              <span class="text-danger">
                <?php echo $arrErrors['address']; 
              ?></span>
            </div>

          <!-- INPUT USERNAME -->
          <!-- |||||||||||||| -->
            <div class="my-2 col-12 col-lg-6 text-start">
              <input type="text" name="username" id="username" placeholder="Username" 
              value="<?php 
              if(isset($username)) echo $username 
              ?>" 
              class="form-control <?php 
              echo $addClassValidationInputInvalid($arrErrors['username'] != '');   
              ?>">
              <span class="text-danger"><?php echo $arrErrors['username']; ?></span>
            </div>

          <!-- INPUT PASSWORD -->
          <!-- |||||||||||||| -->
            <div class="my-2 col-12 col-lg-6 text-start">
              <input type="text" name="pass" id="pass" placeholder="Password" 
              value="<?php 
              if(isset($pass)) echo $pass 
              ?>" 
              class="form-control <?php 
              echo $addClassValidationInputInvalid($arrErrors['pass'] != '');   
              ?>">
              <span class="text-danger"><?php echo $arrErrors['pass']; ?></span>
            </div>

          <!-- INPUT TERMS -->
          <!-- ||||||||||| -->
            <div class="my-2 col-12 col-lg-12 text-start text-center">                                  <!-- Si se setea el checkbox de términos y condiciones y el valor devuelto es 'on' entonces quedara checkeado -->
              <input type="checkbox" id="terms" name="terms" 
              class="form-check-input <?php 
              echo $addClassValidationInputInvalid($arrErrors['terms'] != '');  
              ?>" 
              value="on" 
              <?php echo isset($_POST['terms']) && $terms == 'on' ? 'checked' : ''; ?>>
              
              <input type="checkbox" id="terms" name="terms" value="off" hidden 
              <?php echo isset($_POST['terms']) && $terms == 'off' ? 'checked' : ''; ?>>

              <label for="terms" class="form-check-label">Aceptar términos y condiciones</label>
              
            </div>
          
          <!-- BUTTON SUBMIT -->
          <!-- ||||||||||||| -->
            <div class="my-2 d-flex gap-4">
              <a href="login.php#login" class="btn btn-primary w-100">Ya tengo cuenta</a>
              <button type="submit" id="btnResumen" name="btn-register" class="btn btn-success w-100">Registrar</a>
            </div>
            
          </div>
        </div>
        </div>
      </form>
      
    </section>
  </main>

<?php include './partials/footer.html'; ?>
