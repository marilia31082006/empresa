<?php
session_start();

if (!isset($_SESSION['cliente_id'])) {
    header("Location: apresentacao.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Tracker - Segurança da Informação</title>
    <style>
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background: #f4f6f8;
    color: #222;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

.topbar {
    background: #fff;
    border-bottom: 1px solid #ddd;
}

.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 70px;
}

.logo {
    font-weight: bold;
    color: #0a3a70;
}

nav a {
    margin-left: 20px;
    text-decoration: none;
    color: #333;
    font-size: 14px;
}

.hero {
    height: 80vh;
    
            background-repeat: no-repeat;
            background-size:cover;
            margin-top:0;
            background-position:center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;

    animation: heroSlider 20s infinite ease-in-out;
}

.hero-content h1 {
    color: #fff;
    font-size: 36px;
    margin-bottom: 20px;
}

.hero-content p {
    color: #ac1224;
    max-width: 700px;
    margin: auto;
}

.grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin: 60px auto;
}
.grid-2:hover{
cursor: pointer;
}

.card {
    background:#ac1224;
    color: #fff;
    padding: 30px;
    border-radius: 6px;
}

.date {
    font-size: 12px;
    opacity: .8;
}

.news-item {
    background: #fff;
    padding: 15px;
    margin-bottom: 10px;
    border-left: 4px solid #ac1224;
}

.services {
    background:black;
    padding: 60px 0;
    color: #fff;
}

.grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 30px;
}

.service {
    background: rgba(255,255,255,.1);
    padding: 20px;
    border-radius: 6px;
    font-size: 14px;
}

.cases {
    margin: 60px auto;
}

.case {
    background:#fff;
    font-size: medium;
    padding: 25px;
    border-radius: 6px;
    box-shadow: 0 0 10px rgba(0,0,0,.05);
}

footer {
    background: black;
    color:white;
    padding: 30px 0;
    text-align: center;
}

@media (max-width: 900px) {
    .grid-2, .grid-3 {
        grid-template-columns: 1fr;
    }

    nav {
        display: flex;
        

    }
}
.img{
            
            width:70px;
            height:50px;
        }
        .icone{
            display:flex;
            flex-direction:row;
            gap:10px;
            width:100%;
            height:50%;
            font-size: medium;
            background:#ff660001;
            margin-top:30px;
            align-items: center;
             margin-left:100px;
        }
                .texto{
            display: flex;
            width:max-content;
            flex-direction: row;
            gap:20px;
            font-size: medium;
            color:#f93f03;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-family:'Iskoola Pota', sans-serif;
            font-size: medium;
            
           
           
        }
        .a{
           position: relative;
           display: inline-block;
           
        }
        /* .a:hover{
             text-decoration: underline;
        } */
        .a::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 0;
        height: 3px;
        background-color:#f93f03;
        transition: width 0.3s ease;
 
        }

        .a:hover::after {
        width: 100%;
        }

        .b{
           position: relative;
           display: inline-block;
           
        }
        /* .a:hover{
             text-decoration: underline;
        } */
        .b::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 0;
        height: 3px;
        background-color:#f93f03;
        transition: width 0.3s ease;
 
        }

        .b:hover::after {
        width: 100%;
        }
                .c{
           position: relative;
           display: inline-block;
           
        }
        /* .a:hover{
             text-decoration: underline;
        } */
        .c::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 0;
        height: 3px;
        background-color:#f93f03;
        transition: width 0.3s ease;
 
        }

        .c:hover::after {
        width: 100%;
        }
                .d{
           position: relative;
           display: inline-block;
           
        }
        /* .a:hover{
             text-decoration: underline;
        } */
        .d::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 0;
        height: 3px;
        background-color:#f93f03;
        transition: width 0.3s ease;
 
        }

        .d:hover::after {
        width: 100%;
        }
 @keyframes heroSlider {
    0% {
        background-image: url("../imagens/tv.webp" );
    }
    25% {
        background-image: url("../imagens/7.avif");
    }
    40% {
        background-image: url("../imagens/obras2.jpg");
    }
    50% {
        background-image: url("../imagens/tv1.webp");
    }
    60% {
        background-image: url("../imagens/ac1.webp");
    }
    70%{
        background-image: url("../imagens/controle.webp");
    }
    80% {
        background-image: url("../imagens/tv2.jpg");
    }
    90% {
        background-image: url("../imagens/2.webp");
    }
    100% {
        background-image: url("../imagens/4.jpg");
    }
}

