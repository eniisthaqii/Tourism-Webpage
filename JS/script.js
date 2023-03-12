let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

var mic = document.querySelector('.bx-menu');

menu.onclick = () => {
    menu.classList.toggle('mic');
    navbar.classList.toggle('open')
}

