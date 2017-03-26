<!DOCTYPE html>
<html lang="en" data-ng-app="financial">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
    <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
    <meta name="author" content="troy rushton">
    <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">
    <link rel="text/stylesheet" href="<?php echo asset_url('website/css/style.css'); ?>">
    <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">

    <title>Financial | Terrigal</title>
    <?php $this->load->view('website/analytics'); ?>
    <?php $this->load->view('search/search-css'); ?>
</head>

<body id="search-results" data-ng-controller="SearchController" data-ng-cloak>
<?php $this->load->view('website/navbar'); ?>
<div id="content-section">
    <div class="row">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active">Financial</li>
            </ol>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-ms-12">
                            <div class="border-bottom-black"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <br>
                <div class="{{listClass}}" style="min-height: 500px;">
                    <treasure-overlay-spinner active='spinner.active'>
                        <div class="card" data-ng-if="resultTotal == 0 && !spinner.active">
                            <div class="card-block">
                                <div class="row valign-wrapper">
                                    <div class="col-sm-12">
                                        <h3>No Results Found :(</h3>
                                        <div class="border-bottom-black nopadding no-margin">

                                        </div>
                                        <ul>
                                            <li>Check the spelling.</li>
                                            <li>Check if the category was correct.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-hoverable" data-ng-click="viewReult(business.businessId, business.businessSocialMedia, (business.businessPermalink ? business.businessPermalink : business.businessName), (business.businessPermalink ? 'permalink' : 'name'))" data-ng-repeat="business in claimed">
                            <div class="card-block">
                                <div class="row no-margin">
                                    <div class="col-sm-12 col-md-2 text-center">
                                        <div class="frame" style="background-color: {{business.businesslogoBackround}}">
                                            <img data-ng-src="{{(business.businessLogo)}}" style="max-height: 80px;" class="center img-responsive"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 ellipsis busines-dettails-div">
                                        <h5 class="bold no-margin">{{business.businessName}}</h5>
                                        <p class="font-13 no-margin ">{{business.businessTag}}</p>
                                        <ng-rate-it max="5" ng-model="businness.businessRating" read-only="true"></ng-rate-it>
                                        <a class="font-13 no-margin "><i class="fa fa-map-marker fa-fw"></i> {{business.businessAddress1}} {{business.businessCity}} {{business.businessPostal}} {{business.businessState}}</a>
                                    </div>
                                    <div class="col-sm-12 col-md-4 business-contact-div">
                                        <a href="tel:{{business.businessContactNo}}" style="font-size: 13px;"><i class="fa fa-phone fa-fw outline-circle"></i> {{business.businessContactNo}}</a><br>
                                        <a href="mailto:{{business.businessEmailAddress}}" style="font-size: 13px;"><i class="fa fa-envelope fa-fw outline-circle"></i> Email Address </a><br>
                                        <a data-ng-href="{{business.businessWebsite}}" target="_blank" style="font-size: 13px;"><i class="fa fa-globe fa-fw outline-circle"></i> Website </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div data-ng-if="business.businessSocialMedia != ''" onrender="rendered()" class="fb-like" data-href="{{business.businessSocialMedia}}" data-layout="standard" data-width="260" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                <div data-ng-if="!business.businessSocialMedia">
                                    <button class="fb-btn-disabled">
                                        <i class="fa fa-thumbs-up fa-fw"></i> Like
                                    </button>
                                    <button class="fb-btn-disabled">
                                        Share
                                    </button>
                                </div>
                            </div>
                        </div>
                        <span data-ng-if="currentPage == 1">
                            <br>
                            <div class="border-top-black nopadding"></div>
                            <br>
                        </span>
                        <div class="card card-hoverable" data-ng-click="viewReult(business.businessId, business.businessSocialMedia, (business.businessPermalink ? business.businessPermalink : business.businessName), (business.businessPermalink ? 'permalink' : 'name'))" data-ng-repeat="business in unclaimed">
                            <div class="card-block">
                                <div class="row no-margin">
                                    <div class="col-sm-12 col-md-2 text-center">
                                        <div class="frame">
                                            <img data-ng-src="{{business.businessLogo}}" style="max-height: 80px;" class="center img-responsive"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 ellipsis busines-dettails-div">
                                        <h5 class="bold no-margin">{{business.businessName}}</h5>
                                        <p class="font-13 no-margin ">{{business.businessTag}}</p>
                                        <ng-rate-it max="5" data-ng-model="businness.businessRating" read-only="true"></ng-rate-it>
                                        <a class="font-13 no-margin "><i class="fa fa-map-marker fa-fw"></i> {{business.businessAddress1}} {{business.businessCity}} {{business.businessPostal}} {{business.businessState}}</a>
                                    </div>
                                    <div class="col-sm-12 col-md-4 business-contact-div">
                                        <a href="tel:" style="font-size: 13px;"><i class="fa fa-phone fa-fw outline-circle"></i> {{business.businessContactNo}}</a><br>
                                        <a href="mailto:" style="font-size: 13px;"><i class="fa fa-envelope fa-fw outline-circle"></i> Email Address </a><br>
                                        <a data-ng-href="" target="_blank" style="font-size: 13px;"><i class="fa fa-globe fa-fw outline-circle"></i> Website </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div>
                                    <button class="fb-btn-disabled">
                                        <i class="fa fa-thumbs-up fa-fw"></i> Like
                                    </button>
                                    <button class="fb-btn-disabled">
                                        Share
                                    </button>
                                </div>
                            </div>
                        </div>
                    </treasure-overlay-spinner>
                    <div class="row" data-ng-if="resultTotal > 10">
                        <div class="col-sm-12">
                            <br>
                            <ul class="list-inline business-pagination">
                                <li data-ng-click="changePage(currentPage - 1, $event)"><a href="#" class="btn-pagination"><i class="fa fa-angle-double-left fa-fw"></i> Prev </a></li>
                                <li data-ng-repeat="page in pages" ng-click="changePage(page, $event)" data-ng-class="currentPage == page ? 'active' : ''"><a href="#" class="btn-pagination">{{page}}</a></li>
                                <li data-ng-click="changePage(currentPage + 1, $event)"><a href="#" class="btn-pagination">Next <i class="fa fa-angle-double-right fa-fw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="{{mapClass}}" id="map-div">
                    <div id="stream-list" data-ng-if="!list">

                        <div id="event-container">
                            <div class="panel-group flat" id="events" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default flat">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h6 class="panel-title">
                                            <a role="button" style="color: #2B2E31; font-size: 20px;" data-toggle="collapse" data-parent="#events" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                Upcoming Events
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse flat in" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <?php
                                                if (!count($events)) {
                                                    ?>
                                                    <div style="padding: 20px;">
                                                        <h4>No Upcoming Events. :(</h4>
                                                    </div>
                                                    <?php
                                                }
                                                foreach ($events as $event) {
                                                    if ($event->event_image != '') {
                                                        ?>
                                                        <a class="card card-block valign-wrapper flat" href="<?php echo base_url() . $event->business_permalink . '/events'; ?>" style="padding-top: 0px; padding-bottom: 0px; border-bottom: solid 1px #ddd; border-top: solid 1px #ddd; box-shadow: none;">
                                                            <div class="col-sm-2 no-margin nopadding box">
                                                                <img class="img-responsive img-stream" src="<?php echo $event->event_image; ?>" alt="Terrigal - <?php echo $event->event_name; ?>"/>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <br>
                                                                <span style="color: #484343;">
                                                                            <p style="padding: 0px; margin: 0px; font-weight: bolder; color: #365899;"><?php echo $event->event_name; ?></p>
                                                                            <p style="margin: 0px;font-size: 12px; line-height: 20px; font-weight: initial;">
                                                                                <?php echo $event->event_description; ?>
                                                                            </p>
                                                                        </span>
                                                                <small class="pull-right" style="color: #BBBBBB;letter-spacing: 0px;">
                                                                    <?php echo $event->eventDate; ?>
                                                                </small>
                                                                <br>
                                                            </div>
                                                        </a>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <a class="card card-block valign-wrapper flat" href="<?php echo base_url() . $event->business_permalink . '/events'; ?>" style="padding-top: 0px; padding-bottom: 0px; border-bottom: solid 1px #ddd; border-top: solid 1px #ddd; box-shadow: none;">
                                                            <div class="col-sm-12">
                                                                <br>
                                                                <span style="color: #484343;">
                                                                            <p style="padding: 0px; margin: 0px; font-weight: bolder; color: #365899;"><?php echo $event->event_name; ?></p>
                                                                            <p style="margin: 0px;font-size: 12px; line-height: 20px; font-weight: initial;">
                                                                                <?php echo $event->event_description; ?>
                                                                            </p>
                                                                        </span>
                                                                <small class="pull-right" style="color: #BBBBBB;letter-spacing: 0px;">
                                                                    <?php echo $event->eventDate; ?>
                                                                </small>
                                                                <br>
                                                            </div>
                                                        </a>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="panel-footer text-right">
                                            <a style="padding-right: 101px;" href="<?php echo base_url('all-events'); ?>">
                                                See all
                                            </a>
                                            <?php
                                            $businesses = $this->Business_Model->getBusinessByUserAccountId($this->session->User_Id);
                                            ?>
                                            Business Owner? &nbsp; &nbsp; <a href="<?php echo base_url(($this->session->User_Id) ? $businesses[0]->business_permalink != '' ? $businesses[0]->business_permalink : dash($businesses[0]->business_name) . '/events?task=addEvent' : 'login') ?>" class="btn btn-xs btn-primary" style="display: inline;">Add Event</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (!$this->session->User_Id) {
    ?>
    <div id="g">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-10">
                    <h3 class="nopadding">Register your business now!</h3>
                </div>
                <div class="col-sm-3 col-md-2">
                    <a href="<?php echo base_url('register'); ?>" class="btn btn-lg btn-outline-grey btn-block"> Register Here</a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php $this->load->view('website/footer'); ?>
<script src="<?php echo asset_url('scripts/helper/app_helpers.js'); ?>"></script>
<script src="<?php echo asset_url('website/js/jquery.min.js'); ?>"></script>
<script src="<?php echo asset_url('website/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo asset_url('modules/easy-autocomplete/dist/jquery.easy-autocomplete.min.js'); ?>"></script>
<script src="<?php echo asset_url('webapp/js/angular/angular.min.js'); ?>"></script>
<script src="<?php echo asset_url('modules/angular-sanitize/angular-sanitize.js'); ?>"></script>
<script src="<?php echo asset_url('modules/angular-animate/angular-animate.min.js'); ?>"></script>
<script src="<?php echo asset_url('modules/angular-input-stars-directive/ng-rateit.js'); ?>"></script>
<script src="<?php echo asset_url('modules/angular-easyfb/src/angular-easyfb.js'); ?>"></script>
<script src="<?php echo asset_url('modules/ngSweetAlert/sweet-alert.min.js'); ?>"></script>
<script src="<?php echo asset_url('modules/ngSweetAlert/SweetAlert.min.js'); ?>"></script>
<script src="<?php echo asset_url('modules/angular-ui-switch/angular-ui-switch.min.js'); ?>"></script>
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDDta0LYcYAt9kSpYK46cAc4RBiqGloxbY&libraries=places" type="text/javascript" ></script>
<script src="<?php echo asset_url('modules/ngmap/build/scripts/ng-map.min.js'); ?>"></script>
<script src="<?php echo asset_url('modules/angular-treasure-overlay-spinner/src/treasure-overlay-spinner.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#navbar').removeClass('navbar-app').addClass('navbar-default');
        $('.search').fadeIn(100);
        $('.btn-search').fadeIn(100);

    });

    var BASE_URL = '<?php echo base_url(); ?>';

    var app = angular.module('financial', [
        'ngMap',
        'ezfb',
        'ngRateIt',
        'uiSwitch',
        'ngSanitize',
        'oitozero.ngSweetAlert',
        'treasure-overlay-spinner']);
    angular.module('financial').run(run);
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
    }

    app.config(function (ezfbProvider) {
        ezfbProvider.setLocale('en_US');

        ezfbProvider.setInitParams({
            appId: FACEBOOK_APP_ID,
            version: 'v2.8'
        });
    });
    app.controller('SearchController', function (ezfb, SweetAlert, $rootScope, $scope, SearchService) {
        $scope.currentPage = 1;
        $scope.pages = [1];
        $scope.resultTotal = 0;
        $scope.keyword = '<?php echo $keyword; ?>';
        $scope.type = '<?php echo $type; ?>';
        $scope.start = 0;
        $scope.limit = 10;
        $scope.list = false;
        $scope.listClass = 'col-sm-12 col-md-12 col-lg-8';
        $scope.mapClass = 'col-sm-12 col-md-12 col-lg-4';
        $scope.results = [];
        $scope.claimed = [];
        $scope.unclaimed = [];
        $scope.streams = [];
        $scope.skipFacebookLogin = '<?php echo ($this->session->Cancel_Facebook ? true : false); ?>';
        $scope.typeSearchClicked = false;

        $scope.$watch('$viewContentLoaded', function () {
            $scope.doSearch();
            getStreams();
        });

        getStreams = function () {
            SearchService.getStreams()
                .then(function (response) {
                    $scope.streams = response;
                });
        };

        $scope.viewReult = function (businessId, businessFacebook, data, type) {
            checkFbUserStatus(businessId, businessFacebook, data, type);
        };

        loadBusiness = function (data, type) {
            if (type == 'name') {
                var permalink = data.replace(/\s+/g, '-');
                window.location = BASE_URL + permalink.toLowerCase();
            } else {
                window.location = BASE_URL + data;
            }
        };

        checkFbUserStatus = function (businessId, businessFacebook, data, type) {
            ezfb.getLoginStatus(function (response) {
                if (response.status == "connected") {
                    getBusinessLikes(businessId, businessFacebook);
                }
            });
            routeBusinessPage(data, type);
        };

        getBusinessLikes = function (businessId, businessFacebook) {
            ezfb.api('/' + businessFacebook + '?fields=fan_count', function (response) {
                if (response && !response.error) {
                    var likes = response.fan_count;
                    if (likes > 0) {
                        updateBusinessLikes(businessId, likes);
                    }
                }
            });
        };

        updateBusinessLikes = function (businessId, likes) {
            SearchService.updateBusinessLikes(businessId, likes)
                .then(function (response) {
                    console.log("Business Likes Updated!");
                });
        };

        routeBusinessPage = function (data, type) {
            loadBusiness(data, type);
        };

        checkFbLoginStatus = function () {
            ezfb.getLoginStatus(function (response) {
                if (response.status !== "connected") {
                    showLoginButton();
                }
            });
        };

        showLoginButton = function () {
            SweetAlert.swal({
                title: "",
                text: "Login to your facebook account to see what your friends are recommending.",
                showCancelButton: true,
                cancelButtonText: "skip",
                confirmButtonColor: "#4267b2;",
                confirmButtonText: "Login with facebook",
                imageUrl: "//www.facebook.com/images/fb_icon_325x325.png"
            }, function (isConfirm) {
                if (isConfirm) {
                    ezfb.login(function (response) {

                    }, {scope: 'email,user_likes'});
                } else {
                    SearchService.cancelFacebookLogin()
                        .then(function () {
                            $scope.skipFacebookLogin = true;
                            console.log("Fcaebook Login Cancel");
                        });
                }
            });
        };

        $scope.selectCategory = function (category) {
            $scope.typeSearchClicked = true;
            $scope.type = category;
            $scope.doSearch();
        };

        $scope.removeTag = function () {
            $scope.typeSearchClicked = false;
            $scope.type = '';
            $scope.doSearch();
        };

        $scope.doSearch = function () {
            if (!$scope.skipFacebookLogin) {
                checkFbLoginStatus();
            }
            if (!$rootScope.spinner.active) {
                $scope.claimed = [];
                $scope.unclaimed = [];
                $('.navbar-collapse').collapse('hide');
                $('#collapseOne').collapse('hide');
                $rootScope.spinner.on();
                var params = {
                    keyword: $scope.keyword,
                    type: $scope.type
                };

                SearchService.search(params, $scope.start, $scope.limit)
                    .then(function (response) {
                        $scope.results = response.businesses;
                        $scope.resultTotal = response.totalResult;
                        separateBusinesses();
                        countPages();
                    }, function (error) {
                        console.log(error);
                    })
                    .then(function () {
                        $rootScope.spinner.off();
                        $('html, body').animate({scrollTop: 0}, 300);
                    });
            }
        };

        $scope.changePage = function (pageNo, $event) {
            if ((pageNo != $scope.currentPage) && (pageNo > 0 && pageNo < 11)) {
                $event.preventDefault();
                $scope.currentPage = pageNo;

                var start = (10 * pageNo) - 10;

                start += (pageNo > 1 ? 1 : 0);

                $scope.start = start;
                $scope.doSearch();
            }
        };

        countPages = function () {
            var pages = Math.floor($scope.resultTotal / 10);
            if (pages > 10) {
                $scope.pages = [];
                for (var counter = 1; counter < 11; counter++) {
                    $scope.pages.push(counter);
                }
            } else {
                $scope.pages = [];
                for (var counter = 1; counter < pages; counter++) {
                    $scope.pages.push(counter);
                }
            }
        };

        $scope.submitSearchForm = function ($event, keyword) {
            $event.preventDefault();
            $scope.keyword = keyword;
            $scope.doSearch();
        };

        separateBusinesses = function () {
            $scope.claimed = [];
            $scope.unclaimed = [];
            angular.forEach($scope.results, function (data) {
                if (data.businessClaimed == 1) {
                    $scope.claimed.push(data);
                } else {
                    $scope.unclaimed.push(data);
                }
            });
        };

        $scope.changeView = function () {
            var width = $(window).width();
            if (width < 1200) {
                if (!$scope.list) {
                    $scope.listClass = 'col-sm-12 col-md-12 col-lg-8';
                    $scope.mapClass = 'col-sm-12 col-md-12 col-lg-4';
                    $scope.detailsClass = 'col-md-7';
                    $scope.contactClass = 'col-md-3';
                } else {
                    $scope.mapClass = 'col-sm-12 col-md-12 col-lg-7';
                    $scope.listClass = 'col-sm-12 col-md-12 col-lg-5 hide-div';
                }
            } else {
                if (!$scope.list) {
                    $scope.listClass = 'col-sm-12 col-md-12 col-lg-8';
                    $scope.mapClass = 'col-sm-12 col-md-12 col-lg-4';
                    $scope.detailsClass = 'col-md-7';
                    $scope.contactClass = 'col-md-3';
                } else {
                    $scope.mapClass = 'col-sm-12 col-md-12 col-lg-7';
                    $scope.listClass = 'col-sm-12 col-md-12 col-lg-5';
                }
            }
        };
    })

        .directive('icheck', ['$timeout', '$parse', function ($timeout, $parse) {
            return {
                restrict: 'A',
                require: '?ngModel',
                link: function (scope, element, attr, ngModel) {
                    $timeout(function () {
                        var value = attr.value;

                        function update(checked) {
                            if (attr.type === 'radio') {
                                ngModel.$setViewValue(value);
                            } else {
                                ngModel.$setViewValue(checked);
                            }
                        }

                        $(element).iCheck({
                            checkboxClass: attr.checkboxClass || 'icheckbox_square-green',
                            radioClass: attr.radioClass || 'iradio_square-green'
                        }).on('ifChanged', function (e) {
                            scope.$apply(function () {
                                update(e.target.checked);
                            });
                        });

                        scope.$watch(attr.ngChecked, function (checked) {
                            if (typeof checked === 'undefined')
                                checked = !!ngModel.$viewValue;
                            update(checked);
                        }, true);

                        scope.$watch(attr.ngModel, function (model) {
                            $(element).iCheck('update');
                        }, true);

                    });
                }
            };
        }])

        .factory('SearchService', ['$http', function ($http) {
            return {
                search: function (values, start, limit) {
                    var params = 'business=' + values.keyword + '&type=' + values.type + '&start=' + start + '&limit=' + limit;
                    return $http.get(BASE_URL + 'api/search?' + params).then(function (response) {
                        var result = {
                            businesses: [],
                            totalResult: response.data.total_result,
                            totalBusinesses: response.data.total_businesses
                        };

                        angular.forEach(response.data.data_result, function (data) {
                            result.businesses.push({
                                businessId: data.business_id,
                                businessName: data.business_name,
                                businessTag: data.business_tag,
                                businessDescription: data.business_description,
                                businessType: data.business_type_name,
                                businessEmailAddress: data.business_email,
                                businessContactNo: data.business_contact_no,
                                businessWebsite: data.business_website,
                                businessSocialMedia: data.business_social,
                                businessAddress1: data.address_1,
                                businessAddress2: data.address_2,
                                businessPermalink: data.business_permalink,
                                businessCity: data.city,
                                businessCountry: data.country,
                                businessPostal: data.postal_code,
                                businessState: data.state,
                                businesslogoBackround: data.business_logo_background,
                                businessOwner: data.user_firstname + ' ' + data.user_lastname,
                                businessOwnerId: data.account_id,
                                businessLogo: (data.business_logo) ? data.business_logo : (data.business_claim_status != "1") ? '<?php echo asset_url('website/img/default-placeholder.png') ?>' : '<?php echo asset_url('website/img/comming-soon-logo.jpg') ?>',
                                businessCoverPhoto: (data.business_cover_photo) ? data.business_cover_photo : 'assets/images/default-placeholder.png',
                                businessClaimed: data.business_claim_status,
                                businessRating: data.business_rating
                            });
                        });
                        return result;
                    });
                },
                getStreams: function () {
                    return $http.get(BASE_URL + 'api/stream',{cache: true})
                        .then(function (response) {
                            return response.data;
                        });
                },
                cancelFacebookLogin: function () {
                    return $http.post(BASE_URL + 'api/authenticate/cancelFacebookLogin',{cache: true})
                        .then(function (response) {
                            return response.data;
                        });
                },
                updateBusinessLikes: function (businessId, likes) {
                    return $http.get(BASE_URL + 'api/business/updateBusinessLikes?business_id=' + businessId + '&likes=' + likes, {cache: true})
                        .then(function (response) {
                            return response.data;
                        });
                }
            };
        }
        ]);
</script>
<script>
    $(document).ready(function () {
        $('#navbar').removeClass('navbar-app').addClass('navbar-default');
        $('.search').fadeIn(100);
        $('.btn-search').fadeIn(100);

        var offset = 500;
        var duration = 300;
        $(window).scroll(function () {
            if ($(this).scrollTop() > offset) {
                $('.back-to-top').fadeIn(duration);
            } else {
                $('.back-to-top').fadeOut(duration);
            }
        });

        $('.back-to-top').click(function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, duration);
            return false;
        });
    });
</script>
<script src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
<script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
</body>
</html>
