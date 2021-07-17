<!DOCTYPE html>
<html lang="en"><head>

  <meta charset="UTF-8">
  



  <title>Home</title>
  



  
  
  
<style>
@import url('https://fonts.googleapis.com/css?family=Arimo:400,700&display=swap');
body{
  /* background:#b3b4a8; */
  background-color: red;
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
  background: green;
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
<link href="{{ asset('css/a.css') }}" rel="stylesheet"> 
<!--<script src="js/file.jss" />  -->

    <title>Document</title>
</head>

<body><header></header>
<style>
  header{
  background-color: red;
  
}
</style>


  
  <div class="container" >
 @yield('cnx')
 
 </html>