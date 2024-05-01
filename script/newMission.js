async function takeScreenshot() {
    var containers = document.querySelectorAll(".containerPaper");
    var missionName = document.querySelector(".missionName").innerText; // assuming missionName is in an element with class 'missionName'
    
    for (let i = 0; i < containers.length; i++) {
        let canvas = await html2canvas(containers[i], {scale: 1});
        
        // Get the ImageData from the canvas
        var ctx = canvas.getContext('2d');
        var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
        var data = imageData.data;
        var left = canvas.width, right = 0, top = canvas.height, bottom = 0;

        // Find the boundaries of the non-blank content
        for (var y = 0; y < canvas.height; y++) {
            for (var x = 0; x < canvas.width; x++) {
                var index = (y * canvas.width + x) * 4;
                if (data[index+3] !== 0) {  // If pixel is not transparent
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

        // Save the cropped canvas as an image
        let link = document.createElement('a');
        link.download = missionName + '_pg' + (i + 1) + '.jpg'; // rename the image
        link.href = croppedCanvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
        link.click();
    }
}


async function saveAsPDF() {
    var containers = document.querySelectorAll(".containerPaper");
    var pdf = new jsPDF('p', 'mm', 'letter', true);
    var pdfWidth = pdf.internal.pageSize.getWidth();
    var pdfHeight = pdf.internal.pageSize.getHeight();

    for (let i = 0; i < containers.length; i++) {
        if (i !== 0) {
            pdf.addPage();
        }
        let canvas = await html2canvas(containers[i], {scale: 1});
        let imgData = canvas.toDataURL('image/png');
        pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
    }
    pdf.save('download.pdf');
}