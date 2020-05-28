window.addEventListener("scroll", function () {
    var navbar = document.querySelector(".navbar");
    var about = document.querySelector(".about");
    navbar.classList.toggle("active", window.scrollY > 0);
    about.classList.toggle("sticky", window.scrollY > 0);

})
