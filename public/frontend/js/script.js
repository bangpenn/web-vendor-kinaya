$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
// Mengontrol navigasi menggunakan tombol-tombol kustom
$('.owl-prev').click(function() {
$('.owl-carousel').trigger('prev.owl.carousel');
});

$('.owl-next').click(function() {
$('.owl-carousel').trigger('next.owl.carousel');
});
