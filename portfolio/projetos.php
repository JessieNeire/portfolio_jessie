<?php
require_once 'cabecalho.php';
?>
<style>
    .mySlides,
    .mySlides1 {
        display: none;
        width: 100%;
        height: 400px;
        object-fit: contain;

    }

    p,
    ul {
        text-align: justify;
    }
</style>
<div class="w3-container w3-display-middle w3-row-cell w3-mobile" id="projetos" style="width: 80%; margin-top: 15%;">
    <div class="w3-container w3-row-cell" id="projetos_web">
        <h1 class="w3-center"><b>Projetos Web</b></h1>
        <hr>
        <div class="w3-half w3-padding" style="width: 450px;">
            <h2><b>Conpac</b></h2>
            <p>Conpac é um sistema web para gerenciamento de entregas para condomínios. A portaria recebe a entrega do morador, cadastra no sistema e automaticamente é enviado uma mensagem para o morador via WhatsApp, avisando que sua entrega chegou. O sistema é acesso por meio de login e senha, e o morador pode acessa e verificar seu pacote onde quer que esteja, sem a necessidade de esperar chegar em casa para saber se sua tão esperada entrega chegou.</p>
            <h6><b>Tecnologias utilizadas:</b>
                <ul>
                    <li><b>Linguagens de Programação:</b> HTML, CSS, JavaScript, PHP, SQL</li>
                    <li><b>Frameworks:</b> W3CSS, jQuery</li>
                    <li><b>Banco de Dados:</b> MySQL</li>
                    <li><b>APIs:</b> WhatsApp API</li>
                    <li><b>Ferramentas:</b> Visual Studio Code, Git, GitHub Desktop, phpmyadmin</li>
                </ul>
            </h6>
        </div>
        <div class="w3-rest" style="padding-left: 20px;">
            <div class="w3-content w3-display-container w3-padding slide-container ">
                <img class="mySlides slide1" src="img/login.png">
                <img class="mySlides slide1" src="img/cadastrar.png">
                <img class="mySlides slide1" src="img/cadastro_sucesso.png">
                <img class="mySlides slide1" src="img/msg.png">
                <img class="mySlides slide1" src="img/atualizado_status.png">
                <img class="mySlides slide1" src="img/alterado_status.png">
                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%;">
                    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
                </div>
            </div>
            <div class="w3-center">
                <a href="https://github.com/JessieNeire/TCC_CONPAC" class="w3-button w3-black w3-round-xlarge">Github</a>
                <a href="https://youtu.be/9oAf8iCaYuU" class="w3-button w3-red w3-round-xlarge">Apresentação</a>
            </div>
        </div>
    </div>




    <div class="w3-container w3-row-cell" id="projetos_app" style="margin-top: 20%;">
        <h1 class="w3-center"><b>Projetos App</b></h1>
        <hr>
        <div class="w3-half">
            <h2><b>Número da Sorte</b></h2>
            <p>Número da Sorte é um jogo, onde os participantes teram de adivinhar qual o número vencedor. A cada tentativa errada o jogo da uma dica se o número é maior ou menor, e passa a vez para o adiversario, até que um dos dois acerte! O campeão pontua, e assim podem jogar inumeras rodadas se assim quiserem.</p>
            <h6><b>Tecnologias utilizadas:</b>
                <ul>
                    <li><b>Linguagens de Programação:</b>Bloco, No Code</li>
                    <li><b>Ferramentas:</b>Kodular, App Kodular Companion</li>
                </ul>
            </h6>
        </div>
        <div class="w3-rest" style="padding-left: 20px;">
            <div class="w3-content w3-display-container w3-padding slide-container ">
                <img class="mySlides1" src="img/login.png">
                <img class="mySlides1" src="img/cadastrar.png">
                <img class="mySlides1" src="img/cadastro_sucesso.png">
                <img class="mySlides1" src="img/msg.png">
                <img class="mySlides1" src="img/atualizado_status.png">
                <img class="mySlides1" src="img/alterado_status.png">
                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%;">
                    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs1(-1)">&#10094;</div>
                    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs1(1)">&#10095;</div>
                    <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(1)"></span>
                    <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(2)"></span>
                    <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(3)"></span>
                    <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(4)"></span>
                    <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(5)"></span>
                    <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(6)"></span>
                </div>
            </div>
            <div class="w3-center">
                <a href="https://github.com/JessieNeire/TCC_CONPAC" class="w3-button w3-black w3-round-xlarge">Github</a>
                <a href="https://youtu.be/9oAf8iCaYuU" class="w3-button w3-red w3-round-xlarge">Apresentação</a>
            </div>
        </div>
    </div>


</div>
<script src="script.js"></script>
</div>

</body>

</html>