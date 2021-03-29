const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');
const close = document.getElementById('close');
    
hamburger.addEventListener('click', function() {
    menu.classList.add('showMenu');
});

close.addEventListener('click', function() {
    menu.classList.remove('showMenu');
});

const modal = document.getElementById('modal');

modal.addEventListener('click', function() {
    modal.parentNode.removeChild(modal);
})
