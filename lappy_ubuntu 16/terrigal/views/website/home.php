<!DOCTYPE html>
<html lang="en" data-ng-app="Home">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <meta property="og:image" content="<?php echo asset_url('website/img/logo-text.png'); ?>">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">
        <title>Terrigal</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/custom-icon.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/mobile.css'); ?>" rel="stylesheet">
    </head>
    <body data-ng-cloak>
        <?php $this->load->view('website/navbar'); ?>
        <div id="h">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6 col-md-offset-2 centered">
                        <h1>Socially Rewarding</h1>
                        <h2>See what your friends are recommending in Terrigal.</h2>
                        <div data-ng-controller="IndexController" class="mtb">

                            <form id="indexSearchForm" role="form" action="<?php echo base_url('search'); ?>" method="GET" enctype="plain">
                                <input id="basic" class="search-input" type="search" name="keyword" class="search-input" style="width: 580px; border-radius: 0px;" placeholder="What are you looking for?" autofocus="autofocus"/>
                                <button class='btn btn-conf btn-blue' style="border-radius: 50px;" type="submit">
                                    <i class="ion-ios-search"></i> Search
                                </button>
                            </form>
                            
                           <!--  <form id="indexSearchForm" class="" role="form" action="<?php echo base_url('search'); ?>" method="GET" enctype="plain">
                                <input id="basic" class="form-control search-input" type="search" name="keyword" style="height: 53px; width: 580px;" placeholder=" What are you looking for? " autofocus="autofocus">
                                <div class="float-right">
                                <button class="btn btn-conf btn-blue" style="border-radius: 50px;" type="submit">
                                    
                                    <i class="ion-ios-search">Search</i> 
                                   
                                </button>
                                 </div>
                            </form> -->



                        </div>
                    </div>
                </div>
            </div>
            <i id="scroll-left" class="fa fa-chevron-left fa-2x hidden-lg slide-arrow-left"></i>
            <i id="scroll-right" class="fa fa-chevron-right fa-2x hidden-lg slide-arrow-right"></i>
            <nav id="nav-cat">
                <form class="categories-slick-slider">
                    <div>
                        <a href="<?php echo base_url('food'); ?>" style="background-color: transparent !important; outline: none; border:  0px; "  type="submit" name="type" value="Food" class="cat-link">
                            <i class="fa fa-cutlery fa-2x"></i>
                            <br>
                            <span>Food</span>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo base_url('accommodation'); ?>" style="background-color: transparent !important; outline: none; border:  0px; "  type="submit" name="type" value="Accommodation" class="cat-link">
                            <i class="fa fa-hotel fa-2x"></i>
                            <br>
                            <span>Accommodation</span>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo base_url('services'); ?>" style="background-color: transparent !important; outline: none; border:  0px; "  type="submit" name="type" value="Services" class="cat-link">
                            <i class="fa fa-truck fa-2x"></i>
                            <br>
                            <span>Services</span>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo base_url('retailer'); ?>" style="background-color: transparent !important; outline: none; border:  0px; "  type="submit" name="type" value="Retailer" class="cat-link">
                            <i class="fa fa-tag fa-2x"></i>
                            <br>
                            <span>Retailer</span>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo base_url('real-estate'); ?>" style="background-color: transparent !important; outline: none; border:  0px; "  type="submit" name="type" value="Real Estate" class="cat-link">
                            <i class="fa fa-home fa-2x"></i>
                            <br>
                            <span>Real Estate</span>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo base_url('sports'); ?>" style="background-color: transparent !important; outline: none; border:  0px; "  type="submit" name="type" value="Sports" class="cat-link">
                            <i class="fa fa-dribbble fa-2x"></i>
                            <br>
                            <span>Sports</span>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo base_url('fitness'); ?>" style="background-color: transparent !important; outline: none; border:  0px; "  type="submit" name="type" value="Fitness" class="cat-link">
                            <i class="fa fa-bicycle fa-2x"></i>
                            <br>
                            <span>Fitness</span>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo base_url('financial'); ?>" style="background-color: transparent !important; outline: none; border:  0px; "  type="submit" name="type" value="Financial" class="cat-link">
                            <i class="fa fa-dollar fa-2x"></i>
                            <br>
                            <span>Financial</span>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo base_url('events'); ?>" style="background-color: transparent !important; outline: none; border:  0px; "  type="submit" name="type" value="Events" class="cat-link">
                            <i class="fa fa-calendar fa-2x"></i>
                            <br>
                            <span>Events</span>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo base_url('medical'); ?>" style="background-color: transparent !important; outline: none; border:  0px; "  type="submit" name="type" value="Medical" class="cat-link">
                            <i class="fa fa-medkit fa-2x"></i>
                            <br>
                            <span>Medical</span>
                        </a>
                    </div>
                </form>
            </nav>
        </div>
        <div class="container ptb" id="about-us">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center border-after">How it works</h2>
                    <div class="navy-line"></div>
                    <p class="mt text-center">Terrigal.com.au is a “Socially Rewarding” business directory and local information network that seeks to provide the best recommendations for any service, retail, accommodation or restaurant within 15km of Terrigal beach. Developed by a Terrigal local, businesses can join the network but their ranking is based on social "likes" not their wallet, so we can be sure that we are always recommending the best service!As customers search Terrigal.com.au for your product or service, they can see which of their Facebook friends have liked or checked into your Facebook business page – nothing beats a trusted word-of-mouth referral! </p>
                    <br>
                    <br>
                    <p class="text-center">
                        Take advantage of the early registration discounts and save 66%. <br>
                        <a href="<?php echo base_url('free-registration'); ?>">Register here</a> to secure your business place or give us a call anytime on (02) 80075521
                    </p>
                    <br><br>
                    <div class="row text-center">
                        <div class="col-md-4 md-margin-bottom-50">
                            <i class="icon-custom icon-lg rounded-x icon-color-blue icon-line icon-finance-118"></i>
                            <h2 class="services-title margin-bottom-15">Socially rewarding</h2>
                            <p>Customers who value the service of a business can give them a social media "like" or Terrigal.com.au to improve their rank!</p>
                        </div>
                        <div class="col-md-4 flat-service md-margin-bottom-50">
                            <i class="icon-custom icon-lg rounded-x icon-color-blue icon-line icon-real-estate-027"></i>
                            <h2 class="services-title margin-bottom-15">Near me</h2>
                            <p>Using the power of Google maps, we can recommend the best service closest to a particular location!</p>
                        </div>
                        <div class="col-md-4 flat-service">
                            <i class="icon-custom icon-lg rounded-x icon-color-blue icon-line icon-finance-258"></i>
                            <h2 class="services-title margin-bottom-15">Experience</h2>
                            <p>Businesses can provide a promo video of their so that potential customers can get an idea of their service before they use it!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sep">
            <div class="container">
                <div class="row centered">
                    <div class="col-md-12">
                        <h1 style="color: #fff;">List your business and connect with facebook to see what your friends are recommending.</h1>
                        <div class="navy-line"></div>
                        <a href="<?php echo base_url('premium'); ?>" class="btn btn-conf-2 btn-blue">
                            <strong>Premium Listing</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container ptb">
            <div class="row centered">
                <h2 class="text-center border-after">Top Rank Businesses</h2>
                <div class="navy-line"></div>
                <br><br><br>
                <div class="row no-margin">
                    <?php
                    foreach ($featured_businesses as $business) {
                        ?>
                        <div class="col-sm-12 col-md-6 col-lg-6" >
                            <a class="card" href="<?php echo base_url(($business->business_permalink ? $business->business_permalink : strtolower(dash($business->business_name)))); ?>">
                                <img class="card-img-top" src="<?php echo $business->business_cover_photo; ?>" style="height: 200px;" alt="Card image cap">
                                <div class="card-block text-left" style="min-height: 150px;">
                                    <h4 class="card-title text-left"><?php echo $business->business_name; ?></h4>
                                    <p class="card-text text-left"><?php echo $business->business_tag; ?></p>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div> -->

            <div class="container ptb">
            <div class="row centered">
                <h2 class="text-center border-after">Top Rank Businesses</h2>
                <div class="navy-line"></div>
                <br><br><br>
                <div class="row no-margin">
                    <?php
                    foreach ($featured_businesses as $business) {
                        ?>

                            <?php if ($business->business_cover_photo !== ""): ?>
                                <div class="col-sm-12 col-md-6 col-lg-6" >
                                    <a class="card" href="<?php echo base_url(($business->business_permalink ? $business->business_permalink : strtolower(dash($business->business_name)))); ?>">

                                        <?php if ($business->business_id == "uf0FqF5AOo8946vB0MgisFNQhVzBTp"): ?>
                                            <img class="card-img-top" style="height: 200px;" alt="Card image cap"
                                            src="data:image/png;base64,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">
                                        <?php else: ?>
                                            <img class="card-img-top" src="<?php echo $business->business_cover_photo; ?>" style="height: 200px;" alt="Card image cap">
                                        <?php endif; ?>

                                        <div class="card-block text-left" style="min-height: 150px;">
                                            <h4 class="card-title text-left"><?php echo $business->business_name; ?></h4>
                                            <p class="card-text text-left"><?php echo $business->business_tag; ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        
                        <?php
                    }
                    ?>
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
                            <a href="<?php echo base_url('free-registration'); ?>" class="btn btn-lg btn-outline-grey btn-block"> Register Here</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <?php $this->load->view('website/footer'); ?>

        <?php $this->load->view('website/analytics'); ?>
        <script src="<?php echo asset_url('scripts/helper/app_helpers.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/easy-autocomplete/dist/jquery.easy-autocomplete.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/angular/angular.min.js'); ?>"></script>
        <script>
                    
                            
                    var app = angular.module('Home', []);

                    app.controller('IndexController', ['$scope', function ($scope) {
                        $scope.suggestion = '';
//                        var BASE_URL = '<?php //echo base_url(); ?>//';
                        var options = {
                            url: function(phrase) {
                                return BASE_URL + 'api/business/getBusinessName?businessName=' + phrase;
                            },
                            getValue: "business_name",
                            requestDelay: 500,
                            template: {
                                type: "custom",
                                method: function(value, item) {
                                    return "<img src='" + item.business_logo + "' style='width: 40px; height: 40px;'/> " + value;
                                }
                            },
                            list: {
                                showAnimation: {
                                    type: "fade",
                                    time: 400,
                                    callback: function() {}
                                },

                                hideAnimation: {
                                    type: "fade",
                                    time: 400,
                                    callback: function() {}
                                },
                                maxNumberOfElements: 5,
                                match: {
                                    enabled: true
                                },
                                onClickEvent: function() {
                                    $('#indexSearchForm').submit();
                                }
                            }
                        };
                        $("#basic").easyAutocomplete(options);
                    }]);
        </script>
        <script src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
        <script type="text/javascript">
                    $(document).ready(function () {
                        var offset = 500;
                        var duration = 100;
                        var footerOffset = 2747;

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

                        window.isMobile = function () {
                            var check = false;
                            (function (a) {
                                if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)))
                                    check = true;
                            })(navigator.userAgent || navigator.vendor || window.opera);
                            return check;
                        };
                        
                        if (window.isMobile()) {
                            offset = 5;
                        }
                        
                        $(window).scroll(function () {
                            if ($(this).scrollTop() > offset) {
                                $('.back-to-top').fadeIn(duration);
                                $('.search').fadeIn(duration);
                                $('.btn-search').fadeIn(duration);
                                $('#navbar').removeClass('navbar-app').addClass('navbar-default');
                            } else {
                                $('.back-to-top').fadeOut(duration);
                                $('.search').fadeOut(duration);
                                $('.btn-search').fadeOut(duration);
                                $('#navbar').removeClass('navbar-default').addClass('navbar-app');
                            }
                        });

                        $(window).scroll(function () {
                            if($(this).scrollTop() > offset) {
                                $('.footer-advertise-fixed').fadeIn(duration);
                            } else {
                                $('.footer-advertise-fixed').fadeOut(duration);
                            }
                        });

                        $(window).scroll(function () {
                            if (($(this).scrollTop() + $(this).innerHeight()) == $(document).height()) {
                                $('.footer-advertise-fixed').fadeOut(duration);
                                $('.footer-advertise-fixed-small').fadeIn(duration);
                            } else {
                                $('.footer-advertise-fixed-small').fadeOut(duration);
                            }
                        });


                        $('.back-to-top').click(function (event) {
                            event.preventDefault();
                            $('html, body').animate({scrollTop: 0}, duration);
                            return false;
                        });
                        
                        $('#scroll-left').click(function() {
                            event.preventDefault();
                            $('.categories-slick-slider').animate({
                                scrollLeft: "-=150px"
                            });
                        });
                        
                        $('#scroll-right').click(function() {
                            event.preventDefault();
                            $('.categories-slick-slider').animate({
                                scrollLeft: "+=150px"
                            });
                        });
                    });
        </script>
    </body>
</html>
