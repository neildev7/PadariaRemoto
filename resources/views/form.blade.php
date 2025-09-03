<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato - Padaria Três Irmãos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #F5E6D3;
            color: #5C3A21;
            margin: 0;
            padding: 0;
        }

        header {
            background: #8B5E3C;
            color: #F5E6D3;
            text-align: center;
            padding: 15px;
        }

        nav a {
            color: #F5E6D3;
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 600px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }

        h2 {
            color: #8B5E3C;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            border: none;
            background: #8B5E3C;
            color: #F5E6D3;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background: #5C3A21;
        }

        footer {
            text-align: center;
            background: #8B5E3C;
            color: #F5E6D3;
            padding: 10px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Padaria Três Irmãos</h1>
        <nav>
            <a href="/bakery">Início</a>
            <a href="/sobre">Sobre</a>
            <a href="/form">Contato</a>
        </nav>
    </header>

    <main>
        <h2>Fale Conosco</h2>
        <form method="POST">
            @csrf
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Número</label>
            <input type="text" id="telefone" name="telefone" required>

            <button type="submit">Enviar</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 Padaria Três Irmãos</p>
    </footer>
</body>
</html>