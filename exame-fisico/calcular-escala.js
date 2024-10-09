// Função para calcular o total da Escala de Coma de Glasgow
function calcularTotal() {
    let total = 0;

    // Função para somar os valores dos radio buttons em uma seção específica
    function somarSelecao(selecao) {
        const radios = document.querySelectorAll(`input[name="${selecao}"]:checked`);
        radios.forEach(function (radio) {
            total += parseInt(radio.value);  // Adiciona o valor do radio selecionado ao total
        });
    }

    // Somar as seleções de cada uma das variáveis (abo, rev, rem)
    somarSelecao('abo');  // Abertura Ocular
    somarSelecao('rev');  // Resposta Verbal
    somarSelecao('rem');  // Resposta Motora

    // Exibir o total no campo "Soma total..."
    document.querySelector('.input-full').value = total;
}

// Adicionar evento 'change' para atualizar o total sempre que um radio button for alterado
document.querySelectorAll('input[type="radio"]').forEach(function (radio) {
    radio.addEventListener('change', calcularTotal);
});
