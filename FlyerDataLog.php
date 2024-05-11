<?php
/*
Plugin Name: FlyerDataLog
Plugin URI: https://seusite.com
Description: Um plugin simples para mostrar a data atual.
Version: 1.0
Author: DEVNIGO
Author URI: https://nigoxp.xyz
License: GPLv2 or later
*/

// Função para obter a data atual
function mostrar_data_hora_atual_gmt() {
    date_default_timezone_set('GMT');
    return date('d/m/Y H:i:s');
}

// Registrando o shortcode como [flyerdatelog]
function registrar_shortcode_flyerdatelog() {
    add_shortcode('flyerdatelog', 'mostrar_data_hora_atual_gmt');
}
add_action('init', 'registrar_shortcode_flyerdatelog');