@extends('folder.layer')
@section('cnx')






    <?php 

    $ks=0;


function search($id, $array) {
   foreach ($array as $key => $val) {
       if ($val['simpler'] === $id) {
           return $key;
       }
   }
   return null;
}








session_start();

    $id_s="";
    $req=$data['req'];
    @$niveau= $req->niveau;

    @$seance="";
    @$seance=$req->seance_id;

    $hidden="";

   // $admin=$data['admin'];
 
    

    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);


if(isset($req->X)){

    $X=$req->X;

          @$debut=explode("-" , explode(":" , $X)[1])[0] ;
         @$fin=explode("-" , explode(":" , $X)[1])[1] ;
        @$jour=explode(":" , $X)[0];

        $result = $pdo->prepare("delete from seance where debut=? and fin=? and jour=? and niveau=?");
        $result->execute(array($debut,$fin,$jour , $niveau));

}




if(isset($req->adddd)){
    echo "" ;
    if(empty($req->id_g) || empty($req->id_e) || empty($req->id_m) || empty($req->id_s) || empty($req->type)   ||  $req->id_g=='groupe' || $req->id_m=='module' || $req->id_e=='enseignant' || $req->id_s=='salle'  || $req->type=='type'  )
    
    {
        echo "" ;
        $message='<label>All fields are required</label>';
        $_SESSION["message"]=$message ;
       //  redirect()->route('table') ;
    }else {
        echo " " ;

        @$seance=$req->seance_id;


         @$id_g=$req->id_g;
         @$id_m=$req->id_m;
         @$id_e=$req->id_e;
         @$id_s=$req->id_s;
        

        @$type=$req->type;
        

         @$debut=explode("-" , explode(":" , $seance)[1])[0] ;
         @$fin=explode("-" , explode(":" , $seance)[1])[1] ;

         @$niveau;

        
        @$jour=explode(":" , $seance)[0];




        $result = $pdo->prepare("insert into seance (id_s, id_g, id_e, id_m, debut , fin ,niveau, type , jour) VALUES (?,?,?,?,   ? , ? , ?,?,?)");
        $result->execute(array($id_s , $id_g, $id_e , $id_m, $debut, $fin ,$niveau , $type , $jour));

/*

        $result = $pdo->prepare("select e.id from employe e where e.nom=? and e.prenom=? ");
        $result->execute(array($name , $prenom));
        $row=$result->fetch(PDO::FETCH_ASSOC);


        $idd=$row['id'] ;
        $id_m=$_POST["metier"];
        $id_s=$_POST["service"];
        $temp=$_POST["temps"];

        $result = $pdo->prepare("insert into exerce (id_employe, id_metier, id_service, temps) VALUES (?,?, ?,?)");
        $result->execute(array($idd , $id_m, $id_s, $temp));

            echo $idd."  ".$id_m  ."   ".$id_s."   ".$temp  ;
*/











         $count=$result->rowCount();

            if($count>0){
                $message='<label>DATA INSERT SUCCESS !!</label>';
                header("location: add.php");

                $hidden="hidden";
                
            }
            else {
                $message='<label>failure !!</label>';
                $hidden="";
            }

            // echo  $req->adddd;
            // echo  $req->X;

            $_SESSION["message"]=$message ;

            
    }
}




  ?>


<h1>L'emploi du Temps : </h1>


<br/> <button><a class="n" href="{{ route('k','enseignant') }}" id="ens">Enseignant</a></button>
    <button><a class="n" href="{{ route('k','module') }}" id="mod">Module</a></button>
    <button><a class="n" href="{{ route('k' , 'group') }}" id="gro">Group</a></button>
    <button><a class="n" href="{{ route('k' , 'salle') }}" id="sal">Salle</a></button>


<br><br>


















<table id="tabll">
<?php



    








    

