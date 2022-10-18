let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('active');
};

const sr = ScrollReveal ({
    distance: '10px',
    duration: 2600,
    reset: true
})

sr.reveal('.home-text', {delay:300, origin:'left'})
sr.reveal('.fundo_login', {delay:300, origin:'left'})
sr.reveal('.mensagem', {delay:300, origin:'bottom'})
sr.reveal('.redes-sociais', {delay:300, origin:'bottom'})