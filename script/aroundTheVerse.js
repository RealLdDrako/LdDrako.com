window.onload = function() {
    const slideshowContainer = document.getElementById('slideshow-container');
    const slideshowImage = document.getElementById('slideshowImage');
    let currentIndex = 0;
    let imageFiles = []; // Array to store image filenames

    // Function to load image filenames from the server
    function loadImages() {
        // Make an AJAX request to a server-side script (e.g., PHP)
        // that reads image filenames from the folder
        // and returns them as JSON data
        fetch('https://www.lddrako.com/script/get_images.php') // Replace with your server-side script
            .then(response => response.json())
            .then(data => {
                imageFiles = Object.values(data); // Convert object to array
                imageFiles.reverse(); // Reverse the array
                showNextImage();
            })
            .catch(error => console.error('Error fetching images:', error));
    }

    // Function to display the next image
    function showNextImage() {
        if (imageFiles.length > 0) {
            currentIndex = (currentIndex + 1) % imageFiles.length;
            const imageUrl = '../images/AroundTheVerse/' + imageFiles[currentIndex];
            slideshowImage.src = imageUrl;
            slideshowImage.style.borderRadius = '20px';
        }
    }

    // Load images initially
    loadImages();

    // Automatically advance to the next image every 15 seconds
    setInterval(showNextImage, 15000);
};
