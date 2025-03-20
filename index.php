<?php include '.brunxz/ascii.txt'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitall Work - Recrutamento e Seleção</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                <li><a href="/" class="active">Home</a></li>
                <li><a href="/pages/vagas">Vagas</a></li>
                <li><a href="/pages/quemsomos">Sobre</a></li>
                <li><a href="/#contact" class="btn-contact">Contato</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="container hero-content">
            <h1>Encontre o Talento Ideal para Sua Empresa</h1>
            <p class="hero-text">Especialistas em recrutamento e seleção para transformar sua equipe</p>
            <p class="hero-subtitle">Conectamos profissionais talentosos às melhores oportunidades do mercado</p>
            <div class="hero-btns">
                <a href="/pages/vagas" class="btn btn-primary">Ver Vagas</a>
                <a href="https://wa.me/5541988896567?text=Olá,%20vim%20pelo%20site%20Digitall%20Work,%20irei%20enviar%20meu%20curriculo." target="_blank" class="btn btn-secondary">Enviar Currículo</a>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Nossos Serviços</h2>
                <p>Soluções completas em recrutamento e seleção para sua empresa</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Recrutamento</h3>
                    <p>Identificamos e atraímos os melhores talentos para sua empresa</p>
                    <a href="#" class="card-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-filter"></i>
                    </div>
                    <h3>Seleção</h3>
                    <p>Processo rigoroso de avaliação para encontrar o candidato ideal</p>
                    <a href="#" class="card-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Quem Somos</h3>
                    <p>Conheça nossa história, missão, visão e valores que fundamentam nosso trabalho</p>
                    <a href="/pages/quemsomos" class="card-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Entre em Contato</h2>
                <p>Estamos prontos para ajudar sua empresa a encontrar os melhores talentos</p>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" placeholder="Seu nome" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" placeholder="Sua mensagem" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

<script src="/assets/js/main.js"></script>
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const name = document.getElementById('name').value;
    const message = document.getElementById('message').value;
    
    const whatsappMessage = `Olá, me chamo ${name}.\nVim pelo site Digitall Work!\n\n${message}`;
    const encodedMessage = encodeURIComponent(whatsappMessage);
    
    window.open(`https://wa.me/5541988896567?text=${encodedMessage}`, '_blank');
});
</script>
</body>
</html>

<?php include '.brunxz/ascii.txt'; ?>
