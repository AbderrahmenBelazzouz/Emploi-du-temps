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


<!--<script src="js/file.jss" />  -->

<!--<link href="{{ url('/css/style.css') }}" rel="stylesheet"> -->
<link href="{{ asset('/css/a.css') }}" rel="stylesheet"> 
<!--<script src="js/file.jss" />  -->

    <title>Document</title>
</head>

<body><header></header>
  <div class="container">


<!--
<canvas width="500px" height="500px" id="c1" style="border: 1px solid black" > </canvas>
-->

 <svg width=700px height=700px >


<line x1=350  y1=350 x2=350 y2=100 stroke=black />
<text x=350 y=100 fill=red style='font-size:10px'   > X= </text>
<line x1=350  y1=350 x2=650 y2=350 stroke=black />
<text x=650 y=350 fill=red style='font-size:10px'> Y= </text>


<rect x=350 y=350 width=50px stroke=green fill=green  >
<animate   
attributeName=y
fill=freeze
from=350 to=150
begin=0s  dur=2s
 />
 <animate   
attributeName=height
fill=freeze
from=0 to=200
begin=0s  dur=2s
 />

</rect>




<line x1=425 y1=350 x2=425 y2=350 stroke=red style='stroke-width:50px'>
<animate   
attributeName=y2
fill=freeze
from=350 to=100
begin=0s  dur=1s
 />
</line>
<line x1=475 y1=350 x2=475 y2=350 stroke=green style='stroke-width:50px'>
<animate   
attributeName=y2
fill=freeze
from=350 to=125
begin=0s  dur=0.5s
 />
</line>
 <line x1=525 y1=350 x2=525 y2=350 stroke=red style='stroke-width:50px'>
<animate   
attributeName=y2
fill=freeze
from=350 to=75
begin=0s  dur=0.5s
 />




</line>
 </svg>


</div>


<script>
	/*var canvas= document.getElementById('c1');
	var cont=canvas.getContext("2d");
	  cont.fillStyle="rgba(255,0,0, 0.2)" ;
	 cont.fillRect(50,50,100,100);

	var cont1=canvas.getContext("2d");
	  cont1.fillStyle="rgba(0,0,255, 0.2)" ;
	 cont1.fillRect(75,75,100,100);

	var cont2=canvas.getContext("2d");
	  cont2.fillStyle="rgba(0,0,255, 0.2)" ;

	 cont2.beginPath();
	 cont2.fillStyle="rgba(0,0,255, 0.2)" ;
	 cont2.arc(125,225,25,0,Math.PI,false);
	 cont2.stroke();
	 cont2.moveTo(100,225); cont2.lineTo(150,225); cont2.stroke(); cont2.fill();

	 	var cont4=canvas.getContext("2d");
	  cont4.fillStyle="rgba(0,255,0, 0.8)" ;

	 cont4.beginPath();
	 cont4.fillStyle="rgba(0,255,0, 0.8)" ;
	 cont4.arc(175,225,25,0,Math.PI*2,true);
	 cont4.stroke();
	 cont4.fill();

	 

	var cont3=canvas.getContext("2d");
	  cont3.fillStyle="rgba(0,255,100, 1)" ;

	 cont3.beginPath();
	 cont3.fillStyle="rgba(0,255,100, 1)" ;

	 cont3.moveTo(225,100); 
	 cont3.lineTo(225,475);
	 cont3.lineTo(400,475);
	 cont3.lineTo(225,100);
	// cont3.closePath();
	 cont3.fill();




	 	var cont4=canvas.getContext("2d");
	  cont4.fillStyle="rgba(0,255,0, 0.8)" ;

	 cont4.beginPath();
	 cont4.fillStyle="rgba(0,255,0, 0.8)" ;
	 cont4.arc(300,300,200,0,Math.PI*2,true);
	 cont4.stroke();
	 

	 	var cont4=canvas.getContext("2d");
	  cont4.fillStyle="rgba(0,255,0, 0.8)" ;

	 cont4.beginPath();
	 cont4.fillStyle="rgba(0,255,0, 0.8)" ;
	 cont4.arc(250,250,20,0,Math.PI*2,true);
	 cont4.stroke();


		 	var cont4=canvas.getContext("2d");
	  cont4.fillStyle="rgba(0,255,0, 0.8)" ;

	 cont4.beginPath();
	 cont4.fillStyle="rgba(0,255,0, 0.8)" ;
	 cont4.arc(350,250,20,0,Math.PI*2,false);
	 cont4.stroke();


	 		 	var cont4=canvas.getContext("2d");
	  cont4.fillStyle="rgba(0,255,0, 0.8)" ;

	 cont4.beginPath();
	 cont4.fillStyle="rgba(0,255,0, 0.8)" ;
	 cont4.arc(300,300,150,0,Math.PI,false);
	 cont4.stroke();


*/



</script>



</body>
 
 </html>






       
