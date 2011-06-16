<?php
/**
 BSL/ Wikipedia demonstration.
 IE 6 problem?!

 @author N.D.Freear, 21 September 2008.
*/
header('Powered-By:');
@header('Content-Language: en');

$url = 'http://'.$_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/../';
$is_iexplore = (false !== strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'));  #@todo:PHP 5, stripos;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>

<?php if (! $is_iexplore):  #@todo ?>
  <base href="http://en.wikipedia.org/wiki/Beijing" />
<?php endif ?>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="MediaWiki 1.14alpha" />
		<meta name="keywords" content="Beijing,Zh-Beijing.ogg,Peking pronounced in English way.ogg,Beijing,Province-level divisions of the People&#039;s Republic of China,Major cities of Greater China,Most populous cities in the People&#039;s Republic of China,List of Asian capitals by region,Olympic Summer Games Host Cities,World&#039;s most populated metropolitan areas,World&#039;s most populated urban areas" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="http://en.wikipedia.org/apple-touch-icon.png" />
		<link rel="search" type="application/opensearchdescription+xml" href="/w/opensearch_desc.php" title="Wikipedia (en)" />
		<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html" />
		<link rel="alternate" type="application/rss+xml" title="Wikipedia RSS Feed" href="http://en.wikipedia.org/w/index.php?title=Special:RecentChanges&amp;feed=rss" />
		<link rel="alternate" type="application/atom+xml" title="Wikipedia Atom Feed" href="http://en.wikipedia.org/w/index.php?title=Special:RecentChanges&amp;feed=atom" />
		<title>Beijing  - BSL Wiki Demonstration  - Wikipedia, the free encyclopedia</title>
		<link rel="stylesheet" href="/skins-1.5/common/shared.css?171" type="text/css" media="screen" />
		<link rel="stylesheet" href="/skins-1.5/common/commonPrint.css?171" type="text/css" media="print" />
		<link rel="stylesheet" href="/skins-1.5/monobook/main.css?171" type="text/css" media="screen" />
		<link rel="stylesheet" href="/skins-1.5/chick/main.css?171" type="text/css" media="handheld" />
		<!--[if lt IE 5.5000]><link rel="stylesheet" href="/skins-1.5/monobook/IE50Fixes.css?171" type="text/css" media="screen" /><![endif]-->
		<!--[if IE 5.5000]><link rel="stylesheet" href="/skins-1.5/monobook/IE55Fixes.css?171" type="text/css" media="screen" /><![endif]-->
		<!--[if IE 6]><link rel="stylesheet" href="/skins-1.5/monobook/IE60Fixes.css?171" type="text/css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" href="/skins-1.5/monobook/IE70Fixes.css?171" type="text/css" media="screen" /><![endif]-->
		<link rel="stylesheet" href="/w/index.php?title=MediaWiki:Common.css&amp;usemsgcache=yes&amp;ctype=text%2Fcss&amp;smaxage=2678400&amp;action=raw&amp;maxage=2678400" type="text/css" />
		<link rel="stylesheet" href="/w/index.php?title=MediaWiki:Print.css&amp;usemsgcache=yes&amp;ctype=text%2Fcss&amp;smaxage=2678400&amp;action=raw&amp;maxage=2678400" type="text/css" media="print" />
		<link rel="stylesheet" href="/w/index.php?title=MediaWiki:Handheld.css&amp;usemsgcache=yes&amp;ctype=text%2Fcss&amp;smaxage=2678400&amp;action=raw&amp;maxage=2678400" type="text/css" media="handheld" />
		<link rel="stylesheet" href="/w/index.php?title=MediaWiki:Monobook.css&amp;usemsgcache=yes&amp;ctype=text%2Fcss&amp;smaxage=2678400&amp;action=raw&amp;maxage=2678400" type="text/css" />
		<link rel="stylesheet" href="/w/index.php?title=-&amp;action=raw&amp;maxage=2678400&amp;gen=css" type="text/css" />
		<!--[if lt IE 7]><script type="text/javascript" src="/skins-1.5/common/IEFixes.js?171"></script>
		<meta http-equiv="imagetoolbar" content="no" /><![endif]-->
		
		<script type= "text/javascript">/*<![CDATA[*/
		var skin = "monobook";
		var stylepath = "/skins-1.5";
		var wgArticlePath = "/wiki/$1";
		var wgScriptPath = "/w";
		var wgScript = "/w/index.php";
		var wgVariantArticlePath = false;
		var wgActionPaths = {};
		var wgServer = "http://en.wikipedia.org";
		var wgCanonicalNamespace = "";
		var wgCanonicalSpecialPageName = false;
		var wgNamespaceNumber = 0;
		var wgPageName = "Beijing";
		var wgTitle = "Beijing";
		var wgAction = "view";
		var wgArticleId = "18603746";
		var wgIsArticle = true;
		var wgUserName = null;
		var wgUserGroups = null;
		var wgUserLanguage = "en";
		var wgContentLanguage = "en";
		var wgBreakFrames = false;
		var wgCurRevisionId = "239110331";
		var wgVersion = "1.14alpha";
		var wgEnableAPI = true;
		var wgEnableWriteAPI = true;
		var wgMWSuggestTemplate = "http://en.wikipedia.org/w/api.php?action=opensearch\x26search={searchTerms}\x26namespace={namespaces}";
		var wgDBname = "enwiki";
		var wgSearchNamespaces = [0];
		var wgMWSuggestMessages = ["with suggestions", "no suggestions"];
		var wgRestrictionEdit = ["autoconfirmed"];
		var wgRestrictionMove = ["sysop"];
		/*]]>*/</script>
                
		<script type="text/javascript" src="/skins-1.5/common/wikibits.js?171"><!-- wikibits js --></script>
		<!-- Head Scripts -->
		<script type="text/javascript" src="/skins-1.5/common/ajax.js?171"></script>
		<script type="text/javascript" src="/skins-1.5/common/mwsuggest.js?171"></script>
		<script type="text/javascript" src="/w/index.php?title=-&amp;action=raw&amp;gen=js&amp;useskin=monobook"><!-- site js --></script>


<?php #@todo ?>
<style type="text/css">
.signlink a {
    /*background: url("http://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Loudspeaker.svg/11px-Loudspeaker.svg.png") center left no-repeat !important;*/

    background: url("<?php echo $url ?>includes/hand-16x16.png") center left no-repeat;
    padding-left: 16px; /*45px */
    padding-right: 0;

    color: #b00;
    border: 1px dotted #f44;
    cursor: __help;
    /*height: 16px;*/
}
.__audiolink a {
    /*background: url("http://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Loudspeaker.svg/11px-Loudspeaker.svg.png") center left no-repeat !important;*/
}

#bsm-demo-h { position: absolute; top: -99em; /*text-align:right; margin-right:15em;*/ }
#bsm-demo-h2 { color: #b00; font-size: 1.13em; border: 1px solid #f44; }
</style>
<meta name="robots" content="noindex,nofollow" />




	</head>
<body class="mediawiki ltr ns-0 ns-subject page-Beijing skin-monobook">


<?php #@todo ?>
<h1 id="bsm-demo-h">BSL wiki demonstration</h1>




	<div id="globalWrapper">
		<div id="column-content">
	<div id="content">
		<a name="top" id="top"></a>
		<div id="siteNotice"><script type="text/javascript" language="JavaScript">
<!--
document.writeln("\x3cp\x3e\x3c/p\x3e\n");
-->
</script></div>		<h1 class="firstHeading">Beijing</h1>
		<div id="bodyContent">
			<h3 id="siteSub">From Wikipedia, the free encyclopedia</h3>
			<div id="contentSub"></div>
									<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>			<!-- start content -->
			<div class="dablink">"Peking" redirects here. For other uses, see <a href="/wiki/Peking_(disambiguation)" title="Peking (disambiguation)">Peking (disambiguation)</a>.</div>
<table align="right">
<tr>
<td>
<table class="infobox geography vcard" style="width:23em; text-align:left;">
<tr>
<td colspan="2" align="center" style="width:100%; font-size: 1.25em; white-space: nowrap;"><b><span class="fn org">Municipality of Beijing</span><br />
<span class="nickname"><span lang="zh" xml:lang="zh">北京市</span></span></b></td>
</tr>
<tr>
<td colspan="2" style="text-align: center; padding: 0.7em 0.8em 0.7em 0.8em;;">
<div class="floatnone"><span><a href="/wiki/Image:TempleHeaven2.jpg" class="image" title="Temple of Heaven"><img alt="Temple of Heaven" src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/TempleHeaven2.jpg/250px-TempleHeaven2.jpg" width="250" height="188" border="0" /></a></span></div>
<small><a href="/wiki/Temple_of_Heaven" title="Temple of Heaven">Temple of Heaven</a></small></td>
</tr>
<tr class="mergedrow">
<td colspan="2" style="text-align: center;">
<div class="floatnone"><span><a href="/wiki/Image:China_Beijing.svg" class="image" title="Location of the Municipality of Beijing within China"><img alt="Location of the Municipality of Beijing within China" src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/China_Beijing.svg/250px-China_Beijing.svg.png" width="250" height="213" border="0" /></a></span></div>
<small>Location of the Municipality of Beijing within China</small></td>
</tr>
<tr class="mergedbottomrow">
<th colspan="2" style="text-align: center; font-size: smaller; padding-bottom: 0.7em;">Coordinates: <span style="white-space: nowrap;"><span class="plainlinksneverexpand"><a href="http://stable.toolserver.org/geohack/geohack.php?pagename=Beijing&amp;params=39_54_50_N_116_23_30_E_type:city" class="external text" title="http://stable.toolserver.org/geohack/geohack.php?pagename=Beijing&amp;params=39_54_50_N_116_23_30_E_type:city" rel="nofollow"><span class="geo-default"><span class="geo-dms" title="Maps, aerial photos, and other data for 39°54′50″N 116°23′30″E"><span class="latitude">39°54′50″N</span> <span class="longitude">116°23′30″E</span></span></span><span class="geo-multi-punct">﻿ / ﻿</span><span class="geo-nondefault"><span class="geo-dec geo" title="Maps, aerial photos, and other data for 39.91389 116.39167"><span class="latitude">39.91389</span>, <span class="longitude">116.39167</span></span></span></a></span></span></th>
</tr>
<tr class="mergedtoprow">
<th>Country</th>
<th><span class="flagicon"><a href="/wiki/Image:Flag_of_the_People%27s_Republic_of_China.svg" class="image" title="Flag of the People's Republic of China"><img alt="Flag of the People's Republic of China" src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/22px-Flag_of_the_People%27s_Republic_of_China.svg.png" width="22" height="15" border="0" class="thumbborder" /></a>&#160;</span><a href="/wiki/People%27s_Republic_of_China" title="People's Republic of China">China</a></th>
</tr>
<tr class="mergedrow">
<th>Settled</th>
<td><a href="/wiki/Circa" title="Circa">c.</a> 473 BC</td>
</tr>
<tr class="mergedtoprow">
<th>Divisions<sup id="cite_ref-hist_0-0" class="reference"><a href="#cite_note-hist-0" title="">[1]</a></sup><br />
&#160;- <a href="/wiki/Political_divisions_of_China#County_level" title="Political divisions of China" class="mw-redirect">County-level</a><br />
&#160;- <a href="/wiki/Political_divisions_of_China#Township_level" title="Political divisions of China" class="mw-redirect">Township-level</a></th>
<td><br />
<a href="/wiki/List_of_administrative_divisions_of_Beijing" title="List of administrative divisions of Beijing">16 districts, 2 counties</a><br />
289 towns and villages</td>
</tr>
<tr class="mergedtoprow">
<td colspan="2"><b>Government</b></td>
</tr>
<tr class="mergedrow">
<th>&#160;-&#160;Type</th>
<td><a href="/wiki/Direct-controlled_municipality" title="Direct-controlled municipality">Municipality</a></td>
</tr>
<tr class="mergedrow">
<th>&#160;-&#160;<a href="/wiki/Communist_Party_of_China" title="Communist Party of China">CPC</a> Secretary</th>
<td><a href="/wiki/Liu_Qi_(Communist)" title="Liu Qi (Communist)" class="mw-redirect">Liu Qi</a></td>
</tr>
<tr class="mergedrow">
<th>&#160;-&#160;<a href="/wiki/Mayor" title="Mayor">Mayor</a></th>
<td><a href="/wiki/Guo_Jinlong" title="Guo Jinlong">Guo Jinlong</a></td>
</tr>
<tr class="mergedtoprow">
<td colspan="2"><b><a href="/wiki/Area" title="Area">Area</a></b> (<a href="/wiki/List_of_China_administrative_regions_by_area" title="List of China administrative regions by area" class="mw-redirect">ranked 29th</a>)</td>
</tr>
<tr class="mergedrow">
<th>&#160;-&#160;Municipality</th>
<td>16,801.25&#160;km²&#160;(6,487&#160;sq&#160;mi)</td>
</tr>
<tr class="mergedtoprow">
<td><b><a href="/wiki/Elevation" title="Elevation">Elevation</a></b></td>
<td>43.5&#160;m (143&#160;ft)</td>
</tr>
<tr class="mergedtoprow">
<td colspan="2"><b>Population</b> (2007)<sup id="cite_ref-exceeds_17_1-0" class="reference"><a href="#cite_note-exceeds_17-1" title="">[2]</a></sup><sup id="cite_ref-radio_2-0" class="reference"><a href="#cite_note-radio-2" title="">[3]</a></sup><sup id="cite_ref-daily_3-0" class="reference"><a href="#cite_note-daily-3" title="">[4]</a></sup><sup id="cite_ref-en_4-0" class="reference"><a href="#cite_note-en-4" title="">[5]</a></sup></td>
</tr>
<tr class="mergedrow">
<th>&#160;-&#160;Municipality</th>
<td>17,430,000 (<a href="/wiki/List_of_China_administrative_regions_by_population" title="List of China administrative regions by population" class="mw-redirect">26th</a>)</td>
</tr>
<tr class="mergedrow">
<th>&#160;- <a href="/wiki/Metropolitan_area" title="Metropolitan area">Metro</a></th>
<td>11,940,000</td>
</tr>
<tr class="mergedrow">
<th>&#160;- Density</th>
<td>(<a href="/wiki/List_of_China_administrative_regions_by_population_density" title="List of China administrative regions by population density" class="mw-redirect">4th</a>)</td>
</tr>
<tr class="mergedrow">
<th>&#160;- Major <a href="/wiki/Nationalities_of_China" title="Nationalities of China" class="mw-redirect">nationalities</a></th>
<td><a href="/wiki/Han_Chinese" title="Han Chinese">Han</a>: 96%<br />
<a href="/wiki/Manchu" title="Manchu">Manchu</a>: 2%<br />
<a href="/wiki/Hui_people" title="Hui people">Hui</a>: 2%<br />
<a href="/wiki/Mongol" title="Mongol" class="mw-redirect">Mongolian</a>: 0.3%</td>
</tr>
<tr class="mergedtoprow">
<th><a href="/wiki/Time_zone" title="Time zone">Time zone</a></th>
<td><a href="/wiki/China_Standard_Time" title="China Standard Time" class="mw-redirect">China Standard Time</a> (<a href="/wiki/UTC%2B8" title="UTC+8">UTC+8</a>)</td>
</tr>
<tr class="mergedtoprow">
<th>Postal code</th>
<td><b>1000</b>00 - <b>1026</b>29</td>
</tr>
<tr class="mergedrow">
<th><a href="/wiki/Telephone_numbering_plan" title="Telephone numbering plan">Area code(s)</a></th>
<td>10</td>
</tr>
<tr class="mergedtoprow">
<th><a href="/wiki/Gross_domestic_product" title="Gross domestic product">GDP</a></th>
<td>2007 estimate</td>
</tr>
<tr class="mergedrow">
<th>&#160;- Total</th>
<td><a href="/wiki/Renminbi" title="Renminbi">CNY</a> 900.62 billion (<a href="/wiki/List_of_Chinese_administrative_divisions_by_GDP" title="List of Chinese administrative divisions by GDP">10th</a>)</td>
</tr>
<tr class="mergedrow">
<th>&#160;- Per capita</th>
<td><a href="/wiki/Renminbi" title="Renminbi">CNY</a> 57,431 (<a href="/wiki/List_of_Chinese_administrative_divisions_by_GDP_per_capita" title="List of Chinese administrative divisions by GDP per capita">2nd</a>)</td>
</tr>
<tr class="mergedrow">
<th><a href="/wiki/Human_Development_Index" title="Human Development Index">HDI</a> (2005)</th>
<td>0.882 (<a href="/wiki/List_of_Chinese_administrative_divisions_by_HDI" title="List of Chinese administrative divisions by HDI">2nd</a>)</td>
</tr>
<tr class="mergedrow">
<th><a href="/wiki/License_Plate_(China)" title="License Plate (China)" class="mw-redirect">License plate prefixes</a></th>
<td>京A, C, E, F, H, J, K, L, M<br />
京B (taxis)<br />
京G, Y (outside urban area)<br />
京O (police and authorities)<br />
京P (Olympics)<br />
京V (military headquarters,<br />
central government)</td>
</tr>
<tr class="mergedtoprow">
<td colspan="2" align="left">
<center><small><big><b>City <a href="/wiki/Tree" title="Tree">trees</a></b></big><br />
<a href="/wiki/Chinese_arborvitae" title="Chinese arborvitae" class="mw-redirect">Chinese arborvitae</a> (<i>Platycladus orientalis</i>)<br />
<a href="/wiki/Styphnolobium" title="Styphnolobium">Pagoda tree</a> (<i>Sophora japonica</i>)<br />
<big><b>City <a href="/wiki/Flower" title="Flower">flowers</a></b></big><br />
<a href="/wiki/Chrysanthemum" title="Chrysanthemum">Chrysanthemum</a> (<i>Chrysanthemum morifolium</i>)<br />
<a href="/wiki/Rose" title="Rose">Chinese rose</a> (<i>Rosa chinensis</i>)</small></center>
</td>
</tr>
<tr>
<td colspan="2" class="mergedtoprow" style="text-align:center;"><b>Website:</b> <a href="http://www.beijing.gov.cn/" class="external text" title="http://www.beijing.gov.cn/" rel="nofollow">www.beijing.gov.cn</a></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<div class="infobox" style="align:right; padding:0.2em; margins:0em; clear:right;">
<table class="expansion" style="width:25.36em; background:#f7f8ff; border-collapse:collapse; padding:0em; margins:0em; font-size:83%; line-height:1.2em;">
<tr>
<td style="vertical-align:middle;"><a href="/wiki/Image:Zhongwen.svg" class="image" title="Zhongwen.svg"><img alt="" src="http://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Zhongwen.svg/65px-Zhongwen.svg.png" width="65" height="33" border="0" /></a></td>
<td style="vertical-align:middle;"><span style="line-height:1.6em;"><b>This article contains <a href="/wiki/Chinese_language" title="Chinese language">Chinese</a> text.</b></span><br />
Without proper <a href="/wiki/Help:Multilingual_support_(East_Asian)" title="Help:Multilingual support (East Asian)">rendering support</a>, you may see <a href="/wiki/Mojibake" title="Mojibake">question marks, boxes, or other symbols</a> instead of <a href="/wiki/Chinese_character" title="Chinese character">Chinese characters</a>.</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
<p>



<?php #@todo ?>
<b><span class="unicode signlink"><a
 href="<?php echo $url ?>?text=Beijing&amp;view=html/popup"
 onclick="window.open(this.href, 'speller', 'menubar=no,location=no,resizable=yes,scrollbars=no,status=no,width=210,height=320');return false"
 title="British Sign Language: Beijing"
 class="internal">Beijing</a></span></b>



<b><span class="unicode audiolink"><a href="http://upload.wikimedia.org/wikipedia/commons/8/8a/Zh-Beijing.ogg" class="internal" title="Zh-Beijing.ogg">Beijing</a></span>&#160;<span class="metadata audiolinkinfo"><small>(<a href="/wiki/Wikipedia:Media_help" title="Wikipedia:Media help">help</a>·<a href="/wiki/Image:Zh-Beijing.ogg" title="Image:Zh-Beijing.ogg">info</a>)</small></span></b> (pronounced <span title="Pronunciation in the International Phonetic Alphabet (IPA)" class="IPA"><a href="/wiki/Help:IPA_for_English" title="Help:IPA for English" class="mw-redirect">/beɪˈdʒɪŋ/</a></span> or <span title="Pronunciation in the International Phonetic Alphabet (IPA)" class="IPA"><a href="/wiki/Help:IPA_for_English" title="Help:IPA for English" class="mw-redirect">/beɪˈʒɪŋ/</a></span> in English; <a href="/wiki/Chinese_language" title="Chinese language">Chinese</a>: <span lang="zh" xml:lang="zh">北京</span> <i>Běijīng,</i> <small>IPA</small>:&#160;<span title="Pronunciation in IPA" class="IPA"><a href="/wiki/Help:IPA" title="Help:IPA" class="mw-redirect">[pèitɕíŋ]</a></span>) (also formerly known in English as <b>Peking</b> (<span title="Pronunciation in the International Phonetic Alphabet (IPA)" class="IPA"><a href="/wiki/Help:IPA_for_English" title="Help:IPA for English" class="mw-redirect">/piːˈkɪŋ/</a></span><span class="unicode audiolink"><a href="http://upload.wikimedia.org/wikipedia/en/e/e6/Peking_pronounced_in_English_way.ogg" class="internal" title="Peking pronounced in English way.ogg">listen</a></span> <span class="metadata audiolinkinfo"><small>(<a href="/wiki/Image:Peking_pronounced_in_English_way.ogg" title="Image:Peking pronounced in English way.ogg">info</a>)</small></span>)) is a <a href="/wiki/Metropolis" title="Metropolis">metropolis</a> in northern <a href="/wiki/China" title="China">China</a> and the <a href="/wiki/Capital" title="Capital">capital</a> of the <a href="/wiki/People%27s_Republic_of_China" title="People's Republic of China">People's Republic of China</a>. It is one of the four <a href="/wiki/Municipality_of_China" title="Municipality of China" class="mw-redirect">municipalities of the PRC</a>, which are equivalent to <a href="/wiki/Province_(China)" title="Province (China)">provinces</a> in China's <a href="/wiki/Political_divisions_of_China" title="Political divisions of China" class="mw-redirect">administrative structure</a>. Beijing is one of the <a href="/wiki/Historical_capitals_of_China" title="Historical capitals of China">Four Great Ancient Capitals of China</a>.<sup id="cite_ref-beefs_up_5-0" class="reference"><a href="#cite_note-beefs_up-5" title="">[6]</a></sup> The municipality of Beijing borders <a href="/wiki/Hebei" title="Hebei">Hebei Province</a> to the north, west, south, and for a small section in the east, and <a href="/wiki/Tianjin" title="Tianjin">Tianjin Municipality</a> to the southeast.<sup id="cite_ref-basic_6-0" class="reference"><a href="#cite_note-basic-6" title="">[7]</a></sup></p>
<p>Beijing is China's second largest city, after <a href="/wiki/Shanghai" title="Shanghai">Shanghai</a>.<sup id="cite_ref-columbia_encyclopedia_7-0" class="reference"><a href="#cite_note-columbia_encyclopedia-7" title="">[8]</a></sup> Beijing is a major transportation hub, with dozens of railways, roads and motorways passing through the city. It is also the focal point of many international flights to China. Beijing is recognised as the <a href="/wiki/Politics" title="Politics">political</a>, <a href="/wiki/Education" title="Education">educational</a>, and <a href="/wiki/Chinese_culture" title="Chinese culture" class="mw-redirect">cultural</a> center of the People's Republic of China, while <a href="/wiki/Shanghai" title="Shanghai">Shanghai</a> and <a href="/wiki/Hong_Kong" title="Hong Kong">Hong Kong</a> predominate in <a href="/wiki/Economic" title="Economic" class="mw-redirect">economic</a> fields.<sup id="cite_ref-columbia_encyclopedia_7-1" class="reference"><a href="#cite_note-columbia_encyclopedia-7" title="">[8]</a></sup> The city hosted the <a href="/wiki/2008_Summer_Olympics" title="2008 Summer Olympics">2008 Olympic Games</a>.</p>
<p>Few cities in the world besides Beijing have served as the political and cultural centre of an area as immense as China for so long.<sup id="cite_ref-britannica_8-0" class="reference"><a href="#cite_note-britannica-8" title="">[9]</a></sup> The <i><a href="/wiki/Encyclop%C3%A6dia_Britannica" title="Encyclopædia Britannica">Encyclopædia Britannica</a></i> describes it as, "One of the world's great cities,"<sup id="cite_ref-9" class="reference"><a href="#cite_note-9" title="">[10]</a></sup> and declares, "The city has been an integral part of China’s history over the past eight centuries, and nearly every major building of any age in Beijing has at least some national historical significance."<sup id="cite_ref-britannica_8-1" class="reference"><a href="#cite_note-britannica-8" title="">[9]</a></sup> Beijing is renowned for its opulent palaces, temples, and huge stone walls and gates.<sup id="cite_ref-world_book_10-0" class="reference"><a href="#cite_note-world_book-10" title="">[11]</a></sup> Its art treasures and universities have long made the city a centre of culture and art in China.<sup id="cite_ref-world_book_10-1" class="reference"><a href="#cite_note-world_book-10" title="">[11]</a></sup></p>
<table id="toc" class="toc" summary="Contents">
<tr>
<td>
<div id="toctitle">
<h2>Contents</h2>
</div>
<ul>
<li class="toclevel-1"><a href="#Names"><span class="tocnumber">1</span> <span class="toctext">Names</span></a></li>
<li class="toclevel-1"><a href="#History"><span class="tocnumber">2</span> <span class="toctext">History</span></a>
<ul>
<li class="toclevel-2"><a href="#Early_history"><span class="tocnumber">2.1</span> <span class="toctext">Early history</span></a></li>
<li class="toclevel-2"><a href="#Medieval_period"><span class="tocnumber">2.2</span> <span class="toctext">Medieval period</span></a></li>
<li class="toclevel-2"><a href="#Ming_and_Qing_period"><span class="tocnumber">2.3</span> <span class="toctext">Ming and Qing period</span></a></li>
<li class="toclevel-2"><a href="#Republican_era"><span class="tocnumber">2.4</span> <span class="toctext">Republican era</span></a></li>
<li class="toclevel-2"><a href="#People.27s_Republic"><span class="tocnumber">2.5</span> <span class="toctext">People's Republic</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#Geography_and_climate"><span class="tocnumber">3</span> <span class="toctext">Geography and climate</span></a>
<ul>
<li class="toclevel-2"><a href="#Air_quality"><span class="tocnumber">3.1</span> <span class="toctext">Air quality</span></a></li>
<li class="toclevel-2"><a href="#Pollution_cleanup_efforts"><span class="tocnumber">3.2</span> <span class="toctext">Pollution cleanup efforts</span></a></li>
<li class="toclevel-2"><a href="#Dust_storm"><span class="tocnumber">3.3</span> <span class="toctext">Dust storm</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#Cityscape"><span class="tocnumber">4</span> <span class="toctext">Cityscape</span></a>
<ul>
<li class="toclevel-2"><a href="#Administrative_divisions"><span class="tocnumber">4.1</span> <span class="toctext">Administrative divisions</span></a></li>
<li class="toclevel-2"><a href="#Architecture"><span class="tocnumber">4.2</span> <span class="toctext">Architecture</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#Politics_and_government"><span class="tocnumber">5</span> <span class="toctext">Politics and government</span></a></li>
<li class="toclevel-1"><a href="#Economy"><span class="tocnumber">6</span> <span class="toctext">Economy</span></a></li>
<li class="toclevel-1"><a href="#Demographics"><span class="tocnumber">7</span> <span class="toctext">Demographics</span></a></li>
<li class="toclevel-1"><a href="#Culture"><span class="tocnumber">8</span> <span class="toctext">Culture</span></a>
<ul>
<li class="toclevel-2"><a href="#Places_of_interest"><span class="tocnumber">8.1</span> <span class="toctext">Places of interest</span></a></li>
<li class="toclevel-2"><a href="#Media"><span class="tocnumber">8.2</span> <span class="toctext">Media</span></a>
<ul>
<li class="toclevel-3"><a href="#Television_and_radio"><span class="tocnumber">8.2.1</span> <span class="toctext">Television and radio</span></a></li>
<li class="toclevel-3"><a href="#Press"><span class="tocnumber">8.2.2</span> <span class="toctext">Press</span></a></li>
</ul>
</li>
<li class="toclevel-2"><a href="#Sports"><span class="tocnumber">8.3</span> <span class="toctext">Sports</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#Transportation"><span class="tocnumber">9</span> <span class="toctext">Transportation</span></a>
<ul>
<li class="toclevel-2"><a href="#Rail"><span class="tocnumber">9.1</span> <span class="toctext">Rail</span></a></li>
<li class="toclevel-2"><a href="#Roads_and_expressways"><span class="tocnumber">9.2</span> <span class="toctext">Roads and expressways</span></a></li>
<li class="toclevel-2"><a href="#Air"><span class="tocnumber">9.3</span> <span class="toctext">Air</span></a></li>
<li class="toclevel-2"><a href="#Public_transit"><span class="tocnumber">9.4</span> <span class="toctext">Public transit</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#Education"><span class="tocnumber">10</span> <span class="toctext">Education</span></a>
<ul>
<li class="toclevel-2"><a href="#Primary_school"><span class="tocnumber">10.1</span> <span class="toctext">Primary school</span></a></li>
<li class="toclevel-2"><a href="#Middle_school"><span class="tocnumber">10.2</span> <span class="toctext">Middle school</span></a></li>
<li class="toclevel-2"><a href="#College_and_university"><span class="tocnumber">10.3</span> <span class="toctext">College and university</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#City_and_regional_partnerships"><span class="tocnumber">11</span> <span class="toctext">City and regional partnerships</span></a></li>
<li class="toclevel-1"><a href="#See_also"><span class="tocnumber">12</span> <span class="toctext">See also</span></a></li>
<li class="toclevel-1"><a href="#Notes_and_references"><span class="tocnumber">13</span> <span class="toctext">Notes and references</span></a></li>
<li class="toclevel-1"><a href="#Further_reading"><span class="tocnumber">14</span> <span class="toctext">Further reading</span></a></li>
<li class="toclevel-1"><a href="#External_links"><span class="tocnumber">15</span> <span class="toctext">External links</span></a></li>
</ul>
</td>
</tr>
</table>
<script type="text/javascript">
//<![CDATA[
 if (window.showTocToggle) { var tocShowText = "show"; var tocHideText = "hide"; showTocToggle(); } 
//]]>
</script>
<p><a name="Names" id="Names"></a></p>
<h2><span class="mw-headline">Names</span></h2>
<p>Beijing or Peking (<span lang="zh" xml:lang="zh"><a href="http://en.wiktionary.org/wiki/%E5%8C%97" class="extiw" title="wikt:北">北</a><a href="http://en.wiktionary.org/wiki/%E4%BA%AC" class="extiw" title="wikt:京">京</a></span>) means "northern capital", in line with the common <a href="/wiki/East_Asia" title="East Asia">East Asian</a> tradition whereby capital cities are explicitly named as such. Other cities that are similarly named include <a href="/wiki/Nanjing" title="Nanjing">Nanjing</a> (<span lang="zh" xml:lang="zh"><a href="http://en.wiktionary.org/wiki/%E5%8D%97" class="extiw" title="wikt:南">南</a><a href="http://en.wiktionary.org/wiki/%E4%BA%AC" class="extiw" title="wikt:京">京</a></span>), China, meaning "southern capital"; <a href="/wiki/Tokyo" title="Tokyo">Tokyo</a> (<span lang="zh" xml:lang="zh"><a href="http://en.wiktionary.org/wiki/%E6%9D%B1" class="extiw" title="wikt:東">東</a><a href="http://en.wiktionary.org/wiki/%E4%BA%AC" class="extiw" title="wikt:京">京</a></span>), <a href="/wiki/Japan" title="Japan">Japan</a>, and <a href="/wiki/%C4%90%C3%B4ng_Kinh" title="Đông Kinh" class="mw-redirect">Đông Kinh</a> (<a href="/wiki/Chinese_language" title="Chinese language">Chinese</a>: <span lang="zh" xml:lang="zh">東京</span>, now <a href="/wiki/Hanoi" title="Hanoi">Hanoi</a>), <a href="/wiki/Vietnam" title="Vietnam">Vietnam</a>, both meaning "eastern capital"; as well as <a href="/wiki/Kyoto" title="Kyoto">Kyoto</a> (<span lang="zh" xml:lang="zh"><a href="http://en.wiktionary.org/wiki/%E4%BA%AC" class="extiw" title="wikt:京">京</a><a href="http://en.wiktionary.org/wiki/%E9%83%BD" class="extiw" title="wikt:都">都</a></span>), <a href="/wiki/Japan" title="Japan">Japan</a>, and (<span lang="zh" xml:lang="zh"><a href="http://en.wiktionary.org/wiki/%E4%BA%AC" class="extiw" title="wikt:京">京</a><a href="http://en.wiktionary.org/wiki/%E5%9F%8E" class="extiw" title="wikt:城">城</a></span>; now <a href="/wiki/Seoul" title="Seoul">Seoul</a>), <a href="/wiki/Korea" title="Korea">Korea</a>, both meaning simply "capital".</p>
<p><b>Peking</b> is the name of the city according to <a href="/wiki/Chinese_Postal_Map_Romanization" title="Chinese Postal Map Romanization">Chinese Postal Map Romanization</a>, and the traditional customary name for Beijing in English (passports issued by the British Embassy are still printed as being issued by the "British Embassy, Peking"). The term Peking originated with French missionaries four hundred years ago and corresponds to an older pronunciation predating a subsequent <a href="/wiki/Sound_change" title="Sound change">sound change</a> in <a href="/wiki/Mandarin_(linguistics)" title="Mandarin (linguistics)">Mandarin</a> from <span title="Representation in the International Phonetic Alphabet (IPA)" class="IPA">[kʲ]</span> to <span title="Representation in the International Phonetic Alphabet (IPA)" class="IPA">[tɕ]</span><sup id="cite_ref-11" class="reference"><a href="#cite_note-11" title="">[12]</a></sup> (<span title="Representation in the International Phonetic Alphabet (IPA)" class="IPA">[tɕ]</span> is represented in <a href="/wiki/Pinyin" title="Pinyin">pinyin</a> as <b>j</b>, as in Bei<b>j</b>ing). It is still used in many languages.</p>
<p>The pronunciation "Peking" is also closer to the <a href="/wiki/Fujian" title="Fujian">Fujianese</a> dialect of <a href="/wiki/Amoy_(linguistics)" title="Amoy (linguistics)">Amoy</a> or <a href="/wiki/Min_Nan" title="Min Nan" class="mw-redirect">Min Nan</a> spoken in the city of <a href="/wiki/Xiamen" title="Xiamen">Xiamen</a>, a port where European traders first landed in the 16th century, while "Beijing" more closely approximates the <a href="/wiki/Mandarin" title="Mandarin">Mandarin</a> dialect's pronunciation.<sup id="cite_ref-12" class="reference"><a href="#cite_note-12" title="">[13]</a></sup></p>
<p>The city has been <a href="/wiki/Geographical_renaming" title="Geographical renaming">renamed</a> several times. During the <a href="/wiki/Jin_Dynasty_(1115%E2%80%931234)" title="Jin Dynasty (1115–1234)">Jin Dynasty</a>, the city was known as <b>Zhongdu</b> (<span lang="zh" xml:lang="zh"><a href="http://en.wiktionary.org/wiki/%E4%B8%AD%E9%83%BD" class="extiw" title="wikt:中都">中都</a></span>) , and then later under the Mongol <a href="/wiki/Yuan_Dynasty" title="Yuan Dynasty">Yuan Dynasty</a> as <b>Dadu</b> (<span lang="zh" xml:lang="zh"><a href="http://en.wiktionary.org/wiki/%E5%A4%A7" class="extiw" title="wikt:大">大</a><a href="http://en.wiktionary.org/wiki/%E9%83%BD" class="extiw" title="wikt:都">都</a></span>) in Chinese,<sup id="cite_ref-13" class="reference"><a href="#cite_note-13" title="">[14]</a></sup> and <b><a href="/wiki/Khanbaliq" title="Khanbaliq">Khanbaliq</a></b><sup id="cite_ref-14" class="reference"><a href="#cite_note-14" title="">[15]</a></sup> in <a href="/wiki/Mongolian_language" title="Mongolian language">Mongolian</a> (recorded as <b>Cambuluc</b><sup id="cite_ref-columbia_encyclopedia_7-2" class="reference"><a href="#cite_note-columbia_encyclopedia-7" title="">[8]</a></sup> by <a href="/wiki/Marco_Polo" title="Marco Polo">Marco Polo</a>). Twice in the city's history, the name was changed from Beijing (Peking) to <b>Beiping</b> (Peiping) (<span lang="zh" xml:lang="zh"><a href="http://en.wiktionary.org/wiki/%E5%8C%97" class="extiw" title="wikt:北">北</a><a href="http://en.wiktionary.org/wiki/%E5%B9%B3" class="extiw" title="wikt:平">平</a></span> <a href="/wiki/Pinyin" title="Pinyin">Pinyin</a>: Beiping; <a href="/wiki/Wade-Giles" title="Wade-Giles">Wade-Giles</a>: Pei-p'ing), literally "Northern Peace". This occurred first under the <a href="/wiki/Hongwu_Emperor" title="Hongwu Emperor">Hongwu Emperor</a> of the <a href="/wiki/Ming_Dynasty" title="Ming Dynasty">Ming Dynasty</a>, and again in 1928 with the <a href="/wiki/Kuomintang" title="Kuomintang">Kuomintang</a> (KMT) government of the <a href="/wiki/Republic_of_China" title="Republic of China">Republic of China</a>.<sup id="cite_ref-columbia_encyclopedia_7-3" class="reference"><a href="#cite_note-columbia_encyclopedia-7" title="">[8]</a></sup> On each occasion, the name change removed the element meaning "capital" (<i>jing</i> or <i>king</i>, <a href="/wiki/Chinese_language" title="Chinese language">Chinese</a>: <span lang="zh" xml:lang="zh">京</span>) to reflect the fact the national capital had changed to <a href="/wiki/Nanjing" title="Nanjing">Nanjing</a>. The city's name was also twice changed from Beiping (Peiping) to <b>Beijing</b> (Peking). This occurred first under the <a href="/wiki/Yongle_Emperor" title="Yongle Emperor">Yongle Emperor</a> of the <a href="/wiki/Ming_Dynasty" title="Ming Dynasty">Ming Dynasty</a>, who moved the capital from <a href="/wiki/Nanjing" title="Nanjing">Nanjing</a> back to Beijing, and again in 1949, when the <a href="/wiki/Communist_Party_of_China" title="Communist Party of China">Communist Party of China</a> restored Beijing as China's capital after the founding of the <a href="/wiki/People%27s_Republic_of_China" title="People's Republic of China">People's Republic of China</a>.<sup id="cite_ref-columbia_encyclopedia_7-4" class="reference"><a href="#cite_note-columbia_encyclopedia-7" title="">[8]</a></sup></p>
<p><b>Yanjing</b> (<span lang="zh" xml:lang="zh"><a href="http://en.wiktionary.org/wiki/%E7%87%95" class="extiw" title="wikt:燕">燕</a><a href="http://en.wiktionary.org/wiki/%E4%BA%AC" class="extiw" title="wikt:京">京</a></span>; <a href="/wiki/Pinyin" title="Pinyin">Pinyin</a>: Yānjīng; <a href="/wiki/Wade-Giles" title="Wade-Giles">Wade-Giles</a>: Yen-ching) is and has been another popular informal name for Beijing, a reference to the ancient <a href="/wiki/State_of_Yan" title="State of Yan" class="mw-redirect">State of Yan</a> that existed here during the <a href="/wiki/Zhou_Dynasty" title="Zhou Dynasty">Zhou Dynasty</a>. This name is reflected in the locally brewed <a href="/wiki/Yanjing_Beer" title="Yanjing Beer">Yanjing Beer</a> as well as <a href="/wiki/Yenching_University" title="Yenching University">Yenching University</a>, an institution of higher learning that was merged into <a href="/wiki/Peking_University" title="Peking University">Peking University</a>.</p>
<dl>
<dd><i>The history section below outlines other historical names of Beijing.</i></dd>
</dl>
<p><a name="History" id="History"></a></p>
<h2><span class="mw-headline">History</span></h2>
<dl>
<dd>
<div class="noprint relarticle mainarticle"><i>Main article: <a href="/wiki/History_of_Beijing" title="History of Beijing">History of Beijing</a></i></div>
</dd>
</dl>
<p><a name="Early_history" id="Early_history"></a></p>
<h3><span class="mw-headline">Early history</span></h3>
<div class="thumb tright">
<div class="thumbinner" style="width:182px;"><a href="/wiki/Image:Zhoukoudian_Museum_July2004.jpg" class="image" title="Zhoukoudian"><img alt="Zhoukoudian" src="http://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Zhoukoudian_Museum_July2004.jpg/180px-Zhoukoudian_Museum_July2004.jpg" width="180" height="135" border="0" class="thumbimage" /></a>
<div class="thumbcaption">
<div class="magnify"><a href="/wiki/Image:Zhoukoudian_Museum_July2004.jpg" class="internal" title="Enlarge"><img src="/skins-1.5/common/images/magnify-clip.png" width="15" height="11" alt="" /></a></div>
<a href="/wiki/Zhoukoudian" title="Zhoukoudian">Zhoukoudian</a></div>
</div>
</div>
<p>The earliest remnants of human habitation in the Beijing municipality are found in the caves of Dragon Bone Hill near the village of <a href="/wiki/Zhoukoudian" title="Zhoukoudian">Zhoukoudian</a> in <a href="/wiki/Fangshan_District" title="Fangshan District">Fangshan District</a>, where the <a href="/wiki/Peking_Man" title="Peking Man">Peking Man</a> lived. <i><a href="/wiki/Homo_erectus" title="Homo erectus">Homo erectus</a></i> fossils from the caves date to 230,000 to 250,000 years ago. <a href="/wiki/Paleolithic" title="Paleolithic">Paleolithic</a> <i><a href="/wiki/Homo_sapiens" title="Homo sapiens" class="mw-redirect">homo sapiens</a></i> also lived there about 27,000 years ago.<sup id="cite_ref-15" class="reference"><a href="#cite_note-15" title="">[16]</a></sup> There were cities in the vicinities of Beijing by the <a href="/wiki/1st_millennium_BC" title="1st millennium BC">1st millennium BC</a>, and the capital of the <a href="/wiki/State_of_Yan" title="State of Yan" class="mw-redirect">State of Yan</a>, one of the powers of the <a href="/wiki/Warring_States_Period" title="Warring States Period">Warring States Period</a> (473-221 BC), <b>Ji</b> (薊/蓟), was established in present-day Beijing.<sup id="cite_ref-hist_0-1" class="reference"><a href="#cite_note-hist-0" title="">[1]</a></sup></p>
<p>After the fall of the <a href="/wiki/Yan_(state)" title="Yan (state)">Yan</a>, the subsequent <a href="/wiki/Qin_Dynasty" title="Qin Dynasty">Qin</a>, <a href="/wiki/Han_Dynasty" title="Han Dynasty">Han</a>, and <a href="/wiki/J%C3%ACn_Dynasty_(265-420)" title="Jìn Dynasty (265-420)" class="mw-redirect">Jin</a> dynasties set up local prefectures in the area.<sup id="cite_ref-hist_0-2" class="reference"><a href="#cite_note-hist-0" title="">[1]</a></sup> In <a href="/wiki/Tang_Dynasty" title="Tang Dynasty">Tang Dynasty</a> it became the headquarters for Fanyang <a href="/wiki/Jiedushi" title="Jiedushi">jiedushi</a>, the virtual military governor of current northern <a href="/wiki/Hebei" title="Hebei">Hebei</a> area. <a href="/wiki/An_Lushan" title="An Lushan">An Lushan</a> launched <a href="/wiki/An_Shi_Rebellion" title="An Shi Rebellion">An Shi Rebellion</a> from here in 755 AD.</p>

