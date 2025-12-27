function back(){
    location.href="../index.html"
}
document.getElementById('loginAdmin').addEventListener('click', () => {
    const user = document.getElementById('adminUser').value;
    const pass = document.getElementById('adminPass').value;

    // login simulado
    if(user === 'admin' && pass === '1234') {
        // salvar estado no navegador
        localStorage.setItem('adminLogado', 'true');

        // redirecionar para a dashboard
        window.location.href = 'dashboard.html';
    } else {
        alert('Usuário ou senha incorretos!');
    }
});
