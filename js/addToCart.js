

// When the user clicks on cart, open the popup
function poppup() {
    var popup = document.querySelector(".sidebar");
    popup.classList.toggle("show");
    document.querySelector('.showcase').classList.toggle('hide');
    document.querySelector('.header-message').classList.toggle('hide');
}
function closeCart(){
    document.querySelector('.sidebar').classList.remove('show');
    document.querySelector('.content-container').classList.remove('hide')
    document.querySelector('.showcase').classList.remove('hide');
    document.querySelector('.header-message').classList.remove('hide');

}