.mn{
    width:500px;
    height:500px;
}
.icon{
            display:flex;
            flex-direction:row;
            gap:15px;
            margin-left:900px;
        }
        .icons{
            width:50px;
            height:50px;
            cursor: pointer;
        } 
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<header class="topbar">
    <div class="container nav">
        <div class="logo"><img src="../imagens/logo.png" class="img"></div>
        <nav>
             <div class="icone">
           <div class="texto">
            <span><a href="#Serviços" class="a"><h4>Serviços</h4></a></span>
            <span><a href="#core" class="b"><h4>Core Business</h4></a></span>
            <span><a href="#Serviços" class="c"><h4>Clientes</h4></a></span>
            <span><a href="#baixo" class="d"><h4>Contactos</h4></a></span>
        </div>
        </nav>
    </div>
</header>

<section class="hero">
    <div class="hero-content">
        <h1>AS INFORMAÇÕES DA SUA EMPRESA<br>ESTÃO SEGURAS?</h1>
        <p>
            Gestão de Riscos Corporativos · Política de Segurança da Informação ·
            Continuidade do Negócio · Auditorias de Segurança
        </p>
    </div>
</section>

<section class="container grid-2">
    <div>
        <h2 style="color: #ac1224;">Breve apresentação</h2><br>
        <div class="card event-card">
            <span class="date">
                O GCS – Grupo Cláudio dos Santos e Filhos.</span>
            <h3>LDA é uma empresa de direito Angolano, registada na comarca nº 021-15/15010. Em Luanda aos 09 de Janeiro de 2015, com capacidade autónoma e responsabilidades acrescidas no qual define como objeto social o comércio geral e prestação de serviço, tendo o Core Business em Publicidade & Marketing.</h3>
            <p>É representada legalmente na pessoa do Sr. Cláudio Felizardo Cumbi dos Santos.</p>
        </div>
    </div>

    <div>
        <h2 style="color: #ac1224;" id="core">Core Business</h2><br>
        <div class="news">
            <div class="news-item">Instalação CCTV</div>
            <div class="news-item">Aplicações de Box TV</div>
            <div class="news-item">Acabamentos de obras</div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container" id="Serviços">
        <h2>Serviços</h2>
        <div class="grid-3">
            <div class="service">Design Gráfico </div>
            <div class="service">Publicidades</div>
            <div class="service">Formação Profissional</div>
            <div class="service">Serviços de segurança privada</div>
             <div class="service">Serviços de segurança pessoal</div>
             <div class="service">Serviços de segurança para empresa</div>
            <div class="service">Catering & Coffee Break</div>
            <div class="service">Serviços de Protocolo & Estafetas</div>
            <div class="service">Recrutamento e Seleção de Recursos Humanos</div>
            <div class="service">Empregadas Domésticas</div>
            <div class="service">Agente Despachante e Transitários</div>
            <div class="service">Agencia de viagem e turismo</div>
            <div class="service">Agencia de correios</div>
            <div class="service">Assistência Administrativa e Tecnológicas</div>
            <div class="service">Agendas de trabalho</div>
            <div class="service">Mediação em Constituição de Empresas</div>
            <div class="service">Higiene & Limpeza</div>
            <div class="service">Moda</div>
            <div class="service">Organizações de Eventos e divert</div>
            <div class="service">Decoração</div>
            <div class="service">Entrega de Jornais e Revistas ao Domicílio por contrato & Estafetas </div>
          
            
        </div>
    </div>
</section>

<section class="container cases">
    <h2 style="color: #ac1224;">Serviços Adicionais</h2>
    <div class="grid-2">
        <div class="case">
            <strong>Aulas de programação</strong><br>

            <p>Excelente suporte em segurança da informação, aplicações web full-stack, sites e marketing.</p>
            <br>
            <div class="m"><img src="../imagens/pgr.jpg" class="mn"></div>
        </div>
        <div class="case">
            <strong>Instalação de Ar condicionada</strong>
            <br>
            <p>Técnicos altamente qualificados.</p>
            <br>
            <div class="m"><img src="../imagens/ac1.webp" class="mn"></div>
        </div>
    </div>
</section>

<footer>

    
 <div class="baixo" style="display: flex; flex-direction: row; gap:10px;" id="baixo">
    <div class="topobaixo" style="margin-left:50px; display: flex; flex-direction: column;">
        <span><h4>Email: gcsgrupo@hotmal.com </h4></span>
        <br>
        <br>
         <div class="whatsapp">
       <img src="../imagens/whatsapp.webp" class="icons">
        <span><h3>Contactos:923961496/995765513</h3></span> 
    </div>

    </div>
   

    <div class="icon">
                <img src="../imagens/icone1.webp" class="icons">
                <img src="../imagens/insta.webp" class="icons">
                
                <img src="../imagens/twittericone.webp" class="icons">
            </div>
 </div>


    <div class="container footer">
        <p>Excelência, confiança e serviços que fazem a diferença © 2026</p>
    </div>
</footer>

</body>
</html>









































