<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
               * {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
   
    height: 100vh;
    background: url("../imagens/cctv5.jpg") no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 100%;
    display: flex;
    justify-content: center;
}

.card {
    width:350px;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    padding: 100px;
    border-radius: 15px;
    text-align: center;
}

.avatar {
    width: 70px;
    height: 70px;
    background: black;
    color: white;
    border-radius: 50%;
    margin: 0 auto 20px;
    font-size: 32px;
    display: flex;
    justify-content: center;
    align-items: center;
}

input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 5px;
    outline: none;
}

button {
    width:200px;
    padding: 12px;
    background: red;
    color: white;
    border: none;
    border-radius: 5px;
    margin-top: 15px;
    cursor: pointer;
    font-weight: bold;
}

button:hover {
    background:black;
    color:red;
}

.link {
    margin-top: 15px;
}

.link a {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
}

.link a:hover {
    text-decoration: underline;
}

    </style>
    
</head>
<body>

<div class="container">
    <div class="card">
        <div class="avatar">👤</div>

        <form action="php/autenticar.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>

            <button type="submit">LOGIN</button>

            <p class="link">
                <a href="cadastro.php">Criar conta</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>
