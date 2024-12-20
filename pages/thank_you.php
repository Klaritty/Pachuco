<?php
/*
Template Name: Thank You
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/tailwind_output.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/formStyles.css">
    <link rel="stylesheet"
        href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/node_modules/swiper/swiper-bundle.min.css">

    <title>Pachuco</title>
    <link rel="icon" href="<?php echo get_site_url(); ?>/wp-content/themes/Pachuco/Assets/Landing/favicon.ico"
        type="image/x-icon" />

    <?php wp_head(); ?>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body class="m-0 p-0">
    <!-- Fondo con imagen centrada y cubriendo todo el espacio -->
    <div class="min-h-screen bg-center bg-no-repeat bg-origin-content" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/Assetss/ThankYou/TYP_IMG.webp');">
        <!-- Ajuste del logo en la esquina superior izquierda -->
        <div class="absolute top-12 left-12">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/Landing/Header_Logo.webp" alt="Logo de la empresa" class="w-52">
        </div>

        <!-- Texto principal en el centro -->
        <div class="pt-[6rem] text-center">
            <h1 class="text-4xl md:text-5xl text-white font-Montse font-bold mb-20">
                <span class="text-red-500">¡GRACIAS</span> POR QUERER
                <span class="text-red-500"> BAILAR</span><br>
                <span class="text-white">CON NOSOTROS!</span>
            </h1>
        </div>

        <!-- Caja negra transparente con texto -->
        <div class="absolute bottom-20 left-1/2 text-center transform -translate-x-1/2 bg-black bg-opacity-60 text-white p-10 rounded-lg max-w-4xl w-full md:w-3/4">
            <p class="text-base md:text-lg font-Montse">
                Pronto estaremos sacando los mejores pasos en la pista de baile junto con las mejores estrategias para que tu marca genere emoción.
            </p>
            <span class="font-bold text-white"> Estamos en contacto</span>

            <!-- Iconos de redes sociales -->
            <h3 class="font-bold text-lg md:text-xl text-red-500 mt-[2rem] font-Montse">Sigue nuestro baile:</h3>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="https://www.instagram.com/pachucolens/" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/ThankYou/TYP_Icon_Instagram.webp" alt="Instagram" class="w-8 h-8">
                </a>
                <a href="https://tiktok.com/@tu-cuenta" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/ThankYou/TYP_Icon_Tk.webp" alt="TikTok" class="w-8 h-8">
                </a>
                <a href="https://www.linkedin.com/company/pachuco-digital/mycompany/" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Assetss/ThankYou/TYP_Icon_Linedin.webp" alt="LinkedIn" class="w-8 h-8">
                </a>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>

</html>
