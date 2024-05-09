async function takeScreenshot() {
    var containers = document.querySelectorAll(".containerPaper");
    var missionName = document.querySelector(".missionName").innerText;
    missionName = missionName.replace(/[^a-zA-Z0-9]/g, '_');

    function getUniqueId() {
        return new Date().toISOString().replace(/[^a-zA-Z0-9]/g, '');
    }

    for (let i = 0; i < containers.length; i++) {
        let canvas = await html2canvas(containers[i], {scale: 6});
        
        // Get the ImageData from the canvas
        var ctx = canvas.getContext('2d');
        var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
        var data = imageData.data;
        var left = canvas.width, right = 0, top = canvas.height, bottom = 0;

        // Find the boundaries of the non-blank content
        for (var y = 0; y < canvas.height; y++) {
            for (var x = 0; x < canvas.width; x++) {
                var index = (y * canvas.width + x) * 4;
                if (data[index+3] !== 0) {  
                    if (x < left) { left = x; }
                    if (x > right) { right = x; }
                    if (y < top) { top = y; }
                    if (y > bottom) { bottom = y; }
                }
            }
        }

        // Crop the canvas to the non-blank content
        var croppedCanvas = document.createElement('canvas');
        croppedCanvas.width = right - left + 1;
        croppedCanvas.height = bottom - top + 1;
        croppedCanvas.getContext('2d').drawImage(canvas, left, top, croppedCanvas.width, croppedCanvas.height, 0, 0, croppedCanvas.width, croppedCanvas.height);

        // Convert the cropped canvas to a data URL
        var img = croppedCanvas.toDataURL('image/jpeg');

        // Generate a timestamp
        var timestamp = new Date().toISOString();

        // Save the cropped canvas as an image for the user
        let link = document.createElement('a');
        link.download = missionName + '_pg' + (i + 1) + '_' + getUniqueId() + '.jpg'; // rename the image
        link.href = img;
        link.click();

        // Send the data URL to the server-side script
        $.post('../script/save_screenshot.php', {data: img, filename: link.download}, function(response) {
            console.log(response);
        });
    }
}