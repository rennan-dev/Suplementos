<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
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
  <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <h2 class="text-center">Perfil do Usuário</h2>
            <div class="list-group mt-5">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fw-bold d-inline">Nome:</h4>
                        <br>
                        <p class="d-inline" id="nome"><?php echo $_SESSION["nome"]; ?></p>
                    </div>
                    <button class="btn btn-primary rounded-3 custom-btn" data-bs-toggle="modal" data-bs-target="#editNomeModal">Editar</button>
                </div>

                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fw-bold d-inline">Sobrenome:</h4>
                        <br>
                        <p class="d-inline" id="sobrenome"><?php echo $_SESSION["sobrenome"]; ?></p>
                    </div>
                    <button class="btn btn-primary rounded-3 custom-btn" data-bs-toggle="modal" data-bs-target="#editSobrenomeModal">Editar</button>
                </div>

                <div class="list-group-item">
                    <h4 class="fw-bold">Email:</h4>
                    <p><?php echo $_SESSION["email"]; ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modais para editar Nome e Sobrenome -->
    <div class="modal fade" id="editNomeModal" tabindex="-1" aria-labelledby="editNomeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editNomeModalLabel">Editar Nome</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulário para editar Nome -->
                    <form id="formEditNome">
                        <div class="mb-3">
                            <label for="editNome" class="form-label">Novo Nome:</label>
                            <input type="text" class="form-control" id="editNome" name="novoNome">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="updateNome()">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editSobrenomeModal" tabindex="-1" aria-labelledby="editSobrenomeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSobrenomeModalLabel">Editar Sobrenome</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulário para editar Sobrenome -->
                    <form id="formEditSobrenome">
                        <div class="mb-3">
                            <label for="editSobrenome" class="form-label">Novo Sobrenome:</label>
                            <input type="text" class="form-control" id="editSobrenome" name="novoSobrenome">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="updateSobrenome()">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Botão de sair e Excluir conta-->
    <div class="d-flex justify-content-center mt-5">
        <a href="../backend/logout.php" class="btn btn-danger me-3" style="width: 130px;">Sair</a>
        <a href="confirmar_exclusao.php" class="btn btn-danger ms-3" style="width: 130px;">Excluir Conta</a>
    </div>

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

<script>
    function updateNome() {
        const novoNome = document.getElementById('editNome').value;

        // Enviar dados para o servidor usando Ajax
        $.ajax({
            type: "POST",
            url: "../backend/atualizar_dados.php",
            data: { tipo: 'nome', novoValor: novoNome },
            success: function (response) {
                // Atualizar valor na página (opcional)
                document.getElementById('nome').innerText = novoNome;

                // Fechar o modal
                $('#editNomeModal').modal('hide');
            }
        });
    }

    function updateSobrenome() {
        const novoSobrenome = document.getElementById('editSobrenome').value;

        // Enviar dados para o servidor usando Ajax
        $.ajax({
            type: "POST",
            url: "../backend/atualizar_dados.php",
            data: { tipo: 'sobrenome', novoValor: novoSobrenome },
            success: function (response) {
                // Atualizar valor na página (opcional)
                document.getElementById('sobrenome').innerText = novoSobrenome;

                // Fechar o modal
                $('#editSobrenomeModal').modal('hide');
            }
        });
    }
</script>

<!-- ... Seu código posterior ... -->

</body>

</html>
