<!DOCTYPE html>
<html lang="en" ng-app="Register">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="socially rewarding, terrigal, business, listing, directory, free, local"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>Register | Terrigal</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">

        <link href="<?php echo asset_url('modules/angular-wizard/angular-wizard.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/ngSweetAlert/sweetalert.css'); ?>" rel="stylesheet" type="text/css" >
        <link href="<?php echo asset_url('modules/angular-treasure-overlay-spinner/src/treasure-overlay-spinner.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
    </head>

    <body ng-controller="RegistrationController" ng-cloak>
        <?php $this->load->view('website/navbar'); ?>
        <div id="content-section">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Add Listing</li>
                    </ol>
                </div>
                <div class="container">
                    <treasure-overlay-spinner active='spinner.active' style="z-index: 4;">
                        <wizard on-finish="register(b)">
                            <form name="regForm">
                                <wz-step wz-title="Account Information">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6" style="margin-left: 20px; margin-top: 20px;">
                                                    <h2>Account Information</h2>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.firstname.$invalid,'has-error': regForm.firstname.$invalid && regForm.firstname.$dirty }">
                                                        <label for="first-name">First Name</label>
                                                        <div class="input-group col-md-11 all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                            <input required="" name="firstname" placeholder="ex. John" type="text" id="first-name" class="form-control" ng-model="b.firstname">
                                                            <span ng-show="regForm.firstname.$invalid && regForm.firstname.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.firstname.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.firstname.$invalid && regForm.firstname.$dirty" style="color: red;">First Name is required!</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.lastname.$invalid,'has-error': regForm.lastname.$invalid && regForm.lastname.$dirty }">
                                                        <label for="last-name">Last Name</label>
                                                        <div class="input-group col-md-11 all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                            <input required="" name="lastname" placeholder="ex. Doe" type="text" id="last-name" class="form-control" ng-model="b.lastname">
                                                            <span ng-show="regForm.lastname.$invalid && regForm.lastname.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.lastname.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.lastname.$invalid && regForm.lastname.$dirty" style="color: red;">Last Name is required!</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.email.$invalid,'has-error': regForm.email.$invalid && regForm.email.$dirty }">
                                                        <label for="user-email">Email Address</label>
                                                        <div class="input-group col-md-11 all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                            <input required="" name="email" placeholder="ex. email@email.com" type="email" id="user-email" ng-model="b.email" class="form-control">
                                                            <span ng-show="regForm.email.$invalid && regForm.email.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.email.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.email.$invalid && regForm.email.$dirty" style="color: red;">Valid email is required!</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.password.$invalid,'has-error': regForm.password.$invalid && regForm.password.$dirty }">
                                                        <label for="user-password">Password </label>
                                                        <div class="input-group col-md-11 all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                            <input ng-minlength="5" required="" name="password" type="password" id="user-password" class="form-control" ng-model="b.password">
                                                            <span ng-show="regForm.password.$invalid && regForm.password.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.password.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.password.$invalid && regForm.password.$dirty" style="color: red;">Password is required!</span>
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <p>
                                                            By signing up, you agree to the <a href="<?php echo base_url('terms-of-service'); ?>">Terms of Service</a> and <a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a>.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-5 hidden-xs" style="margin-top: 40px;">
                                                    <div class="card" style="background-color: #4a4b4c;">
                                                        <div class="card-content">
                                                            <br>
                                                            <img class="center" style="margin-left: 80px;" src="<?php echo asset_url('website/img/logo-text.png'); ?>" class="img-responsive business-logo-text">
                                                            <p style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px; color: white; text-align: justify;" class="mt text-center"><b>Terrigal.com.au</b> is a “Socially Rewarding” business directory and local information network that seeks to provide the best recommendations for any service, retail, accommodation or restaurant within 15km of Terrigal beach. Developed by a Terrigal local, businesses can join the network but their ranking is based on social "likes" not their wallet, so we can be sure that we are always recommending the best service! As customers search <b>Terrigal.com.au</b> for your product or service, they can see which of their Facebook friends have liked or checked into your Facebook business page – nothing beats a trusted word-of-mouth referral! </p>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12">
                                                    <button ng-disabled="regForm.firstname.$invalid || regForm.lastname.$invalid || regForm.email.$invalid || regForm.password.$invalid" wz-next class="btn btn-blue btn-lg pull-right register-next-button" style="margin-right: 100px; margin-top: 10px; margin-bottom: 20px;">
                                                        Next
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </wz-step>
                                <wz-step wz-title="Business Information" canenter="enterValidation">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6" style="margin-left: 20px; margin-top: 20px;">
                                                    <h2>Business Information</h2>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.businessName.$invalid,'has-error': regForm.businessName.$invalid && regForm.businessName.$dirty }">
                                                        <label for="business-name"> Business Name </label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                                                            <input required="" name="businessName" placeholder="ex. Doe's Laundry Services" type="text" id="business-name" class="form-control" ng-model="b.businessName">
                                                            <span ng-show="regForm.businessName.$invalid && regForm.businessName.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.businessName.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.businessName.$invalid && regForm.businessName.$dirty" style="color: red;">Business Name is required!</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.businessType.$invalid,'has-error': regForm.businessType.$invalid && regForm.businessType.$dirty }">
                                                        <label id="business-category">Category</label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                                            <select required="" name="businessType" class="form-control" ng-model="b.businessType" ng-change="categoryChanged()">
                                                                <option value="" disabled selected>Choose a Category</option>
                                                                <option value="1">Restaurant</option>
                                                                <option value="2">Accommodation</option>
                                                                <option value="3">Services</option>
                                                                <option value="4">Retailer</option>
                                                                <option value="5">Others</option>
                                                            </select>
                                                            <span ng-show="regForm.businessType.$invalid && regForm.businessType.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.businessType.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.businessType.$invalid && regForm.businessType.$dirty" style="color: red;">Business Type is required!</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" style="margin-left: 20px;">
                                                    <button wz-previous class="btn btn-default btn-lg" style="margin-right: 100px; margin-top: 10px; margin-bottom: 20px;">
                                                        Previous
                                                    </button>
                                                    <button ng-disabled="regForm.businessType.$invalid || regForm.businessName.$invalid" wz-next class="btn btn-info btn-lg pull-right register-next-button" style="margin-right: 100px; margin-top: 10px; margin-bottom: 20px;">
                                                        Next
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </wz-step>
                                <wz-step wz-title="Card Information">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5" style="margin-left: 20px; margin-top: 20px;">
                                                    <h2>Card Information</h2>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.cardName.$invalid,'has-error': regForm.cardName.$invalid && regForm.cardName.$dirty }">
                                                        <label for="card-name">Card Name</label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                                            <input placeholder="ex. John Doe" required="" name="cardName" type="text" id="card-name" class="form-control" ng-model="b.cardName">
                                                            <span ng-show="regForm.cardName.$invalid && regForm.cardName.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.cardName.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.cardName.$invalid && regForm.cardName.$dirty" style="color: red;">Card Name is required!</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.cardNumber.$invalid,'has-error': regForm.cardNumber.$invalid && regForm.cardNumber.$dirty }">
                                                        <label for="card-number">Card Number</label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                                            <input placeholder="ex. 4242424242424242" required="" name="cardNumber" type="text" id="card-number" class="form-control" ng-model="b.cardNumber">
                                                            <span ng-show="regForm.cardNumber.$invalid && regForm.cardNumber.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.cardNumber.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.cardNumber.$invalid && regForm.cardNumber.$dirty" style="color: red;">Card Number is required!</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.cvc.$invalid,'has-error': regForm.cvc.$invalid && regForm.cvc.$dirty }">
                                                        <label for="card-password">CVV2</label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                            <input ng-minlength="3" required="" name="cvc" type="password" id="card-password" class="form-control" ng-model="b.cvc">
                                                            <span ng-show="regForm.cvc.$invalid && regForm.cvc.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.cvc.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.cvc.$invalid && regForm.cvc.$dirty" style="color: red;">CVV2 is required!</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-5" style="margin-left: 20px;margin-top: 80px;">
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.month.$invalid,'has-error': regForm.month.$invalid && regForm.month.$dirty }">
                                                        <label for="card-month" class="active">Month</label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                            <select required="" name="month" ng-model="b.month" class="form-control">
                                                                <option value="" disabled selected>Choose Month</option>
                                                                <option value="01">January</option>
                                                                <option value="02">February</option>
                                                                <option value="03">March</option>
                                                                <option value="04">April</option>
                                                                <option value="05">May</option>
                                                                <option value="06">June</option>
                                                                <option value="07">July</option>
                                                                <option value="08">August</option>
                                                                <option value="09">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                            <span ng-show="regForm.month.$invalid && regForm.month.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.month.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.month.$invalid && regForm.month.$dirty" style="color: red;">Month is required!</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.year.$invalid,'has-error': regForm.year.$invalid && regForm.year.$dirty }">
                                                        <label for="card-year">Year</label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                            <input ng-maxlength="4" placeholder="ex. {{currentYear}}" required="" name="year" type="number" id="card-year" class="form-control" ng-model="b.year">
                                                            <span ng-show="regForm.year.$invalid && regForm.year.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.year.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.year.$invalid && regForm.year.$dirty" style="color: red;">Year is required!</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12" style="margin-left: 20px;">
                                                    <button wz-previous class="btn btn-default btn-lg" style="margin-right: 100px; margin-top: 10px; margin-bottom: 20px;">
                                                        Previous
                                                    </button>
                                                    <button ng-disabled="regForm.firstname.$invalid || regForm.lastname.$invalid || regForm.email.$invalid || regForm.password.$invalid || regForm.businessType.$invalid || regForm.businessName.$invalid || regForm.year.$invalid || regForm.month.$invalid || regForm.cvc.$invalid || regForm.cardNumber.$invalid || regForm.cardName.$invalid" wz-next class="btn btn-info btn-lg pull-right register-next-button" style="margin-right: 100px; margin-top: 10px; margin-bottom: 20px;">
                                                        Finish
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </wz-step>
                            </form>
                        </wizard>
                    </treasure-overlay-spinner>
                </div>
                <br><br>
            </div>
        </div>

        <?php $this->load->view('website/footer'); ?>
        <?php $this->load->view('website/analytics'); ?>

        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script type="text/javascript">
            Stripe.setPublishableKey('pk_live_1NNrwiPeyizZXjxq7A2Srcds');
        </script>
        <script src="<?php echo asset_url('scripts/helper/app_helpers.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/easy-autocomplete/dist/jquery.easy-autocomplete.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/angular/angular.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/angular-animate/angular-animate.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/ngSweetAlert/sweet-alert.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/ngSweetAlert/SweetAlert.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/angular-wizard/angular-wizard.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/angular-treasure-overlay-spinner/src/treasure-overlay-spinner.js'); ?>"></script>
        <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $('#navbar').removeClass('navbar-app').addClass('navbar-default');
                                                    $('.search').fadeIn(100);
                                                    $('.btn-search').fadeIn(100);

