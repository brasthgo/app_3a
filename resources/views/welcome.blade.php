<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .login-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input {
            width: 70%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 70%;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background: #0056b3;
        }
        .recover, .register {
            margin-top: 10px;
            display: block;
            color: #007BFF;
            text-decoration: none;
        }
        .recover:hover, .register:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <input type="email" id="email" placeholder="Email" required>
        <input type="password" id="password" placeholder="Senha" required>
        <button onclick="login()">Entrar</button>
        <a href="/recuperar" class="recover">Esqueci minha senha</a>
        <a href="/cadastro" class="register">Criar uma conta</a>
    </div>
    <script>
        function login() {
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            
            if (email === "" || password === "") {
                alert("Por favor, preencha todos os campos.");
                return;
            }
            
            alert("Login realizado com sucesso! (Simulação)");
        }
    </script>
</body>
</html>