//O primeiro parametro é o id do input, e o segundo é o ajuste
function adjust(id, aux) {
    //Pega o id do input com base no parâmtro da função
    const input = document.getElementById(id);
    //Transforma o valor do input em float e guarda numa variável
    let value = parseFloat(input.value);

    if (isNaN(value)) value = 0; //Verifica se é um número
    value += aux; //Ajusta o valor com base no parâmetro da função
    if (value < 0) value = 0; //Força que o número seja positivo

    //Por fim, se o input for o preço, coloca dois 0 depois da vírgula
    input.value = value.toFixed(id === 'price' ? 2 : 0); 
}