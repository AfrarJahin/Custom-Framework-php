<?php
function config($fullKey)
{
    $keyParts = explode('.', $fullKey);

    if (count($keyParts) !== 2) {
        return null;
    }

    $filename = $keyParts[0];
    $key = $keyParts[1];

    $configPath = $filename . '.php';
    $config = include $configPath;

    echo $config['host'];
    if (isset($config[$key])) {
        return $config[$key];
    } else {
        return null; // Key doesn't exist
    }

//    if (file_exists($configPath)) {
//        echo 'exist';
//        $config = include $configPath;
//
//        if (isset($config[$key])) {
//            return $config[$key];
//        } else {
//            return null; // Key doesn't exist
//        }
//    }else{
//        echo 'not exist';
//    }

    return null; // Configuration file doesn't exist
}
