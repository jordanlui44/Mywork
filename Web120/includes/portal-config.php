<?php
ob_start();
date_default_timezone_set('America/Los_Angeles')
echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
switch(THIS_PAGE){

    case 'index.php':
        $title = "Jordan LUI SCC WEB120 Portal";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'contactme.php':
        $title = "Jordan LUI SCC WEB120 Portal";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Me';
        $logo_color = 'style="color=#00f"';
    break;
    case 'aia.php':
        $title = "Aia Project";
        $logo = "fa-universal-access";
        $logo_color = 'style="color=#00f"';
    break;
    
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = 'Welcome';
    }
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Me";
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;
    
 //echo THIS_PAGE;
//die;   
}
?>

