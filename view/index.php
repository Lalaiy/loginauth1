<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,rgb(141, 11, 11), rgb(61, 32, 190));
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color:#fff;

        }
        input{
            padding: 15px;
            border:none;
            outline:none;
            front-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font: size 15px;
            cursor: pointer;
        }
        button:hover{
            background-color: deepskyblue;
        }
    </style>
    </head>
<body>
<div class="tela-login">
    <h1>Login</h1>
    <input type="text" placeholder="Nome">
    <br><br>
    <input type="password" placeholder="Senha">
    <br><br>
    <button>Enviar</button>
    <p>Não cadastrado?<a href="cadastro/cadastro.php">Cadastro</a></p>
    <a href="senhas/senha.php">Esqueceu a senha?</a>
</div>
</body>
</html>