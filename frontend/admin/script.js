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
function back(){
    location.href="./frontend/index.html"
}

