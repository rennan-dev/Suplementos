<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastrar</title>
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
          <a class="navbar-brand float-end">
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
              <a aria-current="page" class="nav-link active">Home</a>
            </li>
            <li class="nav-item custom-li">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--navigation start-->
    
  </header>
  <!--header end-->

  <!--main section start-->
  <main class="container mt-5 card">
    <div class="card-body">
      <div id="login">
          <h2>Cadastrar</h2>
      </div>
      <div>
          <form class="px-4 py-3" action="../backend/config.php" method="POST" onsubmit="return validarSenhas();">
            <div class="row g-3 mb-3">
                <div class="col">
                  <label for="exampleName" class="form-label">Primero Nome</label>
                  <input type="text" name="nome" id="nome" class="form-control" aria-label="First name" required>
                </div>
                  <div class="col">
                    <label for="exampleName" class="form-label">Sobrenome</label>
                    <input type="text" name="sobrenome" id="sobrenome" class="form-control" aria-label="Last name" required>
                </div>
            </div>
            <div class="mb-3">
              <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="exampleDropdownFormPassword1" class="form-label">Senha</label>
              <input type="password" name="senha" id="senha" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="exampleDropdownFormPassword1" class="form-label">Confirmar Senha</label>
              <input type="password" name="checksenha" id="checksenha" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" name="cadastrar" id="cadastrar">Cadastrar</button>
          </form>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="signin.php">Já tem uma conta? Entre</a>
        </div>
    </div>
  </main>
  <!--main section end-->

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

  <script src="../javascript/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
