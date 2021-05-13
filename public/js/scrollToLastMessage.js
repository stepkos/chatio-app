window.onload = function scrollToLastMessage() {
    let divs = document.querySelectorAll('.chat>div:not(.clb)');
    divs[divs.length-1].scrollIntoView();
}