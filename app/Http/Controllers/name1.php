<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as R;
use Session as S;
use Illuminate\Database\Connection ;
use Illuminate\Support\Facades\DB ;

class name1 extends Controller
{
    public function afficher() {
echo "affichage de la liste des employes " ;}


		public function a($admin) {
    return view('./folder/connexion1')->with('admin' , $admin);}



























    	public function b($admin ,Request $req ) {






//return S::get('username');

echo $req->username;


session_start();
$host="localhost";

$username="root";
$password="";

$database="registration";
$message="";

//DB::connection()->getPdo()
//https://riptutorial.com/laravel/example/30091/from-laravel-documentation
//config/database.php
//https://stackoverflow.com/questions/30555747/laravel-5-passing-database-query-from-controller-to-view

$connect=new \PDO("mysql:host=$host;dbname=$database",$username,$password);

//DB::connection()->getPdo

/*public function addQuery($query, $bindings, $time, $connection)
 {         $statement = $pdo->prepare('EXPLAIN ' . $query);
         $statement->execute($bindings);
         $explainResults = $statement->fetchAll(\PDO::FETCH_CLASS);
         }
         */


echo '<label class="text-danger">'.$message.'</label>';


if(isset($req->Login)){
    echo "login \n" ;
    if(empty($req->username) || empty($req->password))
    
    {
        echo " faulty entery" ;
        $message='<label>All fields are required</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('a',$admin) ;
    }else {
        echo " perfect entery" ;



        $query="SELECT * FROM users WHERE username=:username AND PASSWORD=:password";
        $statement=$connect->prepare($query);
        $statement->execute(
            array(
                'username'=>$req->username,
                'password'=>$req->password
            )
            );
            $count=$statement->rowCount();





            if($count>0){
                $_SESSION["username"]=$req->username;
                return redirect()->route('k',$admin) ;
                
            }
            else {
                $message='<label>Wrong Data</label>';
                $_SESSION["message"]=$message ;
                return redirect()->route('a',$admin) ;  
            }
    }
}

}













    	public function c($admin) {
    return view('./folder/add')->with('admin' , $admin);}




















































        	public function d($admin, Request $req) {
session_start();





$host="localhost";

$username="root";
$password="";

$database="registration";
$message="demo";

$pdo=new \PDO("mysql:host=$host;dbname=$database",$username,$password);


if($admin=='groupe')
{

@$id_g= NULL ; 

@$num = $req->num;
@$niveau = $req->niveau;



echo $req->username;

















if(isset($req->Login)){
    echo "login" ;
    if(empty($req->num) || empty($req->niveau)   )
    
    {
        echo " faukty entery" ;
        $message='<label>All fields are required</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('c',$admin) ;
    }else {
        echo " perfect entery" ;







		$result = $pdo->prepare("insert into groupe (id_g, num, niveau) VALUES (NULL,?, ?)");
		$result->execute(array($num , $niveau));


		$result = $pdo->prepare("select * from groupe  where num=? and niveau=? ");
		$result->execute(array($num , $niveau));
		$row=$result->fetch(\PDO::FETCH_ASSOC);




}}
}elseif($admin=='module')
{





	@$id= NULL ; 

@$name_m = $req->name_m;



echo $req->username;













if(isset($req->Login)){
    echo "login" ;
    if(empty($req->name_m)   )
    
    {
        echo " faukty entery" ;
        $message='<label>All fields are required</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('c',$admin) ;
    }else {
        echo " perfect entery" ;







		$result = $pdo->prepare("insert into module (id_m, name_m) VALUES (NULL,?)");
		$result->execute(array($name_m));



		$result = $pdo->prepare("select * from module  where name_m=? ");
		$result->execute(array($name_m));
		$row=$result->fetch(\PDO::FETCH_ASSOC);




}}
}elseif ($admin== 'enseignant') {


@$id_e= NULL ; 

@$name_e = $req->name_e;
@$maxheure = $req->maxheure;



if(isset($req->Login)){
    echo "login" ;
    if(empty($req->name_e)  || empty($req->maxheure) )
    
    {
        echo " faukty entery" ;
        $message='<label>All fields are required</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('c',$admin) ;
   }else {
        echo " perfect entery" ;




		$result = $pdo->prepare("insert into enseignant (id_e, name_e, maxheure) VALUES (NULL,?, ?)");
		$result->execute(array($name_e , $maxheure));
   }}
   }

   elseif ($admin=='salle'){

   
    @$id_s= NULL ; 

    @$name_s = $req->name_s;
    
    echo $req->username;
    


    

if(isset($req->Login)){
    echo "login" ;
    if(empty($req->name_s))
    
    {
        echo " faukty entery" ;
        $message='<label>All fields are required</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('c',$admin) ;
   }else {
        echo " perfect entery" ;




		$result = $pdo->prepare("insert into salle (id_s, name_s) VALUES (NULL,?)");
		$result->execute(array($name_s));




   }
}
   }












         $count=$result->rowCount();

            if($count>0){
                $message='<label>DATA INSERT SUCCESS !!</label>';
                return redirect()->route('c',$admin) ;
                
            }
            else {
                $message='<label>failure !!</label>';
            }


            $_SESSION["message"]=$message ;

            




if(isset($message)){

    echo '<br/><label class="text-danger">'.$message.'</label>';
}
}



































































