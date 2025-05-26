function updateQuantity(change) {
    const input = document.getElementById('product_quantity');
    let value = parseInt(input.value) || 1;
    value = Math.max(1, value + change);
    input.value = value;
}

function updatePrice(change) {
    const input = document.getElementById('product_price');
    let value = parseFloat(input.value.replace('R$', '').replace(',', '.')) || 0;
    value = Math.max(0, value + change);
    input.value = value.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
}

document.addEventListener('DOMContentLoaded', () => {
    const priceInput = document.getElementById('product_price');
    priceInput.value = (0).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
});