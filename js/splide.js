

document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide', {
        type : "loop",
        focus : "center",
        perPage : 1,
        autoplay : "true",
        interval : 5000,
        pagination : "false"
    }).mount();
} );

