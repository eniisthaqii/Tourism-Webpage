const images = ['img/cyprus.JPG', 'img/paris.jpg', 'img/bali.JPG',
    'img/costabrava.JPG', 'img/edinborough.JPG', 'img/machupichu.JPG',
    'img/london.jpeg', 'img/frankfurt.jpeg', 'img/venice.jpeg'];
const places = ['Paphos',];

const firstImage = 0;
const LastImage = (images.length - 1);
let currentImage = 0;

const nextButton = document.getElementById('next');
nextButton.addEventListener('click', () => {

    const getImage = document.getElementById('image');//thirret foto e pare
    currentImage++;
    if (currentImage >= LastImage) {
        currentImage = 8;
    }
    getImage.src = images[currentImage];
}
);

const previousButton = document.getElementById('previous');
previousButton.addEventListener('click', () => {


    const getImage = document.getElementById('image');//thirret foto e pare
    currentImage--;
    if (currentImage <= firstImage) {
        currentImage = 0;
    }
    getImage.src = images[currentImage];
});