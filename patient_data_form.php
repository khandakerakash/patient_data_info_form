<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Patient's data collection form</title>

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Animate -->
        <link href="assets/css/animate.min.css" rel="stylesheet">

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

        <!-- Preloader Start-->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!--Preloader End-->

        <!-- Start Patient's data form section -->
        <header id="patient-data-form">
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

                </div>
            </div>
        </header>

        <!-- End Patient's data form-body section -->
        <section id="form-body" >
            <div class="container">
                <div class="row">
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

                                <br><br>

                                <div class="form-group">
                                    <label for="tg" class="control-label">Lipid profile: TG:</label>
                                    <input type="text" name="tg" tabindex="16" class="form-control" required="required">
                                    <label for="tg" class="control-label">(mg/dl)</label>
                                </div><!--/ tg -->

                                <div class="form-group">
                                    <label for="cholesterole" class="control-label">T.Cholesterole:</label>
                                    <input type="text" name="cholesterole" tabindex="17" class="form-control" required="required">
                                    <label for="cholesterole" class="control-label">(mg/dl)</label>
                                </div><!--/ cholesterole -->

                                <br><br>

                                <div class="form-group">
                                    <label for="hdl" class="control-label">HDL:</label>
                                    <input type="text" name="hdl" tabindex="18" class="form-control" required="required">
                                    <label for="hdl" class="control-label">(mg/dl)</label>
                                </div><!--/ hdl -->

                                <div class="form-group">
                                    <label for="ldl" class="control-label">LDL:</label>
                                    <input type="text" name="ldl" tabindex="19" class="form-control" required="required">
                                    <label for="ldl" class="control-label">(mg/dl)</label>
                                </div><!--/ hdl -->

                                <div class="form-group">
                                    <label for="serum_creatinine" class="control-label">Serum Creatinine:</label>
                                    <input type="text" name="serum_creatinine" tabindex="20" class="form-control" required="required">
                                    <label for="serum_creatinine" class="control-label">(mg/dl)</label>
                                </div><!--/ serum_creatinine -->

                                <h3>3. <span>Personal history:</span></h3>

                                <div class="form-group">
                                    <label for="education" class="control-label">Level of Education:</label>
                                    <select name="education" class="form-control" tabindex="21" required="required">
                                        <option>Select Education</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <label for="education" class="control-label">if yes,</label>
                                </div><!--/ education -->

                                <div class="form-group only-bottom">
                                    <input type="text" name="education_title" tabindex="22" class="form-control" required="required">
                                </div><!--/ education_title -->

                                <br><br>

                                <div class="form-group">
                                    <label for="socio_economic" class="control-label">Socio-economic status:</label>
                                    <select name="socio_economic" class="form-control" tabindex="23" required="required">
                                        <option>Select Socio Economic Status</option>
                                        <option value="low">Low</option>
                                        <option value="medium">Medium</option>
                                        <option value="high">High</option>
                                    </select>
                                </div><!--/ socio_economic -->

                                <h3 class="form-sub-headings">Food Intake:</h3>

                                <div class="form-group">
                                    <label for="carbohydrate" class="control-label">Carbohydrate:</label>
                                    <select name="carbohydrate" class="form-control" tabindex="24" required="required">
                                        <option>Select Carbohydrate Course </option>
                                        <option value="1">1 Time</option>
                                        <option value="2">2 Times</option>
                                        <option value="3">3 Times</option>
                                    </select>
                                    <label for="carbohydrate" class="control-label">Per Day</label>
                                </div><!--/ carbohydrate -->

                                <div class="form-group">
                                    <label for="protein" class="control-label">Protein:</label>
                                    <select name="protein" class="form-control" tabindex="25" required="required">
                                        <option>Select Protein Course</option>
                                        <option value="1">1 Time</option>
                                        <option value="2">2 Times</option>
                                        <option value="3">3 Times</option>
                                    </select>
                                    <label for="protein" class="control-label">Per Day</label>
                                </div><!--/ protein  -->

                                <br><br>

                                <div class="form-group">
                                    <label for="fats" class="control-label">Fats:</label>
                                    <select name="fats" class="form-control" tabindex="26">
                                        <option>Select Fats</option>
                                        <option value="1">Saturated</option>
                                        <option value="2">Unsaturated</option>
                                    </select>
                                </div><!--/ fats  -->

                                <div class="form-group">
                                    <label for="fats_or" class="control-label">Or</label>
                                    <select name="fats_or" class="form-control" tabindex="27">
                                        <option>Select Fats</option>
                                        <option value="1">Animal</option>
                                        <option value="2">Plant Source</option>
                                    </select>
                                </div><!--/ fats_or  -->

                                <div class="form-group">
                                    <label for="fruits_vegetables" class="control-label">Fruits and Vegetables</label>
                                    <select name="fruits_vegetables" class="form-control" tabindex="28" required="required">
                                        <option>Select Fruits / Vegetables</option>
                                        <option value="1">1 Time</option>
                                        <option value="2">2 Times</option>
                                        <option value="3">3 Times</option>
                                    </select>
                                    <label for="fruits_vegetables" class="control-label">Per Day</label>
                                </div><!--/ fruits_vegetables  -->

                                <h3 class="form-sub-headings">Others:</h3>

                                <div class="form-group">
                                    <label for="smoking" class="control-label">Smoking:</label>
                                    <select name="smoking" class="form-control" tabindex="29">
                                        <option>Select Smoke Status</option>
                                        <option value="yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <label for="smoking" class="control-label">if yes, then</label>
                                </div><!--/ smoking  -->

                                <div class="form-group">
                                    <input type="text" name="if_smoking_then" class="form-control" tabindex="30">
                                    <label for="if_smoking_then" class="control-label">sticks per day or</label>
                                </div><!--/ if_smoking_then  -->

                                <div class="form-group only-bottom">
                                    <input type="text" name="if_smoking_then_or" class="form-control" tabindex="31">
                                </div><!--/ if_smoking_then_or  -->

                                <br><br>

                                <div class="form-group">
                                    <label for="alcohol" class="control-label">Alcohol:</label>
                                    <select name="alcohol" class="form-control" tabindex="32">
                                        <option>Select Alcohol Status</option>
                                        <option value="yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <label for="alcohol" class="control-label">if yes, then</label>
                                </div><!--/ alcohol  -->

                                <div class="form-group only-bottom">
                                    <input type="text" name="if_alcohol_then" class="form-control" tabindex="34">
                                </div><!--/ if_alcohol_then  -->

                                <br><br>

                                <div class="form-group">
                                    <label for="any_other" class="control-label">Any other:</label>
                                    <select name="any_other" class="form-control" tabindex="35">
                                        <option>Select other bad habits</option>
                                        <option value="betal_nuts">Betal nuts</option>
                                        <option value="jarda">Jarda</option>
                                    </select>
                                </div><!--/ any_other  -->

                                <div class="form-group only-bottom">
                                    <label for="other_addictive" class="control-label">Other addictive substances</label>
                                    <input type="text" name="other_addictive" class="form-control" tabindex="36">
                                </div><!--/ other_addictive  -->

                                <h3>4. <span>Present and Past Medical History:</span></h3>

                                <div class="form-group only-bottom">
                                    <label for="complications_diagnosed" class="control-label">Any other complications / diagnosed diseases:</label>
                                    <input type="text" name="complications_diagnosed " class="form-control" tabindex="37">
                                </div><!--/ complications_diagnosed  -->

                                <br><br>

                                <div class="form-group only-bottom">
                                    <label for="major_surgical" class="control-label">Previously performed major surgical procedures:</label>
                                    <input type="text" name="major_surgical" class="form-control" tabindex="38">
                                </div><!--/ major_surgical  -->

                                <h3>5. <span>Family History:</span></h3>

                                <div class="form-group only-bottom">
                                    <label for="any_other_family_suffering" class="control-label">
                                        If any other member of your family are suffering from similar consequences of diseases:
                                    </label>
                                    <input name="any_other_family_suffering" class="form-control" tabindex="39">
                                </div><!--/ any_other_family_suffering  -->

                                <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <button type="button" class="btn btn-primary btn-lg center-block">Save The Information</button>
                                </div>

                            </form><!-- / form-tag -->

                        </div><!--/ .form-headings -->
                    </div><!--/ .col-md-12 -->
                    <!-- End Form Body -->
                </div><!--/ .row-->
            </div><!--/ .container-->
        </section>
        <!-- End Patient's data form-body section -->

        <!-- Start Footer -->
        <footer id="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Copyright &copy; 2016 XYZ. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Scroll Up -->
        <a href="#0" class="cd-top">Top</a>
        <!-- Scroll Up -->

        <!-- jQuery -->
        <script src="assets/libs/jQuery/jquery.min.js"></script>
        <!-- bootstrap jQuery plugins -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Include myScripts -->
        <script src="assets/js/myScripts/jQuery-script.js"></script>
        <!-- Include scorl-up-script -->
        <script src="assets/js/scorl-up-script.js"></script>

    </body>
</html>