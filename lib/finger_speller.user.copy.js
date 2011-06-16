// ==UserScript==
// @name           Finger speller
// @namespace      http://freear.org.uk
// @description    Uses BSM server.
// @include       *
// ==/UserScript==
// @exclude        http://localhost:8888/bsl/*
// @exclude       http://diveintogreasemonkey.org/*
// @exclude       http://www.diveintogreasemonkey.org/*


//http://diveintogreasemonkey.org/api/gm_xmlhttprequest.html

//GM_log(' Finger speller ');

(function() {

var baseUrl = 'http://localhost:8888/bsl/';

function copyit() {
  var selObj = window.getSelection(); 
  //var selRange = selObj.getRangeAt(0);
  // do stuff with the range
  GM_log('" '+selObj+' "' );

  var sUrl = encodeURI(baseUrl+'?view=html/div&text='+selObj);
  var sFeatures="menubar=no,location=no,resizable=yes,scrollbars=no,status=no,width=210,height=320";
  var r = window.open(sUrl, 'speller', sFeatures);

};

var btn = document.createElement('input');
btn.setAttribute('type', 'image');
btn.alt = btn.title = 'Finger spell';
btn.src = baseUrl+'hand-01.png';
//btn.innerHTML = 'Finger spell';
//btn.style = //{ position: 'absolute', top: 0, left: 0 };
btn.setAttribute('style', 'position:absolute;top:0;left:0;border:2px solid #ccc');
btn.addEventListener('click', copyit, true);

document.getElementsByTagName('body')[0].appendChild(btn);

})();



