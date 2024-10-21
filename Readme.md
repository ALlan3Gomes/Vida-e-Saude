Projeto ainda em fase de desenvolvimento! v0.4

Quaisquer erros eventualmente serão corrigidos nas versões super

A entrega está prevista para o dia 28/10/2024.

Este código é livre e pode ser utilizado por qualquer pessoa (embora eu não recomende, já que é meu primeiro código). Estou testando diversas funções e realizando alterações constantes, com lançamentos d

Vida-e-Saúde

  <div class="container">
        <div class="logo-e-texto">
            <div class="logo"><a href="../Inicio/initial.html"><img src="..\Imagens\Logo-Branca.png" alt="logo"
                        width="100px" height="100px"></a>
            </div>
            <div class="logo-texto">
                <h1>Vida e Saúde</h1>
            </div>
        </div>
  </div>

  @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Roboto Mono", monospace;
    font-optical-sizing: auto;
}

html, body {
    height: 100%; /* Garante que o body tenha altura total da tela */
    margin: 0; /* Remove margens padrão */
}

body {
    background-color: rgb(233, 224, 214);
    
}
html, body {
    height: 100%; /* Garante que o body tenha altura total da tela */
    margin: 0; /* Remove margens padrão */
    overflow-y: visible; /* Permite a rolagem vertical quando necessário */
    overflow-x: hidden; /* Remove a rolagem horizontal */   
}
/* Personaliza a barra de rolagem */
::-webkit-scrollbar {
    width: 8px; /* Largura da barra de rolagem */
}

/* Parte da barra de rolagem (o fundo) */
::-webkit-scrollbar-track {
    background: #8f2626e0; /* Cor de fundo da barra */
    border-radius: 0px; /* Cantos arredondados */
}

/* A parte que você pode "arrastar" */
::-webkit-scrollbar-thumb {
    background: #8f2626; /* Cor da "parte móvel" da barra */
    border-radius: 0px; /* Cantos arredondados */
}

/* Quando o mouse está sobre a parte móvel da barra */
::-webkit-scrollbar-thumb:hover {
    background: #555555b3; /* Cor da parte móvel ao passar o mouse */
}

.container {
    background-color: rgb(143, 38, 38);
    color: rgb(255, 255, 255);
    height: 10%;
    font-size: 16px;
}
    
.botao {
    width: 20%;
    height: 100%;
    align-items: center;
}

.botao nav a {
    text-decoration: none;
    color: red;
    padding: 18px;
    display: flex;
    font-size: 15px;
    height: 8.5%;
    width: 100%;
    border: 0.5px solid rgb(153, 3, 3);
    border-radius: 20px;
}
.botao nav a:hover{
    color: rgb(255, 255, 255);
}
.botao nav a.botao-active {
    text-decoration: none;
    color: rgb(255, 255, 255);
    padding: 18px;
    display: flex;
    font-size: 15px;
    height: 8.5%;
}
.logo-e-texto {
    display: flex;
    align-items: center;
    justify-content: center;
}

.botao-un {
    margin: 10px;
    display: flex;
    align-items: center;
    border-radius: 20px;
}
.botao-un:hover{
    background-color: rgb(143, 38, 38);
}
.botao-un-active{
    border: 1px solid rgb(143, 38, 38);
    margin: 10px;
    border-radius: 20px;
    background-color: rgb(143, 38, 38);
    text-decoration: none;
    display: flex;
    align-items: center;
}
.forma {
    display: flex;
    height: 85%;
}
footer{
    height: 800px;
    display: flex;
    align-items: end;
    justify-content: end;
    height: 5%;
    padding-right: 10px;
}
.size-default{
    width: 80%;
    height: 100%;
}
.title-default{
    justify-content: center;
    padding: 10px 0 10px 0;
    border-bottom: 2px solid rgb(0, 0, 0);
    font-size: 25px;
}
textarea{
    resize: none;
}
