
//Image Slider

var varguImg = [
    'img/Slider1.jpg',
    'img/Slider2.jpg',
    'img/Slider3.jpg'
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
