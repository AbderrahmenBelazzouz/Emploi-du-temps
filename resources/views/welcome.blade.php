<!DOCTYPE html>
<html lang="en"><head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


  <title>CodePen - CSS Tab</title>
  
  
  
  
<style>
@import url('https://fonts.googleapis.com/css?family=Arimo:400,700&display=swap');
body{
  background:#CDDC39;
  font-family: 'Arimo', sans-serif;
}
h2{
  color:#000;
  text-align:center;
  font-size:2em;
}
.warpper{
  display:flex;
  flex-direction: column;
  align-items: center;
}
.tab{
  cursor: pointer;
  padding:10px 20px;
  margin:0px 2px;
  background:#000;
  display:inline-block;
  color:#fff;
  border-radius:3px 3px 0px 0px;
  box-shadow: 0 0.5rem 0.8rem #00000080;
}
.panels{
  background:#fffffff6;
  box-shadow: 0 2rem 2rem #00000080;
  min-height:200px;
  width:100%;
  max-width:500px;
  border-radius:3px;
  overflow:hidden;
  padding:20px;  
}
.panel{
  display:none;
  animation: fadein .8s;
}
@keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
.panel-title{
  font-size:1.5em;
  font-weight:bold
}
.radio{
  display:none;
}
#one:checked ~ .panels #one-panel,
#two:checked ~ .panels #two-panel,
#three:checked ~ .panels #three-panel{
  display:block
}
#one:checked ~ .tabs #one-tab,
#two:checked ~ .tabs #two-tab,
#three:checked ~ .tabs #three-tab{
  background:#fffffff6;
  color:#000;
  border-top: 3px solid #000;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" data-new-gr-c-s-check-loaded="14.998.0" data-gr-ext-installed="">
  <h2>CSS Tab</h2>
<div class="warpper">
  <input class="radio" id="one" name="group" type="radio" checked="">
  <input class="radio" id="two" name="group" type="radio">
  <input class="radio" id="three" name="group" type="radio">
  <div class="tabs">
  <label class="tab" id="one-tab" for="one">CSS</label>
  <label class="tab" id="two-tab" for="two">Skills</label>
  <label class="tab" id="three-tab" for="three">Prerequisites</label>
    </div>
  <div class="panels">
  <div class="panel" id="one-panel">
    <div class="panel-title">Why Learn CSS?</div>
    <p>Without CSS, every web page would be drab plain text and images that flowed straight down the page. With CSS, you can add color and background images and change the layout of your page — your web pages can feel like works of art!</p>
  </div>
  <div class="panel" id="two-panel">
    <div class="panel-title">Take-Away Skills</div>
    <p>You will learn many aspects of styling web pages! You’ll be able to set up the correct file structure, edit text and colors, and create attractive layouts. With these skills, you’ll be able to customize the appearance of your web pages to suit your every need!</p>
  </div>
  <div class="panel" id="three-panel">
    <div class="panel-title">Note on Prerequisites</div>
    <p>We recommend that you complete Learn HTML before learning CSS.</p>
  </div>
  </div>
</div>
  
  
  
  




 
</body></html>