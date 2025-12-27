function clique(){
    location.href="../frontend/admin/loginadmin.html"
}
function log(){
        location.href="index1.html"

    }
    function sug(){
        location.href="index2.html"
    }
    function clienteLogado() {
    return localStorage.getItem('clienteLogado') === 'true';
}

// Bloqueia opções protegidas
document.querySelectorAll('.protected').forEach(link => {
    link.addEventListener('click', function (e) {

        if (!clienteLogado()) {
            e.preventDefault();

            alert('Acesso restrito!\nCadastre-se ou loga-te para continuar.');

            // opcional: redirecionar depois do alerta
            // window.location.href = 'login.html';
        }

    });
});