 <?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function detection_nav() {
        if(false!==strpos($_SERVER["HTTP_USER_AGENT"],"MSIE"))
                return "Internet explorer";
        elseif(false!==strpos($_SERVER["HTTP_USER_AGENT"],"Firefox/"))
                return "Firefox";
        elseif(false!==strpos($_SERVER["HTTP_USER_AGENT"],"Chrome/"))
                return "Chrome";
        elseif(false!==strpos($_SERVER["HTTP_USER_AGENT"],"Safari/"))
                return "Safari";
        elseif(false!==strpos($_SERVER["HTTP_USER_AGENT"],"Opera/"))
                return "Opera";
        elseif(false!==strpos($_SERVER["HTTP_USER_AGENT"],"Mozilla/"))
                return "Netscape";
        return "Inconnu";
}
?>