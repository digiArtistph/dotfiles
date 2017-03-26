<!DOCTYPE html>
<html lang="en" ng-app="Premium">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>Premium | Terrigal</title>

        
        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet"> 

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/custom-icon.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style2.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('website/fonts/font-awesome-4.7.0/css/font-awesome.css');?>">
       

    </head>
    <body ng-cloak>
        <?php $this->load->view('website/navbar'); ?>
        <!-- <div id="content-section">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Premium</li>
                    </ol>
                    <h2 class="text-center">Premium</h2>
                    <div class="navy-line"></div>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="border: solid 2px #42A5F5;">
                                        <thead>
                                            <tr>
                                                <th style="border: solid 2px #42A5F5;" class="text-center">
                                                    <h3>
                                                        <strong>
                                                            Premium Listing
                                                        </strong>
                                                    </h3>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Update business info <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Upload Logo <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Upload Cover Photo <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Add Business Website <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Add Business Facebook Page <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Add Events <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Upload Photos <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Upload a Video <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Map Marker in Maps <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Ranking (Per number of Likes) <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Monthly Terrigal FB Page promo <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Receive ratings from site visitors <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #42A5F5;" class="text-center">Receive Likes and Shares <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h4><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;">Premium <span style="font-size: 30px;">$99</span> <i class="fa fa-check fa-fw text-success"></i></strong></h4>
                                <h4><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;">Unlimited Events <i class="fa fa-check fa-fw text-success"></i></strong></h4>
                                <h4><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;">Deals <i class="fa fa-check fa-fw text-success"></i></strong></h4>
                                <h4><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;">Monthly Homepage Feature <i class="fa fa-check fa-fw text-success"></i></strong></h4>
                                <a href="<?php echo base_url('free-registration'); ?>" class="btn btn-info"><strong>Register Now <i class="fa fa-thumbs-up"></i></strong></a>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <div id="content-section">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Premium</li>
                    </ol> <!-- <h2 class="text-center">Premium</h2> -->
                                <!-- <div class="navy-line"></div> -->
                    <div class="col-md-11 col-md-offset-1">
                        <!-- <div class="col-md-12" style="margin-top: 0px;"> -->
                            <div class="row">
                                <div class="col-md-11 col-xs-12 centered" style="text-align: center;">
                                <h1 style="color: black;">Make your Business more visible online through our Premium Plan!</h1>
                                <div class="navy-line"></div>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>

                                            <!-- Premium Listing -->

        <div class="container ptb">
            <div class="row">
                <div class="col-md-12 col-xs-1">
                    <!-- <div class="col-xs-1"></div> -->
                      <!--   <h1 class="text-center border-after">Premium Listing</h1>
                                <div class="navy-line"></div>         -->   

                                        <!-- Pricing Icon Description -->
                    <div class="row text-center">
                            <div id="ptblr" class="col-md-4 col-xs-3 box-custom mlr">
                                        <i  class="icon-custom2 fa fa-address-card-o fa-5x"></i>
                                        <h3 class="services-title">Business Updates</h3>
                                        <p class="text-center">Edit your location, amenities and other details to ensure your listing is accurate.</p>
                            </div>
                            <div id="ptblr" class="col-md-4 col-xs-3 box-custom mlr">
                                        <i  class="icon-custom2 fa fa-upload fa-5x"></i>
                                        <h3 class="services-title">Media Uploads</h3>
                                        <p class="text-center">Capture the attention of potential customers<br/>Add new photos or videos that show your business at its best.</p>
                            </div>
                             <div id="ptblr" class="col-md-4 box-custom mlr">
                                        <i  class="icon-custom2 fa fa-calendar-check-o fa-5x"></i>
                                        <h3 class="services-title">Add Events</h3>
                                        <p class="text-center">Access the industry-leading tools to attract, engage with and influence the decisions of potential guests.</p>
                            </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-2"></div>
                            <div id="ptblr" class="col-md-4 box-custom mlr">
                                        <i  class="icon-custom2 fa fa-map-marker fa-5x"></i>
                                        <h3 class="services-title">Map Markers</h3>
                                        <p class="text-center">On the spot map markers for your business.</p>
                            </div>
                            <div id="ptblr" class="col-md-4 box-custom mlr">
                                        <i  class="icon-custom2 fa fa-trophy fa-5x"></i>
                                        <h3 class="services-title">See Rankings</h3>
                                        <p class="text-center">Find out why reviews matter
                                         and how fresh feedback can benefit your business.</p>
                            </div>
                        <div class="col-md-2 col-xs-1"></div>
                    </div>
                    <div class="row text-center">
                            <div id="ptblr" class="col-md-4 box-custom mlr">
                                        <i  class="icon-custom2 fa fa-calendar fa-5x"></i>
                                        <h3 class="services-title">Terrigal Promos</h3>
                                        <p class="text-center">Monthly Terrigal Facebook Page promo. </p>
                            </div>
                            <div id="ptblr" class="col-md-4 box-custom mlr">
                                        <span>
                                        <i  class="icon-custom2 fa fa-star fa-5x"></i>
                                        <i  class="icon-custom2 fa fa-star fa-5x"></i>
                                        <i  class="icon-custom2 fa fa-star fa-5x"></i>
                                        </span>
                                        <h3 class="services-title">Ratings</h3>
                                        <p class="text-center">Receive stars from Visitors.</p>
                            </div>
                            <div id="ptblr" class="col-md-4 box-custom mlr">
                                        <span>
                                        <i  class="icon-custom2 fa fa-thumbs-o-up fa-5x"></i>
                                        <i  class="icon-custom2 fa fa-share-alt-square fa-5x"></i>
                                        </span>
                                        <h3 class="services-title">Likes and Shares</h3>
                                        <p class="text-center">The fast, free and easy way to get more customer reviews.<br/>Nothing beats a trusted word of mouth referral. </p>
                            </div>
                    </div>
                    
                </div>
            </div>

                <div class="row text-center">
                    <div class="col-md-4 col-xs-1"></div>
                            <div class="col-xs-10 col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h1 class="panel-title" style="font-size: 1.5em;"><b>PREMIUM</b></h1>
                                    </div>
                                    <div class="panel-body">
                                        <div class="">
                                            <h2><strong><span style="font-size: 1.5em;">$99 </span></strong></h2>
                                            <small>&nbsp;</small>
                                        </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                       <td>
                                                            <strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;"> Unlimited Events <i class="fa fa-check fa-fw text-success"></i></strong>
                                                       </td> 
                                                    </tr>
                                                   <!--  <tr>
                                                       <td>
                                                           <strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;">Deals <i class="fa fa-check fa-fw text-success"></i></strong>
                                                       </td> 
                                                    </tr> -->
                                                    <tr>
                                                        <td><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;"> Business Updates <i class="fa fa-check fa-fw text-success"></i></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;"> Added Features <i class="fa fa-check fa-fw text-success"></i></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;"> Terrigal Promo's <i class="fa fa-check fa-fw text-success"></i></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;"> Ranking's <i class="fa fa-check fa-fw text-success"></i></strong>
                                                        </td>
                                                    </tr>                                                    
                                                    <tr>
                                                        <td>
                                                            <strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;">Monthly Homepage Feature <i class="fa fa-check fa-fw text-success"></i></strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                        <div class="panel-footer">
                                            <a href="<?php echo base_url('free-registration'); ?>" class="btn btn-primary">Get Premium Account now!</a>
                                        </div>
                                </div>
                            </div>
                    <div class="col-md-4 col-xs-1"></div>
                </div>
        </div>      

                <!-- <div class="col">                     
                    <div class="container col-md-offset-1" style="background-color: #edeef2; margin-top: -40px; margin-bottom: 80px; border-radius: 6px;">
                          
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-3 col-md-offset-1 centered" style="margin-top: 20px;">
                                    <div class="row">
                                    <div class="col-md-8 col-md-offset-1 centered" style="margin-bottom: 40px; border-radius: 10px;">
                                        <img src="public_html/assets/website/img/premium-template.jpg" width="250" height="500" style="box-shadow: 1px 2px 20px 10px rgba(5,0,0,0.2); border-radius: 10px;">
                                    </div>
                                    </div>
                            </div>
                            <div class="col-sm-4" style="margin-top: 20px; margin-bottom: 20px;">
                                <h4><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;">Premium <span style="font-size: 30px;">$99</span> <i class="fa fa-check fa-fw text-success"></i></strong></h4>
                                <h4><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;">Unlimited Events <i class="fa fa-check fa-fw text-success"></i></strong></h4>
                                <h4><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;">Deals <i class="fa fa-check fa-fw text-success"></i></strong></h4>
                                <h4><strong style="border-bottom: solid 2px #42A5F5; padding-bottom: 2px;">Monthly Homepage Feature <i class="fa fa-check fa-fw text-success"></i></strong></h4>
                                <a href="<?php echo base_url('free-registration'); ?>" class="btn btn-info"><strong>Register Now <i class="fa fa-thumbs-up"></i></strong></a>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                </div> -->





                
                            <!-- end of pricing container -->
        <?php $this->load->view('website/footer'); ?>
        <?php $this->load->view('website/analytics'); ?>
        <script src="<?php echo asset_url('scripts/helper/app_helpers.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/easy-autocomplete/dist/jquery.easy-autocomplete.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/angular/angular.min.js'); ?>"></script>
        <script>
            var app = angular.module('Premium', []);
        </script>
        <script src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#navbar').removeClass('navbar-app').addClass('navbar-default');
                $('.search').fadeIn(100);
                $('.btn-search').fadeIn(100);
            });
        </script>
    </body>