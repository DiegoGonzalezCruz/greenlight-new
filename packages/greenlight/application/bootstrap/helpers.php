<?php


function mix($path)
{
    $manifestPath = DIR_BASE . '/application/themes/greenlight_theme/mix-manifest.json';
    if (!file_exists($manifestPath)) {
        return $path;
    }
    $manifest = json_decode(file_get_contents($manifestPath), true);
    $path = '/' . ltrim($path, '/');
    if (array_key_exists($path, $manifest)) {
        return $manifest[$path];
    }
    return $path;
}
