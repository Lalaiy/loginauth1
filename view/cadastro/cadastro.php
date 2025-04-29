<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
            width: 250px;
        }
        input{
            padding: 15px;
            border:none;
            outline:none;
            font-size: 15px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 15px;
            border-radius: 5px;
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
            margin-top: 10px;
        }
        button:hover{
            background-color: deepskyblue;
        }
        h1{
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="tela-cadastro">
        <h1>Cadastro</h1>
        <input type="text" placeholder="Nome completo" required>
        <input type="email" placeholder="E-mail" required>
        <input type="tel" placeholder="Telefone">
        <input type="password" placeholder="Senha" required>
        <input type="password" placeholder="Confirme sua senha" required>
        <button>Cadastrar</button>
        <p style="text-align: center; margin-top: 20px;">Já tem uma conta? <a href="../index.php" style="color: dodgerblue;">Faça login</a></p>
    </div>
</body>
</html>