<?php
    if(!$userAccess || $freeBusiness == 1){
        redirect('/home', 'refresh');
    }
?>
<!DOCTYPE html>
<html lang="en" ng-app="Upgrade">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="socially rewarding, about us, terrigal, business, listing, directory, free, local"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>Upgrade | Terrigal</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet"> 

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/custom-icon.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/toaster/toaster.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
        <style>
            .itom {
                color: black;
            }

            .upgrade-form {

            }
        </style>
    </head>
    <body data-ng-controller="PremiumController" data-ng-cloak>
        <?php $this->load->view('website/navbar'); ?>
        <div id="content-section">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Premium Upgrade</li>
                    </ol>
                    <h2 class="text-center">Premium Upgrade</h2>
                    <div class="navy-line"></div>
                    <div class="container">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <form data-ng-submit="changePremium(card)">
                                        <div class="col-lg-12">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <h2>Card Information</h2>
                                            </div>
                                            <div class="col-sm-12 col-md-5 col-lg-6">
                                                <div class="form-group">
                                                    <label for="card-name">Card Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                                        <input placeholder="ex. John Doe" required="" name="cardName" type="text" id="card-name" class="form-control" data-ng-model="card.cardName">
                                                        <!-- <span ng-show="regForm.cardName.$invalid && regForm.cardName.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> -->
                                                        <!-- <span ng-show="!regForm.cardName.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> -->
                                                    </div>
                                                    <!-- <span ng-show="regForm.cardName.$invalid && regForm.cardName.$dirty" style="color: red;">Card Name is required!</span> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="card-number">Card Number</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                                        <input placeholder="ex. 4242424242424242" required="" name="cardNumber" type="text" id="card-number" class="form-control" data-ng-model="card.cardNumber">
                                                        <!-- <span ng-show="regForm.cardNumber.$invalid && regForm.cardNumber.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> -->
                                                        <!-- <span ng-show="!regForm.cardNumber.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> -->
                                                    </div>
                                                    <!-- <span ng-show="regForm.cardNumber.$invalid && regForm.cardNumber.$dirty" style="color: red;">Card Number is required!</span> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="card-password">CVV2</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                        <input ng-minlength="3" required="" name="cvc" type="password" id="card-password" class="form-control" data-ng-model="card.cvc">
                                                        <!-- <span ng-show="regForm.cvc.$invalid && regForm.cvc.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> -->
                                                        <!-- <span ng-show="!regForm.cvc.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> -->
                                                    </div>
                                                    <!-- <span ng-show="regForm.cvc.$invalid && regForm.cvc.$dirty" style="color: red;">CVV2 is required!</span> -->
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-5 col-lg-6">
                                                <div class="form-group">
                                                    <label for="card-month" class="active">Month</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                        <select required="" name="month" data-ng-model="card.month" class="form-control">
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
                                                        <!-- <span ng-show="regForm.month.$invalid && regForm.month.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> -->
                                                        <!-- <span ng-show="!regForm.month.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> -->
                                                    </div>
                                                    <!-- <span ng-show="regForm.month.$invalid && regForm.month.$dirty" style="color: red;">Month is required!</span> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="card-year">Year</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                        <input ng-maxlength="4" placeholder="ex. <?php echo date('Y'); ?>" required="" name="year" type="number" id="card-year" class="form-control" data-ng-model="card.year">
                                                        <!-- <span ng-show="regForm.year.$invalid && regForm.year.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> -->
                                                        <!-- <span ng-show="!regForm.year.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> -->
                                                    </div>
                                                    <!-- <span ng-show="regForm.year.$invalid && regForm.year.$dirty" style="color: red;">Year is required!</span> -->
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-warning pull-right" data-ng-disabled="!card.cardName ||
                                                  !card.cardNumber ||
                                                   !card.cvc ||
                                                   !card.month ||
                                                   !card.year">
                                                        <span data-ng-if="!requesting">Upgrade</span>
                                                        <span data-ng-if="requesting">
                                                            <i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>
                                                            Loading...
                                                        </span>
                                                    </button>
                                                </div>
                                                <br><br>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <toaster-container></toaster-container>
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
        <script type="text/javascript">
            $(document).ready(function () {
                $('#navbar').removeClass('navbar-app').addClass('navbar-default');
                $('.search').fadeIn(100);
                $('.btn-search').fadeIn(100);
            });
        </script>
        <script src="<?php echo asset_url('webapp/js/angular/angular.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/angular-animate/angular-animate.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/toaster/toaster.min.js'); ?>"></script>
        <script>
            var app = angular.module('Upgrade', ['toaster']);

            app.factory('PremiumService', ['toaster', '$http', function (toaster, $http) {
                var PremiumService = {};
//                var BASE_URL = '<?php //echo base_url(); ?>//';
                PremiumService.upgradePremium = function (payload) {
                    return $http.post(BASE_URL + 'api/business/upgradePremium', payload, {cache: true})
                        .then(
                            function (response) {
                                toaster.pop({
                                    type: 'success',
                                    title: 'Success',
                                    body: response.data,
                                    timeout: 3000
                                });
                                console.log(response)
                            },
                            function (response) {
                                toaster.pop({
                                    type: 'error',
                                    title: 'Error',
                                    body: response.data,
                                    timeout: 3000
                                });
                            }
                        );
                };
                return PremiumService;
            }]);

            app.controller('PremiumController', ['PremiumService', '$scope', function (PremiumService, $scope) {
               $scope.businessId ='<?php echo $_GET['business_id']; ?>';
               $scope.permalink ='<?php echo $permalink; ?>';
               $scope.accountId ='<?php echo $accountId; ?>';
               $scope.requesting = false;
               $scope.card = {
                   cardName: '',
                   cardNumber: '',
                   cvc: '',
                   month: '',
                   year: ''
               };

               $scope.changePremium = function (card) {
                   $scope.requesting = true;
                   Stripe.card.createToken({
                       number: card.cardNumber,
                       exp_month: card.month,
                       exp_year: card.year,
                       cvc: card.cvc
                   }, function (status, stripeResponse) {
                       card.token = stripeResponse.id;
                       card.businessId = $scope.businessId;
                       card.accountId = $scope.accountId;
                       PremiumService.upgradePremium(card)
                           .then(function () {
                               $scope.card = {
                                   cardName: '',
                                   cardNumber: '',
                                   cvc: '',
                                   month: '',
                                   year: ''
                               };
                               $scope.requesting = false;
                               window.location = '<?php echo base_url(); ?>' + $scope.permalink;
                           });
                   });
               };
            }]);
        </script>
        <script src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
    </body>