<!DOCTYPE html>
<html lang="en">
<head>
  <script>
async function detectAdBlock() {
  let adBlockEnabled = false
  const googleAdUrl = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'
  try {
    await fetch(new Request(googleAdUrl)).catch(_ => adBlockEnabled = true)
  } catch (e) {
    if (e.message !== 'net::ERR_CONNECTION_REFUSED') {
      adBlockEnabled = true
    }
  } finally {
    if (adBlockEnabled) {
      alert("Ad Blocker Detected!");
      location.href = 'adblockerproton.php';
    } else {
      alert("No Ad Blocker Detected Thanks For Supporting Us :).");
    }
  }
}

setTimeout(() => {
  detectAdBlock();
}, 2000);

</script>
  <script async src="https://arc.io/widget.min.js#LfEH5nmf"></script>
  <meta charset="utf-8">
  <title>Little Alchemy Unblocked</title>
  <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <meta name=theme-color content=#75005D>
  <link rel="stylesheet" href="css/little_alchemy.css" type="text/css">
  <link rel="stylesheet" href="css/app.580.css" type="text/css">
</head>
<body>
<div class=googlePlusHaxor></div>
<script src="js/little_alchemy.js"></script>
<div id=loadingScreen class=loadingScreen>
  <div class=loadingScreenContainer><img class=loadingScreenLogo src=img/loading-screen-logo.png>
    <div class="playButtonContainer rect">
      <div class=playButton>
        <svg class=playButton width=300 height=100>
          <rect x=0 y=0 width=300 height=100 fill=transparent></rect>
          <path stroke=#75005D stroke-width=0 fill=none d="M0 0 H 300 V 100 H 0 L 0 0" stroke-dasharray="800, 800"
                stroke-dashoffset=800 style="display: none"></path>
        </svg>
      </div>
      <div class=progressBar>0%</div>
    </div>
    <div id=loadingScreenMessage class=loadingScreenMessage></div>
  </div>
  <div class=loadingScreenLA2><a data-la2=loading-screen-logo></a>

  </div>
</div>
<div id=workspace class=workspace></div>
<div id=side class=side>
  <div id=alphabet class=alphabet>
    <ul>
      <li>A</li>
      <li>B</li>
      <li>C</li>
      <li>D</li>
      <li>E</li>
      <li>F</li>
      <li>G</li>
      <li>H</li>
      <li>I</li>
      <li>J</li>
      <li>K</li>
      <li>L</li>
      <li>M</li>
      <li>N</li>
      <li>O</li>
      <li>P</li>
      <li>Q</li>
      <li>R</li>
      <li>S</li>
      <li>T</li>
      <li>U</li>
      <li>V</li>
      <li>W</li>
      <li>X</li>
      <li>Y</li>
      <li>Z</li>
    </ul>
  </div>
  <div id=libraryOverlay></div>
  <div id=outerLibrary class=outerLibrary>
    <div id=library class=library></div>
  </div>
  <div class=libraryFade></div>
</div>
<div id=ui class=ui><a id=progressShareButton class=progressShare target=_blank>
  <div id=progress class=progress></div>
</a>
  <div id=toggleFullscreen class=toggleFullscreen></div>
  <div id=icons class=icons><a href=https://littlealchemy2.com target=_blank style="display: none"
                               title="Little Alchemy 2 is out! Play it now!" data-la2=menu>
    <div class="icon iconLA2" id=littleAlchemy2Button></div>
  </a>
    <div class="icon iconClear" id=clearWorkspace></div>
    <div class="icon iconScreenshot" id=screenshotIcon style="display: none"></div>
    <div class="icon iconMenu" id=menu></div>
  </div>
  <div id=broadcast class=broadcast>
    <div class=content></div>
  </div>
  <div id=login class=login></div>
</div>
<div id=panel class=panel>
  <div class=content>
    <div id=closePanel class=closePanel></div>
  </div>
</div>
<input type=hidden id=searchBar class=searchBar maxlength=75>
<div class=outerNotificationBox>
  <div id=notificationBox class="notificationBox hide">
    <div class=close></div>
    <div class=content></div>
  </div>
</div>
<script src=js/jquery.min.js></script>

<script src=js/alchemy.580.js></script>
<script src=js/vendor/dragNdrop.580.js></script>
<script src=js/vendor/iscroll-lite-5.0.6.1.js async></script>
<script src=js/alchemy.firstLoad.580.js async></script>
<script src=js/alchemy.secondLoad.580.js async></script>
<script src=js/vendor/html2canvas-0.4.1.min.js async></script>

</body>
</html>