window.onload = function() {
    var textarea = document.getElementById('missionText');
    textarea.addEventListener('focus', function() {
        this.className = 'fullscreen';
    });
    textarea.addEventListener('blur', function() {
        this.className = '';
    });
};