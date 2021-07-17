@extends('folder.layout')
@section('cnx')

  <style type="text/css"> 
  .container{text-align: left;}

#ne{
    color: white;
    font-size:1em;
}
label{
    color: white;
    font-size:1em;
}
table {
    background-color: #861d70;
    border-color: #440a37;
}
#loo {
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

}

#loo:hover {opacity: 1}

</style>


<?php  
session_start();

if(isset($_SESSION["message"])) {
$message=$_SESSION["message"];}
if(isset($message)){

    echo '<label class="text-danger">'.$message.'</label>';



}



























 if($admin=='group'){  


?>







    <form action="{{route('d',$admin) }}" method="get" >



        
    <label for="">Num :</label>
    <input type="text" name="num" id="num">
    <br/>

  

    <label for="metier">Niveau :</label>



	<select id="niveau" name="niveau">
	  <option value="1CP">1CP</option>
	  <option value="2CP">2CP</option>
	  <option value="3SC">1SC</option>
	  <option value="2SC_siw">2SC_siw</option>
	  <option value="2SC_isi">2SC_isi</option>
	  <option value="3SC_siw">3SC_siw</option>
	  <option value="3SC_isi">3SC_isi</option>
	</select>
    <br/>
 




    <input type="submit" name="Login" value="Add">
    
    
 
    
    
    
    </form>

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
<br/>
<br/>
<br/>


    















<table class="table table-hover"> 
                <thead > 
                    <tr> 
                        <th>Num</th> 
                        <th>Niveau</th> 
                    </tr> 
                </thead> 
  
                <tbody> 






    <?php  



    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select * from groupe " );
    $result->execute();

  


    while( $i = $result->fetch(PDO::FETCH_ASSOC) ) { ?> 






    <tr> 
        <td> 
            <?php echo $i['num']; ?> 
        </td> 
        <td> 
            <?php echo $i['niveau']; ?>
        </td> 
       


        <td> </br>
            <form action="{{route('e',$admin)}} " method="get" ><input type=hidden name=delete_id value="<?php echo $i["id_g"]?>" ><input type="submit" name="delete" value="X"> </form>
             

        </td> 
        <td> </br>
         <form action="{{route('f',$admin)}} " method="get" ><input type=hidden name=edit_id value="<?php echo $i["id_g"]?>"  ><input type="submit" name="edit" value="edit"> </form>
             
        </td>
  </tr> 


<?php }  ?>

    </tbody> 
</table> 























      




<?php   }elseif($admin=='module') {   ?>












    <form action="{{route('d',$admin) }}" method="get" >



        
    <label for="" id="ne">Name :</label>
    <input type="text" name="name_m" id="name_m">
    <br/>

  


 




    <input type="submit" name="Login" value="Add">
    
    
 
    
    
    
    </form>

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
<br/>
<br/>
<br/>


    















<table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>Name</th> 
                       
                    </tr> 
                </thead> 
  
                <tbody> 






    <?php  



    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select * from module " );
    $result->execute();

  


    while( $i = $result->fetch(PDO::FETCH_ASSOC) ) { ?> 






    <tr> 
        <td> 
            <?php echo $i['name_m']; ?> 
        </td> 
 
       


        <td> </br>
            <form action="{{route('e',$admin)}} " method="get" ><input type=hidden name=delete_id value="<?php echo $i["id_m"]?>" ><input type="submit" name="delete" value="X"> </form>
             

        </td> 
        <td> </br>
         <form action="{{route('f',$admin)}} " method="get" ><input type=hidden name=edit_id value="<?php echo $i["id_m"]?>"  ><input type="submit" name="edit" value="edit"> </form>
             
        </td>
  </tr> 


<?php }  ?>

    </tbody> 
</table> 

























    <?php }  


    elseif ($admin == 'enseignant') {
    

?>
    




    
<form action="{{route('d',$admin) }}" method="get" >



        
    <label for="">Nom :</label>
    <input type="text" name="name_e" id="name_e">
    <br/>

<br/>
<label for="">Heures :</label>
<input type="text" name="maxheure" id="maxheure">
<br/>

    <br/>

    <input type="submit" name="Login" value="Add">
    
    
    
    </form>

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
<br/>
<br/>
<br/>






<table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>ID</th> 
                        <th>NOM________________</th> 
                        <th>HEURES________</th> 
                    </tr> 
                </thead> 
  
                <tbody> 






    <?php  



    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select * from enseignant " );
    
    $result->execute();


    while( $i = $result->fetch(PDO::FETCH_ASSOC) ) { ?> 




    <tr> 
        <td> 
            <?php echo $i['id_e']; ?> 
        </td> 
        <td> 
            <?php echo $i['name_e']; ?>
        </td>          
        <td> 
            <?php echo $i['maxheure']; ?>
        </td>


        <td> </br>
            <form action="{{route('e',$admin)}} " method="get" ><input type=hidden name=delete_id value="<?php echo $i["id_e"]?>" ><input type="submit" name="delete" value="X"> </form>
            
        </td> 
        <td> </br>
         <form action="{{route('f',$admin)}} " method="get" ><input type=hidden name=edit_id value="<?php echo $i["id_e"]?>"  ><input type="submit" name="edit" value="edit"> </form>
             
        </td>
  </tr> 


<?php } ?>

    </tbody> 
</table> 
















<?php }elseif($admin=='salle') {
     ?>




<form action="{{route('d',$admin) }}" method="get" >



        
    <label for="">Nom :</label>
    <input type="text" name="name_s" id="name_s">
    <br/>   
    <input type="submit" name="Login" value="Add">
    </form>

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
<br/>
<br/>
<br/>






<table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>ID</th> 
                        <th>NOM________________</th> 
                    </tr> 
                </thead> 
                <tbody> 






    <?php  



    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select * from salle" );
    
    $result->execute();


    while( $i = $result->fetch(PDO::FETCH_ASSOC) ) { ?> 




    <tr> 
        <td> 
            <?php echo $i['id_s']; ?> 
        </td> 
        <td> 
            <?php echo $i['name_s']; ?>
        </td>          

        <td> </br>
            <form action="{{route('e',$admin)}} " method="get" ><input type=hidden name=delete_id value="<?php echo $i["id_s"]?>" ><input type="submit" name="delete" value="X"> </form>
            
        </td> 
        <td> </br>
         <form action="{{route('f',$admin)}} " method="get" ><input type=hidden name=edit_id value="<?php echo $i["id_s"]?>"  ><input type="submit" name="edit" value="edit"> </form>

        </td>
  </tr> 


<?php } ?>

    </tbody> 
</table> 
















<?php } ?>


























































































































































</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>





<footer>


    
<?php

$message="";
    $_SESSION["message"]="";

if(isset($_SESSION["username"])){
    echo '';


    ?>
  
    <br/> <button><a class="n" href="<?php echo route('l',$admin)?>" id="loo">LogOut</a></button>




    <?php
}else{
redirect()->route('a',$admin) ;

}

    $message="";
    $_SESSION["message"]="";


?>

</footer>
    </body>





@endsection