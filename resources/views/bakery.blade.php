<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Padaria Três Irmãos</title>
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
      max-width: 120px; /* ajusta o tamanho da logo */
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

    html {
      scroll-behavior: smooth;
    }

    /* ===== Seções ===== */
    main section {
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
    }

    /* ===== Sobre ===== */
    #sobre img {
      max-width: 250px;
      border-radius: 12px;
      margin-top: 15px;
      display: block;
    }

    /* ===== Produtos ===== */
    .produtos-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }

    .produto {
      background: #F5E6D3;
      border-radius: 12px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: transform 0.2s ease;
    }

    .produto:hover {
      transform: translateY(-5px);
    }

    .produto img {
      max-width: 120px;
      margin-bottom: 10px;
      border-radius: 8px;
    }

    .produto h3 {
      margin-bottom: 8px;
      color: #5C3A21;
    }

    /* ===== Contato ===== */
    #contato p {
      background: #F5E6D3;
      padding: 15px;
      border-left: 5px solid #8B5E3C;
      border-radius: 8px;
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
        <li><a href="#home">Início</a></li>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#produtos">Produtos</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
    </nav>
  </header>

  <!-- ===== Conteúdo Principal ===== -->
  <main>
    <section id="home">
      <h2>Bem-vindo à Padaria Três Irmãos</h2>
      <p>Aqui, oferecemos os melhores pães, doces e salgados da cidade, preparados com tradição, carinho e qualidade.</p>
    </section>

    <section id="sobre">
      <h2>Sobre Nós</h2>
      <p>A Padaria Três Irmãos foi criada por Neil, Miguel e Ligabo, três irmãos alemães que trouxeram para o centro de Cruzeiro o sabor autêntico de sua tradição. Unimos receitas clássicas e o carinho brasileiro para oferecer pães, bolos e doces feitos com qualidade e dedicação. Aqui, cada fornada é mais que comida: é família, cultura e aconchego.</p>
      <img src="{{ asset('img/nós.png') }}" alt="Fundadores da Padaria Três Irmãos">
    </section>

    <section id="produtos">
      <h2>Nossos Produtos</h2>
      <div class="produtos-grid">
        <div class="produto">
          <img src="{{ asset('img/pão_frances-removebg-preview.png') }}" alt="Pão Francês">
          <h3>Pão Francês</h3>
          <p>R$ 5,00</p>
        </div>
        <div class="produto">
          <img src="{{ asset('img/pao_de_queijo-removebg-preview.png') }}" alt="Pão de Queijo">
          <h3>Pão de Queijo</h3>
          <p>R$ 6,00</p>
        </div>
        <div class="produto">
          <img src="{{ asset('img/bolo_de_chocolate-removebg-preview.png') }}" alt="Bolo de Chocolate">
          <h3>Bolo de Chocolate</h3>
          <p>R$ 8,00</p>
        </div>
        <div class="produto">
          <img src="{{ asset('img/sonho-removebg-preview.png') }}" alt="Sonho">
          <h3>Sonho</h3>
          <p>R$ 4,00</p>
        </div>
        <div class="produto">
          <img src="{{ asset('img/cappucino-removebg-preview.png') }}" alt="Cappucino">
          <h3>Cappucino</h3>
          <p>R$ 7,00</p>
        </div>
        <div class="produto">
          <img src="{{ asset('img/presunto-removebg-preview.png') }}" alt="Presunto">
          <h3>Presunto</h3>
          <p>R$ 5,00</p>
        </div>
        <div class="produto">
          <img src="{{ asset('img/queijo_prato-removebg-preview.png') }}" alt="Queijo Prato">
          <h3>Queijo Prato</h3>
          <p>R$ 6,00</p>
        </div>
        <div class="produto">
          <img src="{{ asset('img/empada-removebg-preview.png') }}" alt="Empada">
          <h3>Empada</h3>
          <p>R$ 5,00</p>
        </div>
        <div class="produto">
          <img src="{{ asset('img/coxinha-removebg-preview.png') }}" alt="Coxinha">
          <h3>Coxinha</h3>
          <p>R$ 6,00</p>
        </div>
        <div class="produto">
          <img src="{{ asset('img/croissant-removebg-preview.png') }}" alt="Croissant">
          <h3>Croissant</h3>
          <p>R$ 7,00</p>
        </div>
      </div>
    </section>

    <section id="contato">
      <h2>Contato</h2>
      <p>📞 Telefone: (12) 1234-5678<br>
         📧 E-mail: contato@padariatresirmaos.com.br</p>
    </section>
  </main>

  <!-- ===== Rodapé ===== -->
  <footer>
    <p>&copy; 2025 Padaria Três Irmãos. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
