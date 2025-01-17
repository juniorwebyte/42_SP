<?php
$mensagem = ''; // Inicialize a variável de mensagem
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "junior@webytebr.com";  
    $subject = "Investimento - Vendiaqui.com";
    $message = "Investidor: " . $_POST['nome'] . "\n"
        . "E-mail: " . $_POST['email'] . "\n"
        . "Valor do Investimento: " . $_POST['valor'] . "\n"
        . "Porcentagem de Ações: " . $_POST['porcentagem'] . "\n"
        . "Mensagem adicional: " . $_POST['mensagem'];

    $headers = "From: " . $_POST['email'] . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        $mensagem = "<div class='msg-sucesso'>Obrigado pelo seu interesse. Sua mensagem foi enviada com sucesso.</div>";
    } else {
        $mensagem = "<div class='msg-erro'>Houve um erro ao enviar sua mensagem. Tente novamente.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Investimento - Vendiaqui.com</title>
    <link rel="stylesheet" href="css/formulario_investimento.css">
    <!-- Favicon -->
    <link rel="icon" href="https://investidores.webytebr.com/img/icon.png" type="image/png">
    <style>
    /* Estilo geral */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
            text-align: center;
            background-image: url('https://investidores.webytebr.com/img/fundo.jpg'); /* Imagem de fundo */
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
    
        /* Cabeçalho */
        header {
            width: 100%;
            background-color: #4CAF50;
            padding: 20px 0;
            color: white;
            border-radius: 10px;
            margin-right: 0px;
        }
    
        h2 {
            margin: 0;
            font-size: 24px;
            text-align: center;
        }
    
        /* Formulário */
        form {
            max-width: 500px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            align-items: center;
        }
    
        label {
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
            text-align: left;
            width: 100%;
        }
    
        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 18px;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: 0.3s ease;
        }
    
        input[type="number"], input[type="email"] {
            background-color: #fff;
        }
    
        input:focus, textarea:focus {
            border-color: #4CAF50;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(72, 168, 76, 0.3);
        }
    
        /* Textarea */
        textarea {
            resize: vertical;
        }
    
        /* Botão de envio */
        .submit-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 6px;
            transition: background-color 0.3s;
            width: 100%;
        }
    
        .submit-button:hover {
            background-color: #45a049;
        }
    
        /* Mensagens de sucesso e erro */
        .msg-sucesso, .msg-erro {
            position: fixed;
            top: 20px;
            left: 10px;
            padding: 15px 30px;
            font-size: 16px;
            color: white;
            border-radius: 6px;
            z-index: 9999;
            display: none;
            width: auto;
            max-width: 90%;
            text-align: left;
        }
    
        .msg-sucesso {
            background-color: #4CAF50;
        }
    
        .msg-erro {
            background-color: #f44336;
        }
    
        /* Lista de porcentagens */
        .porcentagens {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
    
        .porcentagem-item {
            background-color: #f1f1f1;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 6px;
            transition: background-color 0.3s;
        }
    
        .porcentagem-item:hover {
            background-color: #4CAF50;
            color: white;
        }
    
        /* Responsividade para dispositivos móveis */
        @media (max-width: 768px) {
            /* Remove o cabeçalho em telas pequenas */
            header {
                display: none;
            }
    
            /* Centraliza o formulário e ajusta para dispositivos móveis */
            form {
                width: 90%;
                padding: 20px;
                margin: 20px 0; /* Adiciona espaçamento nas laterais */
            }
    
            /* Ajusta as margens e fontes para os inputs e textarea */
            input, textarea {
                padding: 10px;
                font-size: 14px;
            }
    
            .submit-button {
                padding: 12px;
                font-size: 16px;
            }
    
            .porcentagem-item {
                font-size: 14px;
            }
        }
    
        /* Responsividade para telas muito pequenas (menos de 480px) */
        @media (max-width: 480px) {
            /* Aumenta a largura do formulário */
            form {
                width: 95%;
                padding: 15px;
            }
    
            /* Ajusta o tamanho dos campos de input e textarea */
            input, textarea {
                padding: 8px;
                font-size: 14px;
            }
    
            /* Ajusta os botões para ocupar toda a largura */
            .submit-button {
                padding: 10px;
                font-size: 14px;
            }
    
            /* Ajusta as porcentagens para telas muito pequenas */
            .porcentagem-item {
                font-size: 12px;
            }
        }
    </style>

    <script>
        const valorDeMercado = 500000.00; // Valor fixo de mercado do Vendi Aqui

        // Função para formatar o valor no campo de R$
        function formatarValor() {
            let valor = document.getElementById('valor').value;

            // Remove caracteres que não sejam números, mantendo a vírgula
            valor = valor.replace(/[^\d,]/g, '');

            // Converte para o formato adequado, para facilitar o cálculo
            valor = valor.replace(',', '.'); // Troca vírgula por ponto para formato numérico
            let numero = parseFloat(valor);

            if (!isNaN(numero)) {
                // Converte o número para o formato de moeda
                valor = numero.toLocaleString('pt-BR', {
                    style: 'currency',
                    currency: 'BRL'
                });
            }

            document.getElementById('valor').value = valor;
            calcularPorcentagem(); // Atualiza a porcentagem correspondente
        }

        // Função para formatar o campo de porcentagem
        function formatarPorcentagem() {
            let porcentagem = document.getElementById('porcentagem').value;

            // Remove caracteres não numéricos
            porcentagem = porcentagem.replace(/[^\d]/g, '');

            // Adiciona a vírgula para duas casas decimais
            porcentagem = (porcentagem / 100).toFixed(2);

            document.getElementById('porcentagem').value = porcentagem + '%';
            calcularValor(); // Atualiza o valor correspondente
        }

        // Calcula a porcentagem com base no valor digitado
        function calcularPorcentagem() {
            const valor = parseFloat(
                document.getElementById('valor').value.replace(/[^\d,.-]/g, '').replace(',', '.')
            );

            if (!isNaN(valor)) {
                const porcentagem = ((valor / valorDeMercado) * 100).toFixed(2);
                document.getElementById('porcentagem').value = porcentagem + '%';
            }
        }

        // Calcula o valor com base na porcentagem digitada
        function calcularValor() {
            const porcentagem = parseFloat(
                document.getElementById('porcentagem').value.replace(/[^\d,.-]/g, '').replace(',', '.')
            );

            if (!isNaN(porcentagem)) {
                const valor = ((porcentagem / 100) * valorDeMercado).toLocaleString('pt-BR', {
                    style: 'currency',
                    currency: 'BRL'
                });
                document.getElementById('valor').value = valor;
            }
        }

        // Função para calcular valor de acordo com as porcentagens pré-definidas
        function selecionarPorcentagem(porcentagem) {
            const valorCalculado = (valorDeMercado * porcentagem / 100).toLocaleString('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            });
            document.getElementById('valor').value = valorCalculado;
            document.getElementById('porcentagem').value = porcentagem + '%';
        }

        // Função para mostrar as mensagens de sucesso ou erro
        function showMessage() {
            const msg = document.querySelector('.msg-sucesso, .msg-erro');
            if (msg) {
                msg.style.display = 'block';
                setTimeout(function() {
                    msg.style.display = 'none';
                }, 5000);
            }
        }

        window.onload = function() {
            showMessage();
        }
    </script>
</head>
<body>
    <header style="text-align: center; margin-bottom: 0;">
        <h2>Formulário de Investimento</h2>
        <p><strong>Valor de Mercado da Empresa: R$ 500.000,00 💰
(Previsão para 2025 📅, com potencial de crescimento à medida que a empresa se expande 🚀)

A empresa está em uma trajetória de crescimento robusto, com um valor estimado para 2025 de R$ 500.000,00. Este valor reflete a confiança no modelo de negócios e nas oportunidades de expansão que estão por vir. Além disso, com o aumento da demanda e os planos de inovação, o valuation tem grande potencial de crescer substancialmente 📈 nos próximos anos, oferecendo ainda mais retorno para investidores e parceiros estratégicos.

Estamos empolgados com o futuro e com as possibilidades que o mercado oferece. Venha fazer parte dessa jornada! 🌟</strong></p>
    </header>

    <?php echo $mensagem; ?> <!-- Exibe a mensagem -->
    <form action="formulario_investimento.php" method="POST" style="margin: 0 20px;">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="valor">Valor a Investir (R$):</label>
        <input type="text" id="valor" name="valor" required oninput="formatarValor(); calcularPorcentagem();">

        <label for="porcentagem">Porcentagem de Ações (%):</label>
        <input type="text" id="porcentagem" name="porcentagem" required oninput="formatarPorcentagem(); calcularValor();">

        <div id="valor-porcentagem" style="margin-bottom: 20px; font-size: 16px; color: #555;"></div>

        <div class="porcentagens">
            <div class="porcentagem-item" onclick="selecionarPorcentagem(5)">5%</div>
            <div class="porcentagem-item" onclick="selecionarPorcentagem(10)">10%</div>
            <div class="porcentagem-item" onclick="selecionarPorcentagem(25)">25%</div>
            <div class="porcentagem-item" onclick="selecionarPorcentagem(50)">50%</div>
        </div>

        <label for="mensagem">Mensagem Adicional:</label>
        <textarea id="mensagem" name="mensagem" rows="4"></textarea>

        <button type="submit" class="submit-button">Enviar Proposta de Compra</button>
        <button type="button" onclick="window.location.href='https://investidores.webytebr.com/vendiaqui.php'" class="submit-button" style="background-color: #007bff; margin-top: 10px;">Voltar ao Vendi Aqui</button>
    </form>

</body>
</html>