        	public function e($admin, Request $req) {



session_start();




$host="localhost";

$username="root";
$password="";

$database="registration";
$message="demo";

$pdo=new \PDO("mysql:host=$host;dbname=$database",$username,$password);


if($admin=='groupe')
{
@$id_g= $req->delete_id; 
if(isset($req->delete)){
    echo "delete" ;
    if(empty($req->delete_id)  )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING DELETE</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('c',$admin) ;
    }else {
        echo " perfect entery" ;







		$result = $pdo->prepare("delete from groupe where id_g=?");
		$result->execute(array($id_g));





        $count=$result->rowCount();


            
}}
}elseif($admin=='module')
{
@$id_m= $req->delete_id; 

if(isset($req->delete)){
    echo "delete" ;
    if(empty($req->delete_id)  )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING DELETE</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('c',$admin) ;
    }else {
        echo " perfect entery" ;







		$result = $pdo->prepare("delete from module where id_m=?");
		$result->execute(array($id_m));







}}
}elseif($admin=='enseignant'){

    @$id_e= $req->delete_id; 
if(isset($req->delete)){
    echo "delete" ;
    if(empty($req->delete_id)  )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING DELETE</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('c',$admin) ;
    }else {
        echo " perfect entery" ;


		$result = $pdo->prepare("delete from enseignant where id_e=?");
		$result->execute(array($id_e));

    }
}}
elseif ($admin=='salle') {
    @$id_s= $req->delete_id; 
    if(isset($req->delete)){
        echo "delete" ;
        if(empty($req->delete_id)  )
        
        {
            echo " faukty entery" ;
            $message='<label>NOTHING DELETE</label>';
            $_SESSION["message"]=$message ;
            return redirect()->route('c',$admin) ;
        }else {
            echo " perfect entery" ;
    
    
            $result = $pdo->prepare("delete from salle where id_s=?");
            $result->execute(array($id_s));
    
        }
    }}




        $count=$result->rowCount();

            if($count>0){
                $message='<label>DATA deleted !!</label>';
                return redirect()->route('c',$admin) ;
                
            }
            else {
                $message='<label>failure !!</label>';
            }


            $_SESSION["message"]=$message ;



