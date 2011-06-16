/* British Sign Machine Javascript. Copyright 2008-08-30, -09-16 N.D.Freear.
*/
var BSM = function(id, timeout) {

  var imgSize = 200;

  if (!document.getElementById) return false;
  var div = document.getElementById(id);
  var images= div.getElementsByTagName('img');

  this.pfx = id;
  this.timeout = timeout;
  this.timer = null;
  this.counter = 0;
  this.nImages = images.length;

  for (var nm=0; nm<images.length; nm++) {
    elem = images[nm];
    elem.id = this.pfx + nm;
    //elem.setAttribute('width', imgSize);
    //elem.setAttribute('height',imgSize);
    elem.style.display = 'none';
  }

  that = this;
  //this.handler();

  var btn = document.createElement('button');
  btn.innerHTML = 'Play';
  btn.onclick = function() { that.play.call(that); };
  div.appendChild(btn);

  var tx = document.createTextNode(' ');
  div.appendChild(tx);

  var btn = document.createElement('button');
  //btn.id = this.pfx+'pause';
  btn.innerHTML = 'Pause';
  btn.onclick = function() { clearInterval(that.timer); this.disabled=true; }; //this:Button. 
  div.appendChild(btn);
  this.pauseBtn = btn;


  this.handler = function() {
	var tel = document.getElementById(this.pfx + this.counter);
	if (tel) {
		tel.style.display = 'inline';
	}
	if (this.counter > 0) {
		var lal = document.getElementById(this.pfx + (this.counter-1));
		if (lal) {
			lal.style.display = 'none';
		}
	}
	if (this.counter < this.nImages) {
		//this.timer = window.setTimeout(this.pfx+'.handler()', this.timeout);
		this.counter++;
	} else {
		clearInterval(this.timer);
	}
  }

  this.play = function() {
	clearInterval(this.timer);
	var lal = document.getElementById(this.pfx + (this.counter-1));
	if (lal) {
		lal.style.display = 'none';
	}
	this.counter = 0;
	//this.handler();
	this.timer = setInterval(function() { that.handler.call(that); }, this.timeout);

    this.pauseBtn.disabled = false;
	//document.getElementById(this.pfx+'pause').disabled =false;
  }


  this.play.call(this);
};


/*BSM.prototype.play = function() {
  clearInterval(this.timer); //this.pause();
    var lal = document.getElementById(this.pfx + (this.counter-1));
    if (lal) {
      lal.style.display = 'none';
    }
    this.counter = 0;
    //this.handler();
    //that = this;
    this.timer = setInterval(function() { that.handler.call(that); }, this.timeout);

  document.getElementById('pause').disabled =false;
}*/
