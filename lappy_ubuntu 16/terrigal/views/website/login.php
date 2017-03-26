<!DOCTYPE html>
<html lang="en" ng-app="terrigal">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">
        <title>Login | Terrigal</title>

        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
    </head>
    <body ng-cloak>
        <?php $this->load->view('website/navbar'); ?>
        <div id="content-section">
            <div class="row">
                <div class="container">
                    <div class="loginColumns animated fadeInDown" ng-controller="LoginController">
                        <div class="row">
                            <div class="container">
                                <div class="col-lg-6" style="margin-top: 70px;">
                                    <h1><strong>Socially Rewarding</strong></h1>
                                    <p style="color: #4c4c4c;">
                                        We don’t offer premium listings we let the quality of your service speak for itself, not your wallet! People’s <strong style="font-style: italic;">“trusted social connections”</strong> help them with their decisions!
                                    </p>
                                </div>
                                <div class="col-lg-5">
                                    <h2 class="font-bold text-center">
                                        <strong style="vertical-align: bottom;">Welcome to</strong>
                                        <a href="<?php echo base_url(); ?>"><img width="50%" style=" position: relative; top: 12px;" src="<?= base_url('public_html/assets/website/img/logo-text-yellow.png'); ?>"></a>
                                    </h2>

                                    <!-- <p ng-bind-html="error"></p> -->

                                    <div ng-if="error" class="alert alert-danger alert-dismissible" role="alert">
                                      <button ng-click="clear()" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <strong>{{message}}</strong>
                                    </div>
                                    
                                    <form class="m-t" ng-submit="login()" name="loginForm">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon" style="border-radius: 0px;"><i class="fa fa-user"></i></div>
                                                <input type="text" name="username" class="form-control" ng-model="loginCredentials.username" placeholder="Username" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon" style="border-radius: 0px;"><i class="fa fa-lock"></i></div>
                                                <input type="password" name="password" class="form-control" ng-model="loginCredentials.password" placeholder="Password" required="">
                                            </div>
                                        </div>
                                        <button type="submit" ng-disabled="loginForm.username.$invalid || loginForm.password.$invalid" style="font-weight: bolder;" class="btn btn-primary pull-right">Login</button>
                                       <a href="<?php echo base_url('forgot-password'); ?>">
                                            <small>Forgot password?</small>
                                        </a>
                                        <br>
                                        
                                        <p style="font-weight: normal;">New to Terrigal? <a href="<?php echo base_url('free-registration'); ?>">Register your business.</a></p>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main view  -->
        <?php $this->load->view('website/analytics'); ?>
        <!-- jQuery and Bootstrap -->
        <script src="<?php echo asset_url('scripts/helper/app_helpers.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/jquery/jquery-2.1.1.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/bootstrap/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/easy-autocomplete/dist/jquery.easy-autocomplete.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/angular/angular.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/angular/angular-sanitize.js'); ?>"></script>
        <script type="text/javascript">
//                                                            var BASEL_URL = '<?php //echo base_url(); ?>//';

                                                            $('#navbar').removeClass('navbar-app').addClass('navbar-default');
                                                            $('.search').fadeIn(100);
                                                            $('.btn-search').fadeIn(100);
                                                            var app = angular.module('terrigal', [
                                                                'ngSanitize'                // ngSanitize
                                                            ]).controller('LoginController', function ($scope, LoginService) {
                                                                $scope.loginCredentials = {
                                                                    username: '',
                                                                    password: ''
                                                                };
                                                                $scope.error = false;
                                                                $scope.message = "";
                                                                $scope.clear = function () {
                                                                    $scope.error = false;
                                                                    $scope.message = "";
                                                                };
                                                                $scope.login = function () {
                                                                    LoginService.authenticate($scope.loginCredentials).then(function (response) {
                                                                        if (response.success) {
                                                                            window.location.href = BASE_URL + 'app';
                                                                        } else {
                                                                            // $scope.error = '<div class="alert alert-danger">' + response.message + '</div>';
                                                                            $scope.error = true;
                                                                            $scope.message = response.message; 
                                                                            $scope.loginCredentials = {};
                                                                        }
                                                                    }, function (response) {
                                                                        if(response.data.message != ""){
                                                                            $scope.error = true;
                                                                            $scope.message = response.data.message; 
                                                                            $scope.loginCredentials = {};
                                                                        }else{
                                                                            $scope.error = '<div class="alert alert-danger">' + 'Somethings wrong with the server.' + '</div>';
                                                                        }
                                                                    });
                                                                };
                                                            }).factory('LoginService', function ($http) {
                                                                return {
                                                                    authenticate: function (data) {
                                                                        return $http.post(BASE_URL + 'api/authenticate', data, {cache: true}).then(function (response) {
                                                                            return response.data;
                                                                        });
                                                                    }
                                                                };
                                                            });
        </script>

        <?php $this->load->view('website/footer'); ?>
        <script src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
    </body>
</html>
