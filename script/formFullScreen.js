window.onload = function() {
  var textarea = document.getElementById('missionText');
  textarea.addEventListener('focus', function() {
      this.className = 'fullscreen';
  });
  textarea.addEventListener('blur', function() {
      this.className = '';
  });

  // Add event listener for input event
  textarea.addEventListener('input', function () {
      this.style.height = 'auto';
      this.style.height = (this.scrollHeight) + 'px';
  });
};

document.querySelector('.form-group textarea').addEventListener('fullscreenchange', (event) => {
  if (document.fullscreenElement) {
    document.querySelector('.form-group textarea').classList.add('fullscreen');
  } else {
    document.querySelector('.form-group textarea').classList.remove('fullscreen');
  }
});
