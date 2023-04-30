
window.onscroll = function() {
    var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;

    document.getElementById("linkBar").style.marginTop = scrollTop + 5 + 'px';
}