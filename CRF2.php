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

    <form class="row g-3" action="#" method="POST">
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">II. Health and Physical Development</h5>
                        <div class="col-sm-10"" style=" width: 100%; padding-left: 20%;">
                            <select class=" form-select" aria-label="Default select example" style="width: 70%;" name="gLevel" action=>
                                <option selected>Select Your Grade Level</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                        <div class="col-md-12" style="padding-top: 1%;">
                            <div class="form-floating" style="width: 49%; display: block; float: left;">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="height">
                                <label for="floatingName">Height</label>
                            </div>
                            <div class="form-floating" style="margin-left: 1.3%; width: 49%; display: block; float: left;">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="weight">
                                <label for="floatingName">Weight</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <h6 style="margin-top: 1%;">Do you have any problems with your:</h6>
                            <div class="col-sm-10">

                                <div class="form-check" style="display: block; float: left;">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" value="Sight">
                                    <label class="form-check-label" for="gridCheck1" name="genhealth">
                                        Sight
                                    </label>
                                </div>

                                <div class="form-check" style="padding-left: 7%; display: block; float: left;">
                                    <input class="form-check-input" type="checkbox" id="gridCheck2" name="genhealth" value="Hearing">
                                    <label class="form-check-label" for="gridCheck2">
                                        Hearing
                                    </label>
                                </div>
                                <div class="form-check" style="padding-left: 7%; display: block; float: left;">
                                    <input class="form-check-input" type="checkbox" id="gridCheck3" name="genhealth" value="General Health">
                                    <label class="form-check-label" for="gridCheck3">
                                        General Health
                                    </label>
                                </div>

                            </div>
                            <h6 style="margin-top: 1%;">Have you experienced any serious sickness or accident in the past?</h6>
                            <span class="form-floating">
                                <div class="form-check" style="display: block; float: left">
                                    <input class="form-check-input" type="radio" name="pastCondition" id="SA1" value="Yes" onchange="SARadio()">
                                    <label class="form-check-label" for="gridRadios1">
                                        Yes
                                    </label>
                                </div>
                                <div class="row mb-3" style="padding-left: 1%;display: block; float: left;">
                                    <div class=" col-sm-10" id="SATarget">
                                    </div>
                                </div>
                                <div class="form-check" style="padding-left: 7%; display: block; float: left;">
                                    <input class="form-check-input" type="radio" name="pastCondition" id="SA2" value="No" onchange="SARadio()">
                                    <label class="form-check-label" for="gridRadios2">
                                        No
                                    </label>
                                </div>
                            </span>
                            <h6 style="margin-top: 1%;">Any Handicap/Allergy/Ailment?</h6>
                            <span class="form-floating">
                                <div class="form-check" style="display: block; float: left">
                                    <input class="form-check-input" type="radio" name="ailment" id="HAA1" value="Yes" onchange="HAARadio()">
                                    <label class="form-check-label" for="gridRadios1">
                                        Yes
                                    </label>
                                </div>
                                <div class="row mb-3" style="padding-left: 1%;display: block; float: left;">
                                    <div class=" col-sm-10" id="HAATarget">
                                    </div>
                                </div>
                                <div class="form-check" style="padding-left: 7%; display: block; float: left;">
                                    <input class="form-check-input" type="radio" name="ailment" id="HAA2" value="No" onchange="HAARadio()">
                                    <label class="form-check-label" for="gridRadios2">
                                        No
                                    </label>
                                </div>
                            </span>
                            <h5 class="card-title">III. Residence</h5>
                            <h6 style="margin-top: 1%;">Current Residence?</h6>
                            <span class="form-floating">
                                <div class="form-check" style="display: block; float: left">
                                    <input class="form-check-input" type="radio" name="residence" id="Other" value="Family Home" onchange="RSpec(); RHStat();">
                                    <label class="form-check-lab">
                                        <label class="form-check-label" for="gridRadios1">
                                            Family Home
                                        </label>
                                </div>
                                <div class="form-check" style="display: block; float: left; padding-left: 7%;">
                                    <input class="form-check-input" type="radio" name="residence" id="Other" value="Guardian's Home" onchange="RSpec(); RHStat();">
                                    <label class="form-check-lab">
                                        <label class="form-check-label" for="gridRadios1">
                                            Guardian's Home
                                        </label>
                                </div>
                                <div class="form-check" style="display: block; float: left; padding-left: 7%;">
                                    <input class="form-check-input" type="radio" name="residence" id="Ex1" value="School Dormitory" onchange="RSpec(); RHStat();">
                                    <label class="form-check-label" for="gridRadios1">
                                        School Dormitory
                                    </label>
                                </div>
                                <div class="form-check" style="padding-left: 7%; display: block; float: left; padding-left: 7%;">
                                    <input class="form-check-input" type="radio" name="residence" id="Rspec" value="Others" onchange="RSpec(); RHStat();">
                                    <label class="form-check-lab">
                                        <label class="form-check-label" for="gridRadios2">
                                            Others
                                        </label>
                                </div>
                                <div class="row mb-3" style="padding-left: 1%;display: block; float: left;">
                                    <div class=" col-sm-10" id="RTarget">
                                    </div>
                                </div>
                            </span>
                            <div class="row mb-3" style="padding-left: 1%;display: block; float: left;">
                                <div class=" col-sm-10" id="RHTarget" style="display: none;">
                                    <h6 style="margin-top: 1%;">Mode of Transportation:</h6>
                                    <div class="col-sm-10">

                                        <div class="form-check" style="display: block; float: left;">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="transportation" value="Public Transportation">
                                            <label class="form-check-label" for="gridCheck1">
                                                Public Transportation
                                            </label>
                                        </div>

                                        <div class="form-check" style="padding-left: 7%; display: block; float: left;">
                                            <input class="form-check-input" type="checkbox" id="gridCheck2" name="transportation" value="Family-Owned Vehicle">
                                            <label class="form-check-label" for="gridCheck2">
                                                Family-Owned Vehicle
                                            </label>
                                        </div>
                                        <div class="form-check" style="padding-left: 7%; display: block; float: left;">
                                            <input class="form-check-input" type="checkbox" id="gridCheck3" name="transportation" value="Car-pool">
                                            <label class="form-check-label" for="gridCheck3">
                                                Car-pool
                                            </label>
                                        </div>
                                        <div class="form-check" style="padding-left: 7%; display: block; float: left;">
                                            <input class="form-check-input" type="checkbox" id="gridCheck4" name="transportation" value="Service">
                                            <label class="form-check-label" for="gridCheck4">
                                                Service
                                            </label>
                                        </div>
                                        <div class="form-check" style="padding-left: 7%; display: block; float: left;">
                                            <input class="form-check-input" type="checkbox" id="gridCheck5" name="transportation" value="Other">
                                            <label class="form-check-label" for="gridCheck5">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="submit" style="margin-top: 1%;">Submit</button>
                            </div>

    </form><!-- End floating Labels Form -->
    </div>
    </div>

    </section>

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script type="text/javascript">
    function SARadio() {
        if (SA1.checked) {
            SATarget.innerHTML = "<input type='text' class='form-control' style='display: block; float: left;' placeholder='Specify' name='pastCondition'>";
        } else if (SA2.checked) {
            SATarget.innerHTML = "";
        }
    }

    function HAARadio() {
        if (HAA1.checked) {
            HAATarget.innerHTML = "<input type='text' class='form-control' style='display: block; float: left;' placeholder='Specify' name='ailment'>";
        } else if (HAA2.checked) {
            HAATarget.innerHTML = "";
        }
    }

    function RSpec() {
        if (Rspec.checked) {
            RTarget.innerHTML = "<input type='text' class='form-control' style='display: block; float: left; box-sizing: border-box; margin: 0' placeholder='Specify' name='residence'>";
        } else {
            RTarget.innerHTML = "";
        }
    }

    function RHStat() {
        if (!Ex1.checked) {
            RHTarget.style.display = "block";
        } else {
            RHTarget.style.display = "none";
        }
    }
</script>
<script <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
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