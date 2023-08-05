<?php
session_start();
include('Config/DB.php');
include('Config/connection.php');

sessionvalidation();

submissioncheck($con);

// $emcheck = $_SESSION['Email'];

// $sql2 = mysqli_query($con, "SELECT adminlog.TypeID, studlog.TypeID FROM  studlog  INNER JOIN  adminlog  
//                             ON  studlog.StudLog_Email = adminlog.Email  WHERE adminlog.Email = '$emcheck' 
//                              OR studlog.StudLog_Email = '$emcheck';"); 
//
// if($sql2 = 1) {
//   header("Location: pages-login.php");
// } 

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
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

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
                <h5 class="card-title">Students<span>| This Year</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php usernum($con); ?>
                    </h6>
                    <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->



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
                <h5 class="card-title">Student Record Status<span>| Today</span></h5>
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Student</th>
                      <th scope="col">Form</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    submissiontable($con);
                    ?>
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Generate Report</h5>
              <p class="card-text">Click the Button to Generate Report</p>
              <p class="card-text"><a href="report.php" class="btn btn-primary">Button</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

      </div><!-- End Right side columns -->

    </div>
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