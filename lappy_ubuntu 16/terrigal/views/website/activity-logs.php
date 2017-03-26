<!DOCTYPE html>
<html lang="en" ng-app="ActivityLogs">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keyword" content="terrigal australia, terrigal beach, accommodation, beach, terrigal accommodation, hotel rooms, luxury hotels, property for sale, the entrance, real estate, restaurants, hotel accommodation, real estate agent, beachfront hotels, terrigal beach, accommodation central coast, terrigal hotel, discount hotels, hotels in terrigal, best beaches, the beach, terrigal restaurants"/>
    <meta name="description" content="Terrigal is a Socially Rewarding local business directory that provides the best recommendations of businesses within 15km of Terrigal beach.">
    <meta name="author" content="troy rushton">
    <link rel="icon" href="<?php echo asset_url('website/img/favicon/favicon.png'); ?>">

    <title>Activity Logs | Terrigal</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset_url('website/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo asset_url('website/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('website/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('website/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('modules/angular-ui-grid/ui-grid.min.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo asset_url('modules/angular-treasure-overlay-spinner/src/treasure-overlay-spinner.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo asset_url('modules/easy-autocomplete/dist/easy-autocomplete.css'); ?>" rel="stylesheet">
    <style>
        #msg{
            resize: none;
            height: 180px;
        }

        .grid {
            width: 500px;
            height: 250px;
        }
    </style>
</head>
<body data-ng-controller="ActivityLogsController" data-ng-cloak>
<?php $this->load->view('website/navbar'); ?>
<div id="content-section">
    <div class="row">
        <div class="container">
            <ol class="breadcrumb bg-white">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active">Activity Logs</li>
            </ol>
            <h2 class="text-center">Activity Logs</h2>
            <div class="navy-line"></div>
            <br>
            <br>
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div ui-grid="options" class="myGrid"></div>
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
<script src="<?php echo asset_url('modules/angular-animate/angular-animate.min.js'); ?>"></script>
<script src="<?php echo asset_url('modules/angular-ui-grid/ui-grid.min.js'); ?>"></script>
<script src="<?php echo asset_url('modules/angular-treasure-overlay-spinner/src/treasure-overlay-spinner.js'); ?>"></script>
<script type="text/javascript">
    var app = angular.module('ActivityLogs', [
        'ui.grid',
        'treasure-overlay-spinner'
    ]);

    angular.module('ActivityLogs').run(run);
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

    app.controller('ActivityLogsController', ['$rootScope','$scope', 'ActivityLogsService', function ($rootScope, $scope, ActivityLogsService) {
        $scope.options = {
                enableFiltering: true,
//                columnDefs: [
//                    {field: 'Message', enableFiltering: false},
//                    {field: 'Agent'},
//                    {field: 'Date'}
//                ],
        };
        $scope.getActivityLogs = function () {
            ActivityLogsService.getActivityLogs()
                .then(function (response) {
                    $scope.options.data = response.data;
                }, function (response) {
                    console.error('Error');
                });
        };
        $scope.getActivityLogs();
    }]);

    app.factory('ActivityLogsService', ['$http', function ($http) {
//        var baseUrl = window.location.protocol + '//' + window.location.hostname + '/terrigal_v1';
        return {
            getActivityLogs: function (data) {
                return $http.get(BASE_URL + '/api/ActivityLogs/getActivityLogs').then(function (response) {
                    return response;
                });
            }
        };
    }
    ]);
</script>
<script type="text/javascript" src="<?php echo asset_url('scripts/controller/NewsletterController.js'); ?>"></script>
<script src="<?php echo asset_url('scripts/controller/HomeController.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#navbar').removeClass('navbar-app').addClass('navbar-default');
        $('.search').fadeIn(100);
        $('.btn-search').fadeIn(100);
    });
</script>
</body>
</html>
