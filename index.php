<?php
 session_cache_expire(30);
    session_start();
    include('config/conexao.php');
    
    try {      
      if (isset($_POST["formulario"])) {
          $email = $_POST["email"];
        $senha = $_POST["senha"];
        $res = $conexao->query("SELECT * FROM  funcionario WHERE email = '$email' AND senha = '$senha' ");
        if($res->rowCount()){

          while ($d = $res->fetchObject()) {
              $_SESSION['id_funcionario'] = $d->id_funcionario;
              $_SESSION['foto'] = $d->foto;
              $_SESSION['nome'] = $d->nome;
              $_SESSION['email'] = $d->email;
              $_SESSION['senha'] = $d->senha;
              
              
              header("location:painel/funcionario/");
          }
        }
        else {
          ?>
          <div class=" p-2 alert alert-danger">
            Dados Incorreto, tente outra vez!
          </div>
  <?php
         }
    } 
  } catch (Exeption $e) {
    print_r($e);
  }
      
?>



<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gestão de Frotas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- logo -->
  <link href="assets/img/" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="painel/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="painel/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="painel/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="painel/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="painel/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="painel/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="painel/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="painel/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  
                  <span class="d-none d-lg-block">Controlo de Acesso</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Entrar como Motorista</h5>
                    <p class="text-center small">Entre com o seu email e sua senha</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" name ="formulario" >

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Seu email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" id="yourUsername" required autofocus>
                        <!-- <div class="invalid-feedback">Entre com o seu nome de usuario.</div> -->
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Senha</label>
                      <input type="password" name="senha" class="form-control" id="yourPassword" required>
                      <!-- <div class="invalid-feedback">Entre com a sua sneha</div> -->
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Lembra-me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Entrar</button>
                    </div>
                    
                    <a href="adm.php">Entrar como Administrador</a>
                    <a href="secretario.php">Entrar como Secretario</a>
                    
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="painel/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="painel/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="painel/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="painel/assets/vendor/echarts/echarts.min.js"></script>
  <script src="painel/assets/vendor/quill/quill.min.js"></script>
  <script src="painel/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="painel/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="painel/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>