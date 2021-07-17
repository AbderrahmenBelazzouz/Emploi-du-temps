@extends('folder.layout')
@section('cnx')

  <style type="text/css"> .container{text-align: left;}</style>
    
<?php
$admin=$data['admin'];
$req=$data['req'];
?>

<?php

$req=$req;

$var='selected="selected"';
session_start();
$message="";
if(isset($_SESSION["message"])) {
$message=$_SESSION["message"];}


echo $message;



@$id= $req->edit_id; 



$host="localhost";

$username="root";
$password="";

$database="registration";

$pdo=new \PDO("mysql:host=$host;dbname=$database",$username,$password);





































 if($admin=='groupe'){  




if(isset($req->edit)){
    echo "edit" ;
    if(empty($req->edit_id)   )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING EDIT</label>';
        $_SESSION["message"]=$message ;
        header("location: /g");
    }else {
        echo " perfect entery" ;


        

        $result = $pdo->prepare("select * from groupe where id_g=? ");
        $result->execute(array($id));

        $i = $result->fetch();


        $count=$result->rowCount();


            if($count>0){

                $v1="";
                $v2="";
                $v3="";
                $v4="";
                $v5="";
                $v6="";
                $v7="";

                  

switch($i['niveau']) {
                   case '1CP':       $v1=$var;
                   break;
                   case '2CP':       $v2=$var;
                   break;
                   case '1SC':     $v3=$var ;
                   break;
                   case '2SC_siw':     $v4=$var ;
                   break;
                   case '2SC_isi':     $v5=$var ;
                   break;
                   case '3SC_siw':     $v6=$var ;
                   break;
                   case '3SC_isi':     $v7=$var ;
                   break;


default:   echo 'BEAAAAACH' ;
                   break;
} 






?>





                
 <form action="{{route('g',$admin) }}" method="get" >



        


<label for="">Num</label>
    <input type="text" name="num" id="num" value="<?php echo  $i['num']?>">
    <br/>
  

    <label for="niveau">Niveau     :</label>



    <select id="niveau" name="niveau">
      <option <?php echo $v1 ?> value="1">1CP</option>
      <option <?php echo $v2 ?> value="2">2CP</option>
      <option <?php echo $v3 ?> value="3">1SC</option>
      <option <?php echo $v4 ?> value="4">2SC_siw</option>
      <option <?php echo $v5 ?> value="5">2SC_isi</option>
      <option <?php echo $v6 ?> value="6">3SC_siw</option>
      <option <?php echo $v7 ?> value="7">3SC_isi</option>

      
     
    </select>



    <br/>




    <input type="hidden" name="update_id" value="<?php echo $i["id_g"] ?>" >


    <input type="submit" name="edit" value="edit">
    
    
 
    
    
    
    </form>









<?php

            }
            else {
                $message='<label>COULDN NOT EDIT</label>';
                $_SESSION["message"]=$message ;
                 return redirect()->route('c',$admin) ;
            }



            
    }
}

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





<table class="table table-hover"> 
                <thead> 
                    <tr>
                    <th>ID</th>  
                        <th>Num__</th> 
                        <th>_________Niveau_______</th> 


                    </tr> 
                </thead> 
  
                <tbody> 






    <?php  

    @$id= $req->edit_id; 

    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new \PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select * from groupe where id_g=? order by id_g");
    $result->execute(array($id));
  


    while( $i = $result->fetch(PDO::FETCH_ASSOC) ) { ?> 






    <tr> 
      <td> 
            <?php echo $i['id_g']; ?> 
        </td> 
        <td> 
            <?php echo $i['num']; ?> 
        </td> 
        <td> 
            <?php echo $i['niveau']; ?>
        </td> 

  </tr> 


<?php } ?>

    </tbody> 
</table> 














































<?php }elseif($admin=='module'){  




if(isset($req->edit)){
    echo "edit" ;
    if(empty($req->edit_id)   )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING EDIT</label>';
        $_SESSION["message"]=$message ;
        header("location: /g");
    }else {
        echo " perfect entery" ;




        $result = $pdo->prepare("select * from module where id_m=? order by id_m");
        $result->execute(array($id));

        $i = $result->fetch();
      
        $count=$result->rowCount();






?>





                
 <form action="{{route('g',$admin) }}" method="get" >



        
    <label for="">Name</label>
    <input type="text" name="name_m" id="name_m" value="<?php echo  $i['name_m']?>">
    <br/>






    <input type="hidden" name="update_id" value="<?php echo $i["id_m"] ?>" >


    <input type="submit" name="edit" value="edit">
    
    
 
    
    
    
    </form>









<?php

            if($count==0) {
                $message='<label>COULDN NOT EDIT</label>';
                $_SESSION["message"]=$message ;
                 return redirect()->route('c',$admin) ;
            }



            
    }
}

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





