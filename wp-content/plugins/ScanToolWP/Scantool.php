<?php
/**
 * Plugin Name: ScanToolWP
 * Plugin URI: http://quiroztec.com
 * Description: Un plugin para mostrar información técnica de WordPress.
 * Version: 1.0
 * Author: Jhon Byron Quiroz Perez
 * Author URI: http://quiroztec.com
 */

// Engancha la función 'scantoolwp_agregar_menu_admin' al hook 'admin_menu'.
add_action('admin_menu', 'scantoolwp_agregar_menu_admin');

/**
 * Agrega el menú principal y submenús en el Dashboard de WordPress.
 */
function scantoolwp_agregar_menu_admin() {
    
    add_menu_page(
        'Dashboard ScanToolWP',         
        'ScanToolWP',                   
        'manage_options',               
        'scantoolwp_dashboard',         
        'scantoolwp_dashboard_display', 
        'dashicons-admin-tools',        
        3                               
    );

    // Agrega el submenú 'Dashboard'.
    add_submenu_page(
        'scantoolwp_dashboard',         
        'Dashboard ScanToolWP',         
        'Dashboard',                    
        'manage_options',               
        'scantoolwp_dashboard',         
        'scantoolwp_dashboard_display'  
    );

    // Agrega el submenú 'About'.
    add_submenu_page(
        'scantoolwp_dashboard',         
        'About ScanToolWP',             
        'About',                        
        'manage_options',               
        'scantoolwp_about',             
        'scantoolwp_about_display'      
    );
}

/**
 * Muestra el contenido de la página 'Dashboard'.
 */
function scantoolwp_dashboard_display() {
    $site_name = get_bloginfo('name');
    $site_url = site_url();
    $wp_url = get_bloginfo('wpurl');
    $wp_version = get_bloginfo('version');
    
    // Obtiene temas instalados
    $themes = wp_get_themes();
    $active_theme = wp_get_theme();

    // Obtiene plugins instalados
    $all_plugins = get_plugins();
    $active_plugins = get_option('active_plugins');

    // Conteo de páginas y posts
    $pages_count = wp_count_posts('page')->publish;
    $posts_count = wp_count_posts('post')->publish;

    echo '<div class="wrap">';
    echo '<h2>Dashboard - ScanToolWP</h2>';
    echo '<ul>';
    echo '<li>Nombre del sitio: ' . esc_html($site_name) . '</li>';
    echo '<li>URL de instalación: ' . esc_url($site_url) . '</li>';
    echo '<li>URL de WordPress: ' . esc_url($wp_url) . '</li>';
    echo '<li>Versión de WordPress: ' . esc_html($wp_version) . '</li>';
    echo '<li>Temas instalados:</li>';
    echo '<ul>';
    foreach ($themes as $theme) {
        $style = $theme->get_stylesheet() === $active_theme->get_stylesheet() ? 'font-weight: bold;' : '';
        echo '<li style="' . $style . '">' . $theme->get('Name') . '</li>';
    }
    echo '</ul>';

    echo '<li>Plugins instalados:</li>';
    echo '<ul>';
    foreach ($all_plugins as $plugin_path => $plugin) {
        // Verifica si el plugin está activo
        $style = in_array($plugin_path, $active_plugins) ? 'color: green;' : 'color: red;';
        echo '<li style="' . $style . '">' . $plugin['Name'] . '</li>';
    }
    echo '</ul>';

    echo '<li>Número de páginas publicadas: ' . intval($pages_count) . '</li>';
    echo '<li>Número de blogs publicados: ' . intval($posts_count) . '</li>';
    echo '</ul>';
    echo '</div>';
}

/**
 * Muestra el contenido de la página 'About'.
 */
function scantoolwp_about_display() {
    echo '<div class="wrap">';
    echo '<h2>About - ScanToolWP</h2>';
    echo '<p>Nombre del autor del plugin: <strong>Jhon Byron Quiroz Perez</strong></p>';
    
    // Botones de redes sociales
    echo '<p>Síguenos en nuestras redes sociales:</p>';
    echo '<a href="https://www.facebook.com/nativapps" target="_blank" style="margin-right: 10px;"><button>Facebook</button></a>';
    echo '<a href="https://www.instagram.com/nativapps/" target="_blank" style="margin-right: 10px;"><button>Instagram</button></a>';
    echo '<a href="https://www.linkedin.com/company/nativapps-inc/" target="_blank"><button>LinkedIn</button></a>';
    
    echo '</div>';
}
