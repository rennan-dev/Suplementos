<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["email"])) {
    header("Location: signin.php");
    exit();
}
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil</title>
  <!--bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--main css-->
  <link rel="stylesheet" href="../css/style.css">
  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
  <link rel="icon" href="../Imagens/logo_sem_fundo.ico">
</head>

<body>
  <!--header start-->
  <header id="header">
    <!--navigation start-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow custom-navbar">
      <div class="container container-fluid">
        <div class="navbar-header">
          <a href="../index.php" class="navbar-brand float-end">
            <img src="../Imagens/urso_sem_fundo.png" alt="logo" class="img-reponsive custom-logo">
            <span class="custom-highlight">Bear</span>
          </a>
          <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ms-auto custom-ul">
            <li class="nav-item custom-li">
              <a href="#" aria-current="page" class="nav-link active">Home</a>
            </li>
            
            <li class="nav-item custom-li">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
            
        </div>
      </div>
    </nav>
    <!--navigation start-->
    
  </header>
  <!--header end-->



    <main class="container mt-5">
        <?php include '../backend/mostra_pedidos.php'; ?>
    </main>



  <!--footer start-->
  <footer id="footer" class="bg-dark text-white text-center py-4 mt-5">
    <div class="container p-4">
      <h5>Informações de Contato</h5>
      <p id="contact">Endereço: Rua São Pedro, 191</p>
      <p>Email: cdhemily8@gmail.com</p>
      <p>WhatsApp: (92) 99396-0786</p>
    </div>
  </footer>
  <!--footer end-->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
