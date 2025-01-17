<?php 
// Defina as variáveis de logo e favicon de forma dinâmica
$logo = 'assets/img/webyte-music-logo.png';
$favicon = 'assets/img/icon.png';
$home_link = 'https://vendiaqui.com/';

// Função para validar o caminho de arquivos e evitar falhas
function isValidFile($filePath) {
    return file_exists($filePath) && is_readable($filePath);
}

// Verifique se os arquivos de logo e favicon existem, caso contrário, defina um padrão
$logoPath = isValidFile($logo) ? $logo : 'assets/img/default-logo.png';
$faviconPath = isValidFile($favicon) ? $favicon : 'assets/img/default-favicon.png';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentação para Investidores - Webyte Music</title>
    <!-- Favicon dinâmico -->
    <link rel="icon" href="<?= htmlspecialchars($faviconPath); ?>" type="image/png">
    <!-- Código CSS -->
    <link rel="stylesheet" href="assets/css/webytemusic.css">
    <link rel="stylesheet" href="assets/css/formulario_investimento.css">
</head>
<body>
    <!-- Header with the main logo centered -->
    <div class="header">
        <img src="<?= htmlspecialchars($logoPath); ?>" alt="Logo Webyte Music" />
        <br />
        <button class="home-button" onclick="window.location.href='index.php'">Voltar para Home</button> <!-- Boto Home -->
    </div>

    <!-- Botão Investir Agora -->
    <button class="investir-button" onclick="window.location.href='assets/php/formulario_investimento_webytemusic.php'">Investir Agora</button>

    <div class="container">
        <p class="text-center">Webyte Music: Transformando a indústria da música digital 🎧💥</p>
        <p class="text-center">Lançamento previsto para 2025 📅</p>
        <p class="text-center"><strong>Proposta de Valor:</strong> Plataforma inovadora para artistas e fãs se conectarem e monetizarem suas músicas. 🎤💸</p>

        <!-- Problem and Solution Section -->
        <div class="section">
            <h2>1. Problema e Solução 💡</h2>
            <div><span class="emoji">🎯</span><strong> Problema:</strong></div>
            <ul>
                <li>Mercado de streaming saturado, mas com espaço para nichos e inovaçes. 🎶</li>
                <li>Baixos retornos financeiros para artistas nas plataformas tradicionais. 💸</li>
                <li>Falta de soluções de monetização direta para músicos independentes. 🎸</li>
            </ul>
            <div><span class="emoji">✅</span><strong> Solução:</strong></div>
            <ul>
                <li>Webyte Music conecta artistas diretamente com seus fs, eliminando intermediários. 🎧</li>
                <li>Oferece modelos de monetização como venda de músicas, doações e assinaturas. 💰</li>
                <li>Plataforma de fcil acesso e com ferramentas para promoção e gestão de artistas. 📲</li>
            </ul>
        </div>

        <!-- Market and Opportunity Section -->
        <div class="section">
            <h2>2. Mercado e Oportunidade 🌍</h2>
            <div><span class="emoji"></span><strong> Mercado Total Endereçável (TAM):</strong></div>
            <p>O mercado de streaming de música mundial já movimenta bilhões, e cresce a cada ano. 📈</p>
            <div><span class="emoji">🏆</span><strong> Segmento Alvo (SAM):</strong></div>
            <ul>
                <li>Artistas independentes buscando mais controle sobre suas receitas. </li>
                <li>Fãs que buscam apoiar diretamente seus artistas favoritos. 🎶</li>
            </ul>
            <div><span class="emoji">💡</span><strong> Diferenciais Competitivos:</strong></div>
            <ul>
                <li>Modelos de monetização mais justos e transparentes para os artistas. 💵</li>
                <li>Integração com redes sociais para maior engajamento e promoção. 📱</li>
                <li>Foco em nichos de mercado, com conteúdo exclusivo. </li>
            </ul>
        </div>

        <!-- Financial Projections Section -->
        <div class="section">
            <h2>3. Projeções Financeiras 📈</h2>
            <p><span class="emoji">💼</span><strong> Ano 1 (2025):</strong></p>
            <ul>
                <li>Usuários: 50.000 ativos. 👥</li>
                <li>Receita: R$ 500.000. 💵</li>
                <li>Investimento inicial necessário: R$ 400.000. 🏗️</li>
            </ul>
            <p><span class="emoji">💼</span><strong> Ano 2 (2026):</strong></p>
            <ul>
                <li>Usuários: 200.000 ativos. 📈</li>
                <li>Receita: R$ 2.500.000. 💸</li>
                <li>EBITDA: R$ 500.000. 🧾</li>
            </ul>
            <p><span class="emoji">💼</span><strong> Ano 3 (2027):</strong></p>
            <ul>
                <li>Usuários: 1 milhão ativos. 🚀</li>
                <li>Receita: R$ 20.000.000. 💰</li>
                <li>EBITDA: R$ 5.000.000. 🏆</li>
            </ul>
        </div>

        <!-- EBITDA and Valuation Section -->
        <div class="section">
            <h2>4. O que é EBITDA e Valuation? 🧐</h2>
            <div><strong>EBITDA:</strong> Lucro operacional antes de deduzir juros, impostos, depreciação e amortização. 💡</div>
            <p>Indica a capacidade do Webyte Music de gerar lucro e caixa para crescer. </p>
            <div><strong>Valuation:</strong> O valor estimado da plataforma, com base no seu potencial de crescimento e dados financeiros. 📈</div>
            <div><strong>Pré-revenue:</strong> Empresas como a Webyte Music, que ainda não geraram grandes receitas, mas têm grande potencial de valorização. 🚀</div>
        </div>

        <!-- Valuation and Investment Proposal Section -->
        <div class="section">
            <h2>5. Valuation e Proposta de Investimento 💵</h2>
            <ul>
                <li>Valuation estimado: R$ 2 milhões a R$ 4 milhões (pré-revenue). 📊</li>
                <li>Captação necessária: R$ 500.000 a R$ 1 milhão. 💼</li>
                <li>Participação oferecida: 5% a 10% de ações. 📈</li>
                <li>Uso dos recursos: Desenvolvimento da plataforma, marketing e expansão. 📢</li>
            </ul>
            <p><span class="emoji">📞</span><strong> Vamos conversar?</strong> Entre em contato para mais informações sobre como investir. 💬</p>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>Webyte Music - Transformando a música, conectando artistas e fãs. 🎶</p>
        <p>&copy; 2024 <a href="<?= htmlspecialchars($home_link); ?>" target="_blank" title="Webyte | Tecnologia Laravel">Webyte Music</a> Todos os direitos reservados. 🚀</p>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTopBtn" class="back-to-top">Voltar ao Topo ↑</button>

    <script>
        // Get the button
        const mybutton = document.getElementById("backToTopBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        };

        // When the user clicks on the button, scroll to the top of the document
        mybutton.onclick = function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        };
    </script>
</body>
</html>

