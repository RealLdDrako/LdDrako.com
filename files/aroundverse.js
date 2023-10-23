// Array of image names
let images = [
  "/images/random/image1.png",
  "/images/random/image2.png",
  "/images/random/image3.png",
  "images/random/image4.png",
  "images/random/image5.png",
  "images/random/image6.png",
  "images/random/image7.png",
  "images/random/image8.png",
  "images/random/image9.png",
  "images/random/image10.png",
  "images/random/image11.png",
  "images/random/image12.png",
  "images/random/image13.png",
  "images/random/image14.png",
  "images/random/image15.png",
  "images/random/image16.png",
  "images/random/image17.png",
  "images/random/image18.png",
  "images/random/image19.png",
  "images/random/image20.png",
  "images/random/image21.png",
  "images/random/image22.png",
  "images/random/image23.png",
  "images/random/image24.png",
  "images/random/image25.png",
  "images/random/image26.png",
  "images/random/image27.png",
  "images/random/image28.png",
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
    imgElement.src = 'images/random/' + images[index];

    index++;
}

// Display first image immediately
displayImage();

// Change image every 6 seconds
setInterval(displayImage, 3000);
