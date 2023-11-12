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
