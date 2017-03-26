<!DOCTYPE html>
<html lang="en" ng-app="AllEvents">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
        <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
        <meta name="author" content="troy rushton">
        <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

        <title>All Events | Terrigal</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet"> 

        <!-- Custom styles for this template -->
        <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/custom-icon.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
    </head>
    <body ng-controller="EventsController" ng-cloak>
        <?php $this->load->view('website/navbar'); ?>
        <div id="content-section">
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">All Events</li>
                    </ol>
                    <h2 class="text-center">All Events</h2>
                    <div class="navy-line"></div>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="card">
                                <div class="card margin-1" ng-repeat="event in events" ng-if="event.end_date >= date">
                                    <div class="card-block">
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-6 centered" style="padding-right: 0px;">
                                                    <small class="text-center">
                                                        <strong>Will Start on</strong>
                                                    </small>
                                                    <div class="text-center calendar-icon">
                                                        <p class="event-month nopadding">{{event.start_date| date:'MMMM'}}</p>
                                                        <h1 class="event-date-event">{{event.start_date| date:'d'}}</h1>
                                                        <p class="event-divider-event">@</p>
                                                        <p class="event-time-event"><small>{{event.start_time}}</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-6 centered" style="padding-left: 0px;">
                                                    <small class="text-center">
                                                        <strong>Will End on</strong>
                                                    </small>
                                                    <div class="text-center calendar-icon">
                                                        <p class="event-month nopadding">{{event.end_date| date:'MMMM'}}</p>
                                                        <h1 class="event-date-event">{{event.end_date| date:'d'}}</h1>
                                                        <p class="event-divider-event">@</p>
                                                        <p class="event-time-event"><small>{{event.end_time}}</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <a target="_self" href="<?php echo base_url(); ?>{{event.business_permalink}}/view-event?eventId={{event.event_id}}">
                                                    <h2 class="event-title-event">{{event.event_name}}</h2>
                                                </a>
                                                <p><i class="fa fa-map-marker fa-fw"></i>{{event.location}}</p>
                                                <p class="event-description">
                                                    {{event.event_description}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
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
            var app = angular.module('AllEvents', []);
        </script>
        <script src="<?php echo asset_url('scripts/controller/EventsController.js'); ?>"></script>
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