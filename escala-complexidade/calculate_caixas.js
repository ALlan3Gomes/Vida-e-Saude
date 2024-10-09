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
}

// Adicionar evento 'change' para atualizar a soma sempre que um checkbox for alterado
document.querySelectorAll('input[type="checkbox"]').forEach(function (checkbox) {
    checkbox.addEventListener('change', calcularTotal);
});


