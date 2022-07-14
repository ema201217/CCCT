<?php 
  include '../functions/CRUD_USERS.php';
  $data = $get_user_all();

  include './partials/header.html';
?>

<main>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Item</th>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Teléfono</th>
      <th scope="col">DNI</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Dirección</th>
      <th scope="col">Rol</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $count = 0;
      while($table = mysqli_fetch_array($data)) {
        $count += 1;
    ?>
    <tr>
      <th scope="row"><?php echo $count ?></th>
      <td><?php echo $table['id']; ?></td>
      <td><?php echo $table['firstName']; ?></td>
      <td><?php echo $table['lastName']; ?></td>
      <td><?php echo $table['phone']; ?></td>
      <td><?php echo $table['dni']; ?></td>
      <td><?php echo $table['username']; ?></td>
      <td><?php echo $table['email']; ?></td>
      <td><?php echo $table['address']; ?></td>
      <td><?php echo $table['role']; ?></td>
    </tr>
   
  <?php } ?>
  </tbody>
</table>

</main>
</body>
</html>