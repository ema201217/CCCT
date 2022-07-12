<?php include './partials/header.html'; ?>

  <main class="my-4 d-flex flex-column align-items-center scroll-margin-top-20" id="register">
    <section class="text-center my-5">
      <h2 class="fw-bold mb-1">FORMULARIO</h2>
      <p class="text-muted my-0 fs-4">Registro</p>
      <form action="login.php" method="post">
        <div class="container d-flex justify-content-center">
          <div class="row justify-content-center align-items-center col-8">

          
            <div class="my-2 col-12 col-lg-6">
              <input type="text" name="firstName" placeholder="Nombre" class="form-control">
              <span class="text-danger"></span>
            </div>

           

            <div class="my-2 col-12 col-lg-6">
              <input type="text" name="lastName" placeholder="Apellido" class="form-control">
              <span class="text-danger"></span>
            </div>

          
            <div class="my-2 col-12 col-lg-6">
              <input type="text" name="email" placeholder="Email" class="form-control">
              <span class="text-danger"></span>
            </div>

           
            <div class="my-2 col-12 col-lg-6 text-start">
              <input type="number" name="dni" id="dni" placeholder="DNI" class="form-control">
              <span class="text-danger"></span>
            </div>

            <div class="my-2 col-12 col-lg-6 text-start">
              <input type="number" name="phone" id="phone" placeholder="Teléfono" class="form-control">
              <span class="text-danger"></span>
            </div>

            <div class="my-2 col-12 col-lg-6 text-start">
              <input type="text" name="address" id="address" placeholder="Dirección" class="form-control">
              <span class="text-danger"></span>
            </div>

            <div class="my-2 col-12 col-lg-6 text-start">
              <input type="text" name="username" id="username" placeholder="Username" class="form-control">
              <span class="text-danger"></span>
            </div>

            <div class="my-2 col-12 col-lg-6 text-start">
              <input type="text" name="pass" id="pass" placeholder="Password" class="form-control">
              <span class="text-danger"></span>
            </div>

            <div class="my-2 col-12 col-lg-12 text-start text-center">
              <input type="checkbox" id="terms" name="terms" value="yes" class="form-check-input">
              <label for="terms" class="form-check-label">Aceptar términos y condiciones</label>
              <p class="text-danger"></p>
            </div>
            <div class="my-2 d-flex gap-4">
              <a href="#" class="btn btn-primary w-100">Ya tengo cuenta</a>
              <button type="submit" id="btnResumen" name="btn-register" class="btn btn-success w-100">Registrar</a>
            </div>

          </div>
        </div>
        </div>
      </form>
      
    </section>
  </main>


<?php include './partials/footer.html'; ?>
