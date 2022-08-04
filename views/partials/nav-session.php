<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient w-100 position-fixed top-0"
  style="--bs-bg-opacity: .95;">
  <div class="container-fluid d-flex justify-content-between">
    <div>
      <img src="https://s3.sa-east-1.amazonaws.com/ong.somos.mas/codoacodo.png" alt="logo" class="logo">
      <a class="navbar-brand" href="index.php">Conf Bs As</a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav flex-wrap">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">La conferencia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#oradores">Los oradores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#lugarFecha">El lugar y la fecha</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#formOrador">Conviértete en orador</a>
        </li>

        <?php
      
        if (!empty($_SESSION['user']) && $_SESSION['user']['role'] == '2') { ?>
        <li class="nav-item">
          <a href="tickets.php#tickets" class="nav-link text-success fw-bold">Comprar tickets</a>
        </li>
        <?php }

        if (empty($_SESSION['user'])) { ?>
        <li class="nav-item">
          <a href="register.php#register" class="nav-link text-white fw-bold" title="Registro">
            <i class="fs-3 fa-regular fa-id-card"></i>
          </a>
        </li>

        <li class="nav-item">
          <a href="login.php#login" class="nav-link text-white fw-bold" title="Iniciar Sesión">
            <i class="fs-3 fa-regular fa-user"></i>
          </a>
        </li>
        <?php } else { ?>
        <div class="btn-group border border-1">
          <li class="btn-md btn-danger nav-item">
            <a href="../functions/logout.php" class="nav-link fw-bold" title="Cerrar Sesión">
              <i class="fa-solid fa-right-from-bracket"></i>
            </a>
          </li>
          <?php }

        if (!empty($_SESSION['user']) && $_SESSION['user']['role'] === '1') { ?>
          <li class="btn-md btn-outline-danger nav-item">
            <a href="listUsers.php" class=" nav-link fw-bold">Administración</a>
          </li>
        </div>
        <?php }
        ?>
      </ul>
    </div>
  </div>
</nav>