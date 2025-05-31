<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniformes - ChemiStore</title>
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
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 240px;
            object-fit: contain;
            background-color: white;
        }

        .card-content {
            padding: 1rem;
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
        <h1>Uniformes Completos</h1>
        <p>Diseños personalizados y calidad garantizada</p>
    </header>

    <main>
        <div class="grid">
            <div class="card">
                <img src="https://cdn-ilblhal.nitrocdn.com/EhfJJJWhBWbxrGwsxBoebHNTxfbIMDmq/assets/images/optimized/rev-8e49d9e/miamisportssoccer.com/wp-content/uploads/2024/06/Barcelona-Home.png" alt="Uniforme Barcelona">
                <div class="card-content">
                    <h3>Uniforme FC Barcelona</h3>
                    <p>Edición oficial completa 2025</p>
                    <p class="price">$49.99</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cf.bestsoccerstore.com.cn/upload/ttmall/img/20240813/3d418f14cdef291e1d492e3f341d02bb.png" alt="Uniforme Real Madrid">
                <div class="card-content">
                    <h3>Uniforme Real Madrid</h3>
                    <p>Edición oficial completa 2025</p>
                    <p class="price">$52.99</p>
                </div>
            </div>
            <div class="card">
                <img src="https://pontelacamiseta.pe/wp-content/uploads/2024/12/1b6609b921645febb10570f9d292da86.jpg" alt="Uniforme Argentina">
                <div class="card-content">
                    <h3>Uniforme Selección Argentina</h3>
                    <p>Edición oficial completa 2025</p>
                    <p class="price">$54.99</p>
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