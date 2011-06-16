<?php
/**
 Generic simple template, BSM.
 N.D.Freear, 23 September 2008.
 
 @abstract  _template(ob_get_clean(), $title);
*/
ini_set('display_errors', 'on');
error_reporting(E_ALL);  #|E_STRICT.

##_template();


function _template($page=null, $title='Maintenance', $meta=null, $class=null) {
    $title .= "<span> (experimental)</span>";
    $url = dirname(dirname($_SERVER['PHP_SELF']));    

    header('Content-Type: text/html; charset=UTF-8');
    @header('Content-Language: en');
    @header('X-Powered-By:');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="copyright" content="&copy; 2008 N.D.Freear" />
<meta name="robots" content="noindex,nofollow" />

<title><?php echo strip_tags($title) ?></title>

<?php echo $meta ?>

<link type="" rel="icon" href="<?php echo $url ?>/favicon.ico" />
<link type="text/css" rel="stylesheet" href="<?php echo $url ?>/includes/bsm.css" />
</head>
<body>
<h1><?php echo $title ?></h1>

<?php echo $page ?>

<p class="foot">&copy; 2008 N.D.Freear</p>
</body>
</html>
<?php

    exit;
}


function _li($text) {
  echo "<li>$text</li>\n";
}
function _u($url) {
  return htmlspecialchars($url);
}
function _dump($var) {
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}

function _get($name, $default) {
  if (isset($_GET[$name])) {
    return $_GET[$name];
  }
  return $default;
}



#PHP4 compatibility.
return;

if (!function_exists('_str_split') && function_exists('preg_split')) {
  function _str_split($string, $split_length=1) {
    return preg_split("/(.{{$split_length}})/", $string, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);
  }
}
if (!function_exists('_stripos')) {
  function _stripos($haystack, $needle, $offset=0) {
    return strpos(strtolower($haystack), strtolower($needle), $offset);
  }
  function _strripos($haystack, $needle, $offset=0) {
    return strrpos(strtolower($haystack), strtolower($needle), $offset);
  }
}


$test = "Hello\nworld !";
$needle = "WORLD";

echo '<pre>';
var_dump(str_split($test, 2));
var_dump(_str_split($test, 2));

echo stripos($test, $needle),"\n";
echo _stripos($test, $needle);

?>