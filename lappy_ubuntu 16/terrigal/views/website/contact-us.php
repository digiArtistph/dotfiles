<!DOCTYPE html>
<html lang="en" ng-app="ContactUs">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>Contact Us | Terrigal</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">

        <style>
            #msg{
                resize: none;
                height: 180px;
            }
        </style>
    </head>

    <body ng-controller="ContactUsController" ng-cloak>
        <?php $this->load->view('website/navbar.php'); ?>
        <div id="content-section">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                    <h2 class="text-center">Contact Us</h2>
                    <div class="navy-line"></div>
                    <br>
                    <div class="col-sm-12 col-md-8 col-lg-12">
                        <div class="col-sm-12 col-md-8 col-lg-6">
                            <div class="col-lg-12">
                                <h4 class="text-center">
                                    <strong>We're here to help.</strong>
                                </h4>
                                <p>
                                    Have a simple question or need general information? We'll get back to you within 24 hours.
                                </p>
                                <p>
                                    You can reach us via:<br>
                                    <i class="fa fa-envelope fa-fw"></i> Email: <a href="mailto:info@terrigal.com">info@terrigal.com</a><br>
                                    <i class="fa fa-phone fa-fw"></i> Phone: <a href="tel:0280075521">(02) 8007 5521</a><small><span> (toll-free)</span><small><span> Mon. - Fri. 9:00 AM - 10:00PM EST</span></small></small><br>
                                    or fill up the fields below. Thank you.
                                </p>
                            </div>
                            <form role="form" ng-submit="contact()">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div style="border-radius: 0px;" class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
                                            <input ng-model="form.name" type="text" class="form-control" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div style="border-radius: 0px;" class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></div>
                                            <input ng-model="form.email" type="email" class="form-control" id="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div style="border-radius: 0px;" class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></div>
                                            <textarea ng-model="form.message" class="form-control" rows="3" id="msg" placeholder="Your question or message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group pull-right">
                                        <div class="input-group">
                                            <button class="btn btn-blue">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-8 col-lg-6" id="terrigal-map">
                            <ng-map zoom="13" center="Terrigal NSW 2260, Australia" scrollwheel="false" default-style="true">
                                <marker position="-33.448011, 151.444461" title="Terrigal NSW 2260, Australia"></marker>
                            </ng-map>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <?php $this->load->view('website/footer'); ?>
        <?php $this->load->view('website/analytics'); ?>
        <script src="<?php echo asset_url('scripts/helper/app_helpers.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/easy-autocomplete/dist/jquery.easy-autocomplete.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/angular/angular.min.js'); ?>"></script>
        <script type="text/javascript">
                                                var app = angular.module('ContactUs', ['ngMap']);
        </script>
        <script src="<?php echo asset_url('scripts/controller/ContactUsController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
        <script src="//maps.google.com/maps/api/js?key=AIzaSyDDta0LYcYAt9kSpYK46cAc4RBiqGloxbY&libraries=places"></script>
        <script src="<?php echo asset_url('modules/ngmap/build/scripts/ng-map.min.js'); ?>"></script>
        <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $('#navbar').removeClass('navbar-app').addClass('navbar-default');
                                                    $('.search').fadeIn(100);
                                                    $('.btn-search').fadeIn(100);
                                                });
        </script>
    </body>
</html>