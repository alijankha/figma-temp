<?php include "./include/header.php"?>
<div class="container mt-5">
  <form id="searchForm">
    <div class="mb-3">
      <label for="pickupLocation" class="form-label">Pick-up Location</label>
      <input type="text" class="form-control" id="pickupLocation" placeholder="Airport, city or station">
    </div>

    <div class="mb-3 row g-3">
      <div class="col-6 col-md-3">
        <label for="checkIn" class="form-label">Check-in</label>
        <input type="date" class="form-control" id="checkIn">
      </div>
      <div class="col-6 col-md-3">
        <label for="checkOut" class="form-label">Check-out</label>
        <input type="date" class="form-control" id="checkOut">
      </div>
      <div class="col-6 col-md-3">
        <label for="pickupTime" class="form-label">Pick-up Time</label>
        <select class="form-select" id="pickupTime">
          <option value="10:00" selected>10:00</option>
          <option value="10:30">10:30</option>
          <option value="11:00">11:00</option>
        </select>
      </div>
      <div class="col-6 col-md-3">
        <label for="dropoffTime" class="form-label">Drop-off Time</label>
        <select class="form-select" id="dropoffTime">
          <option value="10:00" selected>10:00</option>
          <option value="10:30">10:30</option>
          <option value="11:00">11:00</option>
        </select>
      </div>
    </div>

    <div class="mb-3">
      <label for="occupancy" class="form-label">Occupancy</label>
      <input type="text" class="form-control" id="occupancy" placeholder="2 adults · 0 children · 1 room" readonly>
      <button type="button" class="btn btn-outline-secondary mt-2" data-bs-toggle="modal" data-bs-target="#occupancyModal">
        Edit
      </button>
    </div>

    <button type="submit" class="btn btn-primary w-100">Search</button>
  </form>
</div>

<!-- OCCUPANCY MODAL -->
<div class="modal fade" id="occupancyModal" tabindex="-1" aria-labelledby="occupancyModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="occupancyModalLabel">Select Occupancy</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <label>Adults</label>
        <input type="number" id="adults" class="form-control mb-2" value="2" min="1">
        <label>Children</label>
        <input type="number" id="children" class="form-control mb-2" value="0" min="0">
        <label>Rooms</label>
        <input type="number" id="rooms" class="form-control" value="1" min="1">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="saveOccupancy" data-bs-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- EXPLORE PAKISTAN -->
<div class="container py-5">
  <h2 class="fw-bold mb-3">Explore Pakistan</h2>
  <p class="text-muted mb-4">These popular destinations have a lot to offer</p>
  <div class="row g-4">
    <div class="col-12 col-md-6 col-lg-4">
      <a href="#" class="text-decoration-none text-dark">
        <div class="explore-card">
          <img src="asseste/image/laho.jpg" alt="Lahore">
          <div class="explore-content">
            <h5>Lahore</h5>
            <small>2,323 properties</small>
          </div>
        </div>
      </a>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <a href="#" class="text-decoration-none text-dark">
        <div class="explore-card">
          <img src="asseste/image/islam.jpg" alt="Islamabad">
          <div class="explore-content">
            <h5>Islamabad</h5>
            <small>2,693 properties</small>
          </div>
        </div>
      </a>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <a href="#" class="text-decoration-none text-dark">
        <div class="explore-card">
          <img src="asseste/image/kara.jpg" alt="Karachi">
          <div class="explore-content">
            <h5>Karachi</h5>
            <small>951 properties</small>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<!-- TRENDING DESTINATIONS -->
<div class="container py-5">
  <h2 class="fw-bold mb-3">Trending destinations</h2>
  <p class="text-muted mb-4">Most popular choices for travellers from Pakistan</p>
  <div class="row g-3">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="destination-card">
        <img src="asseste/image/gilgit.png" alt="Gilgit">
        <div class="card-title">Gilgit pk</div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="destination-card">
        <img src="asseste/image/islam.jpg" alt="Islamabad">
        <div class="card-title">Islamabad 🇵🇰</div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="destination-card">
        <img src="asseste/image/kashmir.png" alt="Kashmir">
        <div class="card-title">Kashmir 🇵🇰</div>
      </div>
    </div>
  </div>
</div>

<script>
  // Update occupancy input after modal save
  document.getElementById('saveOccupancy').addEventListener('click', function() {
    const adults = document.getElementById('adults').value;
    const children = document.getElementById('children').value;
    const rooms = document.getElementById('rooms').value;
    document.getElementById('occupancy').value = `${adults} adults · ${children} children · ${rooms} room${rooms > 1 ? 's' : ''}`;
  });

  // Prevent check-out before check-in
  const checkIn = document.getElementById('checkIn');
  const checkOut = document.getElementById('checkOut');
  checkIn.addEventListener('change', () => checkOut.min = checkIn.value);

  // Handle form submission
  document.getElementById('searchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Form submitted!');
  });
</script>
<?php include "./include/footer.php" ?>

