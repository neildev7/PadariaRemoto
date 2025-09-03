<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nós - Padaria Três Irmãos</title>
  <style>
    /* ===== Paleta =====
    Marrom escuro: #5C3A21
    Marrom médio: #8B5E3C
    Bege claro: #F5E6D3
    Bege médio: #EBD3B3
    Branco: #FFFFFF
    */

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #F5E6D3;
      color: #5C3A21;
      line-height: 1.6;
    }

    /* ===== Cabeçalho ===== */
    header {
      background: #8B5E3C;
      color: #F5E6D3;
      padding: 15px 20px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
      text-align: center;
    }

    header h1 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    header img {
      max-width: 120px;
      height: auto;
      margin: 0 auto 10px;
      display: block;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      gap: 30px;
    }

    nav a {
      text-decoration: none;
      color: #F5E6D3;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #EBD3B3;
    }

    main {
      max-width: 1000px;
      margin: 40px auto;
      padding: 30px;
      background: #FFFFFF;
      border-radius: 12px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    h2 {
      color: #8B5E3C;
      margin-bottom: 20px;
      border-bottom: 2px solid #EBD3B3;
      display: inline-block;
      padding-bottom: 5px;
    }

    p {
      font-size: 1.1rem;
      margin-bottom: 15px;
    }

    .sobre-container {
      display: flex;
      align-items: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .sobre-container img {
      max-width: 280px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }

    /* ===== Rodapé ===== */
    footer {
      text-align: center;
      padding: 15px;
      background: #8B5E3C;
      color: #F5E6D3;
      font-size: 0.9rem;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <!-- ===== Cabeçalho ===== -->
  <header>
    <h1>Padaria Três Irmãos</h1>
    <img src="{{ asset('img/logo-removebg-preview.png') }}" alt="Logo">
    <nav>
      <ul>
        <li><a href="/bakery">Início</a></li>
        <li><a href="/sobre">Sobre</a></li>
        <li><a href="/form">Contato</a></li>
      </ul>
    </nav>
  </header>

  <!-- ===== Conteúdo Principal ===== -->
  <main>
    <h2>Sobre Nós</h2>
    <div class="sobre-container">
      <div class="texto">
        <p>A Padaria Três Irmãos nasceu da união de Neil, Miguel e Ligabo, três irmãos alemães apaixonados por panificação.</p>
        <p>Ao se estabelecerem em Cruzeiro, trouxeram consigo o sabor autêntico da tradição alemã, unindo receitas clássicas ao carinho brasileiro.</p>
        <p>Mais do que uma padaria, somos um espaço de família, cultura e aconchego. Cada fornada é feita com dedicação para oferecer momentos especiais aos nossos clientes.</p>
      </div>
      <img src="{{ asset('img/nos.png') }}" alt="Fundadores da Padaria Três Irmãos">
    </div>
  </main>

  <!-- ===== Rodapé ===== -->
  <footer>
    <p>&copy; 2025 Padaria Três Irmãos. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
