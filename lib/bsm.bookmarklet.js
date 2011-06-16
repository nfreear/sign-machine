/* BSL Speller bookmarklet. Copyright 2008-09-22 N.D.Freear
*/
b = 'http://freear.org.uk/sign/';
f='menubar=no,location=no,resizable=yes,scrollbars=no,status=no,width=210,height=320';
t=document.getElementsByTagName('title')[0].innerHTML;

/*<?php if ($iexplore):  #IE. ?>  */
s=document.selection.createRange().text;

/*<?php else:  #Safari, Firefox, etc. ?>*/
s=window.getSelection();

/*<?php endif; ?>*/

tx='';
if(s!=''){tx=s;}
else if(t!=''){tx=t;}
if(tx!=''){
   u=encodeURI(b+'?view=html/popup&text='+tx);
   w=window.open(u,'speller',f);
}
/*(function(){
  setTimeout('w.focus()',1000);
} )();";*/
w.focus();