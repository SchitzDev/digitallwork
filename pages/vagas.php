<?php include '.brunxz/ascii.txt'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas - Digitall Work</title>
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
                <li><a href="/">Home</a></li>
                <li><a href="/pages/vagas" class="active">Vagas</a></li>
                <li><a href="/pages/quemsomos">Sobre</a></li>
                <li><a href="/#contact" class="btn-contact">Contato</a></li>
            </ul>
        </div>
    </nav>

    <section class="page-hero">
        <div class="container">
            <h1>Vagas em Aberto</h1>
            <p>Encontre a oportunidade ideal para sua carreira</p>
        </div>
    </section>

    <section class="jobs-section">
        <div class="container jobs-container">
            <div class="jobs-header">
                <h2>Vagas Disponíveis</h2>
                <p>Envie seu currículo utilizando o <strong>formato .pdf</strong> para o e-mail <a href="mailto:recrutamento@digitallwork.com.br">recrutamento@digitallwork.com.br</a>, informando <strong>no assunto o título ou o código da vaga</strong>.</p>
                <p>Se não tivermos aqui vaga em aberto que lhe interesse, informe no assunto o cargo que você pretende.</p>
            </div>

            <div class="status-legend">
                <h3>Legenda de Status das Vagas</h3>
                <div class="legend-items">
                    <div class="legend-item">
                        <div class="status-dot open"></div>
                        <span>Vaga Aberta</span>
                    </div>
                    <div class="legend-item">
                        <div class="status-dot paused"></div>
                        <span>Vaga Pausada</span>
                    </div>
                </div>
                <p class="legend-note">* Algumas vagas podem não estar mais disponíveis no momento.</p>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>Operador Movimentação de Carga (rebocador)</span>
                    <span class="job-code">Cód: 1314 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>CNH B</li>
                        <li>Curso NR 11</li>
                        <li>Residir em São José dos Pinhais ou proximidades com fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Verificar condições operacionais do equipamento no início das atividades, verificando o nível de óleo e água</li>
                        <li>Comunicar qualquer irregularidade no equipamento ao seu superior imediato</li>
                        <li>Zelar pela limpeza e bom manuseio do rebocador elétrico, operando dentro das normas</li>
                        <li>Executar atividades de auxílio na coleta e logística de resíduos industriais nas instalações</li>
                        <li>Organizar os resíduos em baias de acordo com a classificação dos mesmos, realizar serviços de limpeza e conservação da Central de Resíduos e outras atividades correlatas a função</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 2.188,85 + Alimentação no local sem custo/ VA (R$382,00) / Plano Odontologico/ Gympass/ VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>1º Turno das 06:00 às 14:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>Operador Movimentação de Carga (rebocador) Ferista</span>
                    <span class="job-code">Cód: 1313 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>CNH B</li>
                        <li>Curso NR 11</li>
                        <li>Residir em São José dos Pinhais ou proximidades com fácil acesso ao Afonso Pena</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li><strong>(cobrirá as férias dos 3 turnos)</strong></li>
                        <li>Verificar condições operacionais do equipamento no início das atividades, verificando o nível de óleo e água</li>
                        <li>Comunicar qualquer irregularidade no equipamento ao seu superior imediato</li>
                        <li>Zelar pela limpeza e bom manuseio do rebocador elétrico, operando dentro das normas</li>
                        <li>Executar atividades de auxílio na coleta e logística de resíduos industriais nas instalações</li>
                        <li>Organizar os resíduos em baias de acordo com a classificação dos mesmos, realizar serviços de limpeza e conservação da Central de Resíduos e outras atividades correlatas a função</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 2.188,85 + Alimentação no local sem custo/ VA (R$382,00) / Plano Odontológico/ Gympass/ VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>Horários Escala 6 x 2<br>
                    1º Turno das 06:00 às 14:00;<br>
                    2º Turno das 14:00 às 22:00;<br>
                    3º Turno das 22:00 às 06:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>Operador Movimentação de Carga (rebocador) 3° Turno</span>
                    <span class="job-code">Cód: 1312 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>CNH B</li>
                        <li>Curso NR 11</li>
                        <li>Residir em São José dos Pinhais ou proximidades com fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Verificar condições operacionais do equipamento no início das atividades, verificando o nível de óleo e água</li>
                        <li>Comunicar qualquer irregularidade no equipamento ao seu superior imediato</li>
                        <li>Zelar pela limpeza e bom manuseio do rebocador elétrico, operando dentro das normas</li>
                        <li>Executar atividades de auxílio na coleta e logística de resíduos industriais nas instalações</li>
                        <li>Organizar os resíduos em baias de acordo com a classificação dos mesmos, realizar serviços de limpeza e conservação da Central de Resíduos e outras atividades correlatas a função</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 2.188,85 + Alimentação no local sem custo/ VA (R$382,00) / Plano Odontológico/ Gympass/ VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>Horários Escala 6 x 2<br>
                    3º Turno das 22:00 às 06:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>AJUDANTE PRATICO 2º Turno</span>
                    <span class="job-code">Cód: 1311 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>Residir em São José dos Pinhais ou proximidades, que tenham fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Desmontar as caixas de papelão e armazená-las desmontadas em cima de paletes e envolve-las com plástico filme</li>
                        <li>Organização da área de trabalho</li>
                        <li>Separar os resíduos (plástico, papelão, sólidos e afins)</li>
                        <li>Controle e lançamento de dados da desmontagem diária</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 1.662,67 + Alimentação no local sem custo + VA (R$382,00) + Plano Odontológico+ Gympass + VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>Horário 2º turno escala 6x2<br>
                    14:00 às 22:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>AJUDANTE PRATICO 3º Turno</span>
                    <span class="job-code">Cód: 1310 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>Residir em São José dos Pinhais ou proximidades, que tenham fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Desmontar as caixas de papelão e armazená-las desmontadas em cima de paletes e envolve-las com plástico filme</li>
                        <li>Organização da área de trabalho</li>
                        <li>Separar os resíduos (plástico, papelão, sólidos e afins)</li>
                        <li>Controle e lançamento de dados da desmontagem diária</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 1.662,67 + Alimentação no local sem custo + VA (R$382,00) + Plano Odontológico+ Gympass + VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>2º turno escala 6x2<br>
                    22:00 às 06:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>AJUDANTE PRATICO 1º Turno</span>
                    <span class="job-code">Cód: 1309 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>Residir em São José dos Pinhais ou proximidades, que tenham fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Desmontar as caixas de papelão e armazená-las desmontadas em cima de paletes e envolve-las com plástico filme</li>
                        <li>Organização da área de trabalho</li>
                        <li>Separar os resíduos (plástico, papelão, sólidos e afins)</li>
                        <li>Controle e lançamento de dados da desmontagem diária</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 1.662,67 + Alimentação no local sem custo + VA (R$382,00) + Plano Odontológico+ Gympass + VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>1º turno escala 6x2<br>
                    06:00 às 14:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>AUXILIAR DE PRODUÇÃO 2º Turno</span>
                    <span class="job-code">Cód: 1308 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>Residir em São José dos Pinhais ou proximidades, que tenham fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Desmontar as caixas de papelão e armazená-las desmontadas em cima de paletes e envolve-las com plástico filme</li>
                        <li>Organização da área de trabalho</li>
                        <li>Separar os resíduos (plástico, papelão, sólidos e afins)</li>
                        <li>Controle e lançamento de dados da desmontagem diária</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 1.662,67 + Alimentação no local sem custo + VA (R$382,00) + Plano Odontológico+ Gympass + VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>Horário 2º turno escala 6x2<br>
                    14:00 às 22:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>AUXILIAR DE PRODUÇÃO 3º Turno</span>
                    <span class="job-code">Cód: 1307 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>Residir em São José dos Pinhais ou proximidades, que tenham fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Desmontar as caixas de papelão e armazená-las desmontadas em cima de paletes e envolve-las com plástico filme</li>
                        <li>Organização da área de trabalho</li>
                        <li>Separar os resíduos (plástico, papelão, sólidos e afins)</li>
                        <li>Controle e lançamento de dados da desmontagem diária</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 1.662,67 + Alimentação no local sem custo + VA (R$382,00) + Plano Odontológico+ Gympass + VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>3º turno escala 6x2<br>
                    22:00 às 06:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>AUXILIAR DE PRODUÇÃO 1º Turno</span>
                    <span class="job-code">Cód: 1306 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>Residir em São José dos Pinhais ou proximidades, que tenham fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Desmontar as caixas de papelão e armazená-las desmontadas em cima de paletes e envolve-las com plástico filme</li>
                        <li>Organização da área de trabalho</li>
                        <li>Separar os resíduos (plástico, papelão, sólidos e afins)</li>
                        <li>Controle e lançamento de dados da desmontagem diária</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 1.662,67 + Alimentação no local sem custo + VA (R$382,00) + Plano Odontológico+ Gympass + VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>1º turno escala 6x2<br>
                    06:00 às 14:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>AUXILIAR DE PRODUÇÃO 2º Turno</span>
                    <span class="job-code">Cód: 1305 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>Residir em São José dos Pinhais ou proximidades, que tenham fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Desmontar as caixas de papelão e armazená-las desmontadas em cima de paletes e envolve-las com plástico filme</li>
                        <li>Organização da área de trabalho</li>
                        <li>Separar os resíduos (plástico, papelão, sólidos e afins)</li>
                        <li>Controle e lançamento de dados da desmontagem diária</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 1.662,67 + Alimentação no local sem custo + VA (R$382,00) + Plano Odontológico+ Gympass + VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>2º turno escala 6x2<br>
                    14:00 às 22:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>AUXILIAR DE PRODUÇÃO 3º Turno</span>
                    <span class="job-code">Cód: 1304 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>Residir em São José dos Pinhais ou proximidades, que tenham fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Desmontar as caixas de papelão e armazená-las desmontadas em cima de paletes e envolve-las com plástico filme</li>
                        <li>Organização da área de trabalho</li>
                        <li>Separar os resíduos (plástico, papelão, sólidos e afins)</li>
                        <li>Controle e lançamento de dados da desmontagem diária</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 1.662,67 + Alimentação no local sem custo + VA (R$382,00) + Plano Odontológico+ Gympass + VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>3º turno escala 6x2<br>
                    22:00 às 06:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="job-card">
                <div class="job-title">
                    <span>AUXILIAR DE PRODUÇÃO 1º Turno</span>
                    <span class="job-code">Cód: 1303 | Quant: 01</span>
                </div>
                <div class="job-section">
                    <h4>Experiência / Requisitos:</h4>
                    <ul>
                        <li>Ensino Fundamental Completo</li>
                        <li>Residir em São José dos Pinhais ou proximidades, que tenham fácil acesso ao Afonso Pena</li>
                        <li>Ter disponibilidades de horário</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Atividades:</h4>
                    <ul>
                        <li>Desmontar as caixas de papelão e armazená-las desmontadas em cima de paletes e envolve-las com plástico filme</li>
                        <li>Organização da área de trabalho</li>
                        <li>Separar os resíduos (plástico, papelão, sólidos e afins)</li>
                        <li>Controle e lançamento de dados da desmontagem diária</li>
                    </ul>
                </div>
                <div class="job-section">
                    <h4>Salário / Benefício:</h4>
                    <p>R$ 1.662,67 + Alimentação no local sem custo + VA (R$382,00) + Plano Odontológico+ Gympass + VT</p>
                </div>
                <div class="job-section">
                    <h4>Horário:</h4>
                    <p>1º turno escala 6x2<br>
                    06:00 às 14:00</p>
                </div>
                <div class="job-section">
                    <h4>Tipo:</h4>
                    <p>Tempo integral, efetivo CLT</p>
                </div>
                <div class="job-section">
                    <h4>Local:</h4>
                    <p>São José dos Pinhais-PR</p>
                </div>
                <div class="job-apply">
                    <p>Para se candidatar, envie seu currículo para recrutamento@digitallwork.com.br</p>
                    <a href="#" class="btn-apply" onclick="candidatarVaga(this)">Candidatar-se</a>
                </div>
            </div>

            <div class="jobs-footer">
                <p><em>Algumas vagas podem não estar mais disponíveis. Neste caso, estaremos recebendo seu currículo para cadastro em nosso banco de talentos.</em></p>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

    <script src="/assets/js/main.js"></script>
    <script>
    function candidatarVaga(button) {
        const jobTitle = button.closest('.job-card').querySelector('.job-title span').textContent;
        const whatsappMessage = `Olá, vim pelo site Digitall Work, quero me caditar a vaga ${jobTitle}`;
        const encodedMessage = encodeURIComponent(whatsappMessage);
        window.open(`https://wa.me/5541988896567?text=${encodedMessage}`, '_blank');
    }
    </script>
</body>
</html>

<?php include '.brunxz/ascii.txt'; ?>