<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Advocatus - Lawyer & Attorney HTML Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" />
    
    <!-- Google Font -->
    <!--<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700&amp;display=swap" rel="stylesheet">-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;600&family=Lobster&family=Mukta&family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" />
    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/swiper/swiper.min.css" />
    <link rel="stylesheet" href="css/animate/animate.min.css"/>
    
    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/be-a-member.css">

    <title>Membership Registration</title>
</head>
    <body>
        <!--=================================
        header -->
        <?php include 'header.php';?>
        <!--=================================
        header -->


        <!-- Membership scroll section -->
        <section id="Membership-scroll-section">
            <div class="Membership-container">
                <div class="content-container">
                    <div class="image-container">
                        <img src="images\be-a-member\member-img.webp" alt="member-img">
                    </div>
                    <div class="Membership-head-container">
                        <h2 class="Membership-heading">
                            Membership Form
                        </h2>
                        <span class="Membership-date">(01 January to 31 December 2024)</span>
                        <p class="Membership-notes">Child (6-18) can enroll for Child Membership. Below Age 6 no membership form needed</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Membership form  -->

        <section id="Membership-form">
            <div class="container mt-5 mb-5">
                <div class="d-flex flex-column">
                    <h1 class="form-heading">Member Details</h1>
                </div>
                <div class="row">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="page">
                            
                            <div class="row-content">
                                <div>
                                    <label for="specified">Mr/Mrs</label>
                                    <select name="specified" id="specified">
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Prof.">Prof.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Mx">Mx</option>
                                        <option value="Miss">Miss</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="FirstName">First Name</label>
                                    <input type="text" placeholder="FirstName" id="FirstName"/>
                                </div>
                            </div>
    

                            <div class="row-content mt-4 mb-4">
                                <div>
                                    <label for="LastName">Last Name</label>
                                    <input type="text" placeholder="LastName" id="LastName"/>                    
                                </div>
                                <div>
                                    <label for="Email">Email</label>
                                    <input type="email" placeholder="Email" id="Email"/>
                                </div>
                            </div>


                            <div class="row-content mb-4">
                                <div>
                                    <label for="PhNo" >Phone</label>
                                    <input type="number" placeholder="Phno" id="PhNo"/>
                                </div>
                                <div>
                                    <label for="DOB">Date of Birth</label>
                                    <input type="date" placeholder="Phno" id="DOB"/>
                                </div>
                            </div> 


                            <div>
                                <h6>Membership Type (Annual membership fee)</h6>
                            </div>    


                            <div class="radio-content mb-4">
                                <div class="radio-1">
                                    <input type="radio" name="Membership Type" id="adult-radio" value="Adult (Above 16 age)"
                                    onclick="Onshowradio(1)"/>
                                    <label for="adult-radio">Adult 10$ Euros (Above 16 age)</label>
                                </div>
    
                                <div class="radio-2 ml-5">
                                    <input type="radio" name="Membership Type" id="student-radio" value="Student"
                                    onclick="Onhideradio(2)"/>
                                    <label for="student-radio">Student</label>
                                </div>
    
                                <!-- <div class="ml-5">
                                    <input type="radio" name="Membership Type" id="children" value="Children">
                                    <label for="children">Children</label>
                                </div> -->
                            </div>


                            <!-- overflow page -->

                            <!-- radio page For Adult -->
                            <div class="radio-container " id="radioContainer">
                                <!-- Radio page for Adult -->
                                <div class="radio-page-1" id="radio-page-1">
                                    <div class="profession mb-4">
                                        <label for="Profession-1">Profession-1</label> <br/>
                                        <input type="text" name="Profession-1" placeholder="Profession-1" id="Profession-1">
                                    </div>

                                    <div class="profession-head">
                                        <h6>Address</h6>
                                    </div>
    
                                    <div class="row-content mt-3 mb-4">
                                        <div>
                                            <label for="HouseNumber">House Number</label>
                                            <input type="text" placeholder="HouseNumber" id="HouseNumber"/>                    
                                        </div>
                                        <div class="mr-5 pr-4">
                                            <label for="StreetName">Street Name</label>
                                            <input type="text" placeholder="Street Name" id="StreetName"/>
                                        </div>
                                    </div>
    
                                    <div class="row-content">
                                        <div>
                                            <label for="PostalCode">PostalCode</label>
                                            <input type="text" placeholder="Postal Code" id="PostalCode"/>                    
                                        </div>
                                        <div>
                                            <label for="CityName">City Name</label>
                                            <input type="text" placeholder="CityName" id="CityName"/>
                                        </div>
                                    </div>
    
                                    <div class="paymentBtn mt-5">
                                        <button class="Btn">Next</button>
                                    </div>
                                </div>

                                <!-- Radio page For Student -->
                                <div class="radio-page-2" id="radio-page-2">  
                                    <div class="row-content mb-4">
                                        <div>
                                            <label for="FirstName">First Name</label>
                                            <input type="text" placeholder="FirstName" id="FirstName"/>
                                        </div>
                                        <div>
                                            <label for="specified">Student Type -1</label>
                                            <select name="specified" id="specified">
                                                <option value="Mr.">Please select Student Type</option>
                                                <option value="Mrs.">Bachelar</option>
                                                <option value="Dr.">Master</option>
                                                <option value="Prof.">PhD</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="upload-file mb-4">
                                        <label for="file">Please Upload your Student ID (Accepted file size below 1 mb and format is jpg, png, pdf) </label>
                                        <a>
                                            Choose File
                                            <input type="file" name="uploadFile" id="file">
                                        </a>
                                    </div>

                                    <div class="profession-head">
                                        <h6>Address</h6>
                                    </div>
    
                                    <div class="row-content mt-3 mb-4">
                                        <div>
                                            <label for="HouseNumber">House Number</label>
                                            <input type="text" placeholder="HouseNumber" id="HouseNumber"/>                    
                                        </div>
                                        <div class="mr-5 pr-4">
                                            <label for="StreetName">Street Name</label>
                                            <input type="text" placeholder="Street Name" id="StreetName"/>
                                        </div>
                                    </div>
    
                                    <div class="row-content">
                                        <div>
                                            <label for="PostalCode">PostalCode</label>
                                            <input type="text" placeholder="Postal Code" id="PostalCode"/>                    
                                        </div>
                                        <div>
                                            <label for="CityName">City Name</label>
                                            <input type="text" placeholder="CityName" id="CityName"/>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="paymentBtn mt-5">
                                        <button class="Btn">Next</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>







        <!--=================================
        footer-->
        <?php include 'footer.php';?>
        <!--=================================
        footer-->

        <a href="#"><div id="back-to-top" class="back-to-top"><i class="fas fa-angle-up"></i> </div></a>

        <!--=================================
        Java-script -->
    
        <!-- JS Global Compulsory (Do not remove)-->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper/popper.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>

        <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
        <script src="js/jquery.appear.js"></script>
        <script src="js/counter/jquery.countTo.js"></script>
        <script src="js/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jarallax/jarallax.min.js"></script>
        <script src="js/swiper/swiper.min.js"></script>
        <script src="js/swiperanimation/SwiperAnimation.min.js"></script>
        <script src="js/shuffle/shuffle.min.js"></script>
        <script src="js/apexcharts/apexcharts.min.js"></script>
        <script src="js/apexcharts/charts.js"></script>

        <!-- Template Scripts (Do not remove)-->
        <script src="js/custom.js"></script>
        <script src="js/ListofDoctors.js"></script>
        <script src="js/be-a-member.js"></script>
        <script src="https://kit.fontawesome.com/623960086f.js" crossorigin="anonymous"></script>
    </body>
</html>