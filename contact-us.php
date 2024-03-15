<?php
include_once('config.php');
define('PAGE_NAME', "Contact Us");
$active = 'contactus';
include_once('common/head.php');
?>

<body class="page-template-default page page-id-47">

    <div class="page-wrapper">

        <?php include_once('common/header.php'); ?>
        <?php include_once('common/breadcrumb.php'); ?>

        <section id="content_block_1" class="content_blocks_lists content_block_1">

            <section class="contact-one contact-bg-2">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h2 class="contact-one__title">Feel free to ask questions or share your message with us.</h2>
                            <div class="contact-one__text">You can also reach out to us by phone or email are many
                                variations
                            </div>
                            <ul class="contact-one__info">
                                <li>
                                    <span class="icon icon-location"></span>
                                    Address
                                    <p><?php echo SITE_ADDRESS ?></p>
                                </li>
                                <li>
                                    <span class="icon icon-phone"></span>
                                    Phone
                                    <p><a href="tel:<?php echo SITE_MOBILE1 ?>"><?php echo SITE_MOBILE1 ?></a></p>
                                </li>
                                <li>
                                    <span class="icon icon-email"></span>
                                    Email Address
                                    <p><a href="mailto:<?php echo SITE_EMAIL ?>" target="_blank"><span><?php echo SITE_EMAIL ?></span></a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="contact-one__form-box">
                                <h2 class="contact-one__title-two">Send Us Message</h2>
                                <div class="contact-one__text-two">The future is solar. Let us together make a difference towards environmental sustainability by switching to solar.<br>For inquiries, connect with us today.
                                </div>
                                <div class="contact-form">
                                    <form action="<?php echo BASE_PATH ?>contact-us.php" method="post" class="init" novalidate="novalidate" data-status="init">
                                        <div class="row clearfix">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <span data-name="FullName"><input type="text" name="FullName" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Full Name" /></span>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <span data-name="email-497"><input type="email" name="email-497" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email Address" /></span>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <span data-name="Phone"><input type="tel" name="Phone" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone" /></span>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <span data-name="Subject"><input type="text" name="Subject" value size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject" /></span>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <span data-name="Message"><textarea name="Message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message Here"></textarea></span>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12"></div>
                                            <div class="form-group form-btn">
                                                <input type="submit" value="Send Message" class="wpcf7-form-control has-spinner wpcf7-submit theme-btn btn-style-two" />
                                            </div>
                                        </div>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section id="content_block_2" class="content_blocks_lists content_block_2">
            <section class="contact-map">
                <iframe title="D-Light Solar Gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.9736973422177!2d72.87367667600219!3d21.232891580734577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f000d0fa39d%3A0x8ecb5ba93c45f9e8!2sAnjani%20row%20house!5e0!3m2!1sen!2sin!4v1710503234178!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </section>
    </div>
    <?php include_once('common/footer.php'); ?>
</body>

</html>