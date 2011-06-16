<?php
/**
 Create a bookmarklet link from multi-line Javascript.
 IE and non-IE Javascript should be separated using the $iexplore PHP flag, eg.
   /*<?php if ($iexplore): ?>*\/ javascript...

 @copyright 2008-09-22 N.D.Freear.
 @param string $jsFile Javascript file.
 @param string $name Bookmarklet name (to appear in Favourites/Bookmarks).
 @param boolean $iexplore Is bookmarklet for Internet Explorer? [false].
 @return string HTML link.
*/
require_once 'bsm.template.php';


function bookmarklet($jsFile, $name='My Marker', $iexplore=false) {
  $link  = null;
  $attrs = "class='bookmarklet' onclick='alert(\"Please drag the link to your toolbar before clicking\");return false'";

  #$iexplore = false;
  $browser = 'Safari, Firefox, <abbr title="Google Chrome browser">Chrome</abbr>...';
  if ($iexplore) {
    $browser = 'Internet Explorer';
  }
  #for ($idx=0; $idx < 2; $idx++) {

    ob_start();
    require $jsFile;
    $js = ob_get_clean();

    $js = preg_replace('#/\*.*?\*/#ms',  '', $js); #Multi-line comments.
    $js = preg_replace('#^//.*?[\r|\n]#','', $js); #Single-line comments.
    $js = str_replace('else if', 'else%20if', $js);
    $js = preg_replace('# {1,}#', '', $js);  #{2,}
    $js = str_replace("\r", '', $js);
    $js = str_replace("\n", '', $js);
    $js = str_replace("\t", '', $js);
    #$js = str_replace(' ','%20',$js);
    $js = htmlspecialchars($js);

    $link .= "For $browser <a $attrs href=\n\"javascript:$js\"\n><span title='".strip_tags($browser)."'>$name</span></a>\n";

    if (!$iexplore) {
      $iexplore = true;
      $browser = 'Internet Explorer';
    #}
  }
  return $link;
}



$jsfile = 'bsm.bookmarklet.js';
$name = "<acronym title='British Sign Language'>BSL</acronym> Speller";


$title = 'Sign Machine Bookmarklets';
ob_start();
?>

<ul>
<li><?php echo bookmarklet($jsfile, $name, $ie=true) ?></li>
<li><?php echo bookmarklet($jsfile, $name) ?></li>
</ul>


<h2>Getting started</h2>
<ol>
<li>Choose the link above appropriate to your browser (in Windows, the browser 
name is normally displayed in the title bar next to a website title).</li>

<li>To install, right-click on the bookmarklet link, choose "Add to Favourites"/
"Bookmark this link" (Firefox) press OK.</li>

<li>To use, select some text on a web-page, goto Favourites/Bookmarks in the browser
menu-bar, and press "BSL Speller". A popup window will appear with animated
signing for the selected text.</li>
</ol>


<?php _template(ob_get_clean(), $title); ?>