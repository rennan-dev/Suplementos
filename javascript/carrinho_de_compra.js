document.addEventListener("DOMContentLoaded", function () {
const addToCartButtons = document.querySelectorAll(".custom-btn");

addToCartButtons.forEach(button => {
button.addEventListener("click", addToCart);
});

/*Botão Comprar*/
function comprar() {
const cartItems = document.querySelectorAll("#cart-items li");

if (cartItems.length === 0) {
    alert("Seu carrinho está vazio. Adicione itens antes de comprar!");
} else {
    const cartData = [];
    let total = 0;

    cartItems.forEach(item => {
        const itemName = item.innerText.split(" - ")[0];
        const itemPrice = parseFloat(item.innerText.split("R$")[1]);
        const itemQuantity = parseInt(item.querySelector(".quantity").innerText);

        cartData.push({
            name: itemName,
            price: itemPrice,
            quantity: itemQuantity
        });

        total += itemPrice * itemQuantity;
    });

    const encodedCartData = encodeURIComponent(JSON.stringify(cartData));

    // Inclua o preço total na URL
    window.location.href = `../pagamento.php?cart=${encodedCartData}&total=${total.toFixed(2)}`;
}
}


// Adicione a função comprar() ao botão "Comprar"
const comprarButton = document.querySelector("#cart .btn-success");
comprarButton.addEventListener("click", comprar);
/*Botão Comprar*/ 

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
    var botaoComprar = document.getElementById('botao_comprar');

    // Obtém o estilo atual do elemento
    var cartItemsStyle = window.getComputedStyle(cartItems);

    // Verifica se o display é 'none' ou vazio (na primeira vez)
    if (cartItemsStyle.display === 'none' || cartItemsStyle.display === '') {
        // Se os produtos estiverem minimizados, mostrar
        cartItems.style.display = 'block';
        cartTotal.style.display = 'block';
        botaoComprar.style.display = 'block';
        productsButton.innerText = '-';
    } else {
        // Se os produtos estiverem visíveis, minimizar
        cartItems.style.display = 'none';
        cartTotal.style.display = 'none';
        botaoComprar.style.display = 'none';
        productsButton.innerText = '+';
    }
}