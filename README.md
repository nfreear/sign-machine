
[![Build status — Travis-CI][travis-icon]][travis]
[![Javascript semistandard style][semi-icon]][semi]

# nfreear / sign-machine

## Version 2.x

Javascript to embed sign-language animations — finger spell your text.
Currently supports British Sign Language.

### Usage

HTML web-page snippet — via [RawGit][] (production):

```html
<div id="id-sign-machine">[ sign-machine requires Javascript ]</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/nfreear/sign-machine/2.0-alpha/src/sign-machine.js"></script>
```

Local hosting, with an optional `initial` set:

```html
<div id="id-sign-machine" data-sign-machine='{ "initial": "Hi" }'></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="src/sign-machine.js"></script>
```

[![Screenshot][flick-img]][flickr]

[![British Sign Language][bsl-img]][bsl]

### 2.x files

* Javascript, LESS, CSS, HTML, GIF,
* GIF images: each is animated, with 3 frames, 100 x 100 pixels.

```sh
graphics/{ a..z }.gif
node_modules/                      # Via: npm install
src/sign-machine.js
style/sign-machine.{ less → css }  # Via: lessc
index.html
package.json
```

---

## Version 1.x

### Legacy

British Sign Language finger-spelling machine - web service.

* PHP, Javascript, CSS, GIF.

```sh
bookmarklet/index.php
graphics/*.gif
includes/*.{ js css png }
lib/*.{ php bookmarklet.js user..js }
wikidemo/index.php
index.php
```

> Compatibility: PHP 4, IE 6, Firefox 3, Safari.
>
> Initial commit of sign-machine aka. "BSM". Author/ Copyright 2008-08-30 Nicholas Freear (except graphics).

---

* GitHub: [nfreear/sign-machine][gh]
* Bitbucket: [nfreear/sign-machine][bit]
* v1.x PHP demo: [freear.org.uk/sign?text=Hello][php]

## License

License: [MIT][].

© 2008-2017 [Nick Freear][blog]. [@nfreear][].


[gh]: https://github.com/nfreear/sign-machine
[bit]: https://bitbucket.org/nfreear/sign-machine
[php]: http://freear.org.uk/sign/?text=Hello%21
[@nfreear]: https://twitter.com/nfreear "Twitter: @nfreear"
[blog]: http://nick.freear.org.uk "Nick Freear's blog"
[RawGit]: https://rawgit.com/
    "Serves Git files with the correct mime-type; content delivery network (CDN)"
[MIT]: https://nfreear.mit-license.org/ "MIT License"
[travis]: https://travis-ci.org/nfreear/sign-machine "Build status – Travis-CI (NPM/eslint)"
[travis-icon]: https://api.travis-ci.org/nfreear/sign-machine.svg
[semi]: https://github.com/Flet/semistandard "Javascript coding style — 'semistandard'"
[semi-icon]: https://img.shields.io/badge/code%20style-semistandard-brightgreen.svg?style=flat-square

[bsl]: https://en.wikipedia.org/wiki/British_Sign_Language
[bsl-img-0]: https://commons.wikimedia.org/wiki/File:BSL_Name.png
[bsl-img]: https://upload.wikimedia.org/wikipedia/commons/d/d8/BSL_Name.png
    "'B' 'S' 'L' — British Sign Language"
[sl-inter]: https://commons.wikimedia.org/wiki/File:Pictograms-nps-accessibility-sign_language_interpretation-2.svg
[asl-img]: https://commons.wikimedia.org/wiki/File:Sign_language_A.svg
[asl-2]: https://wpclipart.com/sign_language/American_ABCs/
[signing]: https://pixabay.com/en/sign-language-deaf-gesture-signing-28716/
[gov]: https://github.com/UKHomeOffice/posters/blob/master/accessibility/posters_en-UK/deaf.pdf

[flickr]: https://flickr.com/photos/nfreear/33989105994 "Screen-shot of sign-machine V2"
[flick-img]: https://c1.staticflickr.com/5/4202/33989105994_cf11c09d5d_n.jpg

[End]: //
