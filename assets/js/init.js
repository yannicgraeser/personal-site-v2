$(document).ready(function () {
    var $container = $(".masonry-container");

    $container.imagesLoaded(function () {
        $container.masonry({
            itemSelector: ".masonry-item",
            gutter: 36,
            transitionDuration: 0
        });
        $container.addClass('animated fadeIn');
    });
});

// Invisible reCAPTCHA Callback
function onSubmit(token) {
    console.log("reCAPTCHA erfolgreich, sende Formular ab");
    document.querySelector('form[action="email-gesendet"]').submit();
}