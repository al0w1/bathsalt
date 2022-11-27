<!doctype html>
<html lang="ru">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head() ?>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div id="overlayer"></div>
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top px-4 px-lg-5">
    <a href="/" class="navbar-brand">
        <div class="row g-5 col-md-8 ">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <figure class="figure">
                    <img
                            class=""
                            width="35"
                            height="35"
                            height="35"
                            src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0]; ?>"

                    />
                    <figcaption class="figure-caption">Wholesale supplier of Epsom salt and sea salt </figcaption>
                </figure>


            </a>
        </div>

    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#application" class="nav-item nav-link">Application</a>
            <a href="#pricing" class="nav-item nav-link">Pricing</a>
            <a href="#contact" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
