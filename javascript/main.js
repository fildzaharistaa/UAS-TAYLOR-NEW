$(document).ready(function() {
  // .slider itu class yang ada di html nya (class bisa bebas menggunakan nama apapun!)
  $('.slider').slick({
      lazyLoad: 'ondemand', // ini digunain buat memperlancar gambar di dalam slider (kalau gak make ini, gambar akan dimuat semua terlebih dahulu, baru bisa jalan slidernya)
      slidesToShow: 1, // slide yang ditunjukin berapa banyak [1-9999]
      slidesToScroll: 1, // slide yang di geser per detik speed [num]
      autoplay: true, // autoplay [true/false]
      autoplaySpeed: 1000, // Kecepatan Autoplay [100-9999]
      arrows: false, // Buat Ngilangin Arrow Nya [true/false]
      dots: true, // ini buat munculin titik navigasi slider [true/false]
  });

  // Event listener untuk toggle sidebar
  document.querySelector('.menux').addEventListener('click', function() {
      document.querySelector('.sidebar').classList.toggle('show');
  });

  // Event listeners untuk slide toggle pada infoimage
  $("#infoimage").click(function() {
      $("#infocontent").slideToggle();
  });

  $("#infoimage2").click(function() {
      $("#infocontent2").slideToggle();
  });

  $("#infoimage3").click(function() {
      $("#infocontent3").slideToggle();
  });

  // Event listener untuk tombol logout
document.getElementById('logout').addEventListener('click', function(event) {
  event.preventDefault(); // Mencegah tindakan default tautan
  window.location.href = 'logout.html'; // Mengarahkan ke halaman logout
});

});
