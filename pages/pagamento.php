<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cobrança</title>
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

  <!--Payment new start-->
  <main class="container mt-5 card">
    <div id="login" class="mt-4">
      <h2>Confirmação</h2>
    </div>
  <div class="d-flex align-items-center justify-content-center mt-4 card-body" style="width: 100%;">
    
    <form class="row g-3 needs-validation" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Primeiro Nome</label>
        <input type="text" class="form-control" id="validationCustom01" required>
        <div class="valid-feedback">
          Boa sorte!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="validationCustom02" required>
        <div class="valid-feedback">
          Boa sorte!
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleDropdownFormEmail1">
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom03" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="validationCustom03" required>
        <div class="invalid-feedback">
          Forneça um endereço válido.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom03" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="validationCustom03" required>
        <div class="invalid-feedback">
          Forneça uma cidade válida.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Estado</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="">Escolha...</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
          
        </select>
        <div class="invalid-feedback">
          Selecione um estado válido
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">CEP</label>
        <input type="text" class="form-control" id="validationCustom05" required>
        <div class="invalid-feedback">
          Selecione um CEP válido
        </div>
      </div>
      
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Aceitar os termos e condições.
          </label>
          <div class="invalid-feedback">
            Você deve concordar antes de enviar.
          </div>
        </div>
      </div>
      
        
    </form>
      
    </div>
    <a href="agradecimento.php"><button class="btn btn-primary" type="submit">Enviar pedido pelo WhatsApp</button></a>
  </div>
</main>
  
  <!--Payment new end-->






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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
