<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bear Gym & Suply</title>
  <!--bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--main css-->
  <link rel="stylesheet" href="../../css/style.css">
  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
</head>

<body>
  <!--header start-->
  <header id="header">
    <!--navigation start-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow custom-navbar">
      <div class="container container-fluid">
        <div class="navbar-header">
          <a href="../../index.php" class="navbar-brand float-end">
            <img src="../../Imagens/urso_sem_fundo.png" alt="logo" class="img-reponsive custom-logo">
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
            <li class="nav-item custom-li">
              <a href="../../Pages/signin.php" class="nav-link">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--navigation start-->

  </header>
  <!--header end-->

  <!--main section start-->
  <main class="container">

    <div class="row g-0 text-center">
        <div class="col-6 col-md-4">

            <div class="card h-100 shadow custom-card">
                <img id="product1" src="../../Imagens/ProdutosSemFundo/whey_protein_isolado_iso_blend_complex_2kg_pretorian-removebg-preview.png" alt="" class="card-img-top w-100 custom-bg">
                <div class="card-body">
                  <h4 id="product1" class="card-title">Whey Protein Isolado Iso Blend Complex 2Kg - Pretorian</h4>
                  <p class="card-text">Glúten: Contém<br>
                    Lactose: Contém<br>
                    Tipo: Proteína Isolada.</p>
                </div>
                <div class="card-footer custom-footer">
                  <div class="float-start">
                    <h4 class="custom-highlight">R$100</h4>
                  </div>
                  <div class="float-end">
                    <a href="../pagamento.php"><button class="btn btn-primary rounded-3 custom-btn"><i class="fas fa-cart-shopping"></i> Compre Agora</button></a>
                  </div>
                </div>
            </div>

        </div>


        <div class="col-sm-6 col-md-7 mx-4">
            <div class="accordion accordion-flush mt-3" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        ALÉRGICOS: 
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">CONTEM SOJA!</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        BENEFÍCIOS :
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">O ISO PROTEIN BLEND COMPLEX 2kg é a proteína diária ideal para quem quer o aumento da força e ganho de massa muscular.</div>
                  </div>
                </div>
                           
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseOne">
                    ORIENTAÇÕES :
                  </button>
                </h2>
                <div id="flush-collapseFor" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"> Sua quantidade de carboidrato no produto melhora a captação de aminoácidos pelo organismo, muito eficaz para quem deseja ganho de massa muscular, queima de gordura e definição muscular.</div>
                </div>
              </div>
            </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>