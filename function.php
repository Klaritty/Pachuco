<?php
// Registrar ubicaciones del menú
function twentytwentyfour_child_theme_setup()
{
    register_nav_menus(
        array(
            'primary' => esc_html__('Menú Principal', 'twentytwentyfour-child'),
        ));
}
add_action('after_setup_theme', 'twentytwentyfour_child_theme_setup');


function consthera_theme_suport()
{
    add_theme_support('custom-logo');
}

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function agregar_script_checkbox_ninja_forms() {
    if (is_page('tu-pagina-del-formulario')) { // Cambia 'tu-pagina-del-formulario' por el slug de tu página
        ?>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Selecciona el checkbox y su label
            const checkbox = document.getElementById("checkbox_1730331340925");
            const checkboxLabel = document.querySelector('.nf-field-label label[for="checkbox_1730331340925"]');

            // Asegúrate de que el checkbox y su label existen
            if (checkbox && checkboxLabel) {
                // Cambia el contenido del label por un enlace
                checkboxLabel.innerHTML = `
                    <a href="https://pachucodigital.com/aviso-de-privacidad/" target="_blank" style="color: white; text-decoration: none;">
                        Acepto TyC y Avisos de Privacidad
                    </a>
                `;

                // Añade un evento de clic para evitar el comportamiento predeterminado
                checkboxLabel.addEventListener('click', function(event) {
                    event.preventDefault(); // Evita que el checkbox se active/desactive
                    window.open("https://pachucodigital.com/aviso-de-privacidad/", "_blank"); // Abre el enlace
                });
            }
        });
        </script>
        <?php
    }
}
add_action('wp_footer', 'agregar_script_checkbox_ninja_forms');

