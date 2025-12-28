document.getElementById("formCadastro").addEventListener("submit", function(e) {
    const senha = document.querySelector("input[name='senha']").value;

    if (senha.length < 6) {
        alert("A senha deve ter no mínimo 6 caracteres.");
        e.preventDefault();
    }
});