if(isset($message)){

    echo '<br/><label class="text-danger">'.$message.'</label>';
}














    }







        	public function f($admin, Request $req) {
    return view('./folder/edit_process')->with('data' ,['admin' => $admin ,'req'=>$req]);}





























































































        	public function g($admin ,Request $req) {


$var='selected="selected"';
session_start();

$host="localhost";
$username="root";
$password="";
$database="registration";
$pdo=new \PDO("mysql:host=$host;dbname=$database",$username,$password);




@$id= $req->update_id; 
echo $id."  chicken breakkk" ;



if($admin=='groupe'){

@$id= $req->update_id; 
@$num= $req->num; 
@$niveau= $req->niveau; 



if(isset($req->edit)){
    echo "edit" ;
    if(empty($req->update_id)   )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING EDIT</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('c',$admin) ;
    }else {
        echo " perfect entery" ;



        $result = $pdo->prepare("update groupe set num=?, niveau=? where id_g=?");
        $result->execute(array($num , $niveau, $id));


        $result="";

        $result = $pdo->prepare("select * from groupe where id_g=?  order by id_g");
		$result->execute(array($id));

		$i = $result->fetch();


        $count=$result->rowCount();



        if($count>0){
           // $_SESSION["search"]=$i;
            $message='<label>DATA UPDATE SUCCESS !!</label>';
            
            return redirect()->route('c',$admin) ;
        }
        else {
            $message='<label>failure !!</label>';
        }


        $_SESSION["message"]=$message ;
    }
}










}elseif($admin=='module') {


@$id= $req->update_id; 
@$name_m= $req->name_m; 



if(isset($req->edit)){
    echo "edit" ;
    if(empty($req->update_id)   )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING EDIT</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('c',$admin) ;
    }else {
        echo " perfect entery" ;

       $result = $pdo->prepare("update module set name_m=? where id_m=?");
        $result->execute(array($name_m , $id));


        $result="";

        $result = $pdo->prepare("select * from module where id_m=?  order by id_m");
		$result->execute(array($id));

		$i = $result->fetch();


        $count=$result->rowCount();




        if($count>0){
           // $_SESSION["search"]=$i;
            $message='<label>DATA UPDATE SUCCESS !!</label>';
            
            return redirect()->route('c',$admin) ;
        }
        else {
            $message='<label>failure !!</label>';
        }


        $_SESSION["message"]=$message ;
    }
}}elseif($admin=='enseignant'){

    @$id_e= $req->update_id; 
    @$name_e = $req->name_e;
    @$maxheure = $req->maxheure;
if(isset($req->edit)){
    echo "edit" ;
    if(empty($req->update_id)   )
    
    {
        echo " faukty entery" ;
        $message='<label>NOTHING EDIT</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('c',$admin) ;
    }else {
        echo " perfect entery" ;



        $result = $pdo->prepare("update enseignant set name_e=?, maxheure=? where id_e=?");
        $result->execute(array($name_e , $maxheure , $id_e));




        $count=$result->rowCount();



        if($count>0){
           // $_SESSION["search"]=$i;
            $message='<label>DATA UPDATE SUCCESS !!</label>';
            
            return redirect()->route('c',$admin) ;
        }
        else {
            $message='<label>failure !!</label>';
        }


        $_SESSION["message"]=$message ;
    }
}}

elseif ($admin=='salle') {
    @$id_s= $req->update_id; 
    @$name_s=$req->name_s;
    if(isset($req->edit)){
        echo "edit" ;
        if(empty($req->update_id)   )
        
        {
            echo " faukty entery" ;
            $message='<label>NOTHING EDIT</label>';
            $_SESSION["message"]=$message ;
            return redirect()->route('c',$admin) ;
        }else {
            echo " perfect entery" ;
    
    
    
            $result = $pdo->prepare("update salle set name_s=? where id_s=?");
            $result->execute(array( $name_s , $id_s));
    
            $count=$result->rowCount();
    
    
    
            if($count>0){
               // $_SESSION["search"]=$i;
                $message='<label>DATA UPDATE SUCCESS !!</label>';
                
                return redirect()->route('c',$admin) ;
            }
            else {
                $message='<label>failure !!</label>';
            }
    
    
            $_SESSION["message"]=$message ;
        }
    }

}













}



























































































        	public function h($admin) {
    return view('./folder/search')->with('admin' , $admin);}


        	public function i($admin ,Request $req) {


session_start();

@$name = $req->name;
@$prenom = $req->prenom;

$_SESSION['nom'] = $name;
$_SESSION['prenom'] = $prenom;
 


$host="localhost";

$username="root";
$password="";

$database="registration";

$pdo=new \PDO("mysql:host=$host;dbname=$database",$username,$password);





if(isset($req->Login)){
    echo "login" ;
    if(empty($req->name) || empty($req->prenom)   )
    
    {
        echo " faukty entery" ;
        $message='<label>All fields are required</label>';
        $_SESSION["message"]=$message ;
        return redirect()->route('h',$admin) ;
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
                return redirect()->route('h',$admin) ;
            }
            else {
                $message='<label>Wrong Data</label>';
                $_SESSION["message"]=$message ;
                 return redirect()->route('h',$admin) ;
            }



            
    }
}


    }




            public function j($admin, Request $req) {

    return view('./folder/service')->with('data' ,['admin' => $admin ,'req'=>$req]);}
            public function k($admin) {
    return view('./folder/login')->with('admin' , $admin);}
            public function l($admin) {
    
session_start();
session_destroy();

return redirect()->route('a',$admin) ;



}
}
