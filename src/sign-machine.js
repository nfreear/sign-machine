/*!
  sign-machine V2 | ©Nick Freear, 2017-05-21.
*/

window.jQuery(function ($) {
  'use strict';

  var defaults = {
    id: 'id-sign-machine',
    timer: 1400, // Milli-seconds.
    lang_sign: 'sgn-GB', // OR: 'bfi'
    lang: 'en',
    label: 'British Sign Language finger spelling.',
    initial: 'Hello!',
    ignore_re: /[^a-zA-Z]/g,
    form: '<form><label>Finger spell this <input name="sign" value="%s" required ></label><input type="submit" value="Sign"></form><p></p>',
    graphic: '<img src="%u/../../graphics/%s.gif" alt="Letter: %s" title="Letter: %s" class="letter">',
    space: '<i class="space" aria-label="space"></i>',
    script: 'sign-machine.js',
    dev: false,
    css_url: '/../../style/sign-machine.css',
    css_link: '<link rel="stylesheet" href="%s" />',
    less_url: '/../../style/sign-machine.less',
    less_link: '<link rel="stylesheet/less" type="text/css" href="%s" />',
    less_js: '<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>'
  };

  var $config = $('div[ data-sign-machine ], script[ data-sign-machine ]').first();
  var options = $config.data();

  var SM = $.extend(defaults, options ? options.signMachine : { });

  var W = window;
  var C = W.console;

  C.warn('SM config: ', $config.data());

  var $script = $('script[ src *= "' + SM.script + '" ]').first();

  SM.script_url = $script.attr('src');

  addStylesheet();

  var $CTR = $('#' + SM.id);

  $CTR
    .html(SM.form.replace(/%s/, SM.initial))
    .addClass('sign-machine-v2-js')
    .attr({ role: 'alert', 'data-sl': SM.lang_sign, 'aria-label': SM.label });

  var $form = $CTR.find('form');
  var $input = $CTR.find('input[ name = sign ]');
  var $inner = $CTR.find('p');

  $form.on('submit', function (ev) {
    ev.preventDefault();

    var phrase = $input.val();

    signThis(phrase);
  });

  parseQuery(W.location.search);

  C.warn('SM: sign-machine-v2: ', SM);

  // ----------------------------------------

  var interval;

  function signThis (phrase) {
    var ignorecount = (phrase.match(SM.ignore_re) || [ ]).length;
    var letters = SM.letters = phrase.replace(SM.ignore_re, ' ').split('');
    var idx = 0;

    W.clearInterval(interval);

    interval = W.setInterval(function () {
      var letter = letters[ idx ];
      var graphic;

      if (idx > letters.length || !letter) {
        return W.clearInterval(interval);
      }

      if (letter === ' ') {
        graphic = SM.space;
      } else {
        graphic = SM.graphic.replace(/%u/, SM.script_url).replace(/%s/g, letter.toLowerCase());
      }

      $inner.html(graphic);

      C.warn('SM letter: "%s", %s', letter, graphic);

      idx++;
    },
    SM.timer);

    C.warn('SM: request: ', letters, letters.length, ignorecount);
  }

  function parseQuery (params) {
    var mparam = params.match(/[&?]sign=([^&]+)/);
    if (mparam) {
      $input.val(W.decodeURIComponent(mparam[ 1 ]));
      $form.trigger('submit');
    }
  }

  function addStylesheet () {
    var $head = $('head');
    if (SM.dev) {
      $head
        .append(SM.less_js)
        .append(SM.less_link.replace(/%s/, SM.script_url + SM.less_url));
    } else {
      $head.append(SM.css_link.replace(/%s/, SM.script_url + SM.css_url));
    }
  }
});
