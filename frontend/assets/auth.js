// LOGIN
async function loginCliente(email, senha) {
    const res = await fetch('backend/login.php', {
        method: 'POST',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify({email, senha})
    });
    const data = await res.json();
    alert(data.msg);
    return data.status;
}

// CADASTRO
async function cadastrarCliente(nome, email, senha) {
    const res = await fetch('backend/cadastro.php', {
        method: 'POST',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify({nome,email,senha})
    });
    const data = await res.json();
    alert(data.msg);
    return data.status;
}

// Exemplo de uso para menus protegidos
document.querySelectorAll('.protected').forEach(link => {
    link.addEventListener('click', async (e)=>{
        const logado = sessionStorage.getItem('clienteLogado');
        if(logado !== 'true'){
            e.preventDefault();
            alert('Cadastre-se ou loga-te para continuar.');
        }
    });
});
