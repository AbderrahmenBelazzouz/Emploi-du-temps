<?php

session_start();

@$id= $_POST["delete_id"]; 


$host="localhost";

$username="root";
$password="";

$database="registration";
$message="demo";

$pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);


if(isset($_POST["delete"])){
    echo "delete" ;
    if(empty($_POST["delete_id"])  )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING DELETE</label>';
        $_SESSION["message"]=$message ;
        header("location: add.php");
    }else {
        echo " perfect entery" ;







		$result = $pdo->prepare("delete from employe where id=?");
		$result->execute(array($id));





        $count=$result->rowCount();

            if($count>0){
                $message='<label>DATA deleted !!</label>';
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



