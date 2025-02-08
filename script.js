//card projetos
var slideIndexCard = 1;
console.log(showCardDivs);
showCardDivs(slideIndexCard);


function plusCardDivs(n) {
    showCardDivs(slideIndexCard += n);
}

function currentCardDiv(n) {
    showCardDivs(slideIndexCard = n);
}

function showCardDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlidesCard");
    var dots = document.getElementsByClassName("card-demo");
    if (n > x.length) { slideIndexCard = 1 }
    if (n < 1) { slideIndexCard = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndexCard - 1].style.display = "block";
    dots[slideIndexCard - 1].className += " w3-white";
}


//Slides conpac
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-white";
}

// pag etec
var slideIndex1 = 1;
showDivs1(slideIndex1);

function plusDivs1(n) {
    showDivs1(slideIndex1 += n);
}

function currentDiv1(n) {
    showDivs1(slideIndex1 = n);
}

function showDivs1(n) {
    var i;
    var x = document.getElementsByClassName("mySlides1");
    var dots = document.getElementsByClassName("demo1");
    if (n > x.length) { slideIndex1 = 1 }
    if (n < 1) { slideIndex1 = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex1 - 1].style.display = "block";
    dots[slideIndex1 - 1].className += " w3-white";
}
