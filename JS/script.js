let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

var mic = document.querySelector('.bx-menu');

menu.onclick= () => {
    menu.classList.toggle('mic');
    navbar.classList.toggle('open')
} 

//Image Slider

var varguImg = [
    'img/Slider1.jpg',
    'img/Slider2.jpg',
    'img/Slider3.jpg',
    'img/Slider4.jpg',
    'img/Slider5.jpg',
    'img/Slider6.jpg',
];

var index = 0;
const koha = 5000;

function krijoSlider(){
    document.getElementById('img').src = varguImg[index];
    index++;

    if(index == varguImg.length){
        index = 0;
    }

    setTimeout("krijoSlider()", koha);
}

krijoSlider();
