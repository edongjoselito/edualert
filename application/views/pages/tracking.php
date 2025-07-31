<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Track Incident Report | EduAlert</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #800000, #b22222);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
    }

    .tracking-card {
      background: #fff;
      color: #333;
      border-radius: 15px;
      padding: 40px;
      max-width: 500px;
      width: 100%;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .tracking-card h2 {
      font-weight: 600;
      margin-bottom: 20px;
      color: #800000;
    }

    .form-control:focus {
      border-color: #800000;
      box-shadow: 0 0 0 0.2rem rgba(128, 0, 0, 0.25);
    }

    .btn-track {
      background-color: #800000;
      color: #fff;
      border: none;
      padding: 12px 20px;
      font-weight: 500;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    .btn-track:hover {
      background-color: #a00000;
    }

    .back-link {
      display: inline-block;
      margin-top: 20px;
      font-size: 0.9rem;
      color: #800000;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="tracking-card text-center">
    <h2><i class="bi bi-search"></i> Track Incident Report</h2>
    <p class="mb-4">Enter your tracking number to view the status of your report.</p>
    <form action="<?= base_url('track_result'); ?>" method="post">
      <input type="text" name="tracking_no" class="form-control mb-3" placeholder="Enter Tracking Number" required>
      <button type="submit" class="btn btn-track w-100"><i class="bi bi-arrow-right-circle me-1"></i>Track</button>
    </form>
    <a href="<?= base_url(); ?>" class="back-link"><i class="bi bi-arrow-left"></i> Back to Home</a>
  </div>

</body>
</html>
