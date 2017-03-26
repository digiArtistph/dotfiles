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

        <title>Free Registration | Terrigal</title>

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
                                                               <input data-ng-pattern="emailPattern" required="" name="email" placeholder="ex. email@email.com" type="email" id="user-email" ng-model="b.email" class="form-control" data-ng-blur="emailExist()">
                                                               <span ng-show="regForm.email.$invalid && regForm.email.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                               <span ng-show="!regForm.email.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.email.$invalid && regForm.email.$dirty" style="color: red;">Valid email is required!</span> &nbsp;
                                                        <span ng-show="b.emailExist" style="color: red;">Email already exist</span>
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
                                                    <button ng-disabled="b.emailExist || regForm.firstname.$invalid || regForm.lastname.$invalid || regForm.email.$invalid || regForm.password.$invalid" wz-next class="btn btn-blue btn-lg pull-right register-next-button" style="margin-right: 100px; margin-top: 10px; margin-bottom: 20px;">
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
                                                            <input required="" data-ng-keyup="checkBusinessName()" name="businessName" placeholder="ex. Doe's Laundry Services" type="text" id="business-name" class="form-control" ng-model="b.businessName">
                                                            <span ng-show="regForm.businessName.$invalid && regForm.businessName.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.businessName.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.businessName.$invalid && regForm.businessName.$dirty" style="color: red;">Business Name is required!</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.businessType.$invalid,'has-error': regForm.businessType.$invalid && regForm.businessType.$dirty }">
                                                        <label id="business-category">Type of Business</label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                                            <select required="" name="businessType" class="form-control" ng-model="b.businessType" ng-change="categoryChanged()">
                                                                <option value="" disabled selected>Select your business</option>
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
                                                    <button ng-disabled="exist || regForm.businessType.$invalid || regForm.businessName.$invalid" wz-next class="btn btn-info btn-lg pull-right register-next-button" style="margin-right: 100px; margin-top: 10px; margin-bottom: 20px;">
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
                                                    <b style="color: #f36e1f;">This is a free account.</b><br/>
                                                    <b style="color: #999;">We will not be charging you unless you subscribe for our premium plan.</b><br/><br/><br/>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.cardName.$invalid,'has-error': regForm.cardName.$invalid && regForm.cardName.$dirty }">
                                                        <label for="card-name">Card Name</label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                                            <input  placeholder="ex. John Doe" required="" name="cardName" type="text" id="card-name" class="form-control" ng-model="b.cardName">
                                                            <span ng-show="regForm.cardName.$invalid && regForm.cardName.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.cardName.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.cardName.$invalid && regForm.cardName.$dirty" style="color: red;">Card Name is required!</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.cardNumber.$invalid,'has-error': regForm.cardNumber.$invalid && regForm.cardNumber.$dirty }">
                                                        <label for="card-number">Card Number</label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                                            <input data-ng-pattern="creditCard" placeholder="5175 6314 9618 2684" required="" name="cardNumber" type="text" id="card-number" class="form-control" ng-model="b.cardNumber">
                                                            <span ng-show="regForm.cardNumber.$invalid && regForm.cardNumber.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.cardNumber.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.cardNumber.$invalid && regForm.cardNumber.$dirty" style="color: red;">Valid card number is required!</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.cvc.$invalid,'has-error': regForm.cvc.$invalid && regForm.cvc.$dirty }">
                                                        <label for="card-password">CVV2</label>
                                                        <div class="input-group all-input">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                            <input data-ng-pattern="" ng-maxlength="3" required="" name="cvc" type="password" id="card-password" class="form-control" ng-model="b.cvc">
                                                            <span ng-show="regForm.cvc.$invalid && regForm.cvc.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.cvc.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.cvc.$invalid && regForm.cvc.$dirty" style="color: red;">CVV2 is required!</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-5" style="margin-left: 20px;margin-top: 80px;">
                                                <b style="color: #999;">We, in Terrigal, is asking your card information, for us to verify the authencity of our users. And your payment information is kept with a fully PCI DSS compliant payment processor and isn't stored on our servers.</b>
                                                <br/><br/>
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
                                                    <button ng-disabled="requesting || loading || regForm.firstname.$invalid || regForm.lastname.$invalid || regForm.email.$invalid || regForm.password.$invalid || regForm.businessType.$invalid || regForm.businessName.$invalid || regForm.year.$invalid || regForm.month.$invalid || regForm.cvc.$invalid || regForm.cardNumber.$invalid || regForm.cardName.$invalid" wz-next class="btn btn-info btn-lg pull-right register-next-button" style="margin-right: 100px; margin-top: 10px; margin-bottom: 20px;">
                                                        <span data-ng-if="! loading">Finish</span>
                                                        <span data-ng-if="loading">
                                                            <i class="fa fa-spinner fa-pulse"></i> Requesting...
                                                        </span>
                                                    </button>
                                                    <button data-ng-click="freeRegister(b)" class="btn btn-default btn-lg pull-right" style="margin-right: 100px; margin-top: 10px; margin-bottom: 20px;" data-ng-disabled="loading || requesting || regForm.firstname.$invalid || regForm.lastname.$invalid || regForm.email.$invalid || regForm.password.$invalid || regForm.businessType.$invalid || regForm.businessName.$invalid">
                                                        <span data-ng-if="! requesting">Skip</span>
                                                        <span data-ng-if="requesting">
                                                            <i class="fa fa-spinner fa-pulse"></i> Requesting...
                                                        </span>
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

