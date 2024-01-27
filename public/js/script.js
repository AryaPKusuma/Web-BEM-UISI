const currentYear = new Date().getFullYear();
document.getElementById('year').innerHTML = currentYear;
document.getElementById('footer-year').innerHTML = currentYear;

document.addEventListener('scroll', function() {
const offcanvas = document.querySelector('.offcanvas');
const navbar = document.getElementById('navbar');
const scrollPosition = window.scrollY;

if (scrollPosition > 200) {
    offcanvas.style.backgroundColor = '#ffffff';
    navbar.classList.remove('navbar-dark');
    navbar.classList.add('navbar-light');
    navbar.classList.add('shadow-5');
    navbar.classList.add('bg-light');

} else {
    offcanvas.style.backgroundColor = 'rgba(8, 8, 8, 0.85)';
    navbar.classList.remove('navbar-light');
    navbar.classList.remove('bg-light');
    navbar.classList.remove('shadow-5');
    navbar.classList.add('navbar-dark');
}
});

$(function() {
    $('.slide-one-item').owlCarousel({
        center: false,
        autoplayHoverPause: true,
        items: 1,
        loop: true,
        stagePadding: 0,
        margin: 0,
        smartSpeed: 1500,
        autoplay: true,
        pauseOnHover: false,
        dots: true,
        nav: true,
        navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
    });
})
