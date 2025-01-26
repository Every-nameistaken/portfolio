let plus_icon = document.querySelector('#plus_icon');
plus_icon.addEventListener('click',()=>{
    let exp_form = document.querySelector('#job_cont');
    let newField = document.createElement('input');
    exp_form.append(newField);
    newField.setAttribute('name','job_description[]');
    newField.className = 'form-control my-2';



});

let toTopIcon = document.querySelector('.back-to-top')
console.log(toTopIcon);

toTopIcon.addEventListener('click',()=>{
    scrollTo(0,0);

});



(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });









})(jQuery);