//                var BASE_URL = '<?php //echo base_url(); ?>//';
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

                    app.controller('RegistrationController', ['SweetAlert', 'RegistrationService', '$scope', '$rootScope', 'CheckMail', function (SweetAlert, RegistrationService, $scope, $rootScope, CheckMail) {
//                            var BASE_URL = '<?php //echo base_url(); ?>//';

                            $scope.b = [];
                            $scope.currentYear = new Date().getFullYear();
                            $scope.skillion = false;
                            $scope.haven = true;
                            $scope.exist = false;
                            $scope.requesting = false;
                            $scope.loading = false;
                            $rootScope.spinner.off();


                           $scope.emailPattern = (function() {
                              var regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                              return {
                                    test: function(value) {
                                       if( $scope.requireTel === false ) {
                                          return true;
                                       }
                                       return regexp.test(value);
                                    }
                              };
                           })();

                           $scope.creditCard = (function() {
                               var regexp = /[\d]{4}[-\s]?[\d]{4}[-\s]?[\d]{4}[-\s]?[0-9]{4}/;
                               return {
                                   test: function(value) {
                                       if( $scope.requireTel === false ) {
                                           return true;
                                       }
                                       return regexp.test(value);
                                   }
                               };
                           })();

                            $scope.emailExist = function() {
                                CheckMail.isExist($scope.b.email).success(function(data) {
                                    $scope.b.emailExist = true;
                                    if(data.isEmailExists == true)
                                        $scope.b.emailExist = true;
                                    else
                                        $scope.b.emailExist = false;
                                });
                            };

                            $scope.checkBusinessName = function () {
                                if($scope.b.businessName) {
                                    var payload = {businessName: $scope.b.businessName};
                                    RegistrationService.checkBusinessName(payload)
                                        .then(function (response) {
                                            if(response.data) {
                                                $scope.exist = true;
                                                SweetAlert.swal({
                                                    title: "Business already exists!",
                                                    type: "info",
                                                    confirmButtonText: "Close"
                                                }, function () {});
                                            }
                                        });
                                    $scope.exist = false;
                                }
                            };

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
                                };
                            };
                            
                            $scope.freeRegister = function (register) {
                                    $scope.requesting = true;
                                    var data = {
                                        businessName: register.businessName,
                                        businessType: register.businessType,
                                        cardName: register.cardName,
                                        cardNumber: register.cardNumber,
                                        cvc: register.cvc,
                                        email: register.email,
                                        firstName: register.firstname,
                                        lastName: register.lastname,
                                        month: register.month,
                                        password: register.password,
                                        year: register.year
                                    };
                                    $scope.username = register.email;
                                    RegistrationService.registerFree(data)
                                        .then(function (response) {
                                            $scope.requesting = false;
                                            $scope.b = {};
                                            SweetAlert.swal({
                                                title: "Success!",
                                                text: "Username: " + $scope.username,
                                                type: "success"
                                            }, function () {
                                                window.location = BASE_URL + 'app';
                                            });
                                        }, function (response) {
                                            $scope.requesting = false;
                                            SweetAlert.swal({
                                                title: "Error!",
                                                text: response.data,
                                                type: "error"
                                            });
                                        });
                            };

                            $scope.register = function (register) {
                                $scope.loading = true;
                                Stripe.card.createToken({
                                    number: register.cardNumber,
                                    exp_month: register.month,
                                    exp_year: register.year,
                                    cvc: register.cvc
                                }, function (status, stripeResponse) {
                                    if (stripeResponse.error) {
                                        $scope.loading = false;
                                        SweetAlert.swal({
                                            title: "Error!",
                                            text: stripeResponse.error.message,
                                            type: "error"
                                        });
                                    } else {
                                        var data = {
                                            businessName: register.businessName,
                                            businessType: register.businessType,
                                            cardName: register.cardName,
                                            cardNumber: register.cardNumber,
                                            cvc: register.cvc,
                                            email: register.email,
                                            firstName: register.firstname,
                                            lastName: register.lastname,
                                            month: register.month,
                                            password: register.password,
                                            year: register.year
                                        };
                                        $scope.username = register.email;
                                        RegistrationService.register(data, stripeResponse.id)
                                            .then(function (response) {
                                                $scope.loading = false;
                                                $scope.b = {};
                                                SweetAlert.swal({
                                                    title: "Success!",
                                                    text: "Username: " + $scope.username,
                                                    type: "success"
                                                }, function () {
                                                    window.location = BASE_URL + 'login';
                                                });
                                            }, function (response) {
                                                $scope.loading = false;
                                                SweetAlert.swal({
                                                    title: "Error!",
                                                    text: response.data,
                                                    type: "error"
                                                });
                                            });
                                        }
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
//                            var BASE_URL = '<?php //echo base_url(); ?>//';
                            return {
                                registerFree: function (registrationData) {
                                    return $http.post(BASE_URL + 'api/FreeRegistration', {val: registrationData}, {cache: true}).then(function (response) {
                                        return response;
                                    });
                                },
                                register: function (registrationData, token) {
                                    return $http.post(BASE_URL + 'api/register', {val: registrationData, id: token}, {cache: true}).then(function (response) {
                                        return response;
                                    });
                                },
                                checkBusinessName: function (payload) {
                                    return $http.get(BASE_URL + 'api/Business/checkBusinessName?businessName=' + payload.businessName, {cache: true}).then(function (response) {
                                        return response;
                                    });
                                }
                            };
                    }])
                    .service('CheckMail', ['$q', '$http', function($q, $http) {

                        var _isExist = function(emailAccnt) {
                            var deferred = $q.defer(),
                            promise = deferred.promise;

                            $http.get(BASE_URL + 'api/account/check_email/account?email=' + emailAccnt).then(function(data) {
                               deferred.resolve(data.data);
                            }, function(reason) {
                               deferred.reject(reason);
                            });

                            promise.success = function(fn) {
                               promise.then(fn);
                               return promise;
                            };

                            promise.error = function(fn) {
                               promise.then(null, fn);
                               return promise;
                            };

                            return promise;
                        };

                        this.isExist = _isExist;
                    }]);
        </script>
        <script type="text/javascript" src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
    </body>
</html>
