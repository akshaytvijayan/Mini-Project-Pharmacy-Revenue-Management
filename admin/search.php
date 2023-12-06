<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>NEETHI - HMS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid py-2 border-bottom d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center">
            <a class="text-decoration-none text-body pe-3" href="#"><i class="bi bi-telephone me-2"></i>+91-495-2723272</a>
            <span class="text-body">|</span>
            <a class="text-decoration-none text-body px-3" href="#"><i class="bi bi-envelope me-2"></i>info@neethihospital.org</a>
          </div>
        </div>
        <div class="col-md-6 text-center text-lg-end">
          <div class="d-inline-flex align-items-center">
            <a class="text-body px-2" href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-body px-2" href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="text-body px-2" href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="text-body px-2" href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="text-body ps-2" href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
        <a href="home.php" class="navbar-brand">
          <h1 class="m-0 text-uppercase text-primary">
            <i class="fa fa-clinic-medical me-2"></i>NEETHI HOSPITAL
          </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="home.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="service.php" class="nav-item nav-link">Service</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Login Here</a>
              <div class="dropdown-menu m-0">
                <a href="../admin/index.php" class="dropdown-item">Admin Login</a>
                <a href="../build/index.php" class="dropdown-item">Pharmacy Login</a>
                <a href="index.php" class="dropdown-item">laboratory Login</a>
                <a href="team.php" class="dropdown-item">The Team</a>

                <a href="appointment.php" class="dropdown-item">Appointment</a>
                <a href="search.php" class="dropdown-item active">Search</a>
              </div>
            </div>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Search Start -->
  <div class="container-fluid bg-primary my-5 py-5">
    <div class="container py-5">
      <div class="text-center mx-auto mb-5" style="max-width: 500px">
        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">
          Find A Doctor
        </h5>
        <h1 class="display-4 mb-4">Find A Healthcare Professionals</h1>
        <h5 class="text-white fw-normal">
          Connect with qualified medical experts, including doctors,
          specialists, and other healthcare providers, to address their
          specific healthcare needs and concerns.
        </h5>
      </div>
      <div class="mx-auto" style="width: 100%; max-width: 600px">
        <div class="input-group">
          <select class="form-select border-primary w-25" style="height: 60px">
            <option selected>--Select--</option>
            <option value="1">General Medicine</option>
            <option value="2">Orthopaedist</option>
            <option value="3">Neurologist</option>
          </select>
          <input type="text" class="form-control border-primary w-50" placeholder="Type here....." />
          <button class="btn btn-dark border-0 w-25">Search</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Search End -->

  <!-- Search Result Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 500px">
        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
          Services
        </h5>
        <h1 class="display-4">Excellent Medical Services</h1>
      </div>
      <div class="row g-5">
        <div class="col-lg-4 col-md-6">
          <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon mb-4">
              <i class="fa fa-2x fa-user-md text-white"></i>
            </div>
            <h4 class="mb-3">Emergency Care</h4>
            <p class="m-0">
              If you wanna a immediate medical attention for serious injuries
              or illnesses. Doctors and Nurses provide urgent care
            </p>
            <a class="btn btn-lg btn-primary rounded-pill" href="">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon mb-4">
              <i class="fa fa-2x fa-procedures text-white"></i>
            </div>
            <h4 class="mb-3">Patient Support</h4>
            <p class="m-0">
              To providing compassionate care, guidance, and resources to
              individuals facing health challenges.
            </p>
            <a class="btn btn-lg btn-primary rounded-pill" href="">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon mb-4">
              <i class="fa fa-2x fa-stethoscope text-white"></i>
            </div>
            <h4 class="mb-3">Outdoor Checkup</h4>
            <p class="m-0">
              The aim to improving Patient condition for stress reduction,
              physical activity, mental clarity and emotional balance .
            </p>
            <a class="btn btn-lg btn-primary rounded-pill" href="">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon mb-4">
              <i class="fa fa-2x fa-ambulance text-white"></i>
            </div>
            <h4 class="mb-3">Ambulance Service</h4>
            <p class="m-0">
              It rapid response to medical emergencies, delivering
              professional medical care and transportation . This timely
              assistance is often life-saving.
            </p>
            <a class="btn btn-lg btn-primary rounded-pill" href="">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon mb-4">
              <i class="fa fa-2x fa-pills text-white"></i>
            </div>
            <h4 class="mb-3">Medicine & Pharmacy</h4>
            <p class="m-0">
              Medicine and Pharmacy work in tandem to provide the best
              possible healthcare.
            </p>
            <a class="btn btn-lg btn-primary rounded-pill" href="">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon mb-4">
              <i class="fa fa-2x fa-microscope text-white"></i>
            </div>
            <h4 class="mb-3">Blood Testing</h4>
            <p class="m-0">
              Analyzes blood sample to assess various health markers, such as
              cholesterol levels, blood sugar, and the presence of specific
              diseases.
            </p>
            <a class="btn btn-lg btn-primary rounded-pill" href="">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Search Result End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light mt-5 py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
            Get In Touch
          </h4>
          <p class="mb-4">
            No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et
            et dolor sed dolor
          </p>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street,
            New York, USA
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope text-primary me-3"></i>info@example.com
          </p>
          <p class="mb-0">
            <i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890
          </p>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
            Quick Links
          </h4>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-light mb-2" href="home.php"><i class="fa fa-angle-right me-2"></i>Home</a>
            <a class="text-light mb-2" href="about.php"><i class="fa fa-angle-right me-2"></i>About Us</a>
            <a class="text-light mb-2" href="service.php"><i class="fa fa-angle-right me-2"></i>Our Services</a>
            <a class="text-light mb-2" href="team.php"><i class="fa fa-angle-right me-2"></i>Find a Doctor</a>
            <a class="text-light" href="contact.php"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
            Popular Services
          </h4>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-light mb-2" href="appointment.php"><i class="fa fa-angle-right me-2"></i>Booking Appointment</a>
            <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Laboratory Reports</a>
            <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Health Check-up packages</a>
            <a class="text-light mb-2" href="team.php"><i class="fa fa-angle-right me-2"></i> Our Doctors </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
            Newsletter
          </h4>
          <form action="">
            <div class="input-group">
              <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address" />
              <button class="btn btn-primary">Sign Up</button>
            </div>
          </form>
          <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
          <div class="d-flex">
            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
    <div class="container">
      <div class="row g-5">
        <div class="col-md-6 text-center text-md-start">
          <p class="mb-md-0">
            &copy; <a class="text-primary" href="#">Your Site Name</a>. All
            Rights Reserved.
          </p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <p class="mb-0">
            Designed by
            <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>