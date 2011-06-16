<?php
/*
 SignWriting.
 N.D.Freear, 23 September 2008.

 ISO 639-2: sgn-GB -BSL
 ISO 639-3: bfi  -BSL
 ISO 639-2: sgn  -ASL
 ISO 639-3: ase  -ASL
 ISO 15924: Sgnw
*/
require_once 'bsm.template.php';


function signWriter() {
ob_start();

$url = 'http://signbank.org/SignPuddle1.5';

$sgnLangs = array(
  'SGN-GB'=>59,
  'EN-GB'=>59,
  'GB'  =>59,
  'GB-D'=>59,  #Dictionary
  'BSL' =>59,

  'SGN' =>4,
  'EN-US'=>4,
  'US'  =>4,
  'US-D'=>4,
  'ASL' =>4,
  'US-L'=>5,  #Literature
  'US-E'=>21, #Encyclopedia
  #...
);
$langIds = array(
  59  => 'BSL/en-GB',
  4   => 'ASL/en-US',
  5   => 'ASL/en-US/US-L',
);


$search = _get('q', 'sign');
$ui     = _get('ui', 1);

$lang= null;
$sgn = _get('sgn', null); #59.
if (!$sgn) {
  $lang = str_replace('_', '-', strtoupper(_get('lang', 'sgn-gb')));
  if (isset($sgnLangs[$lang])) {
    $sgn = $sgnLangs[$lang];
  }
}
$langId = null;
if (isset($langIds[$sgn])) {
  $langId = $langIds[$sgn];
}
if (!$lang) {
  $lang = substr($langId, 0,3);
}

$file = $url .'_sgn-'.$sgn.'_sbml.xml';
$file = str_replace('http://', '', $file);
$file = str_replace('www', '', $file);
$file = str_replace('/', '_', $file);

echo "<ul id='signs'>\n";
_li("Lang: $lang ($langId)");
_li("Sgn:  $sgn");
_li("XML file: $file");

_li("Search: $search");

$exportUrl = _u("$url/export.php?sgn=$sgn&action=ExportAll&ui=$ui");
_li("<a href='$exportUrl'>Export XML: $lang-$sgn</a>");


#PHP5.
$xml = @simplexml_load_file('data/'.$file);
if (!$xml) return 'File error.';

$entries = count($xml);
_li("XML total entries: $entries");

$xpath = "//detail[.='$search']/parent::*";
$xr = $xml->xpath($xpath);

$sid = $builds = null;
if ($xr) {
  #$build = $xr[0]->build;
  #$id = $xr[0]->id;
  #$sid .= str_replace("sgn{$sgn}_", '', $id).',';

  $count = count($xr);
  _li("Result entries: $count");

  $idx=0;
  foreach($xr as $r) {
    $idx++;

    $build= $r->build;
    $id = $r->id;
    $sid[] = str_replace("sgn{$sgn}_", '', $id);

    $imageUrl  = _u("$url/image.php?build=$build");
    _li("Build: $build");
    _li("<img alt='Sign $idx: $search' src='$imageUrl' />");
  }
  $sid = implode(',', $sid);
} else {
  _li('Result entries: 0');
}

$searchUrl = _u("$url/searchword.php?sgn=$sgn&sid=$sid&search=$search&type=exact&ui=$ui");

_li("Sid:   $sid");
_li("<a href='$searchUrl'>Exact word search: $search</a>");

echo "</ul>\n";
#_dump($xr);

return ob_get_clean();
} #End:function.
$page = signWriter();


$title = 'SignWriting';
ob_start();
?>

<form action="">
<p>
<label for="q">Search </label><input id="q" name="q" value="<?php echo _get('q', 'sign') ?>" />
<input type="submit" value="Search" />
</p>
</form>

<?php echo $page ?>

<p id="credit">Thanks to <a href="http://signbank.org/">Sign Bank&reg;</a></p>

<script type="text/javascript">//<![CDATA[
function sizes() {
  var parent = document.getElementById('signs');

  var imgs = parent.getElementsByTagName('img');
  var sizes = 'Image sizes: ';
  for (j=0; j < imgs.length; j++) {
    img = imgs[j];
    sizes += //j+': '+ 
        img.alt+', '+ img.width +' x '+img.height +' pixels; ';
  }
  var el = document.createElement('li');
  //var t = document.createTextNode(sizes);
  //el.appendChild(t);

  el.id = 'sizes';
  el.innerHTML = sizes;
  parent.appendChild(el);
  //document.getElementsByTagName('body')[0].appendChild(el);
}
setTimeout('sizes()', 1000);
//]]>
</script>


<?php _template(ob_get_clean(), $title); ?>