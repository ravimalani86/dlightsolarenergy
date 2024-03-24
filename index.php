<?php
include_once('config.php');
define('PAGE_NAME', "Home page");
$active = 'home';
include_once('common/head.php');
?>

<body class="home page-template-default page page-id-18">
    <div class="page-wrapper">
        <?php include_once('common/header.php'); ?>

        <div class="main">
            <section id="content_block_1" class="content_blocks_lists content_block_1">
                <div>
                    <div class="full-screen cover-background">
                        <div class="player-overlay"></div>
                        <div class="video-wrapper full-screen-width">
                            <video autoplay muted loop poster="<?php echo BASE_PATH ?>images/gallery-part.webp" class="lazy html-video video-fluid" preload="auto">
                                <source type="video/mp4" src="<?php echo BASE_PATH ?>video/solar-design.mp4">
                            </video>
                            <h1 class="home-video-title wow fadeInUp animated">
                                Renewable energy <br> Doesn’t cost the earth
                                <br><a href="<?php echo BASE_PATH ?>contact-us.php" class="theme-btn btn-style-two"><span class="txt">Order Now</span></a>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
            <section id="content_block_2" class="content_blocks_lists content_block_2">
                <section class="energy-one">
                    <div class="energy-one__color"></div>
                    <div class="energy-one__color-two"></div>
                    <div class="energy-one__shape-one"></div>
                    <div class="energy-one__shape-five"></div>
                    <div class="container">
                        <div class="row clearfix">

                            <div class="energy-one__content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">

                                    <div class="section-title">
                                        <h2 class="section-title__title">Why Choose <br> D-Light Solar</h2>
                                    </div>
                                    <p class="enerygy-one__text">D-Light Solar is one of the leading solar distributors since a decade, supplying quality solar solutions for residential, commercial &#038; corporate industries.
                                    </p>
                                    <p class="enerygy-one__text-two">We have captured the industry with our core qualities of flexibility, unique approach, trustworthiness and cooperation. We aim to avail innovative solar solutions to the market via close collaboration with world’s leading manufacturers.
                                    </p>
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-6 col-sm-12">
                                            <div class="enerygy-one__client-box">
                                                We’re trusted by more than <span>30k</span> clients
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-12">

                                            <div class="energy-one__phone-box">
                                                <div class="energy-one__phone-inner">
                                                    <span class="energy-one__phone-icon icon-phone"></span>
                                                    The Future of Solar Energy<br>
                                                    <a class="energy-one__phone-number" href="tel:<?php echo SITE_MOBILE1 ?>"><?php echo SITE_MOBILE1 ?></a>
                                                </div>
                                            </div>

                                            <div class="energy-one__btn-box">
                                                <a href="/vardhansolar/about" class="theme-btn btn-style-two"><span class="txt">More
                                                        About Us</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="energy-one__images-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                                    <div class="energy-one__shape-two"></div>
                                    <div class="energy-one__shape-three"></div>
                                    <div class="energy-one__shape-four"></div>
                                    <div class="energy-one__color-three"></div>
                                    <div class="energy-one__image">
                                        <img class="lazy" decoding="async" width="367" height="296" src="<?php echo BASE_PATH ?>images/energy.png" alt="energy" title="energy">
                                    </div>
                                    <div class="energy-one__image-two">
                                        <img class="lazy" decoding="async" width="261" height="305" src="<?php echo BASE_PATH ?>images/energy-part.png" alt="energy-part" title="energy-part">
                                    </div>
                                    <div class="energy-one__image-three">
                                        <img class="lazy" decoding="async" src="<?php echo BASE_PATH ?>images/energy-solor.png" alt="energy-solor" title="energy-solor">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section id="content_block_3" class="content_blocks_lists content_block_3">
                <section class="service-one solar-bg">
                    <div class="container">

                        <div class="section-title centered">
                            <h2 class="section-title__title">Our Products</h2>
                            <div class="section-title__text">We adopt an individual approach with each and every client and our
                                business <br> model is built on the following key promises.</div>
                        </div>
                        <div class="row clearfix">

                            <div class="service-one__single col-lg-3 col-md-6 col-sm-12">
                                <div class="service-one__single-inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <img class="lazy" src="<?php echo BASE_PATH ?>images/solar-pv.png" />
                                    <h3 class="service-one__title text-uppercase"><a href="<?php echo BASE_PATH ?>solar-panel.php"> Solar Panels </a></h3>
                                    <a href="<?php echo BASE_PATH ?>solar-panel.php" class="service-one__read-more">
                                        Read More <span class="service-one__read-arrow icon-right-arrow"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="service-one__single col-lg-3 col-md-6 col-sm-12">
                                <div class="service-one__single-inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <img class="lazy" src="<?php echo BASE_PATH ?>images/on-grid-inverter.png" />
                                    <h3 class="service-one__title text-uppercase"><a href="<?php echo BASE_PATH ?>on-grid-inverter.php"> On-grid Inverter </a></h3>
                                    <a href="<?php echo BASE_PATH ?>on-grid-inverter.php" class="service-one__read-more">
                                        Read More <span class="service-one__read-arrow icon-right-arrow"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="service-one__single col-lg-3 col-md-6 col-sm-12">
                                <div class="service-one__single-inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <img class="lazy" src="<?php echo BASE_PATH ?>images/solar-accessories.png" />
                                    <h3 class="service-one__title text-uppercase"><a href="<?php echo BASE_PATH ?>solar-accessories.php"> Solar Accessories </a></h3>
                                    <a href="<?php echo BASE_PATH ?>solar-accessories.php" class="service-one__read-more">
                                        Read More <span class="service-one__read-arrow icon-right-arrow"></span>
                                    </a>
                                </div>
                            </div>

                            <!-- <div class="service-one__single col-lg-3 col-md-6 col-sm-12">
                                <div class="service-one__single-inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <img class="lazy" src="<?php echo BASE_PATH ?>images/solar-water-heater.png" />
                                    <h3 class="service-one__title text-uppercase"><a href="<?php echo BASE_PATH ?>solar-water-heater.php"> Solar Water Heater </a></h3>
                                    <a href="<?php echo BASE_PATH ?>solar-water-heater.php" class="service-one__read-more">
                                        Read More <span class="service-one__read-arrow icon-right-arrow"></span>
                                    </a>
                                </div>
                            </div> -->

                            <!-- <div class="service-one__single col-lg-3 col-md-6 col-sm-12">
                                <div class="service-one__single-inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <img class="lazy" src="<?php echo BASE_PATH ?>images/battery-inverter.png" />
                                    <h3 class="service-one__title text-uppercase"><a href="<?php echo BASE_PATH ?>battery-inverter.php"> Battery Inverter </a></h3>
                                    <a href="<?php echo BASE_PATH ?>battery-inverter.php" class="service-one__read-more">
                                        Read More <span class="service-one__read-arrow icon-right-arrow"></span>
                                    </a>
                                </div>
                            </div> -->

                            <div class="service-one__single col-lg-3 col-md-6 col-sm-12">
                                <div class="service-one__single-inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <img class="lazy" src="<?php echo BASE_PATH ?>images/solar-street-light.png" />
                                    <h3 class="service-one__title text-uppercase"><a href="<?php echo BASE_PATH ?>solar-street-light.php"> Solar Street Light </a></h3>
                                    <a href="<?php echo BASE_PATH ?>solar-street-light.php" class="service-one__read-more">
                                        Read More <span class="service-one__read-arrow icon-right-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section id="content_block_4" class="content_blocks_lists content_block_4">
                <section class="service-one-1 style-two about-bg">
                    <div class="container">

                        <div class="section-title centered">
                            <h2 class="section-title__title">WHAT WE OFFER</h2>
                            <div class="section-title__text">We offer a wide array of solar products like on-grid and off-grid solutions, including modules,<br> inverters, mounting systems and accessories, pv’s, water heaters, street lights and more.</div>
                        </div>
                        <div class="row clearfix">

                            <div class="service-three__single col-lg-4 col-md-6 col-sm-12">
                                <div class="service-three__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="service-three__image">
                                        <img class="lazy" decoding="async" src="<?php echo BASE_PATH ?>images/service.webp" alt="service" title="service">
                                    </div>
                                    <div class="service-three__content">
                                        <div class="service-three__content-upper">
                                            <div class="service-three__icon icon-solar-panel-2"></div>
                                            <h3 class="service-three__title">
                                                <div>Installation</div>
                                            </h3>
                                        </div>
                                        <div class="service-three__text">Solar system relies on how it was installed.The way we are committed to provide the best quality products,
                                            we also install solar system with best quality accessories, to get maximum generation without any losses for long term.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="service-three__single col-lg-4 col-md-6 col-sm-12">
                                <div class="service-three__single-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="service-three__image">
                                        <img class="lazy" decoding="async" src="<?php echo BASE_PATH ?>images/service-section.webp" alt="service-section" title="service-section">
                                    </div>
                                    <div class="service-three__content">
                                        <div class="service-three__content-upper">
                                            <div class="service-three__icon icon-wind-mill-1"></div>
                                            <h3 class="service-three__title">
                                                <div>Maintenance</div>
                                            </h3>
                                        </div>
                                        <div class="service-three__text">Power generation depends on routine maintenance.Maintaining solar panel is not a big deal Likewise schedule cleaning of solar panels. So D-Light solar always guides our client to use best technology and techniques for smooth and continuous output.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="service-three__single col-lg-4 col-md-6 col-sm-12">
                                <div class="service-three__single-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="service-three__image">
                                        <img class="lazy" decoding="async" src="<?php echo BASE_PATH ?>images/service-other-section.webp" alt="service-section" alt="Service Section" />
                                    </div>
                                    <div class="service-three__content">
                                        <div class="service-three__content-upper">
                                            <div class="service-three__icon icon-hydro-power"></div>
                                            <h3 class="service-three__title">
                                                <div>Trading</div>
                                            </h3>
                                        </div>
                                        <div class="service-three__text">As we are known for our best quality product.We want that solar industry should do same.
                                            Hence we have started supplying best quality products to other suppliers at best rates with swift services.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section id="content_block_5" class="content_blocks_lists content_block_5">

                <section class="choose-one solar-bg-1">
                    <div class="container">

                        <div class="section-title">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h2 class="section-title__title text-white">ALL <br>ABOUT SOLAR</h2>
                                </div>
                                <div class="pull-right">
                                    <div class="section-title__text text-white">Solar technologies convert sunlight into electrical energy<br> either through photovoltaic (PV) panels or through mirrors that concentrate solar radiation.<br> This energy can be used to generate electricity or be stored in batteries or thermal storage.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">

                            <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="choose-one__single-inner choose-one__single-bg wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="choose-one__icon icon-renewable-energy-2"></div>
                                    <h3 class="choose-one__title">
                                        <div>LONG TIME TO USE</div>
                                    </h3>
                                    <div class="choose-one__text">The majority of solar panels on today`s market come with a 25-year long warranty.</div>
                                </div>
                            </div>

                            <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="choose-one__single-inner choose-one__single-bg wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                                    <div class="choose-one__icon icon-plug-electronics"></div>
                                    <h3 class="choose-one__title">
                                        <div>HELP THE ENVIRONMENT</div>
                                    </h3>
                                    <div class="choose-one__text">Solar creates 91% less CO2 pollution than natural gas and 96% less CO2 than coal.</div>
                                </div>
                            </div>

                            <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="choose-one__single-inner choose-one__single-bg wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="choose-one__icon icon-renewable-energy"></div>
                                    <h3 class="choose-one__title">
                                        <div>FLEXIBILITY</div>
                                    </h3>
                                    <div class="choose-one__text">If you’re not sure where to start, go with a company that provides different payments options, so you can pick the best one for you.</div>
                                </div>
                            </div>

                            <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="choose-one__single-inner choose-one__single-bg wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                                    <div class="choose-one__icon icon-power-plant"></div>
                                    <h3 class="choose-one__title">
                                        <div>ENERGY INDEPENDENCE
                                        </div>
                                    </h3>
                                    <div class="choose-one__text">Clean solar energy provides us with an unlimited, reliable source of energy.</div>
                                </div>
                            </div>

                            <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="choose-one__single-inner choose-one__single-bg wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                                    <div class="choose-one__icon icon-power-plant"></div>
                                    <h3 class="choose-one__title">
                                        <div>SAVE MONEY
                                        </div>
                                    </h3>
                                    <div class="choose-one__text">Solar costs less than energy from the utility, With solar you can secure predictable electricity costs for years to come.</div>
                                </div>
                            </div>

                            <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="choose-one__single-inner choose-one__single-bg wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                                    <div class="choose-one__icon icon-power-plant"></div>
                                    <h3 class="choose-one__title">
                                        <div>TAX BENEFIT
                                        </div>
                                    </h3>
                                    <div class="choose-one__text">Under Section 80-IA (Sub Section 4) of Income Tax Act, 1961 allows 100% tax waiver to consumer
                                    </div>
                                </div>
                            </div>

                            <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="choose-one__single-inner choose-one__single-bg wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                                    <div class="choose-one__icon icon-power-plant"></div>
                                    <h3 class="choose-one__title">
                                        <div>POWER PURCHASE AGREEMENT
                                        </div>
                                    </h3>
                                    <div class="choose-one__text">Solar PPA provides you the opportunity to go solar without the upfront cost.
                                    </div>
                                </div>
                            </div>

                            <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="choose-one__single-inner choose-one__single-bg wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                                    <div class="choose-one__icon icon-power-plant"></div>
                                    <h3 class="choose-one__title">
                                        <div>MONITORING
                                        </div>
                                    </h3>
                                    <div class="choose-one__text">In solar system you can also enable monitoring system by which if there is any problem we can fixed it.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section id="content_block_6" class="content_blocks_lists content_block_6">

                <section class="cta-one">
                    <div class="container">
                        <div class="cta-one__inner">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <h3 class="cta-one__title">Helps you to plug into the most powerful &#038; endless energy available&#8230;
                                    </h3>
                                    <div class="cta-one__btn-box">
                                        <a class="btn-style-three theme-btn" href="<?php echo BASE_PATH ?>contact-us.php"><span class="txt">Order Now</span></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section id="content_block_7" class="content_blocks_lists content_block_7">
                <section class="project-one">
                    <div class="container">
                        <div class="section-title centered">
                            <h2 class="section-title__title">Solar Projects &#038; Policies</h2>
                            <div class="section-title__text">
                                Every project is crucial for us therefore we lay consistent focus since the start to various stages of solar installation &#038; prompt support post that. Our work policies are simple &#038; transparent thereby aid in maintaining a long term relation with our clients &#038; associations.
                                <div class="section-title centered">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="project-one__single">
                                        <div class="project-one__image">
                                            <img class="lazy" decoding="async" src="<?php echo BASE_PATH ?>images/gallery.webp" alt="gallery" title="gallery">
                                            <div class="project-one__overlay-box">
                                                <h3 class="project-one__title">Leading Solar Panel manufacturer and Exporter in India</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="project-one__single">
                                        <div class="project-one__image">
                                            <img class="lazy" decoding="async" src="<?php echo BASE_PATH ?>images/gallery-1-1-2.webp" alt="gallery" title="Gallery" />
                                            <div class="project-one__overlay-box">
                                                <h3 class="project-one__title">Government of India Announced Solar and other&#8230;</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="project-one__single">
                                        <div class="project-one__image">
                                            <img class="lazy" decoding="async" src="<?php echo BASE_PATH ?>images/gallery-other-section.webp" alt="gallery-section" tilte="Galley Section" />
                                            <div class="project-one__overlay-box">
                                                <h3 class="project-one__title">Commercial Project Installed by D-Light Solar</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </section>
            <!-- <section id="content_block_8" class="content_blocks_lists content_block_8">
                <section class="testimonial-two solar-bg-2">
                    <div class="testimonial-two__shape-one"></div>
                    <div class="testimonial-two__shape-two"></div>
                    <div class="testimonial-two__shape-three"></div>
                    <div class="testimonial-two__shape-four"></div>
                    <div class="container">
                        <div class="section-title centered">
                            <h2 class="section-title__title">Happy Customers Said</h2>
                        </div>
                        <div class="testimonial-carousel owl-theme owl-carousel thm-owl__carousel owl-carousel" data-owl-options="{
							&quot;animateOut&quot;: &quot;fadeOut&quot;,
							&quot;animateIn&quot;: &quot;fadeIn&quot;,
							&quot;loop&quot;:true,
							&quot;margin&quot;:30,
							&quot;nav&quot;:true,
							&quot;autoplayTimeout&quot;:5000,
							&quot;autoHeight&quot;: true,
							&quot;smartSpeed&quot;: 500,
							&quot;autoplay&quot;: 6000,
							&quot;navText&quot;: [&quot;<span class=\&quot;icon-left-arrow-2\&quot;></span>&quot;,&quot;<span class=\&quot;icon-right-arrow-2\&quot;></span>&quot;],
							&quot;responsive&quot;:{
								&quot;0&quot;:{
									&quot;items&quot;:1
								},
								&quot;768&quot;:{
									&quot;items&quot;:2
								},
								&quot;1200&quot;:{
									&quot;items&quot;:2
								}
							}
						}">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__author-info">
                                        <div class="testimonial-two__author-image">
                                            <img class="lazy" src="<?php echo BASE_PATH ?>images/ashvin-rajani.webp" alt />
                                        </div>
                                        <h3 class="testimonial-two__title">Dr. Ashvin Rajanib</h3>
                                        <div class="testimonial-two__designation">Doctor</div>
                                    </div>
                                    <div class="testimonial-two__text">D-Light is one step solution where you can get more than you’ve expected. Their routine checkups improves lifetime of solar systems and Now D-Light has digitalized their whole service by launching Their own app. Vsolaroof is digital platform available in your palm. </div>
                                </div>
                            </div>
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__author-info">
                                        <div class="testimonial-two__author-image">
                                            <img class="lazy" src="<?php echo BASE_PATH ?>images/rajesh.webp" alt />
                                        </div>
                                        <h3 class="testimonial-two__title">Mr. Rajesh(Businessman)</h3>
                                        <div class="testimonial-two__designation">Ramdev Gems</div>
                                    </div>
                                    <div class="testimonial-two__text">We have heard lot regarding solar but D-Light acknowledge us about our actual requirement and we decided to get solar panel installed on our unusable terrace. Consumers trusts only trusted companies..</div>
                                </div>
                            </div>
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__author-info">
                                        <div class="testimonial-two__author-image">
                                            <img class="lazy" src="<?php echo BASE_PATH ?>images/babubhai-rabadiya.webp" alt />
                                        </div>
                                        <h3 class="testimonial-two__title">Babubhai Rabadiya</h3>
                                        <div class="testimonial-two__designation">Advocate</div>
                                    </div>
                                    <div class="testimonial-two__text">Product I was searching, was available at footstep distance but Quality D-Light offer are above industry standards. We all buy products from where we get what we didn’t know and from where we get best after sale service.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section> -->
            <section id="content_block_9" class="content_blocks_lists content_block_9">

                <section class="choose-two counter-well">
                    <div class="container">
                        <div class="choose-two__inner-container">
                            <div class="row clearfix">
                                <div class="column col-lg-6 col-md-12 col-sm-12">
                                    <div class="choose-two__left">

                                        <div class="section-title">
                                            <h2 class="section-title__title">OUR COMPANY<br>VALUES</h2>
                                            <div class="section-title__text">
                                                <p>We believe that &#8216;Honesty is the Best Policy&#8217;. We are honest towards work &#038; time with our customers.</p>
                                                <p>Teamwork is the ability to work together for a common vision and we work so and meet our goal.</p>
                                            </div>
                                            <div class="section-title__text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column col-lg-6 col-md-12 col-sm-12">
                                    <div class="choose-two__right">
                                        <div class="row clearfix">

                                            <div class="choose-two__single col-lg-6 col-md-6 col-sm-12">
                                                <div class="choose-two__inner">
                                                    <div class="choose-two__icon icon-wind-mill-ecological-generator"></div>
                                                    <div class="choose-two__count count-box">
                                                        <span class="count-text" data-speed="4000" data-stop="12000">0</span>+
                                                    </div>
                                                    <div class="choose-two__text">Happy Clients</div>
                                                </div>
                                            </div>

                                            <div class="choose-two__single col-lg-6 col-md-6 col-sm-12">
                                                <div class="choose-two__inner">
                                                    <div class="choose-two__icon icon-wind-mill"></div>
                                                    <div class="choose-two__count count-box">
                                                        <span class="count-text" data-speed="4000" data-stop="36000">0</span>+
                                                    </div>
                                                    <div class="choose-two__text">Kwh Installed </div>
                                                </div>
                                            </div>

                                            <div class="choose-two__single col-lg-6 col-md-6 col-sm-12">
                                                <div class="choose-two__inner">
                                                    <div class="choose-two__icon icon-medal"></div>
                                                    <div class="choose-two__count count-box">
                                                        <span class="count-text" data-speed="2000" data-stop="135000">0</span>
                                                    </div>
                                                    <div class="choose-two__text">Panels Installed</div>
                                                </div>
                                            </div>

                                            <div class="choose-two__single col-lg-6 col-md-6 col-sm-12">
                                                <div class="choose-two__inner">
                                                    <div class="choose-two__icon icon-energy-alternative-energy-source"></div>
                                                    <div class="choose-two__count count-box">
                                                        <span class="count-text" data-speed="4000" data-stop="10">0</span>+
                                                    </div>
                                                    <div class="choose-two__text">Years Of Experience</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section id="content_block_10" class="content_blocks_lists content_block_10">
                <section class="client-owl progress-one">
                    <div class="container">
                        <div class="progress-one__inner-container">

                            <div class="section-title centered">
                                <h2 class="section-title__title">Our Clients</h2>
                                <div class="section-title__text">We adopt an individual approach with each and every client and
                                    our business <br> model is built on the following key promises.
                                </div>
                            </div>
                            <div class="inner-container row">
                                <div class="testimonial-carousel owl-theme owl-carousel thm-owl__carousel" data-owl-options="{
							&quot;animateOut&quot;: &quot;fadeOut&quot;,
							&quot;animateIn&quot;: &quot;fadeIn&quot;,
							&quot;loop&quot;:true,
							&quot;margin&quot;:30,
							&quot;nav&quot;:false,
							&quot;autoplayTimeout&quot;:5000,
							&quot;autoHeight&quot;: true,
							&quot;smartSpeed&quot;: 500,
							&quot;autoplay&quot;: 6000,
							&quot;navText&quot;: [&quot;<span class=\&quot;icon-left-arrow-2\&quot;></span>&quot;,&quot;<span class=\&quot;icon-right-arrow-2\&quot;></span>&quot;],
							&quot;responsive&quot;:{
							&quot;0&quot;:{
							&quot;items&quot;:1
							},
							&quot;768&quot;:{
							&quot;items&quot;:2
							},
							&quot;1200&quot;:{
							&quot;items&quot;:4
							}
							}
							}">
                                    <div>
                                        <div class="progress-one__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <img class="lazy" src="<?php echo BASE_PATH ?>images/msme.webp" alt />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="progress-one__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <img class="lazy" src="<?php echo BASE_PATH ?>images/sura.webp" alt />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="progress-one__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <img class="lazy" src="<?php echo BASE_PATH ?>images/make-in-india.webp" alt />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="progress-one__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <img class="lazy" src="<?php echo BASE_PATH ?>images/geda.webp" alt />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section id="content_block_11" class="content_blocks_lists content_block_11">
                <section class="news-two" style="margin-bottom: 150px">
                    <div class="container">
                        <div class="section-title centered">
                            <h2 class="section-title__title">Videos</h2>
                            <div class="section-title__text">We adopt an individual approach with each and every client and our
                                business <br> model is built on the following key promises.</div>
                        </div>
                        <div class="row clearfix">
                            <div class="news-two__single video-two__single col-lg-4 col-md-6 col-sm-12">
                                <div class="news-two__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="news-two__img">
                                        <iframe class="lazy" decoding="async" width="370" height="250" src="https://www.youtube.com/embed/0V8_BltMb4I" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="news-two__content video-two__content">
                                        <h3 class="news-two__title video-two__title">
                                            <div>D-light Solar Energy LLP</div>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="news-two__single video-two__single col-lg-4 col-md-6 col-sm-12">
                                <div class="news-two__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="news-two__img">
                                        <iframe class="lazy" decoding="async" width="370" height="250" src="https://www.youtube.com/embed/MffBvGk5aQA" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="news-two__content video-two__content">
                                        <h3 class="news-two__title video-two__title">
                                            <div>Our Project</div>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="news-two__single video-two__single col-lg-4 col-md-6 col-sm-12">
                                <div class="news-two__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="news-two__img">
                                        <iframe class="lazy" decoding="async" width="370" height="250" src="https://www.youtube.com/embed/_AGDEbDAGOc" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="news-two__content video-two__content">
                                        <h3 class="news-two__title video-two__title">
                                            <div>Costumer Review And Plat Videos</div>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>

    <?php include_once('common/footer.php'); ?>
</body>

</html>