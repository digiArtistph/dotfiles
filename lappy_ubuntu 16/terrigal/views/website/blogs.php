<!DOCTYPE html>
<html lang="en" ng-app="Blog">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>Articles | Terrigal</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
        <style>
            .show-lines {
                display: -webkit-box;
                -webkit-line-clamp: 4;
                -webkit-box-orient: vertical;
            }
        </style>
    </head>
    <body ng-cloak>
        <?php $this->load->view('website/navbar'); ?>
        <div id="content-section" ng-controller="BlogController">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Blogs</li>
                    </ol>
                    <h2 class="text-center">Blogs</h2>
                    <div class="navy-line"></div>
                    <br>
                    <br>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4" ng-repeat="blog in blogs| limitTo: 12">
                                    <!--first column-->
                                    <div class="card card-content blog-content-height">
                                        <div class="card-block">
                                            <div class="content">
                                                <h2 class="nowrap ellipsis"><strong><a href="">{{blog.blog_title}}</a></strong></h2>
                                                <strong>John Doe</strong>
                                                <span>
                                                    <i class="fa fa-clock-o"></i>
                                                    {{blog.date_posted}}
                                                </span>
                                                <p>
                                                    <small class="ellipsis show-lines">
                                                        {{blog.blog_content}}
                                                    </small>
                                                </p>
                                                <div class="pull-right">
                                                    <small><i class="fa fa-comments-o"></i> 23 Comments</small>
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
        <?php $this->load->view('website/footer'); ?>
        <?php $this->load->view('website/analytics'); ?>
        <script src="<?php echo asset_url('scripts/helper/app_helpers.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo asset_url('website/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo asset_url('modules/easy-autocomplete/dist/jquery.easy-autocomplete.min.js'); ?>"></script>
        <script src="<?php echo asset_url('webapp/js/angular/angular.min.js'); ?>"></script>
        <script>
                                                                    var app = angular.module('Blog', []);
        </script>
        <script type="text/javascript" src="<?php echo asset_url('scripts/controller/BlogController.js'); ?>"></script>
        <script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
        <script type="text/javascript">
                                                                    $(document).ready(function () {
                                                                        $('#navbar').removeClass('navbar-app').addClass('navbar-default');
                                                                        $('.search').fadeIn(100);
                                                                        $('.btn-search').fadeIn(100);
                                                                    });
        </script>
    </body>