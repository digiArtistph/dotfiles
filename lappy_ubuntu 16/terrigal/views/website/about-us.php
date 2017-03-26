<!DOCTYPE html>
<html lang="en" ng-app="AboutUs">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>About Us | Terrigal</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet"> 

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/custom-icon.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">

        <style>
            .itom {
                color: black;
            }
        </style>
    </head>
    <body ng-cloak>
        <?php $this->load->view('website/navbar'); ?>
        <div id="content-section">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">About Us</li>
                    </ol>
                    <h2 class="text-center">About Us</h2>
                    <div class="navy-line"></div>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <h4 style="border-bottom: solid 1px #ccc;">
                                    <strong>More Information</strong>
                                </h4>
                                <ul class="breadcrumb bg-white">
                                    <li class="active">
                                        About Us
                                    </li>
                                    <br>
                                    <li>
                                        <a href="<?php echo base_url('privacy-policy'); ?>" target="_self">Privacy Policy</a>
                                    </li>
                                    <br>
                                    <li>
                                        <a href="<?php echo base_url('terms-of-service'); ?>" target="_self">Terms of Services</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <div class="card card-content">
                                    <div class="card-block itom">
                                        <p style="font-family: 'Lato', sans-serif; letter-spacing: 0px; line-height: 26px; font-size: 16px; color: #666;">
                                            Terrigal.com.au is a “Socially Rewarding” business directory and local information network that seeks to provide the best recommendations for any service, retail, accommodation or restaurant within 15km of Terrigal beach. Developed by a Terrigal local, businesses can join the network but their ranking is based on social "likes" not their wallet, so we can be sure that we are always recommending the best service!As customers search Terrigal.com.au for your product or service, they can see which of their Facebook friends have liked or checked into your Facebook business page – nothing beats a trusted word-of-mouth referral!
                                        </p>
<!--                                        <br>
                                        <var>
                                            This includes THE CEO, Developers, etc: CEO's Description, Board of Directors(if necessary), Developer's Description and more about Terrigal.com.au.
                                        </var>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
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
            var app = angular.module('AboutUs', []);
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
                    if($(this).scrollTop() > offset) {
                        $('.footer-advertise-fixed').fadeIn(duration);
                    } else {
                        $('.footer-advertise-fixed').fadeOut(duration);
                    }
                });

                $(window).scroll(function () {
                    if (($(this).scrollTop() + $(this).innerHeight()) == $(document).height()) {
                        $('.footer-advertise-fixed').fadeOut(duration);
                        $('.footer-advertise-fixed-small').fadeIn(duration);
                    } else {
                        $('.footer-advertise-fixed-small').fadeOut(duration);
                    }
                });
            });
        </script>
    </body>