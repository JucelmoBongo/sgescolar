<?php
 session_cache_expire(30);
    session_start();
    include('config/conexao.php');
      // ===============================
    // dando tratamento de exceções
    try {      
      if (isset($_POST["email"])) {
          $numero = $_POST["email"];
        $senha =md5($_POST["senha"]);
        $res = $conexao->query("SELECT * FROM  professor WHERE email = '$numero' AND senha = '$senha' ");
       
        if($res->rowCount()){
          // =================================
      // laço de repetição enqunto d for = a res, me tras todos os objectos d

          while ($d = $res->fetchObject()) {
            $_SESSION['id_professor'] = $d->id_professor;
              $_SESSION['foto'] = $d->foto;
              $_SESSION['nome_professor'] = $d->nome;
              $_SESSION['email'] = $d->email;
              $_SESSION['endereco'] = $d->endereco;
              $_SESSION['idade'] = $d->idade;
              $_SESSION['n_professor'] = $d->n_professor;
              header("location:painel/professor/index.php");
              
          }
        }else { ?>
          <div class=" p-2 alert alert-danger">
            Dados Incorreto, tente outra vez!
          </div>
  <?php
 } 
    } 
    else {
       # code...
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

  <title>Controle de Acesso</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



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
                <a href="../index.html" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">Antônia Sucesso</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Entrar como Professor</h5>
                    <p class="text-center small">Entre com o seu email e sua senha</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" name="senha" >

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Seu email</label>
                      <div class="input-group has-validation">
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
                    <a href="index.php">Entrar como Estudante</a>
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
  <script src="painel/assets/js/main.js"></script>

</body>

</html>