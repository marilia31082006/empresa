function cadastrarCliente() {
 gh

  const nome = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const senha = document.getElementById("password").value;
  const senha2 = document.getElementById("password2").value;

  if (nome === "" || email === "" || senha === "") {
    msg.innerHTML = "⚠️ Preencha todos os campos";
    msg.style.color = "red";
    return;
  }

  if (senha.length < 8) {
    msg.innerHTML = "⚠️ A senha deve ter no mínimo 8 caracteres";
    msg.style.color = "red";
    return;
  }

  if (senha !== senha2) {
    msg.innerHTML = "⚠️ As senhas não coincidem";
    msg.style.color = "red";
    return;
  }

  fetch("backend/cadastrar_cliente.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ nome, email, senha })
  })
  .then(res => res.json())
  .then(data => {
    msg.innerHTML = data.msg;
    msg.style.color = data.status ? "green" : "red";

    if (data.status) {
      // Limpa os inputs após cadastro
      document.getElementById("name").value = "";
      document.getElementById("email").value = "";
      document.getElementById("password").value = "";
      document.getElementById("password2").value = "";

      // Redireciona após 1.5 segundos
      setTimeout(() => {
        window.location.href = "index1.html";
      }, 1500);
    }
  });
}
