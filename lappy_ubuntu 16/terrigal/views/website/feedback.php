<!DOCTYPE html>
<html lang="en" ng-app="feedback">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="socially rewarding, feedback, terrigal, business, listing, directory, free, local"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>Feedback | Terrigal</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">

        <link href="<?php echo asset_url('modules/ngSweetAlert/sweetalert.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo asset_url('modules/angular-treasure-overlay-spinner/src/treasure-overlay-spinner.css'); ?>" rel="stylesheet"/>
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
        <style>
            #msg{
                resize: none;
                height: 180px;
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
                        <li class="active">Feedback</li>
                    </ol>
                    <h2 class="text-center">Feedback</h2>
                    <div class="navy-line"></div>
                    <br>
                    <br>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h1>Please give us your feedback</h1>
                        <div class="row">
                            <div class="col-lg-6">
                                <treasure-overlay-spinner active='spinner.active' style="z-index: 4;">
                                    <form ng-submit="postFeedback(form)" ng-controller="FeedbackController" name="feedback">
                                        <div class="form-group">
                                            <textarea required="" class="form-control" id="msg" placeholder="" ng-model="form.feedback"></textarea>
                                            <br>
                                            <button class="btn btn-primary pull-right">Send</button>
                                        </div>
                                    </form>
                                </treasure-overlay-spinner>
                            </div>
                            <div id="feedback-description">
                                <p>
                                    This feedback can help us to improve our site's performance and optimize our system for user's convenience.
                                </p>
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
        <script src="<?php echo asset_url('modules/angular-animate/angular-animate.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/ngSweetAlert/sweet-alert.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/ngSweetAlert/SweetAlert.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/angular-easyfb/src/angular-easyfb.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/angular-treasure-overlay-spinner/src/treasure-overlay-spinner.js'); ?>"></script>
        <script type="text/javascript">
            var app = angular.module('feedback', [
                'oitozero.ngSweetAlert',
                'ezfb',
                'ngAnimate',
                'treasure-overlay-spinner'
            ]);

            app.config(function (ezfbProvider) {
                ezfbProvider.setLocale('en_US');

                var FACEBOOK_APP_ID = (window.location.hostname === 'localhost' ? 1242021642509962 : 1241820959196697);
                // var FACEBOOK_APP_ID = 1241820959196697;

                ezfbProvider.setInitParams({
                    appId: FACEBOOK_APP_ID,
                    version: 'v2.8'
                });
            });

            angular.module('feedback').run(run);
            run.$inject = ['$rootScope'];
            function run($rootScope) {
                $rootScope.spinner = {
                    active: false,
                    on: function () {
                        this.active = true;
                    },
                    off: function () {
                        this.active = false;
                    }
                };
            };

            app.controller('FeedbackController', ['SweetAlert', '$rootScope', 'ezfb', '$scope', 'FeedbackService', function (SweetAlert, $rootScope, ezfb, $scope, FeedbackService) {
                    // $rootScope.spinner.off();
                    $scope.form = [];

                    $scope.postFeedback = function (form) {
                        if (!form.feedback) {
                            SweetAlert.swal({
                                title: "Error!",
                                text: "Please fill up the feedback field before submitting.",
                                type: "error"
                            });
                        } else {
                            // $rootScope.spinner.on();
                            ezfb.api('/me', function (res) {
                                if (res.error) {
                                    ezfb.login(function (res) {
                                        if (res.authResponse) {
                                            $scope.postFeedback(form);
                                        }
                                    }, {scope: 'email,user_likes'});
                                } else {
                                    var data = {fb_id: res.id, fb_name: res.name, feedback: form.feedback}
                                    FeedbackService.feedback(data).then(function (resp) {
                                        // $rootScope.spinner.off();
                                        SweetAlert.swal({
                                            title: "Success!",
                                            text: resp.data,
                                            type: "success"
                                        });
                                        $scope.form = {};
                                    }, function (resp) {
                                        // $rootScope.spinner.off();
                                        SweetAlert.swal({
                                            title: "Error!",
                                            text: resp.data,
                                            type: "error"
                                        });
                                    });
                                }
                            });
                        }
                    };

                }]);

            app.factory('FeedbackService', ['$http', function ($http) {
                    // var baseUrl = window.location.protocol + '//' + window.location.hostname + '/terrigal_v1';
                    return {
                        feedback: function (data) {
                            return $http.post(BASE_URL + '/api/feedback', data).then(function (response) {
                                return response;
                            });
                        }
                    };
                }
            ]);
        </script>
        <script type="text/javascript" src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
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
