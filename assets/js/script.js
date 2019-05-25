window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("top").style.top = "-80px";
        document.getElementById("top2").style.top = "0px";
        document.getElementById("top3").style.top = "-80px";
        document.getElementById("top4").style.top = "0px";
    } else {
        document.getElementById("top").style.top = "0px";
        document.getElementById("top2").style.top = "-80px";
        document.getElementById("top3").style.top = "0px";
        document.getElementById("top4").style.top = "-80px";
    }
}


function Banner() {
    var element = document.getElementById('Banner'),
        style = window.getComputedStyle(element)


    var height = window.innerHeight;

    height = height + 1;

    var str1 = height.toString();
    var str2 = "px";

    var stringHeight = str1.concat(str2);

    document.getElementById('Banner').style.height = stringHeight;
}

window.onload = Banner();

var typed3 = new Typed('#typed', {
    strings: ['I Design Websites!', 'I Develop Websites!'],
    typeSpeed: 50,
    backSpeed: 50,
    smartBackspace: true, // this is a default
    loop: true
});

$(".fa-angle-up").bind("webkitAnimationEnd mozAnimationEnd animationEnd", function () {
    $(this).removeClass("animated")
})

$(".fa-angle-up").hover(function () {
    $(this).addClass("animated");
})

