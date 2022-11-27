<?php
/*
Template Name: home
*/
?>

<?php get_header();  ?>

<div class="container-xxl banner pb-4 pt-4" id="about">
    <div class="container">
        <div class="row g-5 ">
            <div class="col-lg-6">
               <div class="wow fadeIn" data-wow-delay="0.1s">
                        <img class=" mx-auto d-block img-fluid rounded pt-3" src="<?php echo get_template_directory_uri() ?>/assets/images/фото1.jpg">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h5 class="section-title  text-start pt-3">We strive to offer the highest quality  magnesium salt and sea salt at the best possible price. </h5>

                <p class="mb-4" style="line-height: 26px;">Epsom salt effectively compensates the lack of magnesium in the body. This component is primarily responsible for mood swings, irritability, and how we respond to stress. Baths with Epsom salt relax mentally and physically, help to calm down, relieve tension after a difficult day.</p>

                <div class=" pt-2 mb-5">
                    <h5 class="section-title  text-start pe-3">Epsom salt (EPSOM)</h5>
                    <p class="mb-4">An ideal source of magnesium for the body. The content of magnesium sulfate is not less than 99.9%.</p>
                </div>
            </div>

        </div>
        <div class="row g-5">
            <div class="col-lg-5 wow fadeIn pt-3" data-wow-delay="0.5s">
                <div class=" pt-2 mb-5">
                    <p><i class="fa fa-check me-3 pr-2"></i>replenishes magnesium deficiency in the body;</p>
                    <p><i class="fa fa-check me-3 pr-2"></i>soothes the nervous system and relaxes;</p>
                    <p><i class="fa fa-check me-3 pr-2"></i>removes toxins from the body;</p>
                    <p><i class="fa fa-check me-3 pr-2"></i>cleanses the lymph, relieves swelling;</p>
                    <p><i class="fa fa-check me-3 pr-2"></i>relieves the symptoms of psoriasis, arthritis, eczema;</p>


                </div>


            </div>

            <div class="col-lg-7 wow fadeIn pt-3" data-wow-delay="0.5s">
                <div class=" pt-2 mb-5">
                    <p><i class="fa fa-check me-3 pr-2"></i>great for a home spa;</p>
                    <p><i class="fa fa-check me-3 pr-2"></i>Epsom salt scrub perfectly moisturizes and cleanses, makes the skin velvety</p>
                    <p><i class="fa fa-check me-3 pr-2"></i>relax muscles and relieve pain after exercise;</p>
                    <p><i class="fa fa-check me-3 pr-2"></i>calm the nerves, fall asleep faster;</p>
                    <p><i class="fa fa-check me-3 pr-2"></i>enhance the effectiveness of the diet, it is easier to lose weight.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-xxl pb-4 pt-4 " id="application">
    <div class="container">
        <h1 class=" pe-3 text-center">Application:</h1>
        <div class="row g-5">
            <div class="col-lg-6">
                <ul class=" pt-3 wow fadeIn" data-wow-delay="0.1s" style="list-style-type:none; margin: 0; padding:0">
                    <li class="pb-2"><p>1. Before taking an Epsom salt bath, drink a glass of water.</p></li>
                    <li class="pb-2"><p>2. In warm water dissolve 300-500 grams of Epsom salts (for children under 3 years old - 50g).</p></li>
                    <li class="pb-2"><p>3. Take a bath for 30 minutes - 20 minutes to detox the body, 10 minutes to absorb magnesium.</p></li>
                    <li class="pb-2"><p>4. After the bath, you should take a shower, without the use of soap or shower gels.</p></li>

                </ul>
                <p class="pt-3 wow fadeIn" data-wow-delay="0.1s">You are relaxed, healthier, calmer and ready for new experiences.</p>

            </div>

            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <img class=" mx-auto d-block img-fluid rounded pt-3" src="<?php echo get_template_directory_uri() ?>/assets/images/фото 3.jpg">

            </div>
        </div>


    </div>


</div>

<div class="container-xxl pb-4 pt-4 wow fadeIn" data-wow-delay="0.1s" id="pricing">
    <div class="container">

        <h1 class=" p-3 text-center">Pricing</h1>
        <div class="container">
            <div class="row">

                <div class="col-md-6 mx-auto pb-4">
                    <div class="pricingTable ">
                        <div class="price-value">$22
                        </div>
                        <h3 class="title">Epsom salt (Magnesium Sulfate) </h3>
                        <ul class="pricing-content">
                            <li><p>25 kg (55 lbs)</p></li>
                        </ul>
                    </div>
                </div>




    </div>


</div>
        <div class="container-xxl pb-4 pt-4 wow fadeIn" data-wow-delay="0.1s" id="contact">
            <div class="container">

                <h1 class=" pe-3 text-center">Contact us</h1>
                <div class="container">
                    <div class="row">

                        <div class=" mx-auto pb-4">

                            <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]');?>
                        </div>




                    </div>


                </div>

            </div>
        </div>
    </div>
</div>





<?php get_footer();  ?>

