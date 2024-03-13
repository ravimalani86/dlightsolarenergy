<?php
include_once('config.php');
define('PAGE_NAME', "Solar Accessories");
include_once('common/head.php');
?>

<body class="product-template-default single single-product postid-363">

    <div class="page-wrapper">
        <?php include_once('common/header.php'); ?>
        <?php include_once('common/breadcrumb.php'); ?>
    </div>
    <?php include_once('product-breadcrumb.php'); ?>
    <section class="download-section style-two pt-0">
        <div class="section-1 pt-0">
            <div class="container  mt-20">
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="solar-inverter">
                            <img class="lazy loaded" decoding="async" src="<?php echo BASE_PATH ?>images/dcdb.webp" alt="dcdb" title="DCDB" data-was-processed="true">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 align-items">
                        <div class="">
                            <h2 class="faq-two__title mb-10">DC Distribution Box</h2>
                            <p>The DC Distribution Box provides flexibility for the operator of the solar power plant to disconnect and connect both the inward solar supply and battery terminals. We use an MCCB and a fuse of proper rating depending upon the capacity of the power plant and the battery bank.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <div class="container">
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-12 col-sm-12 align-items">
                        <div class="">
                            <h2 class="faq-two__title mb-10">AC Distribution Box</h2>
                            <p>The ACDB (Alternative Current Distribution Box) receives the AC power from the solar inverter and directs it to AC loads through the distribution board. ACDB includes necessary surge protection device (SPD) and MCCB to protect the solar inverter from any type of damage or heavy voltage.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="solar-inverter">
                            <img class="lazy loaded" decoding="async" src="<?php echo BASE_PATH ?>images/acdb.webp" alt="acdb" title="ACDB" data-was-processed="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-1">
            <div class="container">
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-12 col-sm-12 align-items">
                        <div class="">
                            <h2 class="faq-two__title mb-10">Rearrange </h2>
                            <p>Positioning your solar panels on a roof facing true south, and at a tilt between 30 and 45 degrees, will yield the best results in terms of energy production and savings</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="solar-inverter">
                            <img class="lazy loaded" decoding="async" src="<?php echo BASE_PATH ?>images/rearrange.webp" alt="rearrange" title="Rarrange" data-was-processed="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <div class="container">
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="solar-inverter">
                            <img class="lazy loaded" decoding="async" src="<?php echo BASE_PATH ?>images/earthing-rod.webp" alt="earthing-rod" title="Earthing Rod" data-was-processed="true">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 align-items">
                        <div class="">
                            <h2 class="faq-two__title mb-10">Earthing rods</h2>
                            <p>The solar earthing rod is made up of pure copper and is used for grounding solar earthing. Our earthing rods are of superior quality and made with material that lasts long. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('common/footer.php'); ?>
</body>

</html>