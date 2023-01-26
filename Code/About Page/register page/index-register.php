<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registeration form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading">
                            <h2 class="title">Registration Form</h2>
                        </div>
                        <div class="card-body">
                            <form action="connect.php" method="POST" id="registrationForm">
                                <div class="form-row">
                                    <div class="name">Name</div>
                                    <div class="value">
                                        <input class="input--style-5" type="text" name="Fname" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Phone</div>
                                    <div class="value">
                                        <input class="input--style-5" type="text" name="Phone" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Sex</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="Sex" required>
                                                    <option disabled="disabled" selected="selected">Choose option</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Age in years</div>
                                    <div class="value">
                                        <input class="input--style-5" type="number" name="Age" required>
                                    </div>
                                </div>
                    <div class="form-row">
                                    <div class="name">Height in inches</div>
                                    <div class="value">
                                        <input class="input--style-5" type="number" name="Height" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Lunch preferences</div>
                                    <div class="value">  
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="RR_Count" required>
                                                    <option disabled="disabled" selected="selected">Choose option</option>
                                                    <option value="1">2 Roti+ Rice</option>
                                                    <option value="2">3 Roti</option>
                                                    <option value="3">Only Rice (no roti)</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Veg/Non-Veg</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="v_nv" required>
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                    <option value="1">Veg</option>
                                                    <option value="2">Non-Veg</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="name">Allergies</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="allergies[]" multiple class="exclude-from-validation">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option value="0">No specific condition</option>
                                                <option value="1">Lactose Intolerance</option>
                                                <option value="2">Gluten Intolerance</option>
                                                <option value="3">Diabeties</option>
                                                <option value="4">Heart Disease</option>
                                                <option value="5">Peanuts</option>
                                                <option value="6">Tree Nuts</option>
                                                <option value="7">Milk</option>
                                                <option value="8">Eggs</option>
                                                <option value="9">Wheat</option>
                                                <option value="10">Soy</option>
                                                <option value="11">Fish</option>
                                                <option value="12">Shellfish</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="form-row">
                                    <div class="name"></div>
                                    <div class="value">
                                        <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
                                    </div>
                                                        
                                                
                                                
                             </div>      
                      </form>
                </div>
          </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>
</html>