<?php
/*
 * Gigya PHP SDK
 *
 * version 2.17.1
 *
 * http://developers.gigya.com/display/GD/PHP
 */

namespace Gigya;

if (!function_exists('curl_init')) {
    throw new Exception('Gigya PHP SDK needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    throw new Exception('Gigya PHP SDK needs the JSON PHP extension.');
}