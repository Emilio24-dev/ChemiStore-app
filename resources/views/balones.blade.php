<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Balones - ChemiStore</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      color: #333;
    }

    header {
      background: linear-gradient(90deg, #1f1c2c, #928dab);
      color: white;
      padding: 2rem;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    header p {
      margin: 0.5rem 0 0;
      font-size: 1.2rem;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      padding: 2rem;
      max-width: 1200px;
      margin: auto;
    }

    .card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: auto;
      max-width: 100%;
      height: auto;
      max-height: 300px;
      object-fit: contain;
      background: #fff;
    }

    .card-content {
      padding: 1rem;
      text-align: center;
    }

    .card-content h3 {
      margin: 0 0 0.5rem;
      font-size: 1.5rem;
    }

    .card-content p {
      margin: 0.3rem 0;
    }

    .price {
      font-weight: bold;
      color: #1f1c2c;
      font-size: 1.2rem;
    }

    footer {
      background: #1f1c2c;
      color: white;
      text-align: center;
      padding: 1rem;
      margin-top: 2rem;
    }
  </style>
</head>
<body>
  <header>
    <h1>Balones de Fútbol</h1>
    <p>Calidad profesional al mejor precio</p>
  </header>

  <main>
    <div class="grid">
      <div class="card">
        <img src="https://thumblr.uniid.it/product/223111/0e2ab0066fe4.jpg" alt="Balón Adidas" />
        <div class="card-content">
          <h3>Adidas Pro</h3>
          <p>Balón oficial de competición</p>
          <p class="price">$24.99</p>
        </div>
      </div>
      <div class="card">
        <img src="https://www.futbolemotion.com/imagesarticulos/176384/grandes/balon-nike-premier-league-flight-2022-2023-hi-vis-yellow-purple-0.jpg" alt="Balón Nike" />
        <div class="card-content">
          <h3>Nike Flight</h3>
          <p>Diseño aerodinámico de alta gama</p>
          <p class="price">$29.99</p>
        </div>
      </div>
    </div>
  </main>
  <div style="text-align: center; margin: 1rem;">
    <a href="{{ url('/') }}" style="padding: 0.7rem 1.5rem; background: #1f1c2c; color: white; text-decoration: none; border-radius: 5px;">
        Volver al Inicio
    </a>
</div>

  <footer>
    <p>&copy; 2025 ChemiStore. Todos los derechos reservados.</p>
  </footer>
</body>
</html>