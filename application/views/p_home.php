<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>YSC | Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.min.css" ?>" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url()."assets/css/freelancer.min.css"?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()."assets/vendor/font-awesome/css/font-awesome.min.css" ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">YSC project 2016</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#login">Login</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#info">Info</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <img class="img-responsive" src="<?php echo base_url()."assets/img/medical.jpg" ?>" alt=""> -->
                    <div class="intro-text">
                        <span class="name">YSC</span>
                        <hr class="star-light">
                        <span class="skills">Make your medcheck time more effective</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>
                      YSC app is an application to help user in managing appointment between user and doctor.
                      With this application, time that we used to wait in the doctor, can be use for another importance things.
                      The hospitals and doctors can use this application to lighten the job of doctor’s assistance,
                      so they don’t have to be busy to call the patient because the application can call the patient automatically
                      and it can overcome if the patient are late or cancel the appointment.
                    </p>
                </div>
                <div class="col-lg-4">
                  <p>
                    This application can taught Indonesian people to be more on time and keep their promise,
                    because we think Indonesian people’s ability to be on time is very low and it’s very damaged for the people who queue after them.
                  </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Section -->
    <section  class="success" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Login</h2>
                    <hr class="star-light">
                    <a href="<?php echo base_url()."index.php/auth" ?>" class="btn btn-lg btn-outline">
                        Login
                    </a>
                    <br>
                    <br>
                    <h5>-OR-</h5>
                    <a href="<?php echo base_url()."index.php/auth/register_patient" ?>" class="btn btn-lg btn-outline">
                        Sign Up as a Patient
                    </a>
                    <a href="<?php echo base_url()."index.php/auth/register_doctor" ?>" class="btn btn-lg btn-outline">
                        Sign Up as a Doctor
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center" id="info">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Ciwaruga
                            <br>Parongpong, Bandung Barat</p>
                    </div>
                    <div class="footer-col col-md-4">

                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About YSC</h3>
                        <p>YSC app is an application to help user in managing appointment between user and doctor. Its make your medcheck time more effective</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; YSC App 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url()."assets/vendor/jquery/jquery.min.js" ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."assets/vendor/bootstrap/js/bootstrap.min.js"?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="<?php echo base_url()."assets/js/freelancer.min.js" ?>"></script>
</body>

</html>
