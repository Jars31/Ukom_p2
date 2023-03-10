<?php
if (!isset($_SESSION)) {
  session_start();
}
if (isset($_SESSION['admin'])) {
  header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>RESPSIONIS - HOTEL BOOKING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap5.0.1.min.css" rel="stylesheet">
</head>

<body>

  <div class="p-2 bg-primary text-white text-center">
    <h1>HOTEL JARS</h1>
    <p>Selamat datang di Hotel Kami!</p>
  </div>

  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
    </div>
  </nav>

  <div class="container mt-4 col-sm-4">
    <h2 class="text-center">LOGIN</h2>
    <h6 class="text-center">Silahkan masukan username dan password anda!</h6>

    <div class="row" id="dlogin">
      <form action="" id="flogin">
        <div class="input-group flex-nowrap mt-2 mb-2">
          <span class="input-group-text" id="addon-wrapping">Username</span>
          <input type="text" class="form-control" placeholder="Username" id="username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mt-2 mb-2">
          <span class="input-group-text" id="addon-wrapping">Password</span>
          <input type="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
        </div>
        <button type="button" id="proses_login" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-light">Cancel</button>
      </form>
    </div>

  </div>

  <!-- SCRIPT FOOTER -->

  <!-- SCRIPT JAVASCRIPT -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap5.0.1.bundle.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      $("#proses_login").click(function() {
        var user = $("#username").val();
        var pass = $("#password").val();
        if ((user == "") || (pass == "")) {
          alert("Field belum diisi!");
          return;
        }
        $.ajax({
          url: "proses/login_resepsionis.php",
          method: "POST",
          data: {
            username: user,
            password: pass
          },
          success: function(data) {
            //alert(data); return;
            if (data == "OK") {
              alert("Login Berhasil!");
              window.location.href = "home.php";
            }
            if (data == "ERROR") {
              document.getElementById("flogin").reset();
              alert("Terjadi kesalahan! Error Username dan Password");
            }
          }
        });
      });

    });
  </script>

  <!-- END BODY -->
</body>

</html>