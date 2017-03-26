<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a business directory and local information network that seeks to provide the best recommendations for any service, retail, accommodation or restaurant within 15km of Terrigal beach. Developed by Terrigal locals, businesses can join the network but their ranking is based on social likes not their wallet, so we can be sure that we are always recommending the best service! ">
        <meta name="author" content="">
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
    <body>
        <?php $this->load->view('website/navbar.php'); ?>
        <div id="content-section">
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
                                <!--<p ng-bind-html="error"></p>-->
                                <br>
                                <form class="m-t" ng-submit="resetPassword()">
                                    <div class="form-group">
                                        <h5>Create New Password and never forget it. Understand?</h5>
                                        <div class="input-group">
                                            <div class="input-group-addon" style="border-radius: 0px;"><i class="fa fa-unlock-alt"></i></div>
                                            <input type="password" class="form-control" ng-model="form.new_password" placeholder="New Password" required="">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <div class="input-group-addon" style="border-radius: 0px;"><i class="fa fa-lock"></i></div>
                                            <input type="password" class="form-control" ng-model="form.confirm_password" placeholder="Confirm Password" required="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-blue pull-right">Save</button>
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
        <script src="<?php echo asset_url('scripts/controller/ForgotPasswordController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
    </body>
</html>
