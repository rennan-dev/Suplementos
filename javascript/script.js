function validarSenhas() {
    var senha = document.getElementById("senha").value;
    var checksenha = document.getElementById("checksenha").value;

    if (senha !== checksenha) {
        alert("As senhas não coincidem. Por favor, digite novamente.");
        return false;
    }

    return true;
}
