<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bear Gym & Suply</title>
  <!--bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--main css-->
  <link rel="stylesheet" href="css/style.css">
  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
  <link rel="icon" href="./Imagens/logo_sem_fundo.ico">
</head>

<body>
  <!--header start-->
  <header id="header">
    <!--navigation start-->
    <?php
    session_start();
    ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow custom-navbar">
      <div class="container container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand float-end">
            <img src="Imagens/urso_sem_fundo.png" alt="logo" class="img-reponsive custom-logo">
            <span class="custom-highlight">Bear</span>
          </a>
          <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="d-flex flex-column" style="align-items: flex-end;">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ms-auto custom-ul">
              <li class="nav-item custom-li">
                <a href="#" aria-current="page" class="nav-link active">Home</a>
              </li>
              <li class="nav-item custom-li">
                <a href="#services" class="nav-link">Services</a>
              </li>
              <li class="nav-item custom-li">
                <a href="#products" class="nav-link">Products</a>
              </li>
              <li class="nav-item custom-li">
                <a href="#contact" class="nav-link">Contact</a>
              </li>
              <li class="nav-item dropdown custom-li">
                <a class="nav-link dropdown-toggle" id="userMenu" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Perfil</a>
                <div class="dropdown-menu" aria-labelledby="userMenu">
                    <a class="dropdown-item" href="pages/perfil.php" id="profileLink">Meu Perfil</a>
                    <a class="dropdown-item" href="backend/logout.php" id="logoutLink">Sair</a>
                </div>
            </li>
            </ul>
          </div>
          <a href="./pages/pagamento.php" class="btn btn-primary mb-3" style="width: 150px; height: 35px; margin-right: 33px;"><i class="fas fa-shopping-cart"></i> Carrinho</a>
        </div>
      </div>
    </nav>
    <!--navigation start-->
    
    <!--home page start-->
    <section id="cover" class="container">
      <div class="row g-2 justify-content-around">
        <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
          <div class="p-3">
            <img src="Imagens/logo_sem_fundo.png" alt="" class="mx-auto d-block w-100 img-fluid">
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
          <div class="p-3">
            <h1 class="custom-highlight mt-5">Bear Gym & Suply</h1>
            <h1>Para você que ama o suco</h1>
            <p>Potencialize seu desempenho com nossa gama premium de suplementos nutricionais, projetados para levar seus treinos ao próximo nível.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--home page end-->
  </header>
  <!--header end-->

  <!-- Carrinho de Compras start-->
  <div id="cart" class="cart card fixed-top bg-light" style="width: 300px; right: 0; margin-top: 110px;">
    <div class="card-header">
        <h3 class="card-title">Carrinho de Compras</h3>
        <button id="toggle-products" class="btn btn-primary" style="position: absolute; top: 5px; right: 5px;" onclick="toggleProducts()">-</button>
    </div>
    <ul id="cart-items" class="list-group list-group-flush"></ul>
    <p id="cart-total" class="card-footer bg-light text-dark font-weight-bold">Total: R$0</p>
  </div>
  <!--Carrinho de compras end-->


  <!--main section start-->
   <main class="container">
    <!--services section start-->
    <section id="services" class="mt-5">
      <div class="row g-2 justify-content-around">
        <div class="col-md-6 d-flex justify-content-center align-items-center order-1">
          <div class="col">
            <div class="card p-3 mb-3 custom-services-card" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 gy-3">
                  <img src="logo_icon/image 12.png" alt="" class="mx-auto d-block custom-img-width">
                </div>
                <div class="col-md-8">
                  <div class="card-body custom-text">
                    <h5 class="card-title">Encontre o Produto Perfeito</h5>
                    <p class="card-text">
                      Ao investir em nossos suplementos, você está escolhendo a excelência em nutrição esportiva!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card p-3 mb-3 custom-services-card" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 gy-3">
                  <img src="logo_icon/image 13.png" alt="" class="mx-auto d-block custom-img-width">
                </div>
                <div class="col-md-8">
                  <div class="card-body custom-text">
                    <h5 class="card-title">Troca Gratuita</h5>
                    <p class="card-text">
                      Se confundiu na hora da compra ou trocou de ideia no último segundo? contate-nos para fazermos a devolução do pedido!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card p-3 mb-3 custom-services-card" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 gy-3">
                  <img src="logo_icon/image 14.png" alt="" class="mx-auto d-block custom-img-width">
                </div>
                <div class="col-md-8">
                  <div class="card-body custom-text">
                    <h5 class="card-title">Entre em contato com nosso vendedor</h5>
                    <p class="card-text">É sempre importante o cliente entrar em contato com o vendedor para esclarecer
                       dúvidas ou obter assistência personalizada!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col order-lg-2">
          <img src="logo_icon/XMLID 2.png" alt="" class="mx-auto b-block w-100">
        </div>
      </div>
    </section>
    <!--services section end-->

    <!--Creatina start-->
    <section id="products" class="mt-5">
      <h2>Creatinas</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 shadow custom-card">
            
            <a href="Pages/produtos/creatina1.php"><img id="product1" id="product1" src="Imagens/ProdutosSemFundo/creatina_integralmedica-removebg-preview.png" alt="" class="card-img-top w-100 custom-bg"></a>
            <div class="card-body">
              <a href="Pages/produtos/creatina1.php"><h4 id="product1" class="card-title">Creatina 300g Integralmédica</h4></a>
              <p class="card-text">Indicado para: Auxilia Ganho de Energia, Auxilia Ganho de Energia<br>
                Forma: Pó<br>
                Glúten: Não Contém.</p>
            </div>
            <div class="card-footer custom-footer">
              <div class="float-start">
                <h4 class="custom-highlight">R$99</h4>
              </div>
              <div class="float-end">
              <button class="btn btn-primary rounded-3 custom-btn"><i class="fas fa-cart-shopping"></i> Adicionar ao Carrinho</button>
              </div>
            </div>
          </div>
        </div>  
        <div class="col">
          <div class="card h-100 shadow custom-card">
            <a href="Pages/produtos/creatina2.php"><img id="product1" src="Imagens/ProdutosSemFundo/creatina_monohidratada_500g-removebg-preview.png" alt="" class="card-img-top w-100 custom-bg"></a>
            <div class="card-body">
              <a href="Pages/produtos/creatina2.php"><h4 id="product1" class="card-title">Creatina Monohidratada 500g</h4></a>
              <p class="card-text">Indicado para: Auxilia Ganho de Energia.<br>
                Glúten: Não Contém.</p>
            </div>
            <div class="card-footer custom-footer">
              <div class="float-start">
                <h4 class="custom-highlight">R$130</h4>
              </div>
              <div class="float-end">
                <button class="btn btn-primary rounded-3 custom-btn"><i class="fas fa-cart-shopping"></i> Adicionar ao Carrinho</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow custom-card">
            <a href="Pages/produtos/creatina3.php"><img id="product1" src="Imagens/ProdutosSemFundo/creatina_monohidratada_espartanos-removebg-preview.png" alt="" class="card-img-top w-100 custom-bg"></a>
            <div class="card-body">
              <a href="Pages/produtos/creatina3.php"><h4 id="product1" class="card-title">Creatina Monohidratada Pura 1kg - Espartanos</h4></a>
              <p class="card-text">Indicado para: Auxilia Ganho de Energia<br>Glúten: Não Contém.</p>
            </div>
            <div class="card-footer custom-footer">
              <div class="float-start">
                <h4 class="custom-highlight">R$150</h4>
              </div>
              <div class="float-end">
                <button class="btn btn-primary rounded-3 custom-btn"><i class="fas fa-cart-shopping"></i> Adicionar ao Carrinho</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Creatina end-->

    <!--Whey Protein start-->
    <section id="products" class="mt-5">
      <h2>Whey Protein</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 shadow custom-card">
            <a href="Pages/produtos/whey1.php"><img id="product1" src="Imagens/ProdutosSemFundo/whey_protein_isolado_iso_blend_complex_2kg_pretorian-removebg-preview.png" alt="" class="card-img-top w-100 custom-bg"></a>
            <div class="card-body">
              <a href="Pages/produtos/whey1.php"><h4 id="product1" class="card-title">Whey Protein Isolado Iso Blend Complex 2Kg - Pretorian</h4></a>
              <p class="card-text">Glúten: Contém<br>
                Lactose: Contém<br>
                Tipo: Proteína Isolada.</p>
            </div>
            <div class="card-footer custom-footer">
              <div class="float-start">
                <h4 class="custom-highlight">R$100</h4>
              </div>
              <div class="float-end">
                <button class="btn btn-primary rounded-3 custom-btn"><i class="fas fa-cart-shopping"></i> Adicionar ao Carrinho</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow custom-card">
            <a href="Pages/produtos/whey2.php"><img id="product1" src="Imagens/ProdutosSemFundo/whey_protein_nutri_refil_900g-removebg-preview.png" alt="" class="card-img-top w-100 custom-bg"></a>
            <div class="card-body">
              <a href="Pages/produtos/whey2.php"><h4 id="product1" class="card-title">Whey Protein Nutri Refil 900 g - IntegralMédica</h4></a>
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
                <button class="btn btn-primary rounded-3 custom-btn"><i class="fas fa-cart-shopping"></i> Adicionar ao Carrinho</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow custom-card">
            <a href="Pages/produtos/whey3.php"><img id="product1" src="Imagens/ProdutosSemFundo/wheyProteinConcentrado1kgChocolateBelga.png" alt="" class="card-img-top w-100 custom-bg"></a>
            <div class="card-body">
              <a href="Pages/produtos/whey3.php"><h4 id="product1" class="card-title">Whey Protein Concentrado 1kg - Chocolate - Importado - Soldiers Nutrition</h4></a>
              <p class="card-text">Glúten: Não Contém<br>
                Lactose: Contém<br>
                Tipo: Proteína Isolada.</p>
            </div>
            <div class="card-footer custom-footer">
              <div class="float-start">
                <h4 class="custom-highlight">R$90</h4>
              </div>
              <div class="float-end">
                <button class="btn btn-primary rounded-3 custom-btn"><i class="fas fa-cart-shopping"></i> Adicionar ao Carrinho</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Whey Protein end-->
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

  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const addToCartButtons = document.querySelectorAll(".custom-btn");

    addToCartButtons.forEach(button => {
      button.addEventListener("click", addToCart);
    });

    function addToCart() {
      // Obtenha informações do produto
      const productContainer = this.closest(".custom-card");
      const productName = productContainer.querySelector(".card-title").innerText;

      // Verifique se o item já está no carrinho
      const cartItems = document.querySelectorAll("#cart-items li");
      const existingCartItem = Array.from(cartItems).find(item => item.innerText.includes(productName));

      if (existingCartItem) {
        // Se o item já existir, exiba um alerta
        alert("Este produto já está no carrinho!");
      } else {
        // Caso contrário, adicione o item ao carrinho
        const productPrice = parseFloat(productContainer.querySelector(".custom-highlight").innerText.replace("R$", ""));

        const cartItem = document.createElement("li");
        cartItem.innerHTML = `
          <button class="btn btn-danger btn-sm" onclick="decrementQuantity(this)">-</button>
          <span class="quantity">1</span>
          <button class="btn btn-success btn-sm" onclick="incrementQuantity(this)">+</button>
          ${productName} - R$${productPrice}
        `;

        document.getElementById("cart-items").appendChild(cartItem);

        // Adicione eventos de clique para os novos botões
        const decrementButton = cartItem.querySelector(".btn-danger");
        const incrementButton = cartItem.querySelector(".btn-success");

        decrementButton.addEventListener("click", () => decrementQuantity(cartItem));
        incrementButton.addEventListener("click", () => incrementQuantity(cartItem));
      }

      // Atualize o total do carrinho
      updateCartTotal();
    }

    function incrementQuantity(cartItem) {
      const quantityElement = cartItem.querySelector(".quantity");
      const quantity = parseInt(quantityElement.innerText);
      quantityElement.innerText = quantity + 1;
      updateCartTotal();
    }

    function decrementQuantity(cartItem) {
      const quantityElement = cartItem.querySelector(".quantity");
      const quantity = parseInt(quantityElement.innerText);

      if (quantity > 1) {
        // Se a quantidade for maior que 1, decrementa
        quantityElement.innerText = quantity - 1;
      } else {
        // Se a quantidade for 1, remove o item do carrinho
        cartItem.remove();
      }

      updateCartTotal();
    }

    function updateCartTotal() {
      const cartItems = document.querySelectorAll("#cart-items li");
      let total = 0;

      cartItems.forEach(item => {
        const itemText = item.innerText;
        const price = parseFloat(itemText.substring(itemText.lastIndexOf("R$") + 2));
        const quantity = parseInt(item.querySelector(".quantity").innerText);
        total += price * quantity;
      });

      // Atualize o total do carrinho
      document.getElementById("cart-total").innerText = `Total: R$${total.toFixed(2)}`;
    }
  });

  function toggleProducts() {
        var cartItems = document.getElementById('cart-items');
        var cartTotal = document.getElementById('cart-total');
        var productsButton = document.getElementById('toggle-products');

        // Obtém o estilo atual do elemento
        var cartItemsStyle = window.getComputedStyle(cartItems);

        // Verifica se o display é 'none' ou vazio (na primeira vez)
        if (cartItemsStyle.display === 'none' || cartItemsStyle.display === '') {
            // Se os produtos estiverem minimizados, mostrar
            cartItems.style.display = 'block';
            cartTotal.style.display = 'block';
            productsButton.innerText = '-';
        } else {
            // Se os produtos estiverem visíveis, minimizar
            cartItems.style.display = 'none';
            cartTotal.style.display = 'none';
            productsButton.innerText = '+';
        }
    }
</script>






  <script src="javascript/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
