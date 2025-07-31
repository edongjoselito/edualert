<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduAlert - Empowering and Defending Underage learners through Active Logging of Events, Reports, and Threats</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        :root {
            --primary-color: #fff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #f3dede, #800000);
            min-height: 100vh;
            padding: 0;
            margin: 0;
        }

        .navbar {
            background-color: #800000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 40px;
        }

        .navbar-nav .nav-link {
            color: var(--primary-color);
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.btn:hover {
            color: #800000;
            background-color: var(--primary-color);
        }

        .nav-link.btn {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .carousel-container {
            max-width: 1100px;
            margin: 20px auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .carousel-inner img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .container-box {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 1100px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin: 40px auto;
        }

        .info-section {
            padding: 40px;
            flex: 1 1 100%;
            background: linear-gradient(135deg, #a94442, var(--primary-color));
            color: #fff;
        }

        .info-section h1 {
            font-weight: 600;
            font-size: 2.5rem;
        }

        .info-section p {
            font-size: 1.1rem;
            margin-top: 15px;
        }

        @media (max-width: 768px) {
            .container-box {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>assets/images/ead.png" width="100%" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary ms-2" href="log_in">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
  <div class="container my-5">
    <div class="bg-light p-5 rounded shadow-lg text-start">
        <h1 class="mb-4 text-maroon fw-bold">Welcome to <span class="text-dark">EduAlert v1.0</span></h1>
        <p class="lead text-muted">
            EduAlert is a <strong>School Incident Reporting System</strong> designed to empower students, faculty, and staff in reporting and tracking school-related incidents.
            The platform ensures a secure and confidential way to seek help and report incidents—either identified or anonymously.
        </p>

        <ul class="list-unstyled mt-4 mb-5">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Submit incident reports anytime, anywhere</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Option for anonymous submissions</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Track resolution and response</li>
            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Built for school safety and support</li>
        </ul>

        <div class="d-flex flex-wrap gap-3">
            <a href="<?= base_url('incident_report'); ?>" class="btn btn-success btn-lg px-4 shadow-sm">
                <i class="bi bi-flag-fill me-2"></i>Submit Incident Report
            </a>
            <a href="<?= base_url('help'); ?>" class="btn btn-warning btn-lg text-white px-4 shadow-sm">
                <i class="bi bi-life-preserver me-2"></i>Seek Help
            </a>
        </div>
    </div>
</div>

<style>
    .text-maroon {
        color: #800000;
    }
</style>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
