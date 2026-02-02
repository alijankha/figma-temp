<?php include "./include/header.php"?>
<div class="container pt-5">
  <div class="row">
    <!-- Service Tabs -->
    <div class="service-tabs d-flex flex-wrap justify-content-between mb-3">
      <a class="service-tab active" data-bs-target="#charter">Charter Flight</a>
      <a class="service-tab" data-bs-target="#discount">Online Discount</a>
      <a class="service-tab" data-bs-target="#checkin">Web & Mobile Check-In</a>
      <a class="service-tab" data-bs-target="#callnfly">Call n Fly</a>
      <a class="service-tab" data-bs-target="#nusuk">Nusuk</a>
    </div>

    <!-- Banner Carousel -->
    <div class="banner-carousel w-100">
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active" data-tab="charter">
        <img src="asseste/image/chartered-flight.jpg" class="d-block w-100" style="height: 360px; object-fit: cover;" alt="Chartered Flight">
      </div>
      <div class="carousel-item" data-tab="discount">
        <img src="asseste/image/Online_Discount_1920x360.jpg" class="d-block w-100" style="height: 360px; object-fit: cover;" alt="Online Discount">
      </div>
      <div class="carousel-item" data-tab="checkin">
        <img src="asseste/image/new_checkin_1920x360.jpg" class="d-block w-100" style="height: 360px; object-fit: cover;" alt="Check-In">
      </div>
      <div class="carousel-item" data-tab="callnfly">
        <img src="asseste/image/call and fly 2.jpg" class="d-block w-100" style="height: 360px; object-fit: cover;" alt="Call n Fly">
      </div>
      <div class="carousel-item" data-tab="nusuk">
        <img src="asseste/image/Nusuk_Banner_II.jpg" class="d-block w-100" style="height: 360px; object-fit: cover;" alt="Nusuk">
      </div>
    </div>
  </div>
</div>

  </div>
</div>


<script>
  const tabs = document.querySelectorAll('.service-tab');
  const carousel = bootstrap.Carousel.getOrCreateInstance(document.getElementById('carouselExample'));

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Remove active class from all tabs
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      // Slide to the correct carousel item
      const items = document.querySelectorAll('#carouselExample .carousel-item');
      items.forEach((item, index) => {
        if(item.getAttribute('data-tab') === tab.dataset.bsTarget.substring(1)){
          carousel.to(index);
        }
      });
    });
  });
</script>

<?php include "./include/footer.php" ?>
   