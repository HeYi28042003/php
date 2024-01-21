var slides = document.querySelectorAll('.item_slider');
var btns = document.querySelectorAll('.btn_slider');
let currenSlide = 1;

// Javascript for image slider manual navigation

var manualNav = function(manual){

    slides.forEach((slide) => {
        slide.classList.remove('activee');

        btns.forEach((btn) => {
            btn.classList.remove('activee');
        });
    });

    slides[manual].classList.add('activee');
    btns[manual].classList.add('activee');
}

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manualNav(i);
        currenSlide = i;
    });
});


// Javascript for image slider autoplay navigation

var repeat = function(avitceClass){
    let activee = document.getElementsByClassName('activee');
    let i = 1;

    var repeater = () => {
        setTimeout(function(){

            [...activee].forEach((activeslide) => {
                activeslide.classList.remove('activee');
            });

            slides[i].classList.add('activee');
            btns[i].classList.add('activee');
            i++;

            if(slides.length == i){
                i = 0;
            }
            if(i >= slides.length){
                return;
            }
            repeater();
        }, 5000);
    }
    repeater();
}
repeat();