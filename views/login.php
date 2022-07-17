<?php 
  include './partials/header.html';
?>

<main class="my-4 d-flex flex-column align-items-center" id="login">
    <section class="text-center my-5">
        <h2 class="fw-bold mb-1">FORMULARIO</h2>
        <p class="text-muted my-0 fs-4">Login</p>
        <form action="../script/registro.php" method="post">
            <div class="container d-flex justify-content-center my-4">
                <div class="row justify-con tent-center col-12 col-md-6 col-lg-6">

                    
                    <!-- INPUT EMAIL -->
                    <!-- ||||||||||| -->
                    <div class="my-2 col-12">
                        <div class="form-floating">
                            <input type="text" name="email" placeholder="Email" value="" class="form-control">
                            <label for="">Email</label>
                        </div>
                        <span class="error text-danger"></span>
                    </div>

                    <div class="my-2 col-12">
                        <div class="form-floating d-flex">
                            <input type="password" class="form-control" id="password" placeholder="Contraseña">
                            <div class="input-group-prepend icon-container">
                                <span class="input-group-text h-100 bg-white border-0"><i
                                        class="fa-solid fa-eye text-dark" onclick='seePass(event)'></i></span>
                            </div>
                            <label for="">Contraseña</label>
                        </div>
                        <span class="error text-danger"></span>
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

                    <div class="col-12 my-2">
                        <a href="register.php#register" class="btn btn-primary my-2">No tengo cuenta</a>
                        <button type="submit" id="btnResumen" name="btn-register"
                            class="btn btn-success">Ingresar</button>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </section>
</main>

<?php include './partials/footer.html'; ?>