<?php
include_once('config.php');
define('PAGE_NAME', "Download");
include_once('common/head.php');
?>

<body class="page-template page-template-template-download page-template-template-download-php page page-id-46">

    <div class="page-wrapper">
        <?php include_once('common/header.php'); ?>
        <?php include_once('common/breadcrumb.php'); ?>

        <section class="download-section style-three">
            <div class="container">
                <div class="section-title">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h2 class="section-title__title">Solar energy, the smart way to power your home</h2>
                            </p>
                        </div>
                        </p>
                    </div>
                    </p>
                </div>
                <div class="row clearfix">

                    <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="choose-one__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img class="lazy" src="<?php BASE_PATH ?>images/pdf.svg">
                            <h3 class="choose-one__title"><a href="#">Price List </a></h3>
                            <a class="choose-one__arrow download-btn fa fa-download" href="<?php BASE_PATH ?>uploads/Rate-List.pdf" target="_blank"></a>

                        </div>
                    </div>
                    <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="choose-one__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img class="lazy" src="<?php BASE_PATH ?>images/pdf.svg">
                            <h3 class="choose-one__title"><a href="#">Vsole </a></h3>
                            <a class="choose-one__arrow download-btn fa fa-download" href="<?php BASE_PATH ?>uploads/Vsole.pdf" target="_blank"></a>

                        </div>
                    </div>
                    <div class="choose-one__single col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="choose-one__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img class="lazy" src="<?php BASE_PATH ?>images/pdf.svg">
                            <h3 class="choose-one__title"><a href="#">Brochure Solar </a></h3>
                            <a class="choose-one__arrow download-btn fa fa-download" href="<?php BASE_PATH ?>uploads/Brochure-2023.pdf" target="_blank"></a>

                        </div>
                    </div>
                </div>
        </section>
    </div>
    <?php include_once('common/footer.php'); ?>
</body>

</html>