<p> . . . </p>







<!-- 
NewPP limit report
Preprocessor node count: 26722/1000000
Post-expand include size: 417342/2048000 bytes
Template argument size: 220982/2048000 bytes
Expensive parser function count: 0/500
-->

<!-- Saved in parser cache with key enwiki:pcache:idhash:18603746-0!1!0!default!!en!2!edit=0 and timestamp 20080919152125 -->
<div class="printfooter">
Retrieved from "<a href="http://en.wikipedia.org/wiki/Beijing">http://en.wikipedia.org/wiki/Beijing</a>"</div>
			<div id='catlinks' class='catlinks'><div id="mw-normal-catlinks"><a href="/wiki/Special:Categories" title="Special:Categories">Categories</a>:&#32;<span dir='ltr'><a href="/wiki/Category:Capitals_in_Asia" title="Category:Capitals in Asia">Capitals in Asia</a></span> | <span dir='ltr'><a href="/wiki/Category:Host_cities_of_the_Summer_Olympic_Games" title="Category:Host cities of the Summer Olympic Games">Host cities of the Summer Olympic Games</a></span> | <span dir='ltr'><a href="/wiki/Category:Beijing" title="Category:Beijing">Beijing</a></span> | <span dir='ltr'><a href="/wiki/Category:Cities_in_China" title="Category:Cities in China">Cities in China</a></span> | <span dir='ltr'><a href="/wiki/Category:Independent_cities" title="Category:Independent cities">Independent cities</a></span> | <span dir='ltr'><a href="/wiki/Category:Metropolitan_areas_of_China" title="Category:Metropolitan areas of China">Metropolitan areas of China</a></span> | <span dir='ltr'><a href="/wiki/Category:North_China_Plain" title="Category:North China Plain">North China Plain</a></span> | <span dir='ltr'><a href="/wiki/Category:Settlements_established_in_the_5th_century_BC" title="Category:Settlements established in the 5th century BC">Settlements established in the 5th century BC</a></span></div><div id="mw-hidden-catlinks" class="mw-hidden-cats-hidden">Hidden category:&#32;<span dir='ltr'><a href="/wiki/Category:Articles_including_recorded_pronunciations" title="Category:Articles including recorded pronunciations">Articles including recorded pronunciations</a></span></div></div>			<!-- end content -->
						<div class="visualClear"></div>
		</div>
	</div>
		</div>
		<div id="column-one">
	<div id="p-cactions" class="portlet">
		<h5>Views</h5>
		<div class="pBody">
			<ul>
	
				 <li id="ca-nstab-main" class="selected"><a href="/wiki/Beijing" title="View the content page [c]" accesskey="c">Article</a></li>
				 <li id="ca-talk"><a href="/wiki/Talk:Beijing" title="Discussion about the content page [t]" accesskey="t">Discussion</a></li>
				 <li id="ca-viewsource"><a href="/w/index.php?title=Beijing&amp;action=edit" title="This page is protected.&#10;You can view its source. [e]" accesskey="e">View source</a></li>
				 <li id="ca-history"><a href="/w/index.php?title=Beijing&amp;action=history" title="Past versions of this page [h]" accesskey="h">History</a></li>			</ul>
		</div>
	</div>
	<div class="portlet" id="p-personal">
		<h5>Personal tools</h5>
		<div class="pBody">
			<ul>
				<li id="pt-login"><a href="/w/index.php?title=Special:UserLogin&amp;returnto=Beijing" title="You are encouraged to log in; however, it is not mandatory. [o]" accesskey="o">Log in / create account</a></li>
			</ul>
		</div>
	</div>
	<div class="portlet" id="p-logo">


