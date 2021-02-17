$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $("header").addClass("active");
        } else {
            $("header").removeClass("active");
        }
    });
});

// $(function() {
//     $(window).on("load", function() {
//         if($(window).scrollTop() > 50  && $(window).width()>991) {
//             $("header").addClass("active");
//         } else {
//             $("header").removeClass("active");
//         }
//     });
// });

window.addEventListener('DOMContentLoaded', ()=>{
    let toggler = document.querySelector('header .toggler');
    let nav = document.querySelector('header nav')
    toggler.addEventListener('click', ()=>{
        nav.classList.toggle('mx');

        if(nav.classList.contains('mx')){
            nav.style.maxHeight = nav.firstElementChild.clientHeight + 'px'
        }
        else{
            nav.style.maxHeight = '0px'
        }
    })
})