<?php if(!$this->session->User_Id) { ?>
    <div class="footer-advertise-fixed text-center" style="display: none;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <h3 style="margin-bottom: 0px;margin-top: 5px;">Looking for business? See more in <a href="<?php echo base_url('search');?>" style="font-weight: bold;">Terrigal.com.au</a></h3>
            <a href="<?php echo base_url('free-registration'); ?>" class="btn btn-primary btn-sm button-signup">Free Sign Up</a>
            <a href="<?php echo base_url('login'); ?>" class="btn btn-orange btn-sm button-signup">Login</a>
        </div>
        <div class="col-lg-4"></div>
    </div>

    <div class="footer-advertise-fixed-small text-center" style="display: none;">
        <h3 style="margin-bottom: 0px;margin-top: 5px;">Looking for business? See more in <a href="<?php echo base_url('search');?>" style="font-weight: bold;">Terrigal.com.au</a></h3>
        <a href="<?php echo base_url('register'); ?>" class="btn btn-primary btn-xs button-signup-small">Sign Up</a>
        <a href="<?php echo base_url('login'); ?>" class="btn btn-orange btn-xs button-signup-small">Login</a>
    </div>
<?php  } ?>
<a href="#" class="back-to-top btn" style="display: none;">
    <i class="fa fa-arrow-circle-up"></i>
</a>
<div id="f">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <a class="thumbnail no-border transparent" href="<?php echo base_url(); ?>">
                    <img src="<?php echo asset_url('website/img/logo-text.png'); ?>" class="img-responsive business-logo-text">
                </a>
                <br>
                <div class="text-center">
                    <a href="//twitter.com/terrigalcomau" target="_blank" class="social-icon"><i class="ion-social-twitter"></i></a>
                    <a href="//www.facebook.com/Terrigal-Beach-1663198063968086/" target="_blank" class="social-icon"><i class="ion-social-facebook"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <h3>Company</h3>
                <ul>
                    <li>
                        <a href="<?php echo base_url('about-us'); ?>" target="_self">About Us</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('contact-us'); ?>" target="_self">Contact Us</a>
                    </li>
                    <!--<li>
                        <a href="<?php echo base_url('careers'); ?>" target="_self">Careers</a>
                    </li>-->
                    <!--<li>
                        <a href="<?php echo base_url('articles'); ?>" target="_self">Articles</a>
                    </li>-->
                    <!-- <li>
                        <a href="<?php //echo base_url('blogs'); ?>" target="_self">Blogs</a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url('faqs'); ?>" target="_self">FAQ's</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('feedback'); ?>" target="_self">Feedback</a>
                    </li>
<!--                    <li>
                        <a href="<?php echo base_url('help'); ?>" target="_self">Help</a>
                    </li>-->
                    <li>
                        <a href="<?php echo base_url('listing'); ?>" target="_self">Business Listing</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-3">
                <h3>Contact Us</h3>
                <ul class="contact-list">
                    <li><a href="//maps.google.com/?q=Terrigal%20NSW%202260" target="_blank"><i class="fa fa-map-marker fa-fw"></i>  PO box 620 Terrigal NSW 2260</a></li>
                    <li><a href="mailto:info@terrigal.com.au"><i class="fa fa-envelope fa-fw"></i> info@terrigal.com.au</a></li>
                    <li>
                        <a href="tel:0280075521"><i class="fa fa-phone fa-fw"></i> (02) 8007 5521</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-3" ng-controller="NewsletterController" ng-cloak>
                <h3>Newsletter</h3>
                <p style="color: #b9b9b9;">Enter your email to receive updates.</p>
                <form ng-submit="newsletter(form)">
                    <input id="newsletter" style="display: inline-block;float: left;width: 200px;padding: 0 15px 0 15px !important;border-radius: 15px !important;" ng-model="form.email" placeholder="john@example.com" name="email"/>
                    <button type="submit" style="display: inline-block;float: right;height: 40px;padding-left: 5px;padding-right: 5px; border-radius: 15px;" class="btn btn-primary btn-xs"><small>Subscribe</small></button>
                </form>
                <div class="row">
                    <div class="col-sm-12">
                        <h4 style="color: #f36e1f;">
                            <strong><i style="font-size: 18px;">{{message}}</i></strong>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-bottom">
    <div class="container text-center">
        <p>Copyright © 2016 Terrigal. All Rights Reserved. <a href="<?php echo base_url('terms-of-service'); ?>" target="_self">Terms of Services</a> | <a href="<?php echo base_url('privacy-policy'); ?>" target="_self">Privacy Policy</a> Developed by <a href="//techdev.ph" target="circle">Techdev.ph</a> </p>
    </div>
</footer>
