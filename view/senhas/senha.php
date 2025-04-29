<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
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
            font-size: 15px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        button:hover{
            background-color: deepskyblue;
        }
        .info-text {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="tela-recuperacao">
        <h1>Recuperar Senha</h1>
        <p class="info-text">Digite seu e-mail para receber o link de recuperação</p>
        <input type="email" placeholder="Seu e-mail cadastrado">
        <button>Enviar Link de Recuperação</button>
        <p style="text-align: center; margin-top: 20px;">
            <a href="../index.php" style="color: dodgerblue;">Lembrou sua senha? Faça login</a>
        </p>
    </div>
</body>
</html>