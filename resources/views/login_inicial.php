<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .register-container {
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
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background: #218838;
        }
        .back-button {
            background: #007BFF;
        }
        .back-button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Cadastro</h2>
        <input type="text" id="name" placeholder="Nome" required>
        <input type="email" id="email" placeholder="Email" required>
        <input type="text" id="cpf" placeholder="CPF" required>
        <input type="text" id="phone" placeholder="Telefone" required>
        <input type="password" id="password" placeholder="Senha" required>
        <button onclick="register()">Cadastrar</button>
        <button class="back-button" onclick="goToHome()">Voltar para Home</button>
    </div>
    <script>
        function register() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const cpf = document.getElementById("cpf").value;
            const phone = document.getElementById("phone").value;
            const password = document.getElementById("password").value;
            
            if (name === "" || email === "" || cpf === "" || phone === "" || password === "") {
                alert("Por favor, preencha todos os campos.");
                return;
            }
            
            alert("Cadastro realizado com sucesso! (Simulação)");
        }
        
        function goToHome() {
            window.location.href = "/";
        }
    </script>
</body>
</html>