<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprensentação</title>
   <style>
            *{
            margin:0;
            padding:0;
        }

        .pai{
            display:flex;
            flex-direction:column;
            gap:5px;
            width:100%;
            height:100%;
            background-image:url(../imagens/cctv5.jpg);
            background-repeat: no-repeat;
            background-size:cover;
            margin-top:0;
            background-position:center;
            
            /* align-items: center;
            justify-content: center; */
        }
        .topo{
            display:flex;
            flex-direction: row;
            gap:50px;
            /* background:transparent; */
            width:100%;
            height:120px;

        }
        .img{
            margin-left:50px;
            width:200px;
            height:100px;
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
            gap:10px;
            font-size: medium;
            color:#f93f03;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-family:'Iskoola Pota', sans-serif;
           
           
        }
        .icon{
            display:flex;
            flex-direction:row;
            gap:15px;
            margin-left:700px;
        }
        .icons{
            width:50px;
            height:50px;
            cursor: pointer;
        }
        .centro{
            display:flex;
            flex-direction:column;
            align-items: center;
            justify-content: center;
            height:200px;
            width: 100%;
           
            margin-top:150px;
            
            /* background-image:url(../imagens/4.jpg);
            background-repeat: no-repeat;
            background-size:cover;
            margin-top:0;
            background-position:center; */
            
        }

        .textos{
            display: flex;
            flex-direction: row;
            width:100%;
           
            align-items: center;
            justify-content: center;
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
     
.h2{
    color:white;
    font-size:small;
}
.buttonb{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap:20px;
}
.bnnt{
    width:200px;
    height:50px;
    padding:3px;
    border: 3px solid white;
    border-radius: 12px ;
    color: white;
    background:transparent;
    cursor:pointer;
}
.bnnt:hover{
   
    color: #f93f03;
   

}

.bnt{
     width:200px;
    height:50px;
    padding:3px;
    border: 3px solid #f93f03;
    border-radius:12px ;
    color: white;
    background:#f93f03;
    cursor:pointer;
}
.bnt:hover{
    background:black;
    color: #f93f03;
    border: 3px solid black;
}
   </style>
    
    
</head>
<body>
<div class="pai">
    <div class="topo">
        <div class="imagem"><img src="../imagens/logo.png" class="img" onclick="clique()" style="cursor: pointer;"></div>
        <br>
        <div class="icone">
           <!-- <div class="texto">
            <span class="a" class="protected" onclick="clienteLogado()"><h2>Serviços</h2></span>
            <span class="b" class="protected" onclick="clienteLogado()"><h2>Core Business</h2></span>
            <span class="c" class="protected" onclick="clienteLogado()"><h2>Serviços Adicionais</h2></span>
            <span class="d" class="protected" onclick="clienteLogado()"><h2>Contactos</h2></span>
        </div> -->
            <br>
            <div class="icon">
                <img src="../imagens/icone1.webp" class="icons">
                <img src="../imagens/insta.webp" class="icons">
                <img src="../imagens/whatsapp.webp" class="icons">
                <img src="../imagens/twittericone.webp" class="icons">
            </div>

        </div>


    </div>
    
    <div class="centro">
       <div class="textos"">
        <span><h1 style="color: aliceblue;">SOLUÇÕES QUE GERAM RESULTADOS</h1></span><br>
        <span><h1 style="color: blue;">&</h1></span><br>
        <span><h1 style="color: #f93f03;">EXCELÊNCIA EM CADA SERVIÇO PRESTADO</h1></span>
       </div>
       <br>
       <div class="h2"><span><h2>TEMOS TODO VÁRIOS TIPOS DE PRESTAÇÕES DE SERVIÇOS QUE VOÇÊ PRECISA</h2></span></div>
    </div>
    
    <div class="buttonb">
        <div class="esquerda"><button class="bnnt" onclick="log()"><span><h3>Login</h3></span></button></div>
        <br>
        <div class="direita"><button class="bnt" onclick="sug()"><span><h3>Create account</h3></span></button></div>
    </div>

    <!-- <br>
    <div class="baixo"></div> -->
</div>
</body>
</html>

<script>
    function clique() {
    location.href = "../admin/index.php";
}

function log(){
    location.href="login.php";
}

function sug(){
    location.href="index.php";
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
</script>