//                                                    var BASE_URL = '<?php //echo base_url(); ?>//';
                                                });
        </script>
        <script type="text/javascript">
                            var app = angular.module('Register', [
                                'mgo-angular-wizard',
                                'oitozero.ngSweetAlert',
                                'treasure-overlay-spinner'
                            ]);

                            angular.module('Register').run(run);
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

                            app.controller('RegistrationController', ['SweetAlert', 'RegistrationService', '$scope', '$rootScope', function (SweetAlert, RegistrationService, $scope, $rootScope) {
                                    $scope.b = [];
                                    $scope.currentYear = new Date().getFullYear();
                                    $scope.skillion = false;
                                    $scope.haven = true;
                                    $rootScope.spinner.off();
                                    // $scope.$on('$viewContentLoaded', function () {
                                    //   $rootScope.spinner.on();
                                    // });

                                    $scope.categoryChanged = function () {

                                        switch ($scope.b.businessType) {
                                            case '1':
                                            case '2':
                                                $scope.skillion = true;
                                                $scope.haven = false;
                                                break;
                                            case '3':
                                            case '4':
                                            case '5':
                                            default:
                                                $scope.skillion = false;
                                                $scope.haven = true;
                                                break;
                                        }
                                        ;
                                    };

                                    $scope.register = function (b) {
                                        $rootScope.spinner.on();
                                        Stripe.card.createToken({
                                            number: b.cardNumber,
                                            exp_month: b.month,
                                            exp_year: b.year,
                                            cvc: b.cvc
                                        }, function (status, stripeResponse) {
                                            var data = {
                                                businessName: b.businessName,
                                                businessType: b.businessType,
                                                cardName: b.cardName,
                                                cardNumber: b.cardNumber,
                                                cvc: b.cvc,
                                                email: b.email,
                                                firstname: b.firstname,
                                                lastname: b.lastname,
                                                month: b.month,
                                                password: b.password,
                                                year: b.year
                                            };
                                            RegistrationService.register(data, stripeResponse.id).then(function (resp) {

                                                if (resp.data.status == true) {
                                                    $scope.b = {};
                                                    $rootScope.spinner.off();
                                                    SweetAlert.swal({
                                                        title: "Success!",
                                                        text: resp.data.response_msg,
                                                        type: "success"
                                                    }, function () {
                                                        window.location = BASE_URL + resp.data.redirect + '/about';
                                                    });
                                                } else {
                                                    $rootScope.spinner.off();
                                                    if (resp.data.claim == true) {
                                                        SweetAlert.swal({
                                                            title: "Business already exists!",
                                                            text: "Business already exist. Claim this business.",
                                                            type: "info",
                                                            confirmButtonText: "Claim Business"
                                                        }, function (isConfirm) {
                                                            if (isConfirm) {
                                                                window.location = BASE_URL + resp.data.redirect + '/about';
                                                            }
                                                        });
                                                    } else {
                                                        SweetAlert.swal({
                                                            title: "Error!",
                                                            text: resp.data.response_msg,
                                                            type: "error"
                                                        });
                                                    }
                                                }
                                            }, function (resp) {
                                                $rootScope.spinner.off();
                                                SweetAlert.swal({
                                                    title: "Error!",
                                                    text: resp.data,
                                                    type: "error"
                                                });
                                            });
                                        });
                                    };

                                    $scope.enterValidation = function () {
                                        return true;
                                    };

                                    $scope.exitValidation = function () {
                                        return true;
                                    };
                                }
                            ]);

                            app.factory('RegistrationService', ['$http', function ($http) {
                                var BASE_URL = '<?php echo base_url(); ?>';
                                    return {
                                        register: function (registrationData, token) {
                                            return $http.post(BASE_URL + 'api/register', {val: registrationData, id: token}, {cache: true}).then(function (response) {
                                                return response;
                                            });
                                        }
                                    };
                                }]);
        </script>
        <script type="text/javascript" src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
    </body>
</html>
