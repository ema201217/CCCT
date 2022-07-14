
<?php 
  include './partials/header.html';
?>

  <main class="my-4 d-flex flex-column align-items-center" id="login">
    <section class="text-center my-5">
      <h2 class="fw-bold mb-1">FORMULARIO</h2>
      <p class="text-muted my-0 fs-4">Login</p>
      <form action="../script/registro.php" method="post">
        <div class="container d-flex justify-content-center">
          <div class="row justify-content-center">
            
            <div class="my-2 col-md-12 col-lg-6">
              <input type="text" name="email" placeholder="Email" class="form-control">
              <span class="text-danger"></span>
            </div>
            <div class="my-2 text-start col-md-12 col-lg-6">
              <input type="text" name="pass" id="pass" placeholder="Password" class="form-control">
              <span class="text-danger"></span>
            </div>

            <div class="row gap-1 justify-content-lg-between my-2 col-md-12 col-lg-6">
              <button type="submit" id="btnResumen" name="btn-register" class="btn btn-success btn-sm">Ingresar</button>
              <a href="register.php#register" class="btn btn-primary btn-sm">No tengo cuenta</a>
            </div>
          </div>
        </div>
        </div>
      </form>


    </section>
  </main>

<?php include './partials/footer.html'; ?>
