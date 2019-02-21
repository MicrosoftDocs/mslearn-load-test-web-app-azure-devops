<?php

/**
 * Web app configuration
 */
function config($key = '')
{
    $config = [
        'name' => 'Contoso Costume Rentals',
        'app_url' => 'app-url-here',
		'graphics'=> false,
    ];

    return isset($config[$key]) ? $config[$key] : null;
}

?>