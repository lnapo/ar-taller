var myIndex = 0;
var x = document.getElementsByClassName("mySlides");
var auto;
carousel();

function carousel() {
    var i;

    for (i = 0; i < x.length; i++) {
        x[i].style.transition = "width 2s";
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.transition = "width 2s";
    x[myIndex-1].style.display = "block";
    var auto = setTimeout (function(){carousel();}, 4000);
}

function prev() {
    clearTimeout(auto);
    console.log(myIndex);

    x[myIndex].style.transition = "width 2s";
    x[myIndex].style.display = "none";
    x[myIndex].style.transition = "width 2s";

    if (myIndex == 0) {
        myIndex == x.length;
        x[myIndex].style.transition = "width 2s";
        x[myIndex].style.display = "block";
        x[myIndex].style.transition = "width 2s";
    } else {
        myIndex--;
        x[myIndex].style.transition = "width 2s";
        x[myIndex].style.display = "block";
        x[myIndex].style.transition = "width 2s";
        //myIndex--;
    }

    function next () {

        clearTimeout(auto);
        myIndex++;
        x[myIndex-1].style.display = "block";
        myIndex++;
    }
}