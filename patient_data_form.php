<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Patient's data collection form</title>

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Main CSS -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- Main CSS -->
        <link href="assets/css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Start Patient's data form section -->
        <section id="patient-data-form">
            <div class="container">
                <div class="row">

                    <!-- Start Form header -->
                    <div class="form-header">
                        <div class="col-xs-8 col-sm-8 col-md-10">
                            <h2 class="text-center">Patient's data collection form</h2>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-2">
                            <div class="pull-right">
                                <!-- For Ref. No -->
                                <form id="refNo" method="" action="">
                                    <label for="refNo">Ref. No:</label>
                                    <input type="text" name="refNo">
                                </form>
                                <!-- For Ref. No -->
                            </div>
                        </div>
                    </div>
                    <!-- End Form header -->

                    <!-- Start Form Body -->
                    <div class="col-md-12">
                        <div class="form-headings"><!--/ .form-headings -->
                            <form class="form-inline">
                                <h3>1. <span>Patient's information:</span></h3>

                                <div class="form-group">
                                    <label for="name" class="control-label">Name:</label>
                                    <input type="text" name="name" tabindex="1" class="form-control" required="required">
                                </div><!--/ name -->

                                <div class="form-group">
                                    <label for="age" class="control-label">Age:</label>
                                    <input type="text" name="age" tabindex="2" class="form-control" required="required">
                                    <label for="age" class="control-label">yrs</label>
                                </div><!--/ age -->

                                <div class="radio"><!-- male / female / others -->
                                    <label>
                                        <input type="radio" name="gender" value="male" checked>
                                        Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender"  value="female">
                                        Female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender"  value="others">
                                        Others
                                    </label>
                                </div><!-- male / female / others -->

                            <!--<div class="form-group">
                                    <label for="gender" class="control-label">Gender:</label>
                                    <select name="gender" tabindex="3" class="form-control" required="required">
                                        <option>-- Select a sex --</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div> male / female / others -->

                                <br><br>

                                <div class="form-group">
                                    <label for="contact_no" class="control-label">Contact No:</label>
                                    <input type="text" name="contact_no" tabindex="4" class="form-control" required="required">
                                </div><!--/ contact_no -->

                                <div class="form-group">
                                    <label for="mobile_no" class="control-label">Mobile No:</label>
                                    <input type="text" name="mobile_no" tabindex="5" class="form-control" required="required">
                                </div><!--/ mobile_no -->

                                <h3>2. <span>Background profiling:</span></h3>

                                <div class="form-group">
                                    <label for="body_height" class="control-label">Body index: Height:</label>
                                    <input type="text" name="body_height" tabindex="6" class="form-control" required="required">
                                    <label for="body_height" class="control-label">(in meter)</label>
                                </div><!--/ body_height -->

                                <div class="form-group">
                                    <label for="body_weight" class="control-label">Weight:</label>
                                    <input type="text" name="body_weight" tabindex="7" class="form-control" required="required">
                                    <label for="weight" class="control-label">(in Kg)</label>
                                </div><!--/ body_weight -->

                                <div class="form-group">
                                    <label for="bmi" class="control-label">BMI:</label>
                                    <input type="text" name="bmi" tabindex="8" class="form-control" required="required">
                                    <label for="bmi" class="control-label">(kg/m2)</label>
                                </div><!--/ bmi -->

                                <br><br>

                                <div class="form-group">
                                    <label for="hip" class="control-label">Circumferences: Hip:</label>
                                    <input type="text" name="hip" tabindex="9" class="form-control" required="required">
                                    <label for="hip" class="control-label">(in cm)</label>
                                </div><!--/ hip -->

                                <div class="form-group">
                                    <label for="waist" class="control-label">Waist:</label>
                                    <input type="text" name="waist" tabindex="10" class="form-control" required="required">
                                    <label for="waist" class="control-label">(in cm)</label>
                                </div><!--/ waist -->

                                <h3 class="form-sub-headings">Blood report:</h3>

                                <div class="form-group">
                                    <label for="systolic" class="control-label">Blood pressure: Systolic:</label>
                                    <input type="text" name="systolic" tabindex="11" class="form-control" required="required">
                                    <label for="systolic" class="control-label">(mm Hg)</label>
                                </div><!--/ systolic -->

                                <div class="form-group">
                                    <label for="diastolic" class="control-label">Diastolic:</label>
                                    <input type="text" name="diastolic" tabindex="12" class="form-control" required="required">
                                    <label for="Diastolic" class="control-label">(mm Hg)</label>
                                </div><!--/ diastolic -->

                                <br><br>

                                <div class="form-group">
                                    <label for="fbs" class="control-label">Blood sugar: FBS:</label>
                                    <input type="text" name="fbs" tabindex="13" class="form-control" required="required">
                                    <label for="fbs" class="control-label">(mmol/dl)</label>
                                </div><!--/ fbs -->

                                <div class="form-group">
                                    <label for="2habf" class="control-label">2HABF:</label>
                                    <input type="text" name="2habf" tabindex="14" class="form-control" required="required">
                                    <label for="2habf" class="control-label">(mmol/dl)</label>
                                </div><!--/ 2habf -->

                                <div class="form-group">
                                    <label for="hba1c" class="control-label">HbA1c (%):</label>
                                    <input type="text" name="hba1c" tabindex="15" class="form-control" required="required">
                                </div><!--/ 2habf -->

                            </form><!-- / form-tag -->
                        </div><!--/ .form-headings -->
                    </div><!--/ .col-md-12 -->
                    <!-- End Form Body -->
                </div><!--/ .row-->
            </div><!--/ .container-->
        </section>
        <!-- End Patient's data form section -->

        <!-- jQuery -->
        <script src="assets/libs/jQuery/jquery.min.js"></script>
        <!-- bootstrap jQuery plugins -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Include myScripts -->
        <script src="assets/js/myScripts/jQuery-script.js"></script>
    </body>
</html>