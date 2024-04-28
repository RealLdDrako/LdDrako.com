console.log('Script is running');

window.onload = function() {
    let imgElement = document.getElementById('imageElement');
    console.log(imgElement);
    imgElement.src = 'https://lddrako.com/images/random/image1.png';
    console.log(imgElement.src);
};


    /*
// Array of image names
let images = [

'image1.png',
'image2.png',
'image3.png',
'image4.png',
'image5.png',
'image6.png',
'image7.png',
'image8.png',
'image9.png',
'image10.png',
'image11.png',
'image12.png',
'image13.png',
'image14.png',
'image15.png',
'image16.png',
'image17.png',
'image18.png',
'image19.png',
'image20.png',
'image21.png',
'image22.png',
'image23.png',
'image24.png',
'image25.png',
'image26.png',
'image27.png',
'image28.png',
'image29.png',
'image30.png',
'image31.png',
'image32.png',
'image33.png',
'image34.png',
'image35.png',
'image36.png',
'image37.png',
'image38.png',
'image39.png',
'image40.png',
'image41.png',
'image42.png',

];

// Function to shuffle an array
function shuffle(array) {
    let currentIndex = array.length, temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

// Shuffle images initially
images = shuffle(images);

let index = 0;

// Function to display an image
function displayImage() {
    if (index === images.length) {
        // Reshuffle images and reset index
        images = shuffle(images);
        index = 0;
    }

    let imgElement = document.getElementById('imageElement');
    imgElement.src = 'https://lddrako.com/images/random/' + images[index];

    // Log the image source to the console
    console.log(imgElement.src);

    index++;
}

// Display first image immediately
displayImage();

// Change image every 6 seconds
setInterval(displayImage, 6000);

}; */