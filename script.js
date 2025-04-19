
document.querySelectorAll('.category-btn').forEach(button => {
    button.addEventListener('click', () => {
        alert(`You clicked on ${button.textContent}`);
    });
});

document.querySelectorAll('.ice-cream-card').forEach(card => {
    card.addEventListener('click', () => {
        const flavor = card.querySelector('h2').textContent;
        alert(`You clicked on ${flavor} ice cream!`);
    });
});


function subscribe() {
    alert("Thank you for subscribing our news let");
}
