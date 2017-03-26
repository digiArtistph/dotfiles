<!DOCTYPE html>
<html lang="en" ng-app="ForgotPassword">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">
        <title>Forgot Password | Terrigal</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
    </head>
    <body ng-cloak>
        <?php $this->load->view('website/navbar'); ?>
        <div id="content-section" ng-controller="ForgotPasswordController">
            <div class="row" style="min-height: 400px;">
                <div class="container">
                    <div class="loginColumns animated fadeInDown">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <h2 class="font-bold text-center">
                                    <a href="<?php echo base_url(); ?>"><img width="50%" style=" position: relative; top: 12px;" src="<?= base_url('public_html/assets/website/img/logo-text-yellow.png'); ?>"></a>
                                </h2>
                                <br>
                                <div ng-if="message" ng-class="
                                {
                                'alert alert-success alert-dismissible fade in': b,
                                'alert alert-danger alert-dismissible fade in': !b
                                }" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" ng-click="onClose()">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{message}}
                                </div>
                                <form class="m-t" ng-submit="sendEmail(form)">
                                    <div class="form-group">
                                        <h5>Please send us your email to reset your password. Thanks!</h5>
                                        <div class="input-group">
                                            <div class="input-group-addon" style="border-radius: 0px;"><i class="fa fa-envelope"></i></div>
                                            <input type="text" class="form-control" ng-model="form.email" placeholder="Email">
                                        </div>
                                    </div>
                                    <button ng-show="!loading" type="submit" class="btn btn-blue pull-right">Send</button>
                                    <a disabled="" ng-show="loading" class="btn btn-blue pull-right" style="margin-right: 20px; margin-left: 10px;"><i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>
                                        Loading...
                                    </a>
                                    <a href="<?php echo base_url('register'); ?>">
                                        <small>New to Terrigal.com.au?</small>
                                    </a>
                                </form>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('website/analytics'); ?>
        <!-- Main view  -->

        <!-- jQuery and Bootstrap -->
        <script src="<?php echo asset_url('scripts/helper/app_helpers.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/jquery/jquery-2.1.1.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/bootstrap/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/easy-autocomplete/dist/jquery.easy-autocomplete.min.js'); ?>"></script>

        <script src="<?php echo asset_url('webapp/js/angular/angular.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/angular/angular-sanitize.js'); ?>"></script>

        <script type="text/javascript">
//            var BASEL_URL = '<?php //echo base_url(); ?>//';

            $('#navbar').removeClass('navbar-app').addClass('navbar-default');
            $('.search').fadeIn(100);
            $('.btn-search').fadeIn(100);
            var app = angular.module('ForgotPassword', [
                'ngSanitize'                // ngSanitize
            ]);
        </script>

        <?php $this->load->view('website/footer'); ?>
        <?php $this->load->view('website/analytics'); ?>
        <script src="<?php echo asset_url('scripts/controller/ForgotPasswordController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
    </body>
</html>
