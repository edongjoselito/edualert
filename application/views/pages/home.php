<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduAlert - Empowering and Defending Underage learners through Active Logging of Events, Reports, and Threats</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    :root {
      --primary-color: #800000;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .navbar {
  background-color: #fff;
}

.navbar .nav-link,
.navbar .navbar-brand {
  color: #800000 !important;
}

.navbar .nav-link.btn {
  border-color: #800000;
  color: #800000 !important;
}


    .hero-section {
      background-color: var(--primary-color);
      color: #fff;
      padding: 60px 0;
    }

    .hero-section .left {
      padding: 0 40px;
    }

    .hero-section h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .hero-section p {
      font-size: 1.1rem;
      margin-top: 20px;
      color: #f0f0f0;
    }

    .hero-section .btn {
      font-size: 1rem;
      padding: 12px 30px;
    }

    .hero-section .btn-outline-light {
      color: #fff;
      border-color: #fff;
    }

    .hero-section .btn-light {
      background-color: #fff;
      color: var(--primary-color);
    }

    .feature-icons {
      background-color: #fff;
      padding: 40px 20px;
      text-align: center;
    }

    .feature-icons i {
      font-size: 2rem;
      color: var(--primary-color);
    }

    .feature-icons p {
      margin-top: 10px;
    }

    @media (max-width: 768px) {
      .hero-section {
        text-align: center;
      }
      .hero-section .left,
      .hero-section .right {
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url(); ?>assets/images/drkedu.png" alt="Logo" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          <li class="nav-item"><a class="nav-link btn btn-outline-light ms-2" href="log_in">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 left">
          <h1>Welcome to EduAlert</h1>
          <p>EduAlert is a School Incident Reporting System designed to empower students, faculty, and staff in reporting and tracking school-related incidents securely—identified or anonymously.</p>
          <div class="mt-4 d-flex gap-3 flex-wrap">
            <a href="<?= base_url('incident_report'); ?>" class="btn btn-light">
              <i class="bi bi-flag-fill me-2"></i>Submit Incident Report
            </a>
            <a href="<?= base_url('help'); ?>" class="btn btn-outline-light">
              <i class="bi bi-life-preserver me-2"></i>Seek Help
            </a>
          </div>
        </div>
        <div class="col-lg-6 right">
          <img src="<?= base_url(); ?>assets/images/wel.png" alt="Students working" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>

  <!-- Features -->
  <div class="feature-icons">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-3">
          <i class="bi bi-person-check"></i>
          <p>Empowers students and staff</p>
        </div>
        <div class="col-md-3">
          <i class="bi bi-shield-lock"></i>
          <p>Anonymous and secure reports</p>
        </div>
        <div class="col-md-3">
          <i class="bi bi-graph-up"></i>
          <p>Real-time response tracking</p>
        </div>
        <div class="col-md-3">
          <i class="bi bi-headset"></i>
          <p>Dedicated support team</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
