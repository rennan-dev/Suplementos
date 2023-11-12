function validarSenhas() {
    var senha = document.getElementById("senha").value;
    var checksenha = document.getElementById("checksenha").value;

    if (senha !== checksenha) {
        alert("As senhas não coincidem. Por favor, digite novamente.");
        return false;
    }

    return true;
}

//fazer aparecer as opções do usuário
document.addEventListener("DOMContentLoaded", function () {
    var userMenu = document.getElementById("userMenu");
    var optionsMenu = document.querySelector(".options-menu");

    userMenu.addEventListener("mouseover", function () {
        optionsMenu.style.display = "block";
    });

    userMenu.addEventListener("mouseout", function () {
        optionsMenu.style.display = "none";
    });
});


//fazer aparecer o email do usuário
document.addEventListener("DOMContentLoaded", function() {
    // Função para obter parâmetros da URL
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // Obter e exibir o e-mail da URL
    var email = getParameterByName('email');
    if (email) {
        document.getElementById('userEmail').innerText = email;
    }
});