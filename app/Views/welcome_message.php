<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Julice - O seu próximo carro está aqui</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
        }
        .card {
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }

        .card-img-top{
            height: 220px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger fs-3" href="#">JULICE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#carros">Carros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Encontre o Carro Ideal na Julice</h1>
            <p class="lead mb-4">Os melhores modelos, procedência garantida e condições exclusivas para você.</p>
            <a href="#carros" class="btn btn-danger btn-lg px-4 py-2 fw-bold">Ver Catálogo</a>
        </div>
    </header>

    <section id="carros" class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Veículos em Destaque</h2>
            <p class="text-muted">Confira as principais novidades do nosso showroom</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="assets/img/bmw.png" class="card-img-top" alt="BMW M3 Sport">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">BMW M3 Sport</h5>
                        <p class="card-text text-muted mb-2">Ano: 2023 | 15.000 km</p>
                        <p class="text-success fw-bold fs-5 mb-3">R$ 450.000</p>
                        <a href="#" class="btn btn-outline-dark w-100">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="assets/img/audi.jpg" class="card-img-top" alt="Audi Q5 SUV">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Audi Q5 SUV</h5>
                        <p class="card-text text-muted mb-2">Ano: 2022 | 22.000 km</p>
                        <p class="text-success fw-bold fs-5 mb-3">R$ 310.000</p>
                        <a href="#" class="btn btn-outline-dark w-100">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="assets/img/mercedes.jpg" class="card-img-top" alt="Mercedes-Benz C300">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Mercedes-Benz C300</h5>
                        <p class="card-text text-muted mb-2">Ano: 2024 | 5.000 km</p>
                        <p class="text-success fw-bold fs-5 mb-3">R$ 380.000</p>
                        <a href="#" class="btn btn-outline-dark w-100">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2026 Julice Veículos. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
