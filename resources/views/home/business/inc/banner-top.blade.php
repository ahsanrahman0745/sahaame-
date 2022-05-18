<div class="singles-page-under-header">
    <div class="single-business-page-under-header">
        <div class="container">
            <div class="single-business-page-under-header-info-outer">
                <div class="single-business-page-under-header-info-main">
                    <div class="single-business-page-under-header-info-side">
                        <span class="years"><?php echo $site_info->years_inbusiness ?>YRS</span> <span class="verified">Verified</span> <span class="text"><?php echo $site_info->company_text; ?></span>
                    </div>
                    <div class="single-business-page-under-header-info-side">
                        Certificates    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="business-banner-main">
    <div class="business-banner-outer">
        <div class="business-banner-inner">
            <div class="business-banner-inner-image">
                <img src="{{asset('business/mini-site-resources/basic-info')}}/<?php echo $site_info->site_banner?>" alt="">
            </div>
            <div class="business-banner-inner-bottom">
                <div class="business-banner-inner-bottom-outer">
                    <div class="container">
                        <div class="business-info-outer">
                            <div class="business-info-inner">
                                <div class="business-info-contact">
                                    <div class="business-info-contact-single">
                                        <span class="icon">
                                            <span class="ti-time"></span>
                                        </span>
                                        <span class="text">
                                            <?php echo $site_info->opening_text; ?>
                                        </span>
                                    </div>
                                    <div class="business-info-contact-single">
                                        <span class="icon">
                                            <span class="ti-headphone"></span>
                                        </span>
                                        <span class="text">
                                            <?php echo $site_info->phone; ?>
                                        </span>
                                    </div>
                                    <div class="business-info-contact-single">
                                        <span class="icon">
                                            <span class="ti-email"></span>
                                        </span>
                                        <span class="text">
                                            <?php echo $site_info->email; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="business-info-social">
                                    <span class="icon">
                                        <a href="<?php echo $site_info->facebook; ?>">
                                            <span class="ti-facebook"></span>
                                        </a>
                                    </span>
                                    <span class="icon">
                                        <a href="<?php echo $site_info->instagram; ?>">
                                            <span class="ti-instagram"></span>
                                        </a>
                                    </span>
                                    <span class="icon">
                                        <a href="<?php echo $site_info->twitter; ?>">
                                            <span class="ti-twitter-alt"></span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>