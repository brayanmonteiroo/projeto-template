<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brayan Dev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .navbar-brand img {
  width: 2em;
}
</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="https://brayan.dev/img/brayan-logo.png" alt="logomarca"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projetos">Projetos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#habilidades">Habilidades</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="sobre" class="bg-light text-center py-5">
        <div class="container px-4 my-5">
            <img class="d-block mx-auto mb-4" src="img/brayan-header.png" alt="" width="200" height="200">
            <h1 class="display-5 fw-bold">Brayan Monteiro</h1>
            <p class="lead">Desenvolvedor FullStack | PHP | MySQL | PostgreSQL | Docker</p>
            <i class="bi bi-code-slash" style="font-size: 3rem; color: cornflowerblue;"></i>
            <div class="content-home col-lg-6 mx-auto">
            <p class="lead mb-4">Eu sou um especialista em desenvolvimento de sites e sistemas web usando a linguagem PHP. Meu objetivo é sempre oferecer soluções de alta qualidade, utilizando tecnologias modernas como PHP 8, Bootstrap e MySQL. Eu sou altamente focado em entregar soluções de qualidade, com código bem escrito e testado, garantindo a manutenção e a qualidade dos serviços para os clientes. </p>
            <div class="botao-div d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" id="botao-home" class="btn btn-primary btn-lg px-4 gap-3"><a class="text-decoration-none text-white" href="https://drive.google.com/file/d/1KKpj9Q7u4kWNhP-4Iv9EjHRbf1vVXbur/view?usp=sharing" target="_blank">Baixar Currículo</a></button>
            </div>
        </div>
        </div>
    </header>

    <!-- Projetos -->
    <section id="projetos" class="py-5">
        <div class="container text-center">
            <h2 class="mt-5 mb-5">Projetos</h2>            
            <h4 class="mt-5 mb-5">Sistemas com PHP Puro</h4>
            <div class="row mt-4">
                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img src="img/sis-adm.png" class="card-img-top" alt="Site Gerenciado com PHP e MySQL">
                        <div class="card-body">
                            <h5 class="card-title">Site Gerenciado com PHP e MySQL</h5>
                            <p class="card-text">Um sistema de gerenciamento de conteúdo (CMS) para sites, permitindo o cadastro e atualização de todas as informações exibidas em uma landing page. O projeto combina a flexibilidade do PHP com a robustez do MySQL para oferecer uma administração fácil e eficiente.</p>
                        </div>
                        <div class="card-footer">
                            <a href="https://sis-adm.brayan.dev/" target="_blank" class="btn btn-primary">Acessar Site</a>
                            <a href="https://sis-adm.brayan.dev/adm/" target="_blank" class="btn btn-primary">Acessar Sistema</a>
                        </div>
                    </div>
                </div>

            <h4 class="mt-5 mb-5">Scripts PHP</h4>
            <div class="row mt-4">
                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img src="img/CRUD.png" class="card-img-top" alt="CRUD com PHP e MySQL">
                        <div class="card-body">
                            <h5 class="card-title">CRUD com PHP e MySQL</h5>
                            <p class="card-text">Um sistema completo para realizar as principais operações de um banco de dados: criação, leitura, atualização e exclusão (CRUD). O projeto integra a conexão com o banco de dados MySQL e utiliza o Bootstrap para um design responsivo no front-end.</p>
                        </div>
                        <div class="card-footer">
                            <a href="/projetos/crud-php-bootstrap/" target="_blank" class="btn btn-primary">Acessar Projeto</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img src="img/LOGIN.jpg" class="card-img-top" alt="Login com PHP e MySQL">
                        <div class="card-body">
                            <h5 class="card-title">Login com PHP e MySQL</h5>
                            <p class="card-text">Uma aplicação funcional de autenticação que inclui funcionalidades de login e recuperação de senha. O sistema abrange todas as operações necessárias para gerenciar usuários no banco de dados, garantindo segurança e eficiência.</p>
                        </div>
                        <div class="card-footer">
                            <a href="/projetos/crud-php-bootstrap/" target="_blank" class="btn btn-primary">Acessar Projeto</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img src="img/CALULADORA DE IDADE.png" class="card-img-top" alt="Calculadora de Idade em PHP">
                        <div class="card-body">
                            <h5 class="card-title">Calculadora de Idade em PHP</h5>
                            <p class="card-text">Um script que calcula a idade exata de uma pessoa com base na data de nascimento fornecida. Ideal para aplicações que necessitam de cálculos precisos e dinâmicos, utilizando a linguagem PHP para processar e exibir os resultados de forma eficiente.</p>
                        </div>
                        <div class="card-footer">
                            <a href="projetos/calculadora-de-idade/" target="_blank" class="btn btn-primary">Acessar Projeto</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img src="img/GERADOR DE LINK WHATSAPP.png" class="card-img-top" alt="Gerador de Link Whatsapp">
                        <div class="card-body">
                            <h5 class="card-title">Gerador de Link Whatsapp</h5>
                            <p class="card-text">Uma aplicação desenvolvida em PHP que cria links personalizados para o WhatsApp. Permite inserir o número de telefone e uma mensagem automática, gerando um link pronto para compartilhar. Ideal para agilizar a comunicação e melhorar a interação com clientes ou contatos.</p>
                        </div>
                        <div class="card-footer">
                            <a href="projetos/gerador-de-link-wp/" target="_blank" class="btn btn-primary mx-auto">Acessar Projeto</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img src="img/api viacep.png" class="card-img-top" alt="Cosumindo API ViaCEP com PHP">
                        <div class="card-body">
                            <h5 class="card-title">Cosumindo API ViaCEP com PHP</h5>
                            <p class="card-text">Um script em PHP que integra a API ViaCEP para buscar informações de endereços com base no CEP fornecido. O sistema realiza requisições à API e retorna dados como rua, bairro, cidade e estado, facilitando o preenchimento automático de formulários e outras aplicações práticas.</p>
                        </div>
                        <div class="card-footer">
                            <a href="projetos/viacep/" target="_blank" class="btn btn-primary mx-auto">Acessar Projeto</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

  <!-- Habilidades -->
  <section id="habilidades" class="py-5">
        <div class="container text-center">
            <h2>Habilidades</h2>
            <div class="row mt-5">
                <div class="col-6 col-md-3 mb-3">
                    <span class="badge text-bg-dark p-3">HTML</span>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <span class="badge text-bg-dark p-3">CSS</span>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <span class="badge text-bg-dark p-3">JavaScript</span>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <span class="badge text-bg-dark p-3">PHP</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="bg-light py-5">
            <div class="container text-center">
                <h2>Contato</h2>
                <p class="mt-4">Entre em contato para colaborações ou oportunidades!</p>
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <p class="fs-5">📧 <strong>Email:</strong> <a href="mailto:contato@meuportfolio.com">contato@meuportfolio.com</a></p>
                    <p class="fs-5">📞 <strong>Telefone:</strong> <a href="tel:+5511999999999">(11) 99999-9999</a></p>
                </div>
                <a href="#" class="btn btn-outline-dark mt-4" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">Voltar ao Topo ⬆️</a>
            </div>
        </section>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date('Y') ?> Feitor por Brayan Monteiro.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
