<?php

function seo_title($raw_text) {
    $result = strtolower($raw_text);
    $result = trim($result);
    $result = preg_replace('/&amp;.+?;/', '', $result);
//    $result = preg_replace('/\s+/', '', $result); menghilankan spasi
    $result = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '+', $result);
    $result = preg_replace('|-+|', '', $result);
    $result = preg_replace('/&amp;#?[a-z0-9]+;/i', '', $result);
    $result = preg_replace('/[^%A-Za-z0-9 _-]/', '', $result);
    $result = preg_replace('/\s\s+/', ' ', $result);
    $result = str_replace(" ", "-", $result);
    return $result;
}

function sanitize_input($input_value){
    $sanitized = trim($input_value);
    $sanitized = preg_replace('/\s\s+/', ' ', $sanitized);    
    return $sanitized;
}