<?php #@todo ?>
<h4 id="bsm-demo-h2">BSL wiki demonstration</h4>


	
		<a style="background-image: url(http://upload.wikimedia.org/wikipedia/en/b/bc/Wiki.png);" href="/wiki/Main_Page" title="Visit the main page [z]" accesskey="z"></a>
	</div>
	<script type="text/javascript"> if (window.isMSIE55) fixalpha(); </script>
	<div class='generated-sidebar portlet' id='p-navigation'>
		<h5>Navigation</h5>
		<div class='pBody'>
			<ul>
				<li id="n-mainpage-description"><a href="/wiki/Main_Page" title="Visit the main page [z]" accesskey="z">Main page</a></li>
				<li id="n-contents"><a href="/wiki/Portal:Contents" title="Guides to browsing Wikipedia">Contents</a></li>
				<li id="n-featuredcontent"><a href="/wiki/Portal:Featured_content" title="Featured content — the best of Wikipedia">Featured content</a></li>
				<li id="n-currentevents"><a href="/wiki/Portal:Current_events" title="Find background information on current events">Current events</a></li>
				<li id="n-randompage"><a href="/wiki/Special:Random" title="Load a random article [x]" accesskey="x">Random article</a></li>
			</ul>
		</div>
	</div>
	<div id="p-search" class="portlet">
		<h5><label for="searchInput">Search</label></h5>
		<div id="searchBody" class="pBody">
			<form action="/wiki/Special:Search" id="searchform"><div>
				<input id="searchInput" name="search" type="text" title="Search Wikipedia [f]" accesskey="f" value="" />
				<input type='submit' name="go" class="searchButton" id="searchGoButton"	value="Go" title="Go to a page with this exact name if one exists" />&nbsp;
				<input type='submit' name="fulltext" class="searchButton" id="mw-searchButton" value="Search" title="Search Wikipedia for this text" />
			</div></form>
		</div>
	</div>
	<div class='generated-sidebar portlet' id='p-interaction'>
		<h5>Interaction</h5>
		<div class='pBody'>
			<ul>
				<li id="n-aboutsite"><a href="/wiki/Wikipedia:About" title="Find out about Wikipedia">About Wikipedia</a></li>
				<li id="n-portal"><a href="/wiki/Wikipedia:Community_portal" title="About the project, what you can do, where to find things">Community portal</a></li>
				<li id="n-recentchanges"><a href="/wiki/Special:RecentChanges" title="The list of recent changes in the wiki [r]" accesskey="r">Recent changes</a></li>
				<li id="n-contact"><a href="/wiki/Wikipedia:Contact_us" title="How to contact Wikipedia">Contact Wikipedia</a></li>
				<li id="n-sitesupport"><a href="http://wikimediafoundation.org/wiki/Donate" title="Support us">Donate to Wikipedia</a></li>
				<li id="n-help"><a href="/wiki/Help:Contents" title="Guidance on how to use and edit Wikipedia">Help</a></li>
			</ul>
		</div>
	</div>
	<div class="portlet" id="p-tb">
		<h5>Toolbox</h5>
		<div class="pBody">
			<ul>
				<li id="t-whatlinkshere"><a href="/wiki/Special:WhatLinksHere/Beijing" title="List of all English Wikipedia pages containing links to this page [j]" accesskey="j">What links here</a></li>
				<li id="t-recentchangeslinked"><a href="/wiki/Special:RecentChangesLinked/Beijing" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-upload"><a href="/wiki/Wikipedia:Upload" title="Upload files [u]" accesskey="u">Upload file</a></li>
