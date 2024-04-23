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

// Menangani klik tombol untuk memutar video di dalam modal
document.querySelectorAll('[data-bs-target="#myModal"]').forEach(button => {
    button.addEventListener('click', () => {
      const videoSrc = button.getAttribute('data-src');
      const videoPlayer = document.getElementById('videoPlayer');
      // Mengatur sumber video iframe dengan videoSrc yang diberikan
      videoPlayer.setAttribute('src', videoSrc);
    });
  });
  
  // Menangani penutupan modal untuk menghentikan pemutaran video
  document.getElementById('myModal').addEventListener('hidden.bs.modal', () => {
    const videoPlayer = document.getElementById('videoPlayer');
    // Mengatur ulang sumber video iframe saat modal ditutup
    videoPlayer.setAttribute('src', '');
  });
  

// Declare a variable to store the video source
let videoSrc;

// Add click event listener to all elements with class "video-btn"
document.querySelectorAll('.video-btn').forEach(button => {
  button.addEventListener('click', () => {
    // Get the video source from the data-src attribute
    videoSrc = button.dataset.src;
    console.log(videoSrc);
  });
});

// Add event listener for when the modal is opened
document.getElementById('myModal').addEventListener('shown.bs.modal', () => {
    // Update the video source with autoplay and other options
    document.getElementById('video').src = videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0";
  });

// Add event listener for when the modal is closed
document.getElementById('myModal').addEventListener('hide.bs.modal', () => {
    // Stop the video by resetting the source
    document.getElementById('video').src = videoSrc;
  });
  
