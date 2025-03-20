<?php include '.brunxz/ascii.txt'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos - Digitall Work</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .about-section {
            padding: 6rem 0;
            background-color: var(--gray-light);
        }
        
        .about-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .about-card {
            background-color: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 2.5rem;
            margin-bottom: 2rem;
            transition: var(--transition);
        }
        
        .about-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .about-card h3 {
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        
        .about-card p {
            color: var(--text-light);
            line-height: 1.8;
            text-align: justify;
        }
        
        .page-hero {
            padding: 9rem 0 5rem;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: var(--white);
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container nav-wrapper">
            <div class="logo-container">
                <img src="/assets/images/logo.png" alt="Digitall Work Logo" class="logo-img">
                <span class="logo-text">Digitall Work</span>
            </div>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/pages/vagas">Vagas</a></li>
                <li><a href="/pages/quemsomos" class="active">Sobre</a></li>
                <li><a href="/#contact" class="btn-contact">Contato</a></li>
            </ul>
        </div>
    </nav>

    <section class="page-hero">
        <div class="container">
            <h1>Quem Somos</h1>
            <p>Conheça nossa história, missão, visão e valores</p>
        </div>
    </section>

    <section class="about-section">
        <div class="container about-container">
            <div class="about-card">
                <h3><i class="fas fa-bullseye"></i> MISSÃO</h3>
                <p>Criada em 2001 por jovens empreendedores, a Digitall Work foi pensada com o intuito de atender tanto empresas quanto candidatos de forma ágil e profissional. Priorizamos sempre a contratação de profissionais que residam dentro da região geográfica da empresa, dando assim a eles maior comodidade e qualidade de vida, o que reflete na melhoria de seu desempenho, produção, e ao final vantagens tanto para o trabalhador quanto para a empresa.</p>
            </div>

            <div class="about-card">
                <h3><i class="fas fa-binoculars"></i> VISÃO</h3>
                <p>Almejamos crescimento e expansão com responsabilidades social, cultural e ecológica. Focamos sempre na compreensão, na empatia, no olhar diferenciado para as pessoas e grupos aos quais pertencem, analisando dedicadamente cada micro e macro região, para somente assim podermos dar um suporte ou atendimento personalizado para cada indivíduo e empresário, nas suas reais necessidades.</p>
            </div>

            <div class="about-card">
                <h3><i class="fas fa-gem"></i> VALORES</h3>
                <p>Honestidade, empatia, profissionalismo e agilidade. Nós construímos valores profissionais e humanos que conferem nosso diferencial. Acreditamos no potencial do candidato e pensamos que o recurso humano do empresário também podem ser diferenciado. Valorizamos as pessoas, suas particularidades e capacidades de trabalho individual e coletivo. Trabalhamos em equipe e acreditamos que nossa dedicação faz toda a diferença.</p>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

    <script src="/assets/js/main.js"></script>
</body>
</html>

<?php include '.brunxz/ascii.txt'; ?>