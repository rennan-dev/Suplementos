//Variável que mantém o estado visível do carrinho
var carrinhoVisible = false;

//Esperamos que todos os elementos da página sejam carregados para executar o script
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready();
}

function ready(){
    
    //Adicionar funcionalidade aos botões de remoção do carrinho
    var botaoExcluirItem = document.getElementsByClassName('btn-eliminar');
    for(var i=0;i<botaoExcluirItem.length; i++){
        var button = botaoExcluirItem[i];
        button.addEventListener('click',eliminarItemcarrinho);
    }

    //Adicionar funcionalidade ao botão adicionar quantidade
    var botaoSomarQuantidade = document.getElementsByClassName('somar-quantidade');
    for(var i=0;i<botaoSomarQuantidade.length; i++){
        var button = botaoSomarQuantidade[i];
        button.addEventListener('click',somarQuantidade);
    }

     //Adicionar funcionalidade ao botão de subtrair quantidade
    var botaoSubtrairQuantidade = document.getElementsByClassName('subtrair-quantidade');
    for(var i=0;i<botaoSubtrairQuantidade.length; i++){
        var button = botaoSubtrairQuantidade[i];
        button.addEventListener('click',subtrairQuantidade);
    }

    //Adicionar funcionalidade ao botão Adicionar ao carrinho
    var botaoAdicionarAoCarrinho = document.getElementsByClassName('button-item');
    for(var i=0; i<botaoAdicionarAoCarrinho.length;i++){
        var button = botaoAdicionarAoCarrinho[i];
        button.addEventListener('click', adicionarAoCarrinhoClicked);
    }

    //Adicionar funcionalidade ao botão de compra
    document.getElementsByClassName('btn-pagar')[0].addEventListener('click',pagarClicked)
}

//Remover todos os itens do carrinho e ocultamos
function pagarClicked(){
    alert("Obrigado pela compra!");
    //Remover todos os itens do carrinho
    var carrinhoItems = document.getElementsByClassName('carrinho-items')[0];
    while (carrinhoItems.hasChildNodes()){
        carrinhoItems.removeChild(carrinhoItems.firstChild)
    }
    atualizarTotalCarrinho();
    ocultarcarrinho();
}

//Função que controla o botão adicionar ao carrinho clicado
function adicionarAoCarrinhoClicked(event){
    var button = event.target;
    var item = button.parentElement;
    var titulo = item.getElementsByClassName('titulo-item')[0].innerText;
    var price = item.getElementsByClassName('price-item')[0].innerText;
    var imagenSrc = item.getElementsByClassName('img-item')[0].src;
    console.log(imagenSrc);

    adicionarItemAoCarrinho(titulo, price, imagenSrc);

    fazerVisivelCarrinho();
}

//Função que torna o carrinho visível
function fazerVisivelCarrinho(){
    carrinhoVisible = true;
    var carrinho = document.getElementsByClassName('carrinho')[0];
    carrinho.style.marginRight = '0';
    carrinho.style.opacity = '1';

    var items =document.getElementsByClassName('container-items')[0];
    items.style.width = '60%';
}

