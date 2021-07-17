@extends('folder.layout')
@section('cnx')
    <?php  
  session_start();
$message=$_SESSION["message"];
if(isset($message)){

    echo '<label class="text-danger">'.$message.'</label>';
}
    ?>
    <form action="{{route('i',$admin) }}" method="get" >



        
    <label for="">Nom</label>
    <input type="text" name="name" id="name">
    <br/>

    <label for="">Prenom</label>
    <input type="text" name="prenom" id="prenom">
    <br/>

    <input type="submit" name="Login" value="search">
    
    
 
    
    
    
    </form>
    
    




    <?php  

    $row="";
    
    if (isset($_SESSION["search"])){
        $row=$_SESSION["search"];
        }
  

    if(isset($row)){

        print_r($row);
          
    }

    $_SESSION["search"]="";

    $message="";
    $_SESSION["message"]="";
    ?>

</div>












<br/>
<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>
<br/>





















<table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>ID</th> 
                        <th>NOM________________</th> 
                        <th>PRENOM________</th> 
                        <th>BIRTH________</th> 
                        <th>_________ARRIVE________</th> 
                        <th>_________metier________</th> 
                        <th>service_______</th> 
                        <th>temps</th> 
                    </tr> 
                </thead> 
  
                <tbody> 






    <?php  



    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select e.id, e.nom, .e.prenom, e.date_naissance, e.date_arrivee , m.nom as metier, s.nom as service , ee.temps as temps from employe e , metier m ,service s ,exerce ee where e.id=ee.id_employe and ee.id_metier=m.id and ee.id_service=s.id  order by e.id " );
    $result->execute();

  


    while( $i = $result->fetch(PDO::FETCH_ASSOC) ) { ?> 






    <tr> 
        <td> 
            <?php echo $i['id']; ?> 
        </td> 
        <td> 
            <?php echo $i['nom']; ?>
        </td> 
        <td> 
            <?php echo $i['prenom']; ?> 
        </td>         
        <td> 
            <?php echo $i['date_naissance']; ?>
        </td> 

        <td> 
            <?php echo $i['date_arrivee']; ?> 
        </td> 


        <td> 
            <?php echo $i['metier']; ?> 
        </td> 

        <td> 
            <?php echo $i['service']; ?> 
        </td> 
        <td> 
            <?php echo $i['temps']; ?> 
        </td> 
  </tr> 


<?php } ?>

    </tbody> 
</table> 
























<br/>
<br/>
<br/>


<br/>
<br/>
<br/>










<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>
<br/>





<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>
<br/>


<br/>
<br/>
<br/>













<footer>
    
<?php

if(isset($_SESSION["username"])){
   



  



    ?>
    <br/> <a class="n" href="{{ route('h',$admin) }}">search employe</a>
    <br/> <a class="n" href="{{ route('c',$admin) }}">add employe</a>
    <br/> <a class="n" href="{{ route('j',$admin) }}">service</a>
    <br/> <a class="n" href="<?php echo route('l',$admin)?>">LogOut</a>

    <?php
}
else{
redirect()->route('a',$admin) ;

}

?>

</footer>
    
    </body>
@endsection



