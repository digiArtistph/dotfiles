<?php
    if(! $userAccess){
        redirect('/home', 'refresh');
    }
?>
<!DOCTYPE html>
<html lang="en" ng-app="Profile">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="socially rewarding, contact us, terrigal, business, listing, directory, free, local"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>Profile | Terrigal</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">

        <link href="<?php echo asset_url('modules/angular-wizard/angular-wizard.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/toaster/toaster.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/ui-cropper/compile/minified/ui-cropper.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
        <style>
            #msg{
                resize: none;
                height: 180px;
            }

            .about-us-textarea {
                height: 300px !important;
            }
        </style>
    </head>

    <body data-ng-controller="ProfileController" data-ng-cloak>
        <?php $this->load->view('website/navbar.php'); ?>
        <div id="content-section">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Business Profile</li>
                    </ol>
                    <h2 class="text-center">Set Up Business Profile</h2>
                    <div class="navy-line"></div>
                    <br>
                    <wizard edit-mode="true" on-finish="finishedWizard()" indicators-position="top">
                        <br>
                        <form name="regForm">
                        <wz-step wz-title="Business Logo">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                <center>
                                                    <!-- <h2>Upload Business Logo</h2>
                                                    <span data-ng-hide="image">
                                                        <img src="<?php echo asset_url('website/img/addphoto.png')?>" class="business-logo-image">
                                                    </span>
                                                    <span data-ng-show="image">
                                                        <div data-ng-show="crop">
                                                            <div style=" background: #E4E4E4; overflow: hidden; width:1000px; height:400px;">
                                                                <ui-cropper image="image" area-type="rectangle" result-image="cropLogo"></ui-cropper>
                                                            </div>
                                                        </div>
                                                        <div data-ng-show=" ! crop" style="width:1000px; height:400px;">
                                                            <img ngf-thumbnail="image" class="business-logo-image" style="width:500px; height:400px;">
                                                        </div>
                                                        <br>
                                                        <br>
                                                        {{image.name}}
                                                        <br>
                                                        <br>
                                                        <a data-ng-if="crop" href="" data-ng-click="changeCrop()">Skip Cropping</a>
                                                        <a data-ng-if=" ! crop" href="" data-ng-click="changeCrop()">Crop</a>
                                                    </span> -->
                                                    <h2 style="box-shadow: box-shadow: 5px 5px 5px #999; color: #f36e1f;"><strong>Grab their attention
                                                        by uploading your 
                                                        Business Logo now!</strong></h2>
                                                    <h3>Upload Business Logo</h3>
                                                    <h4>I'm feeling lazy right now, I'll upload my logo later<br/>
                                                    <button class="btn btn-link btn-xs" wz-next data-ng-click="updateBusinessLogo(image, cropLogo)" data-ng-disabled="image">
                                                    Skip upload logo
                                                    </button></h4>
                                                    

                                                    <span data-ng-hide="image">
                                                        <img src="<?php echo asset_url('website/img/addphoto.png')?>" class="business-logo-image">
                                                    </span>
                                                    <span data-ng-show="image">
                                                        <div data-ng-show="crop">
                                                            <div style=" background: #E4E4E4; overflow: hidden; width:1000px; height:400px;">
                                                                <ui-cropper image="image" area-type="rectangle" result-image="cropLogo"></ui-cropper>
                                                            </div>
                                                        </div>
                                                        <div data-ng-show=" ! crop" style="width:1000px; height:400px;">
                                                            <img ngf-thumbnail="image" class="business-logo-image" style="width:500px; height:400px;">
                                                        </div>
                                                        <br>
                                                        <br>
                                                        {{image.name}}
                                                        <br>
                                                        <br>
                                                        <a data-ng-if="crop" href="" data-ng-click="changeCrop()">Skip Cropping</a>
                                                        <a data-ng-if=" ! crop" href="" data-ng-click="changeCrop()">Crop</a>
                                                    </span>

                                                </center>
                                                <br>

                                                <center>
                                                    <h4>Please use the image file which is in 
                                                    .JPG, .PNG, and .JPEG file format.<br/>
                                                    Recommended image size is 200x200 resolution</h4>
                                                    <button ngf-select data-ng-model="image" class="btn btn-orange">Browse</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                <button class="btn btn-primary pull-right" wz-next data-ng-click="updateBusinessLogo(image, cropLogo)">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </wz-step>
                        <wz-step wz-title="Business Cover">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                <center>
                                                <h2 style="box-shadow: box-shadow: 5px 5px 5px #999; color: #f36e1f;"> 
                                                        <strong>Be more noticeable online by making your banner stands out from the rest</strong></h2>
                                                    <h3>Upload Business Cover</h3>
                                                    <h4>I'm feeling lazy right now, I'll upload my Cover later<br/>
                                                    <button class="btn btn-link btn-xs " wz-next data-ng-click="updateBusinessCover(coverImage, cropCover)" data-ng-disabled="coverImage">
                                                    Skip upload Cover
                                                    </button></h4>

                                                    <span data-ng-hide="coverImage">
                                                        <img class="business-cover-image"><br>
                                                        <!-- <img class="business-cover-image" src="<?php echo asset_url('website/img/addphoto.png')?>" > -->
                                                    </span>
                                                    <span data-ng-show="coverImage">
                                                        <div data-ng-show="crop">
                                                            <div style=" background: #E4E4E4; overflow: hidden; width:1000px; height:400px;">
                                                                <ui-cropper image="coverImage" area-type="rectangle" result-image="cropCover"></ui-cropper>
                                                            </div>
                                                        </div>
                                                        <div data-ng-show=" ! crop">
                                                            <img ngf-thumbnail="coverImage" class="business-logo-image" style="width:1000px; height:400px;">
                                                        </div>
                                                        <br>
                                                        <br>
                                                        {{image.name}}
                                                        <br>
                                                        <br>
                                                        <a data-ng-if="crop" href="" data-ng-click="changeCrop()">Skip Cropping</a>
                                                        <a data-ng-if=" ! crop" href="" data-ng-click="changeCrop()">Crop</a>
                                                    </span>
                                                </center>
                                                <br><br>
                                                <center>
                                                    <h4>Please use the image file which is in 
                                                    .JPG, .PNG, and .JPEG file format.<br/>
                                                    Recommended image size is 1000x400 resolution</h4>
                                                    <button ngf-select data-ng-model="coverImage" class="btn btn-orange">Browse image</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                <button class="btn btn-primary" wz-previous>Back</button>
                                                <button class="btn btn-primary pull-right" wz-next data-ng-click="updateBusinessCover(coverImage, cropCover)">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </wz-step>
                        <wz-step wz-title="Business Info">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                <center>
                                                    <h2>Business Info</h2>
                                                    
                                                </center>
                                                <p style="color: #f36e1f;"><strong>Please fill up Business Infomation</strong></p>
                                                <p></p>
                                                <div class="col-lg-4">
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.telephone.$invalid,'has-error': regForm.telephone.$invalid && regForm.telephone.$dirty }">
                                                        <label>Telephone</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                                            <input ng-pattern="phoneNumberPattern" type="text" name="telephone" data-ng-model="info.telephone" class="form-control" placeholder="ex. (03) 5398 2024" required="">
                                                            <span ng-show="regForm.telephone.$invalid && regForm.telephone.$dirty" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.telephone.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.telephone.$invalid && regForm.telephone.$dirty" style="color: red;">Valid telephone is required</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.email.$invalid,'has-error': regForm.email.$invalid && regForm.email.$dirty }">
                                                        <label>Email</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                                            <input ng-pattern="emailPattern" required="" name="email" type="email" data-ng-model="info.email" class="form-control" placeholder="ex. email@email.com" data-ng-blur="emailExist()">
                                                            <span ng-show="regForm.email.$invalid && regForm.email.$dirty && info.emailExist" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.email.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.email.$invalid && regForm.email.$dirty" style="color: red;">Valid email is required</span>
                                                        <span ng-show="info.emailExist" style="color: red;">Email already exist</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Facebook page</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-facebook fa-fw"></i></span>
                                                            <input type="text" data-ng-model="info.facebook" class="form-control" placeholder="ex. https://www.facebook.com/terrigalcomau/">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.website.$invalid,'has-error': regForm.website.$invalid && regForm.website.$dirty }">
                                                        <label>Website</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-globe fa-fw"></i></span>
                                                            <input ng-pattern="websitePattern" name="website" required="" type="text" data-ng-model="info.website" class="form-control" placeholder="ex. https://www.terrigal.com.au/">
                                                            <span ng-show="regForm.website.$invalid && regForm.website.$dirty && info.websiteExist" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.website.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.website.$invalid && regForm.website.$dirty" style="color: red;">Valid website is required</span>
                                                    </div>
                                                    <!-- <label>Address:</label> -->
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.street.$invalid,'has-error': regForm.street.$invalid && regForm.street.$dirty }">
                                                        <label>Street</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-street-view fa-fw"></i></span>
                                                            <input name="street" required="" type="text" data-ng-model="info.street" class="form-control" placeholder="ex. 28 Ena St" >
                                                            <span ng-show="regForm.street.$invalid && regForm.street.$dirty && info.streetExist" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.street.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.street.$invalid && regForm.street.$dirty" style="color: red;">Street is required</span>
                                                    </div>
                                                    <div class="form-group" ng-class="{ 'has-success': !regForm.postcode.$invalid,'has-error': regForm.postcode.$invalid && regForm.postcode.$dirty }">
                                                        <label>Post code</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-area-chart fa-fw"></i></span>
                                                            <input required="" name="postcode" type="number" data-ng-model="info.postcode" class="form-control" placeholder="ex.2260" style="-webkit-apperance: none; -moz-appearance:textfield; margin: 0;">
                                                            <span ng-show="regForm.postcode.$invalid && regForm.postcode.$dirty && info.postcodeExist" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span ng-show="!regForm.postcode.$invalid" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                        </div>
                                                        <span ng-show="regForm.postcode.$invalid && regForm.postcode.$dirty" style="color: red;">Valid post code is required</span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="description" data-ng-model="info.description" class="form-control about-us-textarea" placeholder="Highlight the vital points and what your business has to offer.
                                                            " required=""></textarea>
                                                        </div>
                                                        <span ng-show="regForm.description.$invalid && regForm.description.$dirty" style="color: red;">Please describe your business to us</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                <button class="btn btn-primary" wz-previous>Back</button>
                                                <button class="btn btn-primary pull-right" wz-next data-ng-click="updateBusinessInfo(info)" data-ng-disabled="!info.telephone || !info.email || !info.website || !info.description">Done</button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </wz-step>
                        </form>
                    </wizard>
                </div>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <toaster-container></toaster-container>
        <?php $this->load->view('website/footer'); ?>
        <?php $this->load->view('website/analytics'); ?>
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
        <script src="<?php echo asset_url('modules/angular-wizard/angular-wizard.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/ng-file/ng-file-upload.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/ui-cropper/compile/minified/ui-cropper.js'); ?>"></script>
        <script>
            var app = angular.module('Profile', ['uiCropper', 'ngFileUpload', 'mgo-angular-wizard', 'toaster', 'ngAnimate']);

            app.factory('ProfileService', ['Upload', 'toaster', '$http', function (Upload, toaster, $http) {
                var ProfileService = {};
//                var BASE_URL = '<?php //echo base_url(); ?>//';
                ProfileService.updateBusinessLogo = function (payload) {
                    return Upload.upload({url: BASE_URL + 'api/business/updateBusinessLogo', data: payload})
                        .then(
                            function (response) {
                                toaster.pop({
                                    type: 'success',
                                    title: 'Success',
                                    body: 'Success',
                                    timeout: 3000
                                });
//                                console.log(response)
                            },
                            function (response) {
                                toaster.pop({
                                    type: 'error',
                                    title: 'Error',
                                    body: 'Something went wrong!',
                                    timeout: 3000
                                });
                            }
                        );
                };
                ProfileService.updateBusinessCover = function (payload) {
                    return Upload.upload({url: BASE_URL + 'api/business/updateBusinessCover', data: payload})
                        .then(
                            function (response) {
                                toaster.pop({
                                    type: 'success',
                                    title: 'Success',
                                    body: 'Success',
                                    timeout: 3000
                                });
//                                console.log(response)
                            },
                            function (response) {
                                toaster.pop({
                                    type: 'error',
                                    title: 'Error',
                                    body: 'Something went wrong!',
                                    timeout: 3000
                                });
                            }
                        );
                };
                ProfileService.updateBusinessInfo = function (data) {
                    var payload = {
                        telephoneNumber: data.telephone,
                        email: data.email,
                        facebook: data.facebook,
                        website: data.website,
                        description: data.description,
                        address: data.address,
                        businessId: data.businessId,
                        businessAddressId: data.businessAddressId
                    };
                    return $http.post(BASE_URL + 'api/business/updateBusinessProfile', payload, {cache: true})
                        .then(
                            function (response) {
                                toaster.pop({
                                    type: 'success',
                                    title: 'Success',
                                    body: 'Success',
                                    timeout: 3000
                                });
//                                console.log(response)
                            },
                            function (response) {
                                toaster.pop({
                                    type: 'error',
                                    title: 'Error',
                                    body: 'Something went wrong!',
                                    timeout: 3000
                                });
                            }
                        );
                };
                return ProfileService;
            }])
            .service('CheckMail', ['$q', '$http', function($q, $http) {

                        var _isExist = function(emailAccnt) {
                            var deferred = $q.defer(),
                            promise = deferred.promise;

                            $http.get(BASE_URL + 'api/account/check_email/business?email=' + emailAccnt).then(function(data) {
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
                    }]);;

            app.controller('ProfileController', ['Upload', 'ProfileService', '$scope', '$rootScope', 'CheckMail', function (Upload, ProfileService, $scope, $rootScope, CheckMail) {
                $scope.crop = true;
                $scope.image = null;
                $scope.cropLogo = null;
                $scope.businessId = '<?php echo $businessId; ?>';
                $scope.businessAddressId = '<?php echo $businessAddressId; ?>';
                $scope.businessName = '<?php echo $businessName; ?>';
                $scope.permalink = '<?php echo $permalink; ?>';
                $scope.info = {
                    telephone: '',
                    email: '',
                    facebook: '',
                    website: '',
                    address: '',
                    description: '',
                    street: '',
                    postcode: '',
                    emailExist: false
                };

                $scope.phoneNumberPattern = (function() {
                    var regexp = /^\(?(\d{2})\)?[ .-\s]?(\d{4})[ .-\s]?(\d{4})$/;
                    return {
                        test: function(value) {
                            if( $scope.requireTel === false ) {
                                return true;
                            }
                            return regexp.test(value);
                        }
                    };
                })();

                $scope.websitePattern = (function() {
                    var regexp = /https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/;
                    return {
                        test: function(value) {
                            if( $scope.requireTel === false ) {
                                return true;
                            }
                            return regexp.test(value);
                        }
                    };
                })();

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

                $scope.emailExist = function() {
                    CheckMail.isExist($scope.info.email).success(function(data) {
                        $scope.info.emailExist = true;
                        if(data.isEmailExists == true)
                            $scope.info.emailExist = true;
                        else
                            $scope.info.emailExist = false;
                    });
                };

                $scope.changeCrop = function(){
                    $scope.crop = !$scope.crop;
                };

                $scope.updateBusinessLogo = function (image, cropImage) {
                    if (image !== null) {
                        if($scope.crop){
                            image = Upload.dataUrltoBlob(cropImage, image.name);
                        }
                        var payload = {
                            image: image,
                            data:{
                                id: $scope.businessId,
                                name: $scope.businessName,
                                logoBackground: '#FFF'
                            }
                        };
                        ProfileService.updateBusinessLogo(payload)
                            .then(function () {
                                $scope.image = null;
                                $scope.cropLogo = null;
                            });
                    }
                };

                $scope.updateBusinessCover = function (image, cropImage) {
                    if (image !== null) {
                        if($scope.crop){
                            image = Upload.dataUrltoBlob(cropImage, image.name);
                        }
                        var payload = {
                            file: image,
                            business_id: $scope.businessId,
                            business_name: $scope.businessName
                        };
                        ProfileService.updateBusinessCover(payload)
                            .then(function () {
                                $scope.image = null;
                                $scope.cropLogo = null;
                        });
                    }
                };

                $scope.updateBusinessInfo = function (data) {
                    data.businessAddressId = $scope.businessAddressId;
                    data.businessId = $scope.businessId;
                    data.address = data.street + " " + data.postcode;

                    console.log("data >> ", JSON.stringify(data));

                    ProfileService.updateBusinessInfo(data)
                        .then(function () {
                            $scope.info = {
                                telephone: '',
                                email: '',
                                facebook: '',
                                website: '',
                                address: '',
                                description: '',
                                street: '',
                                postcode:''
                            };
                            window.location = '<?php echo base_url(); ?>' + $scope.permalink;
                        });
                };
            }]);
        </script>
        <script src="<?php echo asset_url('scripts/controller/ContactUsController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
    </body>
</html>