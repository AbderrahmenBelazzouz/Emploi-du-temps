<?php

session_start();

@$id= NULL ; 

@$name = $_POST["name"];
@$prenom = $_POST["prenom"];
@$birth = $_POST["birth"];
@$arrive = $_POST["arrive"];






$host="localhost";

$username="root";
$password="";

$database="registration";
$message="demo";

$pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);











if(isset($_POST["Login"])){
    echo "login" ;
    if(empty($_POST["name"]) || empty($_POST["prenom"]) || empty($_POST["birth"]) || empty($_POST["arrive"]) || empty($_POST["metier"]) || empty($_POST["service"])    )
    
    {
        echo " faukty entery" ;
        $message='<label>All fields are required</label>';
        $_SESSION["message"]=$message ;
        header("location: add.php");
    }else {
        echo " perfect entery" ;







		$result = $pdo->prepare("insert into employe (id, nom, prenom, date_naissance, date_arrivee) VALUES (NULL,?, ?,?, ?)");
		$result->execute(array($name , $prenom, $birth , $arrive));



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



         $count=$result->rowCount();

            if($count>0){
                $message='<label>DATA INSERT SUCCESS !!</label>';
                header("location: add.php");
                
            }
            else {
                $message='<label>failure !!</label>';
            }


            $_SESSION["message"]=$message ;

            
    }
}


?>


<?php 

if(isset($message)){

    echo '<br/><label class="text-danger">'.$message.'</label>';
}

?>



