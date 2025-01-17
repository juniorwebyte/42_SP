<?php
// Definições dinâmicas
$logo = 'assets/img/webyte_branco.png';
$favicon = 'assets/img/icon.png';
$home_link = 'https://webytebr.com/';
$vendiaqui_link = 'http://vendiaqui.com/';
$webytemusic_link = 'https://webytemusic.com/';
$digitalpixrifas_link = 'https://digitalpixrifas.webytebr.com/';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propostas de Investimento - Webyte</title>
    <link rel="icon" href="<?php echo $favicon; ?>" type="image/png">
    <!-- CSS Padrão -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Vídeo de fundo -->
    <video class="background-video" autoplay muted loop>
        <source src="assets/videos/video.mp4" type="video/mp4">
        Seu navegador não suporta a tag de vídeo.
    </video>

    <!-- Cabeçalho -->
    <header class="header">
        <!-- Botão estilo hambúrguer -->
        <button class="menu-toggle" aria-label="Abrir menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <!-- Navegação padrão (ocultada em dispositivos móveis) -->
        <nav class="nav-buttons">
            <a href="<?php echo $home_link; ?>" class="button" target="_blank" title="Webyte | Tecnologia e Desenvolvimento">Webyte Desenvolvimentos</a>
            <a href="<?php echo $webytemusic_link; ?>" class="button" target="_blank" title="Webyte Music | Plataforma de Música">Webyte Music</a>
            <a href="<?php echo $vendiaqui_link; ?>" class="button" target="_blank" title="Vendi Aqui | Plataforma de Compras e Vendas">Vendi Aqui</a>
            <a href="<?php echo $digitalpixrifas_link; ?>" class="button" target="_blank" title="Digital Pix Rifas | Plataforma de Rifas Digitais">Digital Pix Rifas</a>
        </nav>

        <!-- Menu móvel -->
        <nav class="mobile-menu">
            <a href="<?php echo $home_link; ?>" class="button" target="_blank">Webyte Desenvolvimentos</a>
            <a href="<?php echo $webytemusic_link; ?>" class="button" target="_blank">Webyte Music</a>
            <a href="<?php echo $vendiaqui_link; ?>" class="button" target="_blank">Vendi Aqui</a>
            <a href="<?php echo $digitalpixrifas_link; ?>" class="button" target="_blank">Digital Pix Rifas</a>
        </nav>
    </header>

    <!-- Conteúdo -->
    <main class="container">
        <div class="logo">
            <img src="<?php echo $logo; ?>" alt="Logo da Webyte">
        </div>

        <div class="header-content">
            <h1>Propostas de Investimento</h1>
            <p>Escolha a proposta que mais lhe interessa:</p>
        </div>

        <div class="button-container">
            <div class="button-group">
                <a href="vendiaqui.php" class="button">Proposta Vendi Aqui</a>
                <a href="https://www.instagram.com/vendiaquimarketplaces/" target="_blank" class="icon icon-instagram" aria-label="Instagram Vendi Aqui">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <div class="button-group">
                <a href="webytemusic.php" class="button">Proposta Webyte Music</a>
                <a href="https://wa.me/5511984801839" target="_blank" class="icon icon-whatsapp" aria-label="WhatsApp Webyte Music">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="footer">
        <p>&copy; 2024 Investimentos Webyte - Todos os direitos reservados.</p>
    </footer>

    <!-- Script para o menu -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.querySelector(".menu-toggle");
            const mobileMenu = document.querySelector(".mobile-menu");

            menuToggle.addEventListener("click", () => {
                mobileMenu.classList.toggle("active");
            });
        });
    </script>
</body>
</html>