<table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>ID</th> 
                        <th>_______Name__________</th> 
 

                    </tr> 
                </thead> 
  
                <tbody> 






    <?php  

    @$id= $req->edit_id; 

    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new \PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select * from module where id_m=? order by id_m");
    $result->execute(array($id));
  


    while( $i = $result->fetch(PDO::FETCH_ASSOC) ) { ?> 






    <tr> 
        <td> 
            <?php echo $i['id_m']; ?> 
        </td> 
        <td> 
            <?php echo $i['name_m']; ?>
        </td> 
       

  </tr> 


<?php } ?>

    </tbody> 
</table> 




<?php    }elseif ($admin=='enseignant') {


if(isset($req->edit)){
    echo "edit" ;
    if(empty($req->edit_id)   )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING EDIT</label>';
        $_SESSION["message"]=$message ;
        header("location: /g");
    }else {
        echo " perfect entery" ;




        $result = $pdo->prepare("select * from enseignant where id_e=?");
        $result->execute(array($id));

        $i = $result->fetch();
        echo $id;

        $count=$result->rowCount();









?>


                
 <form action="{{route('g',$admin) }}" method="get" >



        
    <label for="">Name</label>
    <input type="text" name="name_e" id="name_e" value="<?php echo  $i['name_e']?>">
    <br/>

    <label for="">Prenom</label>
    <input type="text" name="maxheure" id="maxheure"  value="<?php echo $i['maxheure']?>">
    <br/>
 <br/>



    <input type="hidden" name="update_id" value="<?php echo $i["id_e"] ?>" >


    <input type="submit" name="edit" value="edit">
    
    
 
    
    
    
    </form>
<?php

            
           if ($count==0) {
               
           
                $message='<label>COULDN NOT EDIT</label>';
                $_SESSION["message"]=$message ;
                 return redirect()->route('c',$admin) ;
            }



            
    }
}

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





<table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>ID</th> 
                        <th>NOM________________</th> 
                        <th>MAX HEURES________</th> 
                    </tr> 
                </thead> 
  
                <tbody> 






    <?php  

    @$id= $req->edit_id; 

    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new \PDO("mysql:host=$host;dbname=$database",$username,$password);
    $result = $pdo->prepare("select * from enseignant where id_e=? ");
    $result->execute(array($id));
  


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
  </tr> 


<?php } ?>

    </tbody> 
</table> 



<?php } elseif ($admin=='salle') {










if(isset($req->edit)){
    echo "edit" ;
    if(empty($req->edit_id)   )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING EDIT</label>';
        $_SESSION["message"]=$message ;
        header("location: /g");
    }else {
        echo " perfect entery" ;




        $result = $pdo->prepare("select * from salle where id_s=?");
        $result->execute(array($id));

        $i = $result->fetch();
        echo $id;

        $count=$result->rowCount();









?>


                
 <form action="{{route('g',$admin) }}" method="get" >



        
    <label for="">Name</label>
    <input type="text" name="name_s" id="name_s" value="<?php echo  $i['name_s']?>">
 <br/>



    <input type="hidden" name="update_id" value="<?php echo $i["id_s"] ?>" >


    <input type="submit" name="edit" value="edit">
    
    
 
    
    
    
    </form>
<?php

            
           if ($count==0) {
               
           
                $message='<label>COULDN NOT EDIT</label>';
                $_SESSION["message"]=$message ;
                 return redirect()->route('c',$admin) ;
            }



            
    }
}

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





<table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>ID</th> 
                        <th>NOM DE SALLE________________</th> 
                    </tr> 
                </thead> 
  
                <tbody> 






    <?php  

    @$id= $req->edit_id; 

    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new \PDO("mysql:host=$host;dbname=$database",$username,$password);
    $result = $pdo->prepare("select * from salle where id_s=? ");
    $result->execute(array($id));
  


    while( $i = $result->fetch(PDO::FETCH_ASSOC) ) { ?> 






    <tr> 
        <td> 
            <?php echo $i['id_s']; ?> 
        </td> 
        <td> 
            <?php echo $i['name_s']; ?>
        </td>         
  </tr> 


<?php }} ?>

    </tbody> 
</table>  





























































































































































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

if(isset($_SESSION["username"])){
    echo 'Votre login est '.$_SESSION['username'].'';





    ?>
    <br/> <button><a class="n" href="{{ route('c',$admin) }}" id="aud">Add Update Delete</a></button>
   
    <br/> <a class="n" href="<?php echo route('l',$admin)?>">LogOut</a>

    <?php
}
else{
redirect()->route('a') ;

}
    $message="";
    $_SESSION["message"]="";

?>

</footer>

<style>


    #aud {
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

#aud:hover {opacity: 1}
</style>


    </body>



@endsection