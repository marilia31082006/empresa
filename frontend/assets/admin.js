/* ALTERAR FOTO */
function alterarFoto() {
  const file = document.getElementById("profilePhoto").files[0];
  if (!file) {
    alert("Selecione uma foto!");
    return;
  }

  const reader = new FileReader();
  reader.onload = function () {
    document.getElementById("profilePreview").src = reader.result;
    alert("Foto de perfil atualizada!");
  };
  reader.readAsDataURL(file);
}

/* ALTERAR EMAIL */
function alterarEmail() {
  const atual = emailAtual.value;
  const novo = novoEmail.value;

  if (!atual || !novo) {
    alert("Preencha todos os campos!");
    return;
  }

  alert("E-mail alterado com sucesso!");
  // Aqui você envia para o backend
}

/* ALTERAR SENHA */
function alterarSenha() {
  const atual = senhaAtual.value;
  const nova = novaSenha.value;
  const confirmar = confirmarSenha.value;

  if (!atual || !nova || !confirmar) {
    alert("Preencha todos os campos!");
    return;
  }

  if (nova !== confirmar) {
    alert("As senhas não coincidem!");
    return;
  }

  alert("Senha alterada com sucesso!");
  // Aqui você envia para o backend
}
fetch("update_admin.php", {
  method: "POST",
  body: formData
});
