const images = ['cyprus.JPG','paris.jpg','bali.JPG',
                'costabrava.JPG','edinborough.JPG','machupichu.JPG'];
const places= ['Paphos',];

const firstImage=0;
const LastImage=(images.length-1);
let currentImage=0;

const nextButton= document.getElementById ('next');
nextButton.addEventListener('click',()=>{

    const getImage = document.getElementById('image');//thirret foto e pare
    currentImage++;
    if (currentImage >= LastImage)
    {
        currentImage=5;
    }
    getImage.src=images[currentImage];
    }  
);

const previousButton = document.getElementById('previous');
previousButton.addEventListener('click', ()=> {
    

    const getImage = document.getElementById('image');//thirret foto e pare
    currentImage--;
    if (currentImage <= firstImage)
    {
        currentImage=0;
    }
    getImage.src=images[currentImage];
});