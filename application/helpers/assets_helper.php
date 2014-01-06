<?php

    /* **************************************************************************************

            Helper facilitant l'integration des liens, img, fichier css et js

    ************************************************************************************** */


 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function css_url($nom)
{
	return base_url() . 'assets/css/' . $nom . '.css';
}
function js_url($nom)
{
	return base_url() . 'assets/js/' . $nom . '.js';
}
function img_url($nom)
{
	return base_url() . 'assets/img/' . $nom. '.png';
}
function imgjpg_url($nom)
{
    return base_url() . 'assets/img/' . $nom . '.jpg';
}
function img($nom, $alt = '', $haut = 0, $large = 0)
{
    $image = '';
    
    if($haut != 0 && $large != 0){
        $image = '<img src="' . img_url($nom) . '" alt="' . $alt . '" width="'.$large.'" height="'.$haut.'" />';
    }
    if($haut != 0 && $large == 0){
        $image = '<img src="' . img_url($nom) . '" alt="' . $alt . '" height="'.$haut.'" />';
    }
    if($haut == 0 && $large != 0){
        $image = '<img src="' . img_url($nom) . '" alt="' . $alt . '" width="'.$large.'" />';
    }
    if($haut == 0 && $large == 0){
        $image = '<img src="' . img_url($nom) . '" alt="' . $alt . '"/>';
    }
    
	return $image;
}

?>
