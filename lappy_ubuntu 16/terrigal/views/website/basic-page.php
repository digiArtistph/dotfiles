<!DOCTYPE html>
<html lang="en" ng-app="Basic">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>Basic | Terrigal</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet"> 

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/custom-icon.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
    </head>
    <body ng-cloak>
        <?php $this->load->view('website/navbar'); ?>
        <div id="content-section">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Basic</li>
                    </ol>
                    <h2 class="text-center">Basic</h2>
                    <div class="navy-line"></div>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="border: solid 2px #c1c1c1;">
                                        <thead>
                                            <tr>
                                                <th style="border: solid 2px #c1c1c1;" class="text-center">
                                                    <h3>
                                                        <strong>
                                                            Basic Listing
                                                        </strong>
                                                    </h3>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Update business info <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Upload Logo <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Upload Cover Photo <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Add Business Website <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Add Business Facebook Page <i class="fa fa-close fa-fw text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Add Events <i class="fa fa-close fa-fw text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Upload Photos <i class="fa fa-close fa-fw text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Upload a Video <i class="fa fa-close fa-fw text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Map Marker in Maps <i class="fa fa-check fa-fw text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Ranking (Per number of Likes) <i class="fa fa-close fa-fw text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Monthly Terrigal FB Page promo <i class="fa fa-close fa-fw text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Receive ratings from site visitors <i class="fa fa-close fa-fw text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <td style="border: solid 2px #c1c1c1;" class="text-center">Receive Likes and Shares <i class="fa fa-close fa-fw text-danger"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h4><strong style="border-bottom: solid 2px #c1c1c1; padding-bottom: 2px;">Free <span style="font-size: 30px;">$0</span> <i class="fa fa-check fa-fw text-success"></i></strong></h4>
                                <h4><strong style="border-bottom: solid 2px #c1c1c1; padding-bottom: 2px;">Unlimited Events <i class="fa fa-close fa-fw text-danger"></i></strong></h4>
                                <h4><strong style="border-bottom: solid 2px #c1c1c1; padding-bottom: 2px;">Deals <i class="fa fa-close fa-fw text-danger"></i></strong></h4>
                                <h4><strong style="border-bottom: solid 2px #c1c1c1; padding-bottom: 2px;">Monthly Homepage Feature <i class="fa fa-close fa-fw text-danger"></i></strong></h4>
                                <!-- <a href="<?php echo base_url('register'); ?>" class="btn btn-info"><strong>Register Now <i class="fa fa-thumbs-up"></i></strong></a> -->
                            </div>
                            <div class="col-sm-2"></div>
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
        <script>
            var app = angular.module('Basic', []);
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