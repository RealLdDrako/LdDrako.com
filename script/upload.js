function uploadFile() {
    var files = document.getElementById('files').files;
    var progressBar = document.getElementById('progressBar');
    var status = document.getElementById('status');

    for (var i = 0; i < files.length; i++) {
        var file = files[i];

        // Check file size
        if (file.size > 25 * 1024 * 1024) {
            status.innerHTML = 'Error: File ' + file.name + ' is too large.';
            continue;
        }

        var formData = new FormData();
        formData.append('files[]', file);

        var xhr = new XMLHttpRequest();

        // Update progress bar
        xhr.upload.addEventListener('progress', function(e) {
            var percentComplete = Math.round((e.loaded / e.total) * 100);
            progressBar.value = percentComplete;
        }, false);

        // File uploaded
        xhr.addEventListener('load', function() {
            status.innerHTML = 'Upload complete.';
        }, false);

        // Send the file
        xhr.open('POST', 'upload.php', true);
        xhr.send(formData);
    }
}
