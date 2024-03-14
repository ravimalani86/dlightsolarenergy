<?php
include_once('config.php');
define('PAGE_NAME', "On-grid Inverter");
$active = 'product';
$subactive = 'on-grid-inverter';
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
                            <img class="lazy" decoding="async" src="<?php echo BASE_PATH ?>images/vsole-inv.webp" alt="vsole-inv" title="vsole-inv">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 align-items">
                        <div class>
                            <h2 class="faq-two__title mb-10">GRID TIE INVERTER &#8211; SINGLE PHASE -VSS <br>(101S -622S) 1.0 KW-6.2KW
                            </h2>
                            <div class="service-provide">
                                <ul class="service-detail__list">
                                    <li>Max. conversion efficiency 97.5%</li>
                                    <li>DC overloading up to 10%</li>
                                    <li>MPPT Tracking Voltage</li>
                                    <li>(1 &#8211; 3.3 KW) ~70-500 V</li>
                                    <li>(4 – 6.2 KW) ~80-500 V</li>
                                    <li>Max. DC I/P: 550Vdc</li>
                                    <li>Rated Grid Voltage (V) / Range 230V / (140-285V)</li>
                                    <li>Output Power factor 0.8 leading to 0.8 lagging</li>
                                    <li>Max. MPPT I/P Current (A) 13A</li>
                                    <li>Noise Emission (dB) <25dB< /li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <div class="container">
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-12 col-sm-12 align-items">
                        <div class>
                            <h2 class="faq-two__title mb-10">GRID TIE INVERTER &#8211; THREE PHASE<br>VSS (052T-1106T) 5.0KW-110KW</h2>
                            <div class="service-provide">
                                <ul class="service-detail__list">
                                    <li>Max. conversion efficiency 98.9%</li>
                                    <li>DC overloading up to 20%</li>
                                    <li>MPPT Tracking Voltage 200v – 850v</li>
                                    <li>Max. DC I/P: 1000Vdc</li>
                                    <li>Rated Grid Voltage (V) / Range 415V / (280v &#8211; 455v)</li>
                                    <li>Output Power factor 0.8 leading to 0.8 lagging</li>
                                    <li>Max. MPPT I/P Current (A) 40A</li>
                                    <li>Noise Emission (dB) <55dB< /li>
                                    <li>Type II DC / AC SPD, frequency drop control technology</li>
                                    <li>Smart Fan Cooling</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="solar-inverter">
                            <img class="lazy" decoding="async" src="<?php echo BASE_PATH ?>images/Inverter-Three-Phase-Inverter.webp" alt="Inverter-Three-Phase-Inverter" title="Inverter Three Phase Inverter">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-1">
            <div class="container">
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="solar-inverter">
                            <img class="lazy" decoding="async" src="<?php echo BASE_PATH ?>images/Inverter-Hybrid.webp" alt="Inverter-Hybrid" title="Inverter Hybrid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 align-items">
                        <div class>
                            <h2 class="faq-two__title mb-10">BI-DIRECTIONAL HYBRID INVERTER</h2>
                            <div class="service-provide">
                                <ul class="service-detail__list">
                                    <li>Automatic Superfast switching time (Changeover Time) 4ms. It can be used as UPS</li>
                                    <li>Battery Management System (BMS) to protect &#038; enhance the battery life (Li-ion/Lead Acid/LiFP04) &#8212;&#8212;-100% unbalanced output, each phase; Max. output up to 50% rated power (Three Phase)</li>
                                    <li>Colourful touch LCD display with ease of operation &#038; maintenance.</li>
                                    <li>Ideal solution for BLACK-OUT &#038; BROWN-OUTS with GRID Exports with &#038; without Battery.</li>
                                    <li>Programmable supply priority for PV, Battery &#038; Grid.</li>
                                    <li>Inbuilt Zero Export / Reverse Power Limit to grid.</li>
                                    <li>Grid Peak Compensation Mode &#8211; It can reduce / Limit Maximum Demand (save your penalties)</li>
                                    <li>Intelligent SMART LOAD function for AC, water heater, Micro &#038; Grid tie inverter.</li>
                                    <li>DC couple and AC couple to retrofit existing solar system Max.</li>
                                    <li>16pcs parallel for on-grid and</li>
                                    <li>Max. Charging/discharging current upto 240A</li>
                                    <li>48V low voltage battery, transformer isolation design</li>
                                    <li>6 times period for battery charging / discharging</li>
                                    <li>V/f drop control.</li>
                                    <li>Supports using diesel generator to charge the battery directly. ensuring system energy supply 24*7Hrs</li>
                                    <li>Support storing energy from diesel generator.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('common/footer.php'); ?>
</body>

</html>