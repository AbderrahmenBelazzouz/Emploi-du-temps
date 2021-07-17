@extends('folder.layout')
@section('cnx')




	<?php
session_start();
if(isset($_SESSION["username"])){
    echo '';
    // echo 'Votre login est '.$_SESSION['username'].'';


    ?>
    <h3> La Manipulation Des Informations : </h3>
    <!--<br/> <a class="n" href="{{ route('h',$admin) }}">search employe</a> -->
    <br/> <button><a class="n" href="{{ route('c',$admin) }}" id="aude" >Add Update Delete</button>
    <!--<br/> <a class="n" href="{{ route('j',$admin) }}">service</a>  -->
    <br/> <button><a class="n" href="<?php echo route('l',$admin)?>" id="logout">LogOut</a></button>
    <?php
}

 
else{
redirect()->route('a',$admin) ;

}
    $message="";
    $_SESSION["message"]="";

?>

</div>
<style>
    #aude {
  background-color: #b4aee8;
  /* border: none; */
  color: black;
  /* padding: 1px 32px; */
  /* text-align: center; */
  /* font-size: 16px; */
  /* margin: 4px 2px; */
  /* opacity: 0.6; */
  /* transition: 0.3s; */
  /* display: inline-block; */
  /* text-decoration: none; */

}

#aude:hover {opacity: 1}

#logout {
  background-color: #b4aee8;
  /* border: none; */
  color: black;
  padding: 1px 35px;
  /* text-align: center; */
  /* font-size: 1px; */
  /* margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none; */

}

#logout:hover {opacity: 1}

/* h3{
    color:#000;
  text-align:center;
  font-size:2em;
  color: white;
} */
h3 {
    background: linear-gradient(to right, white, #000);
    text-align:center;
  font-size:2em;
 -webkit-background-clip: text;
 -webkit-text-fill-color: transparent;
}

</style>
    </body>
</html>

@endsection