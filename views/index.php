<?php 
  include './partials/header.html';
?>

  <main class="my-5">
    <section id="oradores" class="scroll-margin-top-15">
      <p class="text-muted text-center my-0">CONOCE A LOS</p>
      <h2 class="fw-bold text-center mb-4">ORADORES</h2>
      <div class="container d-flex flex-wrap justify-content-around gap-3">
        <div class="card" style="width: 18rem;">
          <img src="https://s3.sa-east-1.amazonaws.com/ong.somos.mas/steve.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="d-flex gap-2 mb-1">
              <button type="button" class="btn btn-sm btn-warning fw-bold py-0">Javascript</button>
              <button type="button" class="btn btn-sm btn-info fw-bold py-0">React</button>
            </div>
            <h5 class="card-title">Steve Jobs</h5>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo doloremque
              tenetur aliquid nulla ipsam dicta, velit dolore quae ea beatae cumque reiciendis est
              expedita at dignissimos placeat. Voluptatum, impedit ad.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="https://s3.sa-east-1.amazonaws.com/ong.somos.mas/bill.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="d-flex gap-2 mb-1">
              <button type="button" class="btn btn-sm btn-warning fw-bold py-0">Javascript</button>
              <button type="button" class="btn btn-sm btn-info fw-bold py-0">React</button>
            </div>
            <h5 class="card-title">Bill Gates</h5>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor repellat
              atque voluptatibus illo cupiditate deleniti minus officia id odit magni facilis, totam animi
              iste voluptatem perspiciatis accusamus quo doloremque at!</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="https://s3.sa-east-1.amazonaws.com/ong.somos.mas/ada.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="d-flex gap-2 mb-1">
              <button type="button" class="btn btn-sm btn-secondary fw-bold py-0">Negocios</button>
              <button type="button" class="btn btn-sm btn-danger fw-bold py-0">Startups</button>
            </div>
            <h5 class="card-title">Ada Lovelace</h5>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae ad
              excepturi inventore porro quaerat quibusdam quam nostrum molestiae? Quasi eligendi totam
              commodi explicabo ratione omnis, assumenda vero voluptatibus ea reiciendis!</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <section id="lugarFecha" class="scroll-margin-top-20 my-5">
    <div class="container text-white">
      <div class="row">
        <img src="https://s3.sa-east-1.amazonaws.com/ong.somos.mas/honolulu.jpg" alt="" class="col-12 col-lg-6 p-0 border">
        <div class="bg-dark p-2 col-12 col-lg-6 border">
          <h2>Bs As - Octubre</h2>
          <p>Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados
            Unidos, Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el
            nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y
            el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad
            (aproximadamente 600 km de superficie).</p>
          <a href="" class="btn btn-outline-light">Conocé más</a>
        </div>
      </div>
    </div>
  </section>

  <section id="formOrador" class="scroll-margin-top-20 text-center my-5">
    <p class="text-muted my-0">CONVIÉRTETE EN UN</p>
    <h2 class="fw-bold mb-4">ORADOR</h2>
    <p>Anótate como orador para dar una <span class="border-bottom-dashed">charla ignite</span>. Cuéntanos de qué
      quieres hablar!</p>
    <form action="">
      <div class="container">
        <div class="row justify-content-center">

          <div class="my-3 col-12 col-lg-4">

            <input type="text" placeholder="Nombre" class="form-control">
          </div>
          <div class="my-3 col-12 col-lg-4">
            <input type="text" placeholder="Apellido" class="form-control">
          </div>
          <div class="my-3 col-12 col-lg-8">
            <textarea cols="30" rows="3" placeholder="Sobre qué quieres hablar?" class="form-control fs-3"></textarea>
          </div>
          <p class="text-start col-12 col-lg-8">Recuerda incluir un título para tu charla</p>
          <button type="button" class="btn btn-success col-12 col-lg-8">Enviar</a>
        </div>
      </div>
      </div>
    </form>
  </section>

<?php 
  include './partials/footer.html';
?>