const navBar = document.querySelectorAll(".nav-link");

$(document).ready(function() {

    $('.open--nav p').click(function() {
        for (const nav of navBar) {
            $(nav).click(function() {
                $('.open--nav i').removeClass('fa-times');
                $('.open--nav i').addClass('fa-bars');

                $("header").hide();
            })
        }
        $(this).find('i').toggleClass('fa-bars fa-times');
        $("header").toggle('animate__backInDown');

    });
});
/* ****************************************************************** */

const portfolios = document.querySelectorAll(".card-img-overlay");


$(document).ready(function() {
    $('.card').mouseover(function() {
        $(this).find('.card-img-overlay').removeClass('d-none');
    });

    $('.card').mouseout(function() {
        $(this).find('.card-img-overlay').addClass('d-none');
    });

    $('.techno').mouseover(function() {
        $('.techno').find('.about-techno').removeClass('bg-white');

        $('.about-techno').mouseover(function() {
            $(this).addClass('bg-techno');
        });

        $('.about-techno').mouseout(function() {
            $(this).removeClass('bg-techno');
        });
    });

    $('.techno').mouseout(function() {
        $('.techno').find('.about-techno').addClass('bg-white');
    });

});


/* ******************************************************************************** */
// pour quand lelement est visible
//threshold aprtir de quand visible

const ratio = .20;
var options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}
const handelItesect = (entries, observer) => {
    entries.forEach((entry) => {

        if (ratio < entry.intersectionRatio) {
            entry.target.classList.add('show-visible');
            entry.target.classList.add('rightLeft-visible');
            observer.unobserve(target);
        }


    });

}
const observer = new IntersectionObserver(handelItesect, options);

document.querySelectorAll('.show').forEach(function(show) {
    observer.observe(show);
})

document.querySelectorAll('.rightLeft').forEach(function(rightLeft) {
    observer.observe(rightLeft);
})