$z=array(array('simpler' => "null" ,'num' => "0" ,'name_s' => "null" , 'name_m' => "null" , 'name_e' => "null" , 'type' =>"null"));


    


    $id_s="";
    $req=$data['req'];
    @$niveau= $req->niveau;

    @$seance="";
    @$seance=$req->seance_id;

    $hidden="";

   // $admin=$data['admin'];
 echo ' ';

    

    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);



    $result = $pdo->prepare("select * from seance sc natural join enseignant e natural join groupe g natural join salle s natural join module m where sc.id_s=s.id_s and sc.id_g=g.id_g and sc.id_e=e.id_e and sc.id_m=m.id_m  and sc.niveau=?   " );
    $result->execute(array($niveau  ));




    while( $mmm = $result->fetch(PDO::FETCH_ASSOC) ) {


        if($mmm['debut']==8 ){
                
                $ddd=$mmm['jour'].":0".$mmm['debut']."-0".$mmm['fin'];
                }elseif($mmm['debut']==9)
                {$ddd=$mmm['jour'].":0".$mmm['debut']."-".$mmm['fin'];}else{

$ddd=$mmm['jour'].":".$mmm['debut']."-".$mmm['fin'];


        }

$mmm['simpler'] = $ddd;
//array_push( $mmm , 'simpler' => $ddd);
array_push($z, $mmm );




}
/*
$ks=2;
print_r($z[$ks]) ;
*/























    $jour = array(null, "Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi");
  //  $rdv["Dimanche"]["16:30"] = "Dermatologue";
  //  $rdv["Lundi"]["9"] = "Mémé -_-";
    echo "<tr><th style='width: 90px'>  Heure</th>";
    for($x = 1; $x < 6; $x++)
        echo "<th>".$jour[$x]."</th>";
    echo "</tr>";
    for($j = 8; $j < 17; $j +=1) {
        echo "<tr style='height: 60px ; width: 60px'>";
        for($i = 0; $i < 5; $i++) {
            if($i == 0) {

                if($j==8 ){
                $temp= 1+$j;
                $heure = "0".$j."-"."0".$temp;
                }elseif($j==9)
                {$temp= 1+$j;
                $heure = "0".$j."-".$temp;}else{


                $temp= 1+$j;
                $heure = $j."-".$temp;
                    }
                ?>
                <td id="<?php echo $i.':'.$heure ?>"  class="time">{{ $heure }}</td>

                <?php

                

            }
            
            $ks=0;
                
                ?>
               <td id="<?php echo ($i+1).':'.$heure ?> "  

                <?php if($ks=search(($i+1).':'.$heure, $z) ){
                if (($z[($ks) ? ($ks) : 0 ])['name_m']=="SIAD"){ echo 'style="background-color:#E5511F"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="Algebre"){ echo 'style="background-color:#F686AE"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="Reseaux"){ echo 'style="background-color:#F2BD2C"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="Reseaux Av"){ echo 'style="background-color:#C7BBED"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="BDDAv"){ echo 'style="background-color: #7DAE7A "' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="IHM"){ echo 'style="background-color:#F2F2F0"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="CAV"){ echo 'style="background-color:#26001b"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="MCA"){ echo 'style="background-color:#810034"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="WEB1"){ echo 'style="background-color:#ff005c"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="WEB2"){ echo 'style="background-color:#fff600"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="MOBILE"){ echo 'style="background-color:#dddddd"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="SIA"){ echo 'style="background-color:#e9896a"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="Algo"){ echo 'style="background-color:#387c6d"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="Analyse"){ echo 'style="background-color:#343f56"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="IGL"){ echo 'style="background-color:#bfcba8"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="THL"){ echo 'style="background-color:#440a67"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="IOT"){ echo 'style="background-color:#56776c"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="Robotique"){ echo 'style="background-color:#464f41"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="SIG"){ echo 'style="background-color:#93329e"' ;}
                elseif(($z[($ks) ? ($ks) : 0 ])['name_m']=="Cloud"){ echo 'style="background-color:#b4aee8"' ;}



                ;}else{} ?>    style="width: 70px;     border-collapse: collapse;
    box-shadow: 0 0 80px rgba(0, 0, 0, 0.15); " >




    <form action="{{ route('table' ,$niveau) }}"   id="<?php echo ($i+1).':'.$heure.'f' ?>"      method="get" >    


      <p  style="height: 3px" <?php if($ks=search(($i+1).':'.$heure, $z) ){ echo '';}else{echo 'hidden' ;} ?>  ><?php  echo 'G'.($z[($ks) ? ($ks) : 0 ])['num'] ?> </p>
      <p  style="height: 3px" <?php if($ks=search(($i+1).':'.$heure, $z) ){ echo '';}else{echo 'hidden' ;} ?>  ><?php  echo ($z[($ks) ? ($ks) : 0 ])['name_m'] ?> </p>
      <p  style="height: 3px" <?php if($ks=search(($i+1).':'.$heure, $z) ){ echo '';}else{echo 'hidden' ;} ?>  ><?php  echo 'Prof.'.($z[($ks) ? ($ks) : 0 ])['name_e'] ?> </p>
      <p  style="height: 3px" <?php if($ks=search(($i+1).':'.$heure, $z) ){ echo '';}else{echo 'hidden' ;} ?>  ><?php  echo 'Salle '.($z[($ks) ? ($ks) : 0 ])['name_s'] ?> </p>
      <p  style="height: 3px" <?php if($ks=search(($i+1).':'.$heure, $z) ){ echo '';}else{echo 'hidden' ;} ?>  ><?php  echo ($z[($ks) ? ($ks) : 0 ])['type'] ?> </p>
      <input type="hidden" name="X" value="<?php  echo ($i+1).':'.$heure ?>"  style="background-color: red" <?php if($ks=search(($i+1).':'.$heure, $z) ){ echo '';}else{echo 'hidden' ;} ?> >

      <input type="submit" name="XX" value="X"  style="background-color: red" <?php if($ks=search(($i+1).':'.$heure, $z) ){ echo '';}else{echo 'hidden' ;} ?> >


     
 
      


    <select id="id_g" name="id_g" placeholder="group"   <?php if($ks=search(($i+1).':'.$heure, $z) ) { echo 'hidden';}else{echo '' ;} ?>>




      <option  value="0">'groupe'</option>

<?php


    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select * from groupe where niveau=?  " );
    $result->execute(array($niveau));



    while( $mm = $result->fetch(PDO::FETCH_ASSOC) ) {  

       // if($i['niveau'] == $niveau)

?>
      <option value="<?php echo $mm['id_g'] ?> "><?php echo $mm['num'].'  '.$mm['niveau'] ?>
      </option>

      <?php
}
?>
     
    </select>








   <select id="id_m" name="id_m" placeholder="module"     <?php if($ks=search(($i+1).':'.$heure, $z) ) { echo 'hidden';}else{echo '' ;} ?>>




      <option  value="0">'module'</option>

<?php


    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select * from module   " );
    $result->execute();



    while( $me = $result->fetch(PDO::FETCH_ASSOC) ) {  

       // if($i['niveau'] == $niveau)

?>
      <option value="<?php echo $me['id_m'] ?> "><?php echo $me['name_m'] ?>
      </option>

      <?php
}
?>
     
    </select>














   <select id="id_e" name="id_e" placeholder="enseignant"          <?php if($ks=search(($i+1).':'.$heure, $z) ) { echo 'hidden';}else{echo '' ;} ?>>




      <option  value="0">'enseignant'</option>

<?php


    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select * from enseignant   " );
    $result->execute();



    while( $md = $result->fetch(PDO::FETCH_ASSOC) ) {  

       // if($i['niveau'] == $niveau)

?>
      <option value="<?php echo $md['id_e'] ?> "><?php echo $md['name_e'] ?>
      </option>

      <?php
}
?>
     
    </select>


















   <select id="id_s" name="id_s" placeholder="salle"           <?php if($ks=search(($i+1).':'.$heure, $z) ) { echo 'hidden';}else{echo '' ;} ?>>




      <option  value="0">'salle'</option>

<?php


    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select * from salle   " );
    $result->execute();



    while( $mf = $result->fetch(PDO::FETCH_ASSOC) ) {  

       // if($i['niveau'] == $niveau)

?>
      <option value="<?php echo $mf['id_s'] ?> "><?php echo $mf['name_s'] ?>
      </option>

      <?php
}
?>
     
    </select>




        <select id="type" name="type"              <?php if($ks=search(($i+1).':'.$heure, $z) ) { echo 'hidden';}else{echo '' ;} ?> >
            <option  value="0">'type'</option>
      <option  value="Cour">Cour</option>
      <option value="TD">TD</option>
      <option  value="TP">TP</option>

    
     
    </select>



















<input type=hidden name=seance_id id=seance_id value="<?php echo ($i+1).':'.$heure ?>" >
<input type=hidden name=niveau id=niveau value="<?php echo $niveau ?>" >
</br>
    <input type="submit" name="adddd" value="add"       <?php if($ks=search(($i+1).':'.$heure, $z) ) { echo 'hidden';}else{echo '' ;} ?> >
    
    
    
    </form>


<!--
<script >
    const myform = document.getElementById(($i+1).':'.$heure.'f')

        myform.addEventListener("submit" ,(e) => {


                              const request = new XMLHttpRequest();

                              request.open(myform.method , myform.action );

                              request.send()




            e.preventDefault();
        })


</script>
-->



               </td>



                <?php
            
            
        }
        echo "</tr>";
    }












?>
</table>

{{-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
$(document).ready(function() {
    $('#example').DataTable( {
        rowReorder: true
    } );
} );

</script> --}}

<style>
    .time {
    border-collapse: collapse;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
}
</style>





















	<?php

if(isset($_SESSION["username"])){
    echo '';






    ?>

    {{-- <br/> <button><a class="n" href="{{ route('k','enseignant') }}" id="ens">Enseignant</a></button>
    <button><a class="n" href="{{ route('k','module') }}" id="mod">Module</a></button>
    <button><a class="n" href="{{ route('k' , 'group') }}" id="gro">Group</a></button>
    <button><a class="n" href="{{ route('k' , 'salle') }}" id="sal">Salle</a></button> --}}
    
    <?php
}

 
else{
redirect()->route('a') ;

}
    $message="";
    $_SESSION["message"]="";

?>
<style>
    
    #ens {
  background-color: #b4aee8;
  border: none;
  color: black;
  padding: 1px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  /* cursor: pointer; */
}

#ens:hover {opacity: 1}



#mod {
  background-color: #b4aee8;
  border: none;
  color: black;
  padding: 1px 46px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  /* cursor: pointer; */
}

#mod:hover {opacity: 1}


#gro {
  background-color: #b4aee8;
  border: none;
  color: black;
  padding: 1px 50px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  /* cursor: pointer; */
}

#gro:hover {opacity: 1}



#sal {
  background-color: #b4aee8;
  border: none;
  color: black;
  padding: 1px 54px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  /* cursor: pointer; */
}

#sal:hover {opacity: 1}




#empl {
  background-color: #b4aee8;
  border: none;
  color: black;
  padding: 1px 34px;

  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  /* cursor: pointer; */
}

#empl:hover {opacity: 1}

h1{
    font-family: "Comic Sans MS", "Trebuchet MS", Times, "Times New Roman", serif;
           text-align: center; /* Tous les textes des cellules seront centrés*/
           padding: 5px;

      }


</style>

</div>

    </body>


@endsection