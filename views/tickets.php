<?php 
  include './partials/header.html';
?>

  <main class="my-4 d-flex flex-column align-items-center" id="tickets">
    <section>
      <div class="container d-flex flex-wrap justify-content-around gap-3 text-center">
        <div class="card" style="width: 18rem;height: 18rem">
          <div class="card-body d-flex flex-column justify-content-center border border-primary">
            <h3 class="card-title ">Estudiante</h3>
              <p class="card-text ">Tienen un descuento</p>
              <p class="card-text  fw-bold fs-5">80%</p>
              <p class="card-text ">* presentar documentación</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;height: 18rem">
          <div class="card-body d-flex flex-column justify-content-center border border-info">
            <h3 class="card-title">Trainee</h3>
              <p class="card-text">Tienen un descuento</p>
              <p class="card-text fw-bold fs-5">50%</p>
              <p class="card-text">* presentar documentación</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;height: 18rem">
          <div class="card-body d-flex flex-column justify-content-center border border-warning">
            <h3 class="card-title">Junior</h3>
              <p class="card-text">Tienen un descuento</p>
              <p class="card-text fw-bold fs-5">15%</p>
              <p class="card-text">* presentar documentación</p>
          </div>
        </div>
      </div>
    </section>

    <section id="formTicket" class="text-center my-5">
      <p class="text-muted my-0 fs-4">VENTA</p>
      <h2 class="fw-bold mb-4">VALOR DE TICKET $200</h2>
      <form action="#">
        <div class="container d-flex justify-content-center">
          <div class="row justify-content-center align-items-center col-8">

            <div class="my-3 col-12 col-lg-6">
              <input type="text" placeholder="Nombre" class="form-control">
            </div>
            <div class="my-3 col-12 col-lg-6">
              <input type="text" placeholder="Apellido" class="form-control">
            </div>
            <div class="my-3 col-12 col-lg-12">
              <input type="text" placeholder="Correo" class="form-control">
            </div>
            <div class="my-2 col-12 col-lg-6 text-start">
              <label for="" class="form-label">Cantidad</label>
              <input type="number" id="cantidad" placeholder="Cantidad" class="form-control">
            </div>
            <div class="my-2 col-12 col-lg-6 text-start">
              <label for="" class="form-label">Categoría</label>
              <select class="form-select" id="categoria">
                <option value="80" selected>Estudiante</option>
                <option value="50">Trainee</option>
                <option value="15">Junior</option>
              </select>
            </div>
            <div class="col-12 my-4">
              <output class="form-control bg-info text-start p-3 fw-bold fs-5 border-none" style="--bs-bg-opacity: .2;" id="output">
                Total a Pagar: $
              </output>
            </div>
            <div class="d-flex gap-4 my-4">
              <button type="reset" id="btnReset" class="btn btn-success w-100 bg-success-light">Borrar</a>
              <button type="button" id="btnResumen" class="btn btn-success w-100 bg-success-light">Resumen</a>
            </div>
          </div>
        </div>
        </div>
      </form>
    </section>
  </main>


  <?php 
  include './partials/footer.html';
?>