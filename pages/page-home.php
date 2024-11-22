<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Organizamos experiencias únicas y memorables: eventos que conectan como convenciones, lanzamientos, fiestas corporativas y más. ¡Contáctanos!">
    <meta name="keywords" content="Agencia de publicidad creativa, Marketing digital, Estrategia de branding, Diseño gráfico, Creatividad, Publicidad en redes sociales, Agencia de marketing digital, Desarrollo de contenido, Estrategia de contenido, Campañas publicitarias, Publicidad digital, Estrategias creativas, Creación de marca, Creatividad e innovación, Agencia de diseño digital, Paid Media, Performance, Estrategia de comunicación">

    <meta property="og:title" content="Punto de Encuentro: Experiencias únicas para cada evento">
    <meta property="og:description" content="Transformamos ideas en emociones: somos una agencia creativa que desarrolla soluciones de marketing efectivas para lograr tus metas.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cosnthera">
    <meta name="twitter:description" content="Espacio psicoterapéutico y holístico en donde te reconciliarás con el pasado y el presente para equilibrar tu futuro. Terapia presencial y en línea.">

    <link rel="canonical" href="<?php echo get_permalink(); ?>">

    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-36VC4346Y2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-36VC4346Y2');
    </script> -->

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/tailwind_output.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/formStyles.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/node_modules/swiper/swiper-bundle.min.css">

    <title>Pachuco</title>
    <link rel="icon" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/Assetss/Landing/Favicon.ico" type="image/x-icon" />
    
    <?php wp_head(); ?>
</head>

<body>
    <main id="home">
        <!--contacto-->
        <?php include 'contacto.php'?>
        <!--Services-->
        <?php include 'services.php'; ?>
        <!--brands-->
        <?php include 'brands.php'; ?>
        <!--Testimonios-->
        <?php include 'testimonials.php'?>
        <!--Call-->
        <?php include 'call-to-action.php'?>
        <!--Footer-->
        <?php include 'footer.php'?>
        <!--button to up -->
        <?php include 'scroll-to-up.php'?>
        <?php wp_footer(); ?>
</body>

</html>
