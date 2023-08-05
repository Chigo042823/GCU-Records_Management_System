<?php
session_start();
include('Config/DB.php');
include('Config/connection.php');
if (!isset($_SESSION['email'])) {
  header("Location: pages-login.php");
}
include 'header.php';
?>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <!-- Recent Sales -->
    <div class="col-12">
      <div class="card recent-sales overflow-auto">

        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Guidance Counseling Forms Status<span>| Today</span></h5>

          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">Form</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#" class="text-primary">Cumulative Record Form</a></td>
                <td><span class="badge bg-success">Submitted</span></td>
              </tr>
              <tr>
                <td><a href="#" class="text-primary">LCDP</a></td>
                <td><span class="badge bg-warning">Pending</span></td>
              </tr>
              <tr>
                <td><a href="#" class="text-primary">Client Monitoring Form</a></td>
                <td><span class="badge bg-danger">Rejected</span></td>
              </tr>
            </tbody>
          </table>

        </div>

      </div>
    </div><!-- End Recent Sales -->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cumulative Record Form</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <p class="card-text"><a href="CRF1.php" class="btn btn-primary">Button</a></p>
      </div>
    </div><!-- End Card with titles, buttons, and links -->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cumulative Record Form</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <p class="card-text"><a href="CRF1.php" class="btn btn-primary">Button</a></p>
      </div>
    </div><!-- End Card with titles, buttons, and links -->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cumulative Record Form</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <p class="card-text"><a href="CRF1.php" class="btn btn-primary">Button</a></p>
      </div>
    </div><!-- End Card with titles, buttons, and links -->
  </section>

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<?php include 'footer.php' ?>
</body>

</html>