//Função que adiciona um item ao carrinho
function adicionarItemAoCarrinho(titulo, price, imagenSrc){
    var item = document.createElement('div');
    item.classList.add = ('item');
    var itemscarrinho = document.getElementsByClassName('carrinho-items')[0];

    //Verificar se o item que você está tentando inserir não está no carrinho
    var nomesItensCarrinho = itemscarrinho.getElementsByClassName('carrinho-item-titulo');
    for(var i=0;i < nomesItensCarrinho.length;i++){
        if(nomesItensCarrinho[i].innerText==titulo){
            alert("O item já está no carrinho");
            return;
        }
    }

    var itemCarrinhoConteudo = `
        <div class="carrinho-item">
            <img src="${imagenSrc}" width="80px" alt="">
            <div class="carrinho-item-detalhes">
                <span class="carrinho-item-titulo">${titulo}</span>
                <div class="seletor-quantidade">
                    <i class="fa-solid fa-minus subtrair-quantidade"></i>
                    <input type="text" value="1" class="carrinho-item-quantidade" disabled>
                    <i class="fa-solid fa-plus somar-quantidade"></i>
                </div>
                <span class="carrinho-item-price">${price}</span>
            </div>
            <button class="btn-eliminar">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    `
    item.innerHTML = itemCarrinhoConteudo;
    itemscarrinho.append(item);

    //Adicionamos a funcionalidade de exclusão ao novo item
     item.getElementsByClassName('btn-eliminar')[0].addEventListener('click', eliminarItemcarrinho);

    //Adicionamos a funcionalidade para subtrair quantidade do novo item
    var buttonsubtrairQuantidade = item.getElementsByClassName('subtrair-quantidade')[0];
    buttonsubtrairQuantidade.addEventListener('click',subtrairQuantidade);

    //Adicionamos a funcionalidade para adicionar quantidade do novo item
    var buttonsomarQuantidade = item.getElementsByClassName('somar-quantidade')[0];
    buttonsomarQuantidade.addEventListener('click',somarQuantidade);

    //Atualizamos total
    atualizarTotalCarrinho();
}
//Aumentar a quantidade do item selecionado em um
function somarQuantidade(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('carrinho-item-quantidade')[0].value);
    var quantidadeAtual = selector.getElementsByClassName('carrinho-item-quantidade')[0].value;
    quantidadeAtual++;
    selector.getElementsByClassName('carrinho-item-quantidade')[0].value = quantidadeAtual;
    atualizarTotalCarrinho();
}
//Subtraia a quantidade do item selecionado por um
function subtrairQuantidade(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('carrinho-item-quantidade')[0].value);
    var quantidadeAtual = selector.getElementsByClassName('carrinho-item-quantidade')[0].value;
    quantidadeAtual--;
    if(quantidadeAtual>=1){
        selector.getElementsByClassName('carrinho-item-quantidade')[0].value = quantidadeAtual;
        atualizarTotalCarrinho();
    }
}

//Remover o item selecionado do carrinho
function eliminarItemcarrinho(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    //Atualizar o total do carrinho
    atualizarTotalCarrinho();

    //A função a seguir controla se há itens no carrinho
    //Se não houver, excluir o carrinho
    ocultarcarrinho();
}

//Função que controla se há itens no carrinho. Se não houver, carrinho oculto.
function ocultarcarrinho(){
    var carrinhoItems = document.getElementsByClassName('carrinho-items')[0];
    if(carrinhoItems.childElementCount==0){
        var carrinho = document.getElementsByClassName('carrinho')[0];
        carrinho.style.marginRight = '-100%';
        carrinho.style.opacity = '0';
        carrinhoVisible = false;
    
        var items =document.getElementsByClassName('container-items')[0];
        items.style.width = '100%';
    }
}

//Atualizamos o total do carrinho
function atualizarTotalCarrinho(){
    //selecionamos o carrinho de contêiner
    var carrinhocontainer = document.getElementsByClassName('carrinho')[0];
    var carrinhoItems = carrinhocontainer.getElementsByClassName('carrinho-item');
    var total = 0;
    //examinamos cada item do carrinho para atualizar o total
    for(var i=0; i< carrinhoItems.length;i++){
        var item = carrinhoItems[i];
        var priceElemento = item.getElementsByClassName('carrinho-item-price')[0];
        //Removemos o símbolo do peso e o ponto milésimo.
        var price = parseFloat(priceElemento.innerText.replace('R$','').replace('.',''));
        var quantidadeItem = item.getElementsByClassName('carrinho-item-quantidade')[0];
        console.log(price);
        var cantidad = quantidadeItem.value;
        total = total + (price * cantidad);
    }
    total = Math.round(total * 100)/100;

    document.getElementsByClassName('carrinho-price-total')[0].innerText = 'R$'+total.toLocaleString("pt-br") + ",00";

}








