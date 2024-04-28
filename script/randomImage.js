var images = [];
var usedImages = [];

function loadImages() {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', '/path/to/images/folder', true);
  xhr.responseType = 'document';
  xhr.onload = function() {
    var images = xhr.response.getElementsByTagName('img');
    for (var i = 0; i < images.length; i++) {
      imageArray.push(images[i].src);
    }
  };
  xhr.send();
}

function changeImage() {
  if (usedImages.length === images.length) {
      usedImages = [];
  }
  var randomIndex = Math.floor(Math.random() * images.length);
  while (usedImages.includes(randomIndex)) {
      randomIndex = Math.floor(Math.random() * images.length);
  }
  usedImages.push(randomIndex);
  var img = document.getElementById("img");
  img.classList.add("fade-out");
  setTimeout(function () {
      img.src = images[randomIndex];
      img.classList.remove("fade-out");
  }, 1000);
}
setInterval(changeImage, 6000);
