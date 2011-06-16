<?php
/**
 British Sign Language finger-spelling machine - web service.
   [Compatibility: PHP 4, IE 6, Firefox 3, Safari.]
 @author N.D.Freear, 29 August-22 September.
 @copyright Copyright 2008 N.D.Freear.

 @todo, IE 6 test, Tidy javascript, Parse numbers...?
 -Each GIF, 3 frames, 100x100 pixels.

 http://localhost:8888/bsl/?text=123+Hello+world?%2B+12399
 http://bunburyis.com/cgi-bin/spell.cgi?phrase=Hello+world
 http://www.british-sign.co.uk/product_info.php?products_id=4 -Finger spelling tool.
 http://www.britishsignlanguage.com/words/index.php?id=450    -'Britain'.
 http://en.wikipedia.org/wiki/British_Sign_Language

 http://lsf.wiksign.org/wiki/Langue:Signes_du_Monde#Grande-Bretagne
 http://www.signstation.org/amz.shtml
*/
define('BSM_MAX_CHAR', 30);


class BritishSignMachine {

  var $text = null;
  var $sign = null;
  var $view = null; #html/div, html/page, gif? SVG?

  var $jsTimeout = 0;
  var $jsId = 'bsm1';
  var $url  = null;
  var $title= 'Sign Machine <span>(experimental)</span>'; #'British Sign Language' #get_class($this)

  function BritishSignMachine() { #__construct()
    $this->url = $url = 'http://'.$_SERVER['HTTP_HOST'].(80!=$_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] :'').dirname($_SERVER['PHP_SELF']);
    #$this->url = $url = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']);
    $this->parseQuery();
    $this->parseText();
    $meta = $this->headers();
    $this->render($meta);
  }

  function isPageView() {
    return 'html/div' != $this->view;
  }

  function isPopupView() {
    return 'html/popup' == $this->view;
  }

  function parseQuery() {
    $this->text = $this->get('text');
    $this->view = $this->get('view', 'html/page', array('html/div'));
    $t = $this->jsTimeout = $this->get('timeps', 1300);
    if ($t < 500 || $t > 2500) {
      $this->jsTimeout = 1300;
    }
  }

  function parseText() {
    #@todo, At the moment removes non-alpha including numbers.
    $this->sign = preg_replace('#[^a-zA-Z ]*#', '', $this->text);  #@todo:PHP 5, -1, $count);
    $this->sign = substr(trim($this->sign), 0, BSM_MAX_CHAR);
  }

  function headers() {
    $headers = array(
    'Content-Type'=> 'text/html; charset=UTF-8',
	  'Content-Script-Type'=> 'application/javascript',
	  'Content-Language'=> 'en-GB,sgn-GB',	 #,bfi,British-Sign-Language'
	  'X-BSM-Sign'=> ($this->sign ? $this->sign : '[null]'),
	  'X-BSM-Duration'=> $this->jsTimeout*strlen($this->sign), #? count(str_split($this->sign, 1));
	  #@header('X-BSM-Max-Chars: '.BSM_MAX_CHAR);
    );
    header('Content-Type: text/html; charset=UTF-8');
    @header('X-Powered-By:');
    $meta = null;
    foreach ($headers as $key => $content) {
      if (!$this->isPageView()) @header($key.': '.$content);
      $meta .= '<meta http-equiv="'.$key.'" content="'.$content."\" />\n";
    }
    return $meta;
    #$h = implode("", $headers);
  }

  function render($meta) {
    $pfx = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']);
    $div = "<div id='{$this->jsId}' class='bsm' title='".strip_tags($this->title)."' lang='en' dir='ltr'>";
    $elems = preg_split('//', $this->sign, -1, PREG_SPLIT_NO_EMPTY);  #@todo:PHP 5, str_split($this->sign, 1);
    foreach ($elems as $elem) {
      $elem = strtolower($elem);  #Portable.
      $class = null;
      if (' '==$elem) {
        #$div .= "<i\n class='space'> &nbsp; &nbsp;</i>";
        $elem = '_space';
        $class = ' class="space"';
      }
      $div .= "<img\n src='$this->url/graphics/$elem.gif' alt='' style='display:none'$class />";
    }
    $div .= $this->sign ? "<p\n >$this->sign</p>" : '';
    $div .= "<a\n href='$this->url#about'>About</a>\n";
    $div .= $this->javascript();
    $div .= "</div>\n";

    if ($this->isPageView()) {
      $this->page($div, $meta);
    } else {
      @header('Content-Length: '.strlen($div));
      echo $div;
    }
  }

  function javascript() {
    $j = "<script type='text/javascript' src='$this->url/includes/BSM.js'></script>\n";
    if ($this->sign) {
      $j.="<script type='text/javascript'>var $this->jsId = new BSM('$this->jsId', $this->jsTimeout)</script>";
    } return $j; /*<<<EOT
<script type="text/javascript" src="$this->url/includes/BSM.js"></script>
<script type="text/javascript">var $this->jsId = new BSM('$this->jsId', $this->jsTimeout)</script>
EOT;*/
  }

  function page($div, $meta = null) {
    $title = $this->sign ? $this->sign.' - ' : '';
    $title.= $this->isPopupView() ? 'BSL &alpha;' : $this->title; #'British Sign Language';
    $value = $this->text ? htmlspecialchars($this->text) : 'Hello!'; #'Hello world!';

    $margin = null; #$this->isPopupView() ? 'margin:4px; padding:0;' : 'margin:1em;';
    $border = null; #$this->isPopupView() ? null : 'border:2px solid #ccc; padding:4px;';
    $imgSize = null; #200;

    $self = urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr"><head>
<?php #<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  echo $meta;
?>

<title><?php echo strip_tags($title) ?></title>

<meta name="copyright" content="&copy; 2008 N.D.Freear" />
<meta name="robots" content="noindex,nofollow" />

<link rel="bookmark" title="Validate" href="http://validator.w3.org/check?outline=1&amp;uri=<?php echo $self ?>" />
<link type="" rel="icon" href="favicon.ico" />
<link type="text/css" rel="stylesheet" href="includes/bsm.css" />
<?php if ($imgSize): ?>
<style type="text/css">
#bsm, #bsm1 { width:<?php echo $imgSize ?>px; height:<?php echo $imgSize+100 ?>px;
  <?php echo $border ?> vertical-align:bottom; }
#bsm img, #bsm1 img { __width:<?php echo $imgSize ?>px; height:<?php echo $imgSize ?>px; }
</style>
<?php endif ?>

</head>
<body class="bsm-<?php echo str_replace('html/', '', $this->view) ?>">

<?php if (!$this->isPopupView()) { ?>
  <h1><?php echo $title ?></h1>
  <form action="">
  <p>
  <label for="tx">Finger spell this </label><input id="tx" name="text" value="<?php echo $value ?>" size="30" />
  <?php #<input type="hidden" name="view" value="html/div" /> ?>
  <input type="submit" value="Sign" />
  </p>
  </form>
<?php } ?>

<?php echo $div ?>


<?php if (!$this->isPopupView()): ?>
  <p class="foot">&copy; 2008 N.D.Freear</p>
<?php endif ?>

</body>
</html>
    <?php
  }

  function get($name, $default=null, $opts=null) {
    if (isset($_GET[$name])) {
      return trim($_GET[$name]);
    }
    return $default;
  }
}

#$bsm = new BritishSignMachine();
?>