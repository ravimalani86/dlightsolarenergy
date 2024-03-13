<header class="main-header">
    <div class="main-header__top">
        <div class="container clearfix">
            <div class="pull-left fa-pull-left"></div>
            <div class="top-header-bar pull-right fa-pull-right clearfix">
                <ul class="main-header__info">
                    <li>
                        <a href="mailto:<?php echo SITE_EMAIL ?>">
                            <span class="icon icon-email"></span><span><?php echo SITE_EMAIL ?></span>
                        </a>
                    </li>
                    <li><a href="tel:<?php echo SITE_MOBILE1 ?>"><span class="icon icon-phone"></span><?php echo SITE_MOBILE1 ?></a></li>
                    <li><a href="tel:<?php echo SITE_MOBILE2 ?>"><span class="icon icon-phone"></span><?php echo SITE_MOBILE2 ?></a></li>
                </ul>
                <div class="main-header__top-estimate"><a href="<?php echo BASE_PATH ?>contact-us.php">Order Now</a></div>
            </div>
        </div>
    </div>

    <div class="main-header__lower">
        <div class="container">
            <div class="main-header__lower__inner clearfix">

                <div class="main-header__logo-box">
                    <div class="main-header__logo d-none d-xl-block">
                        <a href="<?php echo BASE_PATH ?>" rel="home">
                            <img class="lazy" width="288" height="80" src="<?php echo BASE_PATH ?>images/logo/dlight-logo-bw.png" alt="dlightsolar" title="dlightsolar" />
                        </a>
                    </div>
                    <div class="main-header__logo d-block d-xl-none">
                        <a href="<?php echo BASE_PATH ?>" rel="home">
                            <img class="lazy" width="288" height="80" src="<?php echo BASE_PATH ?>images/logo/dlight-logo.png" alt="dlightsolar" title="dlightsolar" />
                        </a>
                    </div>
                </div>

                <div class="nav-outer clearfix">

                    <div class="mobile-nav-toggler"><span class="icon fas fa-bars"></span></div>

                    <nav class="main-menu__menu-box navbar-expand-md">
                        <div class="navbar-header">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <ul id="menu-main-menu" class="main-menu__navigation">
                                    <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18 current_page_item menu-item-44"><a href="<?php echo BASE_PATH ?>" aria-current="page">Home</a></li>
                                    <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="<?php echo BASE_PATH ?>about-us.php">About Us</a></li>
                                    <li id="menu-item-405" class="dropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-405"><a href="#">Products</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-417" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-417"><a href="<?php echo BASE_PATH ?>solar-panel.php">Solar Panels</a></li>
                                            <li id="menu-item-416" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-416"><a href="<?php echo BASE_PATH ?>on-grid-inverter.php">On-Grid Inverters</a></li>
                                            <li id="menu-item-415" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-415"><a href="<?php echo BASE_PATH ?>solar-accessories.php">Solar Accessories</a></li>
                                            <!-- <li id="menu-item-414" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-414"><a href="<?php echo BASE_PATH ?>solar-water-heater.php">Solar Water Heater</a></li> -->
                                            <!-- <li id="menu-item-413" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-413"><a href="<?php echo BASE_PATH ?>battery-inverter.php">Battery Inverter</a></li> -->
                                            <li id="menu-item-412" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-412"><a href="<?php echo BASE_PATH ?>solar-street-light.php">Solar Street Light</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-552" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-552"><a href="<?php echo BASE_PATH ?>epc.php">EPC</a></li>
                                    <li id="menu-item-837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-837"><a href="<?php echo BASE_PATH ?>download.php">Download</a></li>
                                    <li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="<?php echo BASE_PATH ?>contact-us.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-header">
        <div class="container clearfix">

            <div class="sticky-header__logo pull-left fa-pull-left">
                <a href="<?php echo BASE_PATH ?>" rel="home">
                    <img class="lazy" width="216" height="60" src="<?php echo BASE_PATH ?>images/logo/dlight-logo.png" alt="dlightsolar" title="dlightsolar" />
                </a>
            </div>

            <div class="pull-right fa-pull-right">

                <nav class="main-menu__navigation">

                </nav>

                <div class="mobile-nav-toggler"><span class="icon fas fa-bars"></span></div>
            </div>
        </div>
    </div>

    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fas fa-times"></span></div>
        <nav class="mobile-menu__box">
            <div class="mobile-menu__logo">
                <a href="<?php echo BASE_PATH ?>" rel="home">
                    <img class="lazy" width="216" height="60" src="<?php echo BASE_PATH ?>images/logo/dlight-logo.png" alt="dlightsolar" title="dlightsolar" />
                </a>
            </div>
            <div class="mobile-menu__outer">

            </div>

            <ul class="mobile-menu__contact-list">
                <li><span class="icon fa fa-envelope"></span>
                    <a href="mailto:<?php echo SITE_EMAIL ?>"><span><?php echo SITE_EMAIL ?></span></a>
                </li>
                <li><span class="icon fa fa-phone"></span><a href="tel:<?php echo SITE_MOBILE1 ?>"><?php echo SITE_MOBILE1 ?></a></li>
                <li><span class="icon fa fa-phone"></span><a href="tel:<?php echo SITE_MOBILE2 ?>"><?php echo SITE_MOBILE2 ?></a></li>
            </ul>

            <ul class="mobile-menu__social">
                <li><a href="<?php echo INSTAGRAM ?>" target="_blank" class="fa fa-instagram"></a></li>
                <li><a href="<?php echo FACEBOOK ?>" target="_blank" class="fa fa-facebook-f"></a></li>
                <li><a href="<?php echo TWITTER ?>" target="_blank" class="fa fa-twitter"></a></li>
                <li><a href="<?php echo PINTEREST ?>" target="_blank" class="fa fa-pinterest-p"></a></li>
            </ul>
        </nav>
    </div>

</header>