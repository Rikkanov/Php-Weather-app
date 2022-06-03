<?php

function getLocation() {
    $query = @unserialize(file_get_contents('http://ip-api.com/php/'));
    if ($query && $query['status'] == 'success') {
    return $query['city'] . ', ' . $query['countryCode'];
    }
}