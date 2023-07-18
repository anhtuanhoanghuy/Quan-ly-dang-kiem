const containerMarqueeWidth = document.getElementsByClassName('homePageContainer_marquee')

var myIndex = 0;
var forward;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("news_Slide");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    if (myIndex == 0) {myIndex = x.length}
    x[myIndex-1].style.display = "block";
    forward = setTimeout(carousel, 10000);
    /* hiện slide tiếp theo ẩn phía sau  
    setTimeout(() => {
        x[myIndex].style.display = "block";
    },4000)*/
}
function showSlide(n) {
    clearTimeout(forward);
    myIndex += n;
    carousel();
}

function visitWebsite(t) {
    if (t.value != "")
    window.open(t.value);
}