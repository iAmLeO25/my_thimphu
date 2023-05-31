<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sofbox - Responsive Software Landing Page</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add your custom styles here */

        /* Center the main content */
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style the logo image */
        #logo_img {
            max-width: 200px;
        }

        /* Style the big text */
        .big-text {
            font-size: 48px;
            font-weight: 700;
            margin-top: 60px;
        }

        /* Style the subheading */
        .iq-font-light {
            font-weight: 300;
            margin-top: 40px;
        }

        /* Style the countdown elements */
        #countdown {
            list-style: none;
            padding: 0;
            margin-top: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #countdown li {
            margin: 0 10px;
            text-align: center;
        }

        #countdown li .days,
        #countdown li .hours,
        #countdown li .minutes,
        #countdown li .seconds {
            font-size: 36px;
            font-weight: 700;
        }

        #countdown li p {
            margin: 0;
        }

        /* Style the form and input */
        .iq-subscribe {
            margin-top: 40px;
        }

        .iq-subscribe .form-group {
            margin-right: 10px;
        }

        .iq-subscribe .form-control {
            width: 250px;
        }

        .iq-subscribe .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #2ecc71;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .iq-subscribe .button:hover {
            background-color: #27ae60;
        }

        /* Style the back-to-top button */
        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
        }

        #back-to-top .top {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #2ecc71;
            color: #fff;
            font-size: 24px;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }

        #back-to-top .top:hover {
            background-color: #27ae60;
        }
    </style>
</head>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loading End -->
    <!-- Main Content -->
    <div class="main-content">
        <!--======= Coming Soon =======-->
        <section class="iq-coming overview-block-ptb text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img class="img-responsive center-block iq-mb-10 wow zoomIn" id="logo_img" data-wow-duration="1s" src="images/logo-footer.png" alt="" style="visibility: visible; animation-duration: 1s; animation-name: zoomIn;">
                        <div class="big-text iq-tw-7 iq-mt-60">Coming Soon</div>
                        <h5 class="iq-font-light iq-tw-6 iq-mt-40">We are working very hard to give you the best experience possible!</h5>
                        <ul id="countdown">
                            <li><span class="days">00</span>
                                <p class="days_text">Days</p>
                            </li>
                            <li class="seperator">:</li>
                            <li><span class="hours">00</span>
                                <p class="hours_text">Hours</p>
                            </li>
                            <li class="seperator">:</li>
                            <li><span class="minutes">00</span>
                                <p class="minutes_text">Minutes</p>
                            </li>
                            <li class="seperator">:</li>
                            <li><span class="seconds">00</span>
                                <p class="seconds_text">Seconds</p>
                            </li>
                        </ul>
                        <form class="form-inline iq-subscribe">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter Your Email Here">
                            </div>
                            <a class="button iq-ml-25" href="javascript:void(0)">subscribe</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--======= Coming Soon End =======-->
    </div>
    <!-- Main Content END -->
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="index.php"> <i class="ion-ios-upload-outline"><</i> </a>
    </div>
    <!-- back-to-top End -->
    <!-- Optional JavaScript -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

</html>

