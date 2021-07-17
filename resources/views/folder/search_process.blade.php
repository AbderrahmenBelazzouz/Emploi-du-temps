<?php

session_start();

@$name = $_POST["name"];
@$prenom = $_POST["prenom"];

$_SESSION['nom'] = $name;
$_SESSION['prenom'] = $prenom;
 


$host="localhost";

$username="root";
$password="";

$database="registration";

$pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);





if(isset($_POST["Login"])){
    echo "login" ;
    if(empty($_POST["name"]) || empty($_POST["prenom"])   )
    
    {
        echo " faukty entery" ;
        $message='<label>All fields are required</label>';
        $_SESSION["message"]=$message ;
        header("location: search.php");
    }else {
        echo " perfect entery" ;




        $result = $pdo->prepare("select e.id, e.nom, .e.prenom, e.date_naissance, e.date_arrivee , m.nom as metier, s.nom as service from employe e , metier m ,service s ,exerce ee where e.id=ee.id_employe and ee.id_metier=m.id and ee.id_service=s.id  and e.nom=? and e.prenom=? order by e.id");
		$result->execute(array($name , $prenom));

		$rows = $result->fetchAll();


        $count=$result->rowCount();






            if($count>0){
                $_SESSION["search"]=$rows;
               
                $message='<label>Valid Data !!</label>';
                $_SESSION["message"]=$message ;
                header("location: search.php");
            }
            else {
                $message='<label>Wrong Data</label>';
                $_SESSION["message"]=$message ;
                 header("location: search.php");
            }



            
    }
}

?>




