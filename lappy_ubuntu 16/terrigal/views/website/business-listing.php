<!DOCTYPE html>
<html lang="en" ng-app="FAQSController">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a business directory and local information network that seeks to provide the best recommendations for any service, retail, accommodation or restaurant within 15km of Terrigal beach. Developed by Terrigal locals, businesses can join the network but their ranking is based on social likes not their wallet, so we can be sure that we are always recommending the best service! ">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>Listing | Terrigal</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
    </head>

    <body ng-cloak>
        <?php $this->load->view('website/navbar.php'); ?>
        <div id="content-section">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Business Listing</li>
                    </ol>
                    <h2 class="text-center">Business Listing</h2>
                    <div class="navy-line"></div>
                    <br>
                    <br>
                    <div class="col-sm-12 col-md-12">
                        <div class="col-lg-12 blisting-container">
                            <div class="col-lg-6">
                                <h2>A Powerful Marketing Tool</h2>
                                <ul>
                                    <li>
                                        <p>Enhanced presence on Terrigal’s socially rewarding travel site</p>
                                    </li>
                                    <li>
                                        <p>Unlimited clicks, calls and booking referrals</p>
                                    </li>
                                    <li>
                                        <p>One flat yearly subscription rate</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h2>Unlimited Potential Returns. One Flat Rate.</h2>
                                <p>Terrigal.com.au is the best source of direct bookings next to recommendations from friends and family.</p>
                                <p>- <i>Nothing beats a word of mouth referrals.</i></p>
                                <p>Take advantage of this when you subscribe to Business Listings.</p>
                            </div>
                            <div class="col-lg-12">
                                <h2>Exclusive Benefits for Subscribers:</h2>
                                <div class="col-lg-12">
                                    <h3>Drive Booking Referrals</h3>
                                    <p>Increase potential guests one click, call or email away from a direct booking by publishing your contact details on Terrigal.com.au — and tap into bookings by adding click-to-call functionality on our popular site plus recommendations from our Terrigal.com.au Facebook Page.</p>
                                    <br>

                                    <h3>Enhance Your Terrigal.com.au Presence</h3>
                                    <p>Give Locals and Tourist of Terrigal more reason to book — and instantly stand apart— with subscriber-only features like customized Special Offers, the beautiful Photo Slideshow, Video and much more.</p>
                                    <br>

                                    <h3>What’s in it for you?</h3>
                                    <p>Get access to exclusive performance, businesses who subscribe get their ranking based on social “Likes” not from their wallet. You can be sure that you get the best service recommendations that can help you refine your marketing strategy — and drive more revenue straight to your business.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('website/footer'); ?>
        <?php $this->load->view('website/analytics'); ?>
        <script src="<?php echo asset_url('scripts/helper/app_helpers.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/easy-autocomplete/dist/jquery.easy-autocomplete.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/angular/angular.min.js'); ?>"></script>
        <script>
            var app = angular.module('FAQSController', []);
        </script>
        <script src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#navbar').removeClass('navbar-app').addClass('navbar-default');
                $('.search').fadeIn(100);
                $('.btn-search').fadeIn(100);

                var offset = 500;
                var duration = 100;

                var IDLE_TIMEOUT = 30; //seconds
                var _idleSecondsTimer = null;
                var _idleSecondsCounter = 0;
                document.onclick = function() {
                    _idleSecondsCounter = 0;
                };
                document.onmousemove = function() {
                    _idleSecondsCounter = 0;
                };
                document.onkeypress = function() {
                    _idleSecondsCounter = 0;
                };

                var _idleSecondsTimer = window.setInterval(CheckIdleTime, 1000);

                function CheckIdleTime() {
                    _idleSecondsCounter++;
                    var oPanel = document.getElementById("SecondsUntilExpire");
                    if (oPanel)
                        oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
                    if (_idleSecondsCounter >= IDLE_TIMEOUT) {
                        if (($(this).scrollTop() + $(this).innerHeight()) == $(document).height()) {
                            $('.footer-advertise-fixed-small').fadeIn(duration);
                        } else {
                            $('.footer-advertise-fixed').fadeIn(duration);
                        }
                    }
                }

                $(window).scroll(function () {
                    if (($(this).scrollTop() + $(this).innerHeight()) == $(document).height()) {
                        $('.footer-advertise-fixed-small').fadeIn(duration);
                    } else {
                        $('.footer-advertise-fixed-small').fadeOut(duration);
                    }
                });
            });
        </script>
    </body>
</html>