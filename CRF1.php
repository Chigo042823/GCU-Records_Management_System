<?php

include 'header.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Cumulative Record Form</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">I. </br> A. Personal Informaton</h5>

                    <!-- Floating Labels Form -->
                    <form class="row g-3" action="#" method="POST">
                        <div class="col-md-12">
                            <div class="form-floating" style="width: 33%; display: block; float: left;">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="Lname">
                                <label for="floatingName">Last Name</label>
                            </div>
                            <div class="form-floating" style="margin-left: 1.3%; width: 32.3%; display: block; float: left;">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="Fname">
                                <label for="floatingName">First Name</label>
                            </div>
                            <div class="form-floating" style="margin-left: 1.3%; width: 32%; display: block; float: left;">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="Mname">
                                <label for="floatingName">Middle Name</label>
                            </div>
                        </div>
                        <div class="col-sm-10" style="display: block; float: left;">
                            <div class="form-floating" style="width: 50%; display: inline; float: left;">
                                <input type="tel" class="form-control" id="floatingName" placeholder="Your Name" name="phone" maxlength="11">
                                <label for="floatingName">Contact No.</label>
                            </div>
                            <span class="form-floating" style="margin-left: 1.3%; float: left">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="gridRadios1" value="Male">
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="gridRadios2" value="Female">
                                    <label class="form-check-label" for="gridRadios2">
                                        Female
                                    </label>
                                </div>
                            </span>
                        </div>
                        <div class="col-sm-10"" style=" width: 60%;">
                            <select class=" form-select" aria-label="Default select example" style="width: 168%;" name="religion">
                                <option selected>Select Your Religion</option>
                                <option>Islam</option>
                                <option>Iglesia Ni Cristo</option>
                                <option>Born Again Christian</option>
                                <option>N/A</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" name="address"></textarea>
                                <label for="floatingTextarea">Address</label>
                            </div>
                        </div>
                        <div class="row mb-3" style="margin-top: 1.5%;">
                            <div class="col-sm-10" style="width: 36%; ">
                                <input type="date" class="form-control" name="birthday">
                                <label for="floatingName" style="margin-left: 9.5vw;">Birthday</label>
                            </div>
                            <div class="form-floating" style="width: 30%; display: block; float: left;">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="PlaceofBirth">
                                <label for="floatingName" style="margin-left: 2.5%">Place of Birth</label>
                            </div>
                            <div class="form-floating" style="width: 30%; display: block; float: left;">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="nationality">
                                <label for="floatingName" style="margin-left: 2.5%">Nationality</label>
                            </div>
                        </div>
                        <h5 class="card-title">B. Family Background</h5>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form><!-- End floating Labels Form -->
                </div>
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