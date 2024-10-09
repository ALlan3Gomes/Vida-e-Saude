// Função para calcular o total
function calcularTotal() {
    let total = 0;

    // Selecionar todos os checkboxes
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Iterar sobre cada checkbox
    checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            // Somar o valor do checkbox ao total se estiver marcado
            total += parseInt(checkbox.value);
        }
    });

    // Exibir o total no campo "Soma Total"
    document.querySelector('.input-full').value = total;

    // Calcular a complexidade com o total calculado e exibir o resultado no campo 'identify'
    const resultado = calcularComplexidade(total);
    document.querySelector('.identify').value = resultado;
}

// Função para calcular a complexidade com base no total de pontos
function calcularComplexidade(totalPontos) {
    if (totalPontos > 34) {
        return "Cuidados intensivos (acima de 34 pontos)";
    } else if (totalPontos >= 29 && totalPontos <= 34) {
        return "Cuidados semi-intensivos (29 a 34 pontos)";
    } else if (totalPontos >= 23 && totalPontos <= 28) {
        return "Cuidados de alta dependência (23 a 28 pontos)";
    } else if (totalPontos >= 18 && totalPontos <= 22) {
        return "Cuidados intermediários (18 a 22 pontos)";
    } else if (totalPontos >= 12 && totalPontos <= 17) {
        return "Cuidados mínimos (12 a 17 pontos)";
    } else {
        return "Pontuação insuficiente para avaliação.";
    }
}

// Adicionar evento 'change' para atualizar a soma sempre que um checkbox for alterado
document.querySelectorAll('input[type="checkbox"]').forEach(function (checkbox) {
    checkbox.addEventListener('change', calcularTotal);
});


