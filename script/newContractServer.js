async function takeScreenshot() {
    var containers = document.querySelectorAll(".containerPaper");
    var contractName = document.querySelector(".contractName").innerText;
    contractName = contractName.replace(/[^a-zA-Z0-9]/g, '_');

    function getUniqueId() {
        return new Date().toISOString().replace(/[^a-zA-Z0-9]/g, '');
    }

    var pagesArray = [];
    var filenamesArray = [];

    // Create an array of promises
    var promises = Array.from(containers).map(async (container, i) => {
        let canvas = await html2canvas(container, {scale: 6});
        
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

        // Add the image to the pagesArray
        pagesArray.push(img);

        // Add the filename to the filenamesArray
        var filename = contractName + '_pg' + (i + 1) + '_' + getUniqueId() + '.jpg';
        filenamesArray.push(filename);

        // Convert the base64 image data to a Blob
        var byteString = atob(img.split(',')[1]);
        var mimeString = img.split(',')[0].split(':')[1].split(';')[0]
        var ab = new ArrayBuffer(byteString.length);
        var ia = new Uint8Array(ab);
        for (var i = 0; i < byteString.length; i++) {
            ia[i] = byteString.charCodeAt(i);
        }
        var blob = new Blob([ab], {type: mimeString});

        // Create a new FormData instance
        var formData = new FormData();

        // Add the Blob and the filename to the FormData
        formData.append('image', blob, filename);

        // Send the FormData to the server
        $.ajax({
            url: '../script/updateDataContract.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
            }
        });

        return filename;
    });

    // Wait for all promises to resolve
    await Promise.all(promises);

    // Calculate the pageCount
    var pageCount = containers.length;

    // Convert the pagesArray and filenamesArray to JSON strings
    var pagesArrayJson = JSON.stringify(pagesArray);
    var filenamesArrayJson = JSON.stringify(filenamesArray);

    $.post('../script/updateDataContract.php', {data: pagesArrayJson, filename: filenamesArrayJson, pageCount: pageCount, pagesArray: pagesArrayJson}, function(response) {
        console.log(response);
    });
}
