/* ================ scroll sections avtive link ========================== */
   
   
let sections = document.querySelectorAll('section');
let navlinks = document.querySelectorAll('header  nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height) {
            navlinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });
    
   
   
   
    /* ================ sticky navbar ========================== */

    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);


    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active active2');
   
   
   
};


/* ================ typed js ========================== */

const typed = new Typed('.multiple_text', {
    strings: ['Family', 'Friend', 'Spouse', 'Uncle', 'Nephew', 'Children'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true,
});



window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});




/* ================ toggple btn ========================== */
const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtnIcon = document.querySelector('.toggle_btn i');
const dropdown_menu = document.querySelector('.dropdown_menu');

toggleBtn.onclick = function () {
    dropdown_menu.classList.toggle('open');
    const isOpen = dropdown_menu.classList.contains('open');

    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}