<li id="t-specialpages"><a href="/wiki/Special:SpecialPages" title="List of all special pages [q]" accesskey="q">Special pages</a></li>
				<li id="t-print"><a href="/w/index.php?title=Beijing&amp;printable=yes" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>				<li id="t-permalink"><a href="/w/index.php?title=Beijing&amp;oldid=239110331" title="Permanent link to this version of the page">Permanent link</a></li><li id="t-cite"><a href="/w/index.php?title=Special:Cite&amp;page=Beijing&amp;id=239110331">Cite this page</a></li>			</ul>
		</div>
	</div>
	<div id="p-lang" class="portlet">
		<h5>Languages</h5>
		<div class="pBody">
			<ul>
				<li class="interwiki-af"><a href="http://af.wikipedia.org/wiki/Beijing">Afrikaans</a></li>
<li>...</li>
				<li class="interwiki-eo"><a href="http://eo.wikipedia.org/wiki/Pekino">Esperanto</a></li>
<li>...</li>

				<li class="interwiki-uk"><a href="http://uk.wikipedia.org/wiki/%D0%9F%D0%B5%D0%BA%D1%96%D0%BD">Українська</a></li>
				<li class="interwiki-wuu"><a href="http://wuu.wikipedia.org/wiki/%E5%8C%97%E4%BA%AC">吴语</a></li>
				<li class="interwiki-zh-yue"><a href="http://zh-yue.wikipedia.org/wiki/%E5%8C%97%E4%BA%AC">粵語</a></li>
				<li class="interwiki-bat-smg"><a href="http://bat-smg.wikipedia.org/wiki/Pek%C4%97ns">Žemaitėška</a></li>
				<li class="interwiki-zh"><a href="http://zh.wikipedia.org/wiki/%E5%8C%97%E4%BA%AC%E5%B8%82">中文</a></li>
			</ul>
		</div>
	</div>
		</div><!-- end of the left (by default at least) column -->
			<div class="visualClear"></div>
			<div id="footer">
				<div id="f-poweredbyico"><a href="http://www.mediawiki.org/"><img src="/skins-1.5/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" /></a></div>
				<div id="f-copyrightico"><a href="http://wikimediafoundation.org/"><img src="/images/wikimedia-button.png" border="0" alt="Wikimedia Foundation"/></a></div>
			<ul id="f-list">
				<li id="lastmod"> This page was last modified on 17 September 2008, at 21:10.</li>
				<li id="copyright">All text is available under the terms of the <a class='internal' href="http://en.wikipedia.org/wiki/Wikipedia:Text_of_the_GNU_Free_Documentation_License" title="Wikipedia:Text of the GNU Free Documentation License">GNU Free Documentation License</a>. (See <b><a class='internal' href="http://en.wikipedia.org/wiki/Wikipedia:Copyrights" title="Wikipedia:Copyrights">Copyrights</a></b> for details.) <br /> Wikipedia&reg; is a registered trademark of the <a href="http://www.wikimediafoundation.org">Wikimedia Foundation, Inc</a>., a U.S. registered <a class='internal' href="http://en.wikipedia.org/wiki/501%28c%29#501.28c.29.283.29" title="501(c)(3)">501(c)(3)</a> <a href="http://wikimediafoundation.org/wiki/Deductibility_of_donations">tax-deductible</a> <a class='internal' href="http://en.wikipedia.org/wiki/Non-profit_organization" title="Non-profit organization">nonprofit</a> <a href="http://en.wikipedia.org/wiki/Charitable_organization" title="Charitable organization">charity</a>.<br /></li>
				<li id="privacy"><a href="http://wikimediafoundation.org/wiki/Privacy_policy" title="wikimedia:Privacy policy">Privacy policy</a></li>
				<li id="about"><a href="/wiki/Wikipedia:About" title="Wikipedia:About">About Wikipedia</a></li>
				<li id="disclaimer"><a href="/wiki/Wikipedia:General_disclaimer" title="Wikipedia:General disclaimer">Disclaimers</a></li>
			</ul>
		</div>
</div>

		<script type="text/javascript">if (window.runOnloadHook) runOnloadHook();</script>
<!-- Served by srv174 in 0.061 secs. --></body></html>
