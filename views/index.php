<?php
include '../functions/cookie-session.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer>
  </script>
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/script.js" defer></script>

  <title>Conferencia</title>
</head>

<body>

  <header class="position-relative">

    <?php include './partials/nav-session.php'; ?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="https://s3.sa-east-1.amazonaws.com/ong.somos.mas/ba1.jpg" class="d-block w-100 bg-dark" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://s3.sa-east-1.amazonaws.com/ong.somos.mas/ba2.jpg" class="d-block w-100 bg-dark" alt="...">
        </div>
        <div class="carousel-item active">
          <img src="https://s3.sa-east-1.amazonaws.com/ong.somos.mas/ba3.jpg" class="d-block w-100 bg-dark" alt="...">
        </div>

        <div class="carousel-text position-absolute end-0 text-white w-50 text-end p-5">
          <h2 class="my-4">Conf Bs As</h2>
          <p class="my-4 d-none d-lg-block">Bs As llega por primera vez a Argentina. Un evento para compartir
            con nuestra
            comunidad el conocimiento y experiencia de los expertos que están creando el futuro de internet.
            Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer
            nivel que tenemos para ti. Te esperamos!</p>
          <div class="d-flex flex-wrap justify-content-end gap-2 my-4">
            <a href="#formOrador" class="btn btn-outline-light mx-2">Quiero ser orador</a>
            <a href="tickets.html" class="btn btn-success mx-2">Comprar tickets</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="my-5">
    <section id="oradores" class="scroll-margin-top-20">
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
        <img src="https://s3.sa-east-1.amazonaws.com/ong.somos.mas/honolulu.jpg" alt=""
          class="col-12 col-lg-6 p-0 border">
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

  <?php include './partials/footer.php';
?>
