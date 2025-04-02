<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .recovery-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
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
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .send-button {
            background:rgb(190, 207, 38);
            color: white;
        }
        .send-button:hover {
            background:rgb(210, 223, 37);
        }
        .back-button {
            background:rgb(231, 25, 10);
            color: white;
        }
        .back-button:hover {
            background:rgb(192, 16, 3);
        }
    </style>
</head>
<body>
    <div class="recovery-container">
        <h2>Recuperação de Senha</h2>
        <p>Digite seu e-mail para receber as instruções de redefinição de senha.</p>
        <input type="email" id="email" placeholder="Email" required>
        <button class="send-button" onclick="sendRecovery()">Enviar</button>
        <button class="back-button" onclick="goToLogin()">Voltar para Login</button>
    </div>
    <script>
        function sendRecovery() {
            const email = document.getElementById("email").value;
            
            if (email === "") {
                alert("Por favor, preencha o campo de e-mail.");
                return;
            }
            
            alert("E-mail de recuperação enviado! (Simulação)");
            window.location.href = "/";
        }
        
        function goToLogin() {
            window.location.href = "/";
        }
    </script>
</body>
</html>
