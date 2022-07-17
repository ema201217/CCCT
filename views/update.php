<?php
include '../functions/CRUD_USERS.php';
$user = $get_user_by_id($_GET['id']);

include './partials/header.html';
?>
<main class="my-4 d-flex flex-column align-items-center" id="register">
  <section class="text-center my-5">
    <h2 class="fw-bold mb-1">FORMULARIO</h2>
    <p class="text-muted my-0 fs-4">Actualizar</p>
    <form action="../functions/validation_update.php?id=<?php echo $_GET['id']; ?>" method="post"
      class="row g-3 needs-validation" novalidate>
      <div class="container d-flex justify-content-center text-start">
        <div class="row justify-content-center align-items-center col-8">
          <!-- INPUT FIRST NAME -->
          <!-- |||||||||||||||| -->
          <div class="my-2 col-12 col-lg-6">
            <div class="form-floating">
              <input type="text" name="firstName" id="validationCustom01" placeholder="Nombre"
                value="<?php echo $user['firstName']; ?>" class="form-control">
              <label for="name">Nombre</label>
            </div>
            <span class="error text-danger"></span>
          </div>


          <!-- INPUT LAST NAME -->
          <!-- ||||||||||||||| -->
          <div class="my-2 col-12 col-lg-6">
            <div class="form-floating">
              <input type="text" name="lastName" placeholder="Apellido" value="<?php echo $user['lastName'] ?>"
                class="form-control">
              <label for="">Apellido</label>
            </div>
            <span class="error text-danger"></span>
          </div>

          <!-- INPUT EMAIL -->
          <!-- ||||||||||| -->
          <div class="my-2 col-12 col-lg-6">
            <div class="form-floating">
              <input type="text" name="email" placeholder="Email" value="<?php 
echo $user['email'] ?>" class="form-control" disabled>
              <label for="">Email</label>
            </div>
            <span class="error text-danger"></span>
          </div>

          <!-- INPUT DNI -->
          <!-- ||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="number" name="dni" id="dni" placeholder="DNI" value="<?php 
echo $user['dni']; 
?>" class="form-control">
              <label for="">DNI</label>
            </div>
            <span class="error text-danger"></span>
          </div>

          <!-- INPUT PHONE -->
          <!-- ||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="number" name="phone" id="phone" placeholder="Teléfono" value="<?php echo $user['phone'] ?>"
                class="form-control">
              <label for="">Teléfono</label>
            </div>
            <span class="error text-danger"></span>
          </div>

          <!-- INPUT ADDRESS -->
          <!-- ||||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="text" name="address" id="address" placeholder="Dirección" class="form-control" value="<?php 
echo $user['address'];
?>">
              <label for="">Dirección</label>
            </div>
            <span class="error text-danger"></span>
          </div>

          <!-- INPUT USERNAME -->
          <!-- |||||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="text" name="username" id="username" placeholder="Username" value="<?php 
echo $user['username']
?>" class="form-control">
              <label for="">Usuario</label>
            </div>
            <span class="error text-danger"></span>
          </div>

          <!-- INPUT PASSWORD -->
          <!-- |||||||||||||| -->
          <div class="my-2 col-12 col-lg-6 text-start">
            <div class="form-floating">
              <input type="password" name="pass" id="pass" placeholder="Password" value="<?php 
              echo $user['password'];
              ?>" class="form-control">
              <label for="">Contraseña</label>
            </div>
            <span class="error text-danger"></span>
          </div>

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

<?php include './partials/footer.html'; ?>