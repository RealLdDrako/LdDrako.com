/*
<style type="text/css">
            #img {
                opacity: 1;
                transition: opacity 2s ease-in-out;
            }

                #img.fade-out {
                    opacity: 0;
                }
        </style>
        */
var images = [
  
    "images/random/image1.png",
    "images/random/image2.png",
    "images/random/image3.png",
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
    "images/random/image29.png",
    "images/random/image30.png",
    "images/random/image31.png",
    "images/random/image32.png",
    "images/random/image33.png",
    "images/random/image34.png",
    "images/random/image35.png",
    "images/random/image36.png",
    "images/random/image37.png",
    "images/random/image38.png",
    "images/random/image39.png",
    "images/random/image40.png",
    "images/random/image41.png",
    "images/random/image42.png",
    ];
    var index = 0;
    function changeImage() {
        var randomIndex = Math.floor(Math.random() * images.length);
        var img = document.getElementById("img");
        img.classList.add("fade-out");
        setTimeout(function () {
            img.src = images[randomIndex];
            img.classList.remove("fade-out");
        }, 1000);
    }
    setInterval(changeImage, 7000);
    