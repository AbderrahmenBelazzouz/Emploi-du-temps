

<?php


$var='selected="selected"';
session_start();



@$id= $_POST["update_id"]; 
echo $id."  chicken break" ;
@$name = $_POST["name"];
@$prenom = $_POST["prenom"];
@$birth = $_POST["birth"];
@$arrive = $_POST["arrive"];



$host="localhost";

$username="root";
$password="";

$database="registration";

$pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);





if(isset($_POST["edit"])){
    echo "edit" ;
    if(empty($_POST["update_id"])   )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING EDIT</label>';
        $_SESSION["message"]=$message ;
        header("location: search.php");
    }else {
        echo " perfect entery" ;



        $result = $pdo->prepare("update employe set nom=?, prenom=?, date_naissance=?, date_arrivee=? where id=?");
        $result->execute(array($name , $prenom, $birth , $arrive , $id));


        
        $id_m=$_POST["metier"];
        $id_s=$_POST["service"];
        $temp=$_POST["temps"];

         $result = $pdo->prepare("update exerce set id_metier=?, id_service=?, temps=? where id_employe=?");
        $result->execute(array($id_m, $id_s , $temp , $id));

        $result="";

        $result = $pdo->prepare("select e.id, e.nom, .e.prenom, e.date_naissance, e.date_arrivee , m.nom as metier, s.nom as service ,ee.temps as temps from employe e , metier m ,service s ,exerce ee where e.id=? and e.id=ee.id_employe and ee.id_metier=m.id and ee.id_service=s.id  order by e.id");
		$result->execute(array($id));

		$i = $result->fetch();


        $count=$result->rowCount();



        if($count>0){
            $_SESSION["search"]=$i;
            $message='<label>DATA UPDATE SUCCESS !!</label>';
            
            header("location: search.php");
        }
        else {
            $message='<label>failure !!</label>';
        }


        $_SESSION["message"]=$message ;
    }
}

?>