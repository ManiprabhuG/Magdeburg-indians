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
    <link rel="stylesheet" href="css/family.css">

    <title>Family</title>
</head>
    <body>
        <!--=================================
        header -->
        <?php include 'header.php';?>
        <!--=================================
        header -->


        <!-- Family scroll image section -->
        <section id="family-session">
            <div class="container-fluid mb-5">
                <div class="family-container" style="background-image: url(images/family/image-6.png);">
                    <div class="family-scroll-content">
                        <h2 class="family-scroll-heading">
                            Family (Events & Parenting Resources)
                        </h2>
                        <div class="family-scroll-icons-container">
                            <a href="#family-tabs-sections"><i class="fa-solid fa-arrow-down-long fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Family tab Events & Parenting -->
        <section id="family-tabs-sections">
            <div class="family-content mt-5 mb-5">
                <div class="tab container">
                    <button class="tablinks btn text-white" onclick="opencourse(event, 'University')" id="defaultOpen">
                        Events
                    </button>
                    <button class="tablinks btn text-white" onclick="opencourse(event, 'loremipsum')">
                        Parenting Resources
                    </button>
    
                </div>
    
    
                <div id="University" class="tabcontent container">
                    <a href="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati soluta sit, 
                        molestiae voluptatum fugiat error amet cum consequatur, iusto reiciendis
                        nesciunt optio consectetur iste dolores, tempora dolore quisquam minus deserunt.
                    </a>

                    <!-- <div>

                        <div class="events-bring mb-5">
                            
                            <div class="title-text-content">
                                <h6>Events Title</h6>
                                <p>Date: <span>24-07-2024</span></p>
                                <p>Location: <span>#########</span></p>
                            </div>

                            <div class="img-container">
                                <img src="images/events/2024/Event24.jpg"
                                />
                            </div>
                        </div>
    

                        <div class="about-title mb-5">
                            <h6>About Title</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Modi perferendis tenetur dicta ipsa laborum, a et cupiditate eligendi. 
                                Labore perferendis voluptates soluta natus ullam eum voluptatum vitae 
                                blanditiis ipsum sit.</p>
                        </div>
    
                        <h4>Upcoming Events</h4>
    
                        <div class="events-bring mt-4 mb-5">
                            <div class="title-text-content">
                                <h6>Events Title</h6>
                                <p>Date: <span>24-07-2024</span></p>
                                <p>Location: <span>#########</span></p>
                            </div>
    
                            <div class="img-container">
                                <img src="images/events/2024/Event24.jpg"
                                />
                            </div>
                        </div>
    
                        <h4>Event Registration</h4>

                        <form action="" class="d-flex flex-column mt-4" id="form-container">
                            <label for="username">FirstName</label>
                            <input type="text" name="FirstName" placeholder="Firstname" id="username">
    
                            <label for="userlastname">LastName</label>
                            <input type="text" name="LastName" placeholder="Lastname" id="userlastname">

                            <div class="d-flex flex-column">
                                <h6 class="mt-3 mb-3">Plan Subscription:</h6>
                                <label for="Generalpack">General Pack</label>
                                <input type="checkbox" id="Generalpack">
                            </div>

                            <span>Notes: "Admission is $10 per person. Children under 5 are free.
                                 Family packages available!"</span>
                        </form>
                    </div> -->
                </div>
    
                <div id="loremipsum" class="tabcontent container">
                    <a href="">
                        www.young-germany.de/topic/live/family-friends/parenting-in-germany-an-introduction
                    </a>
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
        <script src="https://kit.fontawesome.com/623960086f.js" crossorigin="anonymous"></script>
    </body>
</html>