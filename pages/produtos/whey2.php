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
          </ul>
        </div>
      </div>
    </nav>
    <!--navigation start-->

  </header>
  <!--header end-->

  <!-- Carrinho de Compras start-->
  <div id="cart" class="cart card fixed-top bg-light" style="width: 300px; margin-top: 110px; margin-left: 200px;">
    <div class="card-header">
        <h3 class="card-title">Carrinho de Compras</h3>
        <button id="toggle-products" class="btn btn-primary" style="position: absolute; top: 5px; right: 5px;" onclick="toggleProducts()">-</button>
    </div>
    <ul id="cart-items" class="list-group list-group-flush" style="list-style-type: none;"></ul>
    <div class="card-footer bg-light text-dark font-weight-bold" style="display: flex; justify-content: space-between; align-items: center;">
        <p id="cart-total">Total: R$0</p>
        <!-- Adicionando o botão "Comprar" -->
        <button class="btn btn-success" style="flex-shrink: 0;" onclick="comprar()" id="botao_comprar">Comprar</button>
    </div>
  </div>
  <!--Carrinho de compras end-->

  <!--main section start-->
  <main class="container">

    <div class="row g-0 text-center">
        <div class="col-6 col-md-4">

            <div class="card h-100 shadow custom-card">
                <img id="product1" src="../../Imagens/ProdutosSemFundo/whey_protein_nutri_refil_900g-removebg-preview.png" alt="" class="card-img-top w-100 custom-bg">
                <div class="card-body">
                  <h4 id="product1" class="card-title">Whey Protein Nutri Refil 900 g - IntegralMédica</h4>
                  <p class="card-text">Forma: Pó<br>
                    Glúten: Não Contém<br>
                    Lactose: Contém<br>
                    Tipo: Proteínas Concentradas e Blends.</p>
                </div>
                <div class="card-footer custom-footer">
                  <div class="float-start">
                    <h4 class="custom-highlight">R$60</h4>
                  </div>
                  <div class="float-end">
                  <button class="btn btn-primary rounded-3 custom-btn" type="button">
                    <i class="fas fa-cart-shopping"></i> Compre Agora
                  </button>
                  </div>
                </div>
            </div>

        </div>


        <div class="col-sm-6 col-md-7 mx-4">
            <div class="accordion accordion-flush mt-3" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        DESCRIÇÃO :
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Atletas definem objetivos e, dia após dia, treinam com dedicação, foco e energia para alcançar essas metas. Mas eles sabem que além da musculação, um ótimo resultado precisa ser acompanhado de boa alimentação, descanso e uma excelente suplementação alimentar. As proteínas do soro de leite (whey protein), albumina e colágeno estão relacionadas com funções importantes no organismo, sobretudo na composição da estrutura muscular.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        BENEFÍCIOS :
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">sua fórmula contém carboidratos complexos (maltodextrina) e simples (frutose), que também são essenciais no fornecimento de energia para os treinos. Isento de sacarose (açúcar), esse suplemento alimentar ainda é fonte de fibras, vitaminas e minerais.</div>
                  </div>
                </div>
              
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                    MODO DE USO : 
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"> Diluir 16 colheres de sopa (120 g) em 300 ml de água de leite integral ou desnatado, água, suco ou vitaminas de frutas; e bater em liquidificador ou mixer até a diluição total do produto.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseOne">
                    IMPORTANTE :
                  </button>
                </h2>
                <div id="flush-collapseFor" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Este produto não substitui uma alimentação equilibrada e seu consumo deve ser orientado por nutricionista ou médico. Não se destina a prevenir, tratar, ou curar doenças. Visa melhorar o estado fisiológico/metabólico para o fim que se destina. Diabéticos: contém frutose.</div>
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

  <script src="../../javascript/carrinho_de_compra.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>