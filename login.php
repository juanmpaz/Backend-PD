<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php');
  ?>
</head>

<body id="page-top">
  <!-- Navigation-->
  <?php include('navbar.php');
  ?>
  <!-- Masthead-->
  <header class="masthead-login">
    <div class="container d-flex h-100 align-items-center">
      <div class="col-4">
        <div class="text-left">
          <h1 class="my-0 txt-black mb-4">Login</h1>
          <form method="post" action="loguearse.php">
            <input type="text" name="dni" class="form-control mb-4" placeholder="DNI" id="dni">
            <input type="password" name="password" class="form-control mb-4" placeholder="Contraseña" id="password">
            <button type="submit" class="btn btn-login btn-block">Ingresar</button>
            <h5 class="mt-3">¿No tenes cuenta? <a href="registro.php">Registrate!</a></h5>
          </form>
        </div>
      </div>
    </div>
  </header>
  <!-- Contacto - Footer-->
  <?php include('footer.php');
  ?>
  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>