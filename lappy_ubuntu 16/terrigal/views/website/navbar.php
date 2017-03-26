<nav class="navbar navbar-app navbar-fixed-top" id="navbar">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" target="_self" href="<?php echo base_url(); ?>">
                    <img src="<?php echo asset_url('website/img/logo-text.png'); ?>" alt="Terrigal logo text" class="business-logo-text"/>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li id="search-list" data-ng-controller="HomeController">
                        <form id="searchForm" method="get" action="<?php echo base_url('search'); ?>">
                            <input id="basics" type="search" ng-model="keyword" class="search" name="keyword" style="border-radius: 0px;width: 80% !important;" placeholder="What are you looking for?">
                            &nbsp;
                            <button type="submit" class="btn btn-search btn-orange">
                                <i class="fa fa-search fa-fw"></i>
                            </button>
                        </form>
                    </li>
                    <?php if (!$this->session->User_Id) { ?>
                        <li id="register-link"><a href="<?php echo base_url('free-registration'); ?>" target="_self"><i class="ion-android-add-circle"></i> &nbsp; Add Listing</a></li>
                        <li id="login-link"><a href="<?php echo base_url('login'); ?>" target="_self"><i class="ion-android-unlock"></i> &nbsp; Login</a></li>
                    <?php } else { ?>
                        <li class="dropdown" style="margin-left: 10px;">
                            <a href="#" class="dropdown-toggle" id="profile-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php if($this->User_Model->getUserBusinessData($this->session->User_Id) == 1) { ?>
                                    <img src="<?php echo $this->User_Model->getUserPhoto($this->session->User_Id) ?>" class="profile-image"/> <span style="color: yellow;"><?php echo $this->session->User_Name; ?></span> &nbsp; &nbsp; <span class="caret"></span>
                                <?php } else { ?>
                                    <img src="<?php echo $this->User_Model->getUserPhoto($this->session->User_Id) ?>" class="profile-image"/> <?php echo $this->session->User_Name; ?> &nbsp; &nbsp; <span class="caret"></span>
                                <?php } ?>
                            </a>
                            <ul class="dropdown-menu flat">
                                <?php if ($this->session->User_Type == 'admin') { ?>
                                    <li><a class="dropdown-link" target="_self" href="<?php echo base_url('app#/dashboard'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                                <?php }
                                      if($this->session->User_Type != 'admin') {
                                        $myBusinesses = $this->Business_Model->getBusinessByUserAccountId($this->session->User_Id);
                                        foreach ($myBusinesses as $business) { ?>
                                    <li><a class="dropdown-link" target="_self" href="<?php echo base_url(($business->business_permalink != '' ? $business->business_permalink : dash($business->business_name))); ?>"><img src="<?php echo $business->business_logo; ?>" style="height: 20px; width: 20px"/> <span class="text-right"><?php echo $business->business_name; ?></span></a></li>
                                <?php } ?>
                                    <li role="separator" class="divider"></li>
<!--                                    <li><a class="dropdown-link" target="_self" href="--><?php //echo base_url('business-owner/' . $this->session->User_Name); ?><!--"><i class="fa fa-cogs fa-fw"></i> <span class="text-right">My Profile</span></a></li>-->
                                    <li><a class="dropdown-link" target="_self" href="
                                <?php echo base_url(@$business->business_permalink . '/business-owner/change-password'); ?>
                                    "><i class="fa fa-lock fa-fw"></i> <span class="text-right">Change Password</span></a></li>
<!--                                    <li><a class="dropdown-link" target="_self" href="--><?php //echo base_url($this->session->User_Name . '/transactions'); ?><!--"><i class="fa fa-clipboard fa-fw"></i> <span class="text-right">My Transactions</span></a></li>-->
                                <?php }
                                    if ($this->session->User_Type == 'agent') { ?>
                                    <li><a class="dropdown-link" target="_self" href="<?php echo base_url('add-leads'); ?>"><i class="fa fa-upload fa-fw"></i> Add Leads</a></li>
                                    <li><a class="dropdown-link" target="_self" href="<?php echo base_url('free-registration'); ?>"><i class="fa fa-user fa-fw"></i>Business Registration </a></li>
                                    <li><a class="dropdown-link" target="_self" href="<?php echo base_url('activity-logs'); ?>"><i class="fa fa-file-text fa-fw"></i> Activity Logs </a></li>
                                <?php } ?>
                                <li role="separator" class="divider"></li>
                                <li class="flat"><a class="dropdown-link" target="_self" href="<?php echo base_url('logout'); ?>"><i class="fa fa-power-off fa-fw"></i> <span class="text-right">Logout</span></a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
