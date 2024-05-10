<?php
require_once("dbkoneksi.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username =? AND password =?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username, $password]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
        session_start();
        $_SESSION["user"] = $user;
        header("Location: index.php");
        exit();
    } else {
        header("Location: login.php?error=invalid");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faljet | Login Page</title>
    <link rel="icon" href="../img/logo_fj.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
    .divider:after, .divider:before 
    {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }

    .h-custom 
    {
    height: calc(100% - 73px);
    }

    @media (max-width: 450px) 
    {
    .h-custom {
    height: 100%;
    }
    }
    </style>
    
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <h1>Selamat Datang di <a href="../index.php">Faljet!</a></h1>
              <p style="text-align: justify;">Pusat layanan kesehatan yang menyediakan pelayanan yang komprehensif dan berkualitas untuk masyarakat setempat. Puskesmas Faljet memiliki fasilitas yang memadai, tenaga kesehatan yang profesional, dan mampu memberikan pelayanan promotif, preventif, kuratif, dan rehabilitatif secara merata dan terjangkau bagi seluruh lapisan masyarakat.</p>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 border border-black border border-1 rounded">
              
              <form id="loginForm" method="POST">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3 mt-3">Sign in with</p>
                  <button type="button" class="btn btn-primary btn-floating mx-1 mt-3" id="warna">
                    <i class="bi bi-facebook"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1 mt-3">
                    <i class="bi bi-twitter"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1 mt-3">
                    <i class="bi bi-linkedin"></i>
                  </button>
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Or</p>
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="username">Username</label>
                  <input type="text" id="username" name="username" class="form-control form-control-lg"
                    placeholder="Enter a valid username" required/>
                    <span id="radioHelpBlock" class="form-text text-muted">hint: "fal"</span>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <label class="form-label" for="password">Password</label>  
                  <input type="password" id="password" name="password" class="form-control form-control-lg"
                    placeholder="Enter password" required />
                    <span id="radioHelpBlock" class="form-text text-muted">hint: "sukses"</span>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#" class="text-body">Forgot password?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" value="login" name="login" class="btn btn-primary btn-block btn-lg">Sign In</button>
                  <p class="small fw-bold mt-2 pt-1 mb-3">Don't have an account? <a href="#"
                      class="link-danger">Register</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
        
        <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="my-5">
  <footer class="text-white text-center text-lg-start bg-primary">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright: Faljet
  </div>
  <!-- Copyright -->
  </footer>
</div>
<!-- End of .container -->

      </section>
</body>
</html>