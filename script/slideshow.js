// JavaScript source code for carousel
let slideIndex = [1, 1];
let slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4"]
showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);
showSlides(1, 3);
function plusSlides(n, no) {
    showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
    let i;
    let x = document.getElementsByClassName(slideId[no]);
    if (n > x.length) { slideIndex[no] = 1 }
    if (n < 1) { slideIndex[no] = x.length }
    for (i = 0; i < x.length; i++) {
        if (x[i] != undefined) {
            x[i].style.display = "none";
        }
    }
    if (x[slideIndex[no] - 1] != undefined) {
        x[slideIndex[no] - 1].style.display = "block";
    }
}