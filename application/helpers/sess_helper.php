<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
{
    function set_sess($sess)
    {	      
        if( !$sess || $sess == "")redirect('accueil', location);
    }   
}
