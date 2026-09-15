<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuliceCars - Seja Bem-Vindo</title>
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f8fafc; /* Fundo claro */
            color: #1e293b;
            line-height: 1.6;
            padding: 40px 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }

        /* Header e Hero */
        .header {
            text-align: center;
            padding-bottom: 30px;
            border-bottom: 1px solid #e2e8f0;
            margin-bottom: 35px;
        }

        .brand-logo {
            font-size: 2.8rem;
            font-weight: 900;
            letter-spacing: -1px;
            color: #0f172a;
            text-transform: uppercase;
        }

        .brand-logo span {
            color: #e11d48; /* Vermelho Esportivo */
        }

        .tagline {
            font-size: 0.9rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .hero-title {
            font-size: 2rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 15px;
        }

        .hero-desc {
            font-size: 1.05rem;
            color: #475569;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Seção de Diferenciais */
        .section-title {
            text-align: center;
            font-size: 1.4rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 25px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 35px;
        }

        .card {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            transition: transform 0.2s, border-color 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            border-color: #cbd5e1;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .card-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #ffe4e6;
            color: #e11d48;
            border-radius: 8px;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .card-text {
            font-size: 0.95rem;
            color: #64748b;
        }

        /* Seção de Botões de Ação (CTA) */
        .cta-container {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            border-radius: 14px;
            padding: 30px 20px;
            text-align: center;
            margin-bottom: 35px;
            color: #ffffff;
        }

        .cta-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .cta-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #e11d48;
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #be123c;
        }

        .btn-secondary {
            background-color: #334155;
            color: #ffffff;
        }

        .btn-secondary:hover {
            background-color: #475569;
        }

        .btn-outline {
            border: 1px solid #94a3b8;
            color: #f8fafc;
            background-color: transparent;
        }

        .btn-outline:hover {
            border-color: #ffffff;
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Citação / Depoimento */
        .quote-box {
            border-left: 4px solid #e11d48;
            background-color: #f8fafc;
            padding: 16px 20px;
            margin-bottom: 35px;
            border-radius: 0 8px 8px 0;
        }

        .quote-text {
            font-size: 1rem;
            font-style: italic;
            color: #334155;
        }

        /* Rodapé */
        .footer {
            border-top: 1px solid #e2e8f0;
            padding-top: 25px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .footer-col {
            font-size: 0.9rem;
            color: #64748b;
        }

        .footer-col-title {
            font-size: 0.95rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Banner e Cabeçalho Principal -->
        <header class="header">
            <div class="brand-logo">Julice<span>Cars</span></div>
            <div class="tagline">Automóveis Selecionados & Premium</div>
            <h1 class="hero-title">O seu próximo destino começa aqui.</h1>
            <p class="hero-desc">
                Na JuliceCars, transformamos a compra do seu veículo em uma experiência simples, transparente e inesquecível. Descubra nossa curadoria de seminovos e zero km.
            </p>
        </header>

        <!-- Diferenciais da Loja -->
        <h2 class="section-title">Por que escolher a JuliceCars?</h2>
        <div class="grid">
            <div class="card">
                <div class="card-icon">✓</div>
                <h3 class="card-title">Vistoria Cautelar</h3>
                <p class="card-text">100% dos nossos veículos são periciados e aprovados com rigoroso padrão de qualidade.</p>
            </div>
            <div class="card">
                <div class="card-icon">★</div>
                <h3 class="card-title">Atendimento Premium</h3>
                <p class="card-text">Consultores especializados prontos para encontrar o carro perfeito para o seu estilo de vida.</p>
            </div>
            <div class="card">
                <div class="card-icon">%</div>
                <h3 class="card-title">Taxas Exclusivas</h3>
                <p class="card-text">Parceria com os principais bancos para garantir as melhores condições de financiamento.</p>
            </div>
            <div class="card">
                <div class="card-icon">🔄</div>
                <h3 class="card-title">Melhor Avaliação</h3>
                <p class="card-text">Aceitamos o seu usado na troca com a valorização justa e transparente que você merece.</p>
            </div>
        </div>

        <!-- Botões de Ação -->
        <section class="cta-container">
            <h3 class="cta-title">Como podemos te ajudar hoje?</h3>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Ver Estoque Completo</a>
                <a href="#" class="btn btn-secondary">Vender / Trocar Usado</a>
                <a href="#" class="btn btn-outline">Falar no WhatsApp</a>
            </div>
        </section>

        <!-- Slogan -->
        <div class="quote-box">
            <p class="quote-text">"Na JuliceCars, você escolhe o destino. Nós entregamos a melhor experiência ao dirigir."</p>
        </div>

        <!-- Rodapé de Contato -->
        <footer class="footer">
            <div class="footer-col">
                <div class="footer-col-title">Endereço</div>
                <p>Av. das Américas, 1000</p>
                <p>Barra da Tijuca - Rio de Janeiro / RJ</p>
            </div>
            <div class="footer-col">
                <div class="footer-col-title">Contato</div>
                <p>Tel / WhatsApp: (21) 99999-8888</p>
                <p>contato@julicecars.com.br</p>
            </div>
            <div class="footer-col">
                <div class="footer-col-title">Horário</div>
                <p>Segunda a Sexta: 08h às 18h</p>
                <p>Sábados: 08h às 14h</p>
            </div>
        </footer>
    </div>
</body>
</html>