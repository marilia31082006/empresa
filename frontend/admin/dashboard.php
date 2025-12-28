<?php
require "config.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<!-- <script>
    // Bloqueia acesso se não estiver logado
if(localStorage.getItem('adminLogado') !== 'true') {
    alert('Acesso negado! Faça login primeiro.');
    window.location.href ='loginadmin.html';
}

</script> -->
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Dashboard do Administrador</title>
    <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #f4f6f8;
}

.dashboard {
    display: flex;
    height: 100vh;
    cursor: pointer;
}

/* SIDEBAR */
.sidebar {
    width: 230px;
    background: #1e293b;
    color: #fff;
    padding: 20px;
}

.sidebar h2 {
    margin-bottom: 30px;
    text-align: center;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    padding: 12px;
    margin-bottom: 10px;
    cursor: pointer;
    border-radius: 6px;
}

.sidebar ul li:hover,
.sidebar ul li.active {
    background: #334155;
}

/* MAIN */
.main {
    flex: 1;
    padding: 20px;
}

/* TOPBAR */
.topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.topbar h1 {
    color: #1e293b;
}

.user {
    background: #1e293b;
    color: #fff;
    padding: 8px 15px;
    border-radius: 20px;
}

/* CARDS */
.cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    margin-bottom: 25px;
}

.card {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.card h3 {
    margin-bottom: 10px;
    color: #475569;
}

.card p {
    font-size: 22px;
    font-weight: bold;
    color: #1e293b;
}

/* CONTENT */
.content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.box {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.box h2 {
    margin-bottom: 15px;
    color: #1e293b;
}

/* FORM */
form input,
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
}

form button {
    background: #1e293b;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

form button:hover {
    background: #334155;
}

/* TABLE */
table {
    width: 100%;
    border-collapse: collapse;
}

table th,
table td {
    padding: 10px;
    border-bottom: 1px solid #e2e8f0;
    text-align: left;
}

table th {
    background: #f1f5f9;
}
.section {
    display: none;
}

.section.active {
    display: block;
}

.charts {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}
  
</style>
</head>
<body>

<div class="dashboard">

    <!-- MENU LATERAL -->
    <aside class="sidebar">
        <h2><?php echo $_SESSION['admin_nome']; ?>Admin</h2>
        <ul>
            <li class="menu active" data-section="dashboard">Dashboard</li>
            <li class="menu" data-section="services">Serviços</li>
            <li class="menu" data-section="info">Informações</li>
            <li class="menu" data-section="emails">Emails</li>
            <li class="menu" data-section="movement">Movimento</li>
            <li>Sair</li>
        </ul>
    </aside>

    <!-- CONTEÚDO -->
    <main class="main">

        <header class="topbar">
            <h1>Painel do Administrador</h1>
            <div class="user" onclick="perfil()">Administrador</div>
        </header>

        <!-- DASHBOARD -->
        <section id="dashboard" class="section active">
            <div class="cards">
                <div class="card"><h3>Serviços</h3><p>12</p></div>
                <div class="card"><h3>Emails</h3><p>5</p></div>
                <div class="card"><h3>Visitas</h3><p>1.245</p></div>
                <div class="card"><h3>Usuários</h3><p>320</p></div>
            </div>

            <div class="charts">
                <canvas id="visitsChart"></canvas>
            </div>
        </section>

        <!-- SERVIÇOS -->
        <section id="services" class="section">
            <div class="box">
                <h2>Adicionar Serviço</h2>
                <input type="text" placeholder="Nome do serviço" style="border-radius:20px; padding:12px;">
                
                <input type="text" placeholder="Descrição do serviço" style="border-radius:5px; padding:12px;" maxlength="255" minlength="200">
                <button style=" width:100px;
    height:30px;
    padding:3px;
    border: 3px solid black;
    border-radius: 12px ;
    color: white;
    background:black;
    cursor:pointer;
    outline: none;">Salvar</button>
            </div>
        </section>

        <!-- INFORMAÇÕES -->
        <section id="info" class="section">
            <div class="box">
                <h2>Informações do Site</h2>
                <input placeholder="Texto institucional"" style="border-radius:5px; padding:12px;">
               <button style=" width:100px;
    height:30px;
    padding:3px;
    border: 3px solid black;
    border-radius: 12px ;
    color: white;
    background:black;
    cursor:pointer;
    outline: none;">Actualizar</button>
            </div>
        </section>

        <!-- EMAILS -->
        <section id="emails" class="section">
            <div class="box">
                <h2>Emails Recebidos</h2>
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Mensagem</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </section>

        <!-- MOVIMENTO -->
        <section id="movement" class="section">
            <div class="box">
                <h2>Movimento da Página</h2>
                <canvas id="movementChart" ></canvas>
            </div>
        </section>

    </main>
    <!-- <a href="logout.php">Sair</a> -->
</div>

<script>
   // MENU FUNCIONAL
const menus = document.querySelectorAll('.menu');
const sections = document.querySelectorAll('.section');

menus.forEach(menu => {
    menu.addEventListener('click', () => {
        menus.forEach(m => m.classList.remove('active'));
        sections.forEach(s => s.classList.remove('active'));

        menu.classList.add('active');
        document.getElementById(menu.dataset.section).classList.add('active');
    });
});

// GRÁFICO DE VISITAS
const visitsChart = new Chart(
    document.getElementById('visitsChart'),
    {
        type: 'line',
        data: {
            labels: ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
            datasets: [{
                label: 'Visitas',
                data: [120, 190, 300, 250, 220, 400, 380],
                borderWidth: 2
            }]
        }
    }
);

// GRÁFICO DE MOVIMENTO
const movementChart = new Chart(
    document.getElementById('movementChart'),
    {
        type: 'bar',
        data: {
            labels: ['Cliques', 'Formulários', 'Emails', 'Downloads'],
            datasets: [{
                label: 'Atividade',
                data: [320, 150, 80, 60],
                borderWidth: 1
            }]
        }
    }
);

function perfil(){
    location.href="perfiladmin.html"
} 
</script>
</body>
</html>
