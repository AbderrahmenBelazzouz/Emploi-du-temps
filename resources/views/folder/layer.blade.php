<!DOCTYPE html>
<html lang="en"><head>

  <meta charset="UTF-8">
  



  <title>Emploi du temps</title>
  



  
  
  
<style>
<style type="text/css">
        caption /* Titre du tableau */
        {
           margin: auto; /* Centre le titre du tableau */
           font-family: Arial, Times, "Times New Roman", serif;
           font-weight: bold;
           font-size: 1.2em;
           color: #009900;
           margin-bottom: 20px; /* Pour éviter que le titre ne soit trop collé au tableau en-dessous */
        }
 
        table /* Le tableau en lui-même */
        {
           margin: auto; /* Centre le tableau */
           /* border: 4px outset green; Bordure du tableau avec effet 3D (outset) */
           border-collapse: collapse; /* Colle les bordures entre elles */
           width:100%;
        }
        th /* Les cellules d'en-tête */
        {
          background-color: #440a67;

           color: white;
           font-size: 1.1em;
           font-family: Arial, "Arial Black", Times, "Times New Roman", serif;
           border:1px solid black;
        }
 
        td /* Les cellules normales */
        {
           border: 1px solid black;
           font-family: "Comic Sans MS", "Trebuchet MS", Times, "Times New Roman", serif;
           text-align: center; /* Tous les textes des cellules seront centrés*/
           /* padding: 5px; Petite marge intérieure aux cellules pour éviter que le texte touche les bordures */
        }
        td.time
        {
            width:5%;
            background-color: #b4aee8;
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
  <div class="container"  style="height: 1300px ; width: 1100px">
 @yield('cnx')
 
 </html>