@extends('folder.layout')
@section('cnx')

<style type="text/css">.container{height: 0%; width: 0%;}</style>
</div>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php
$admin=$data['admin'];
?>


    <form action="{{route('j',$admin) }}" method="get" >


    <br/>

    <label for="service">Service:</label>

	<select id="service" name="service">
	  <option value="1">Comptabilite</option>
	  <option value="2">Direction</option>
	  <option value="3">Maintenance</option>
	  <option value="4">Commercial</option>
	  <option value="5">Export</option>
	  <option value="6">Informatique</option>
	  <option value="7">Production</option>
	  <option value="8">Achat</option>
	  <option value="9">Entrepot</option>
	  
	 
	</select>









    <input type="submit" name="sub" value="service">
    
    
 
    
    
    
    </form>









<table > 
                <thead> 
                    <tr> 
                        <th>ID</th> 
                        <th>NOM________________</th> 
                        <th>PRENOM________</th> 
                        <th>BIRTH________</th> 
                        <th>_________ARRIVE________</th> 
                        <th>_________metier________</th> 
                        <th>___service___</th> 
                        <th>temps</th> 
  
                    </tr> 
                </thead> 
  
                <tbody> 






    <?php  

session_start();
    $id_s="";
    $req=$data['req'];
    $admin=$data['admin'];
    if(isset($req->service))
    	{$id_s=$req->service;
}
    

    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select e.id, e.nom, .e.prenom, e.date_naissance, e.date_arrivee , m.nom as metier, s.nom as service ,ee.temps as temps from employe e , metier m ,service s ,exerce ee where e.id=ee.id_employe and ee.id_metier=m.id and ee.id_service=s.id and ee.id_service=?  order by e.id " );
    $result->execute(array($id_s));

  


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
















































<footer>
    
<?php

if(isset($_SESSION["username"])){
    






    ?>
        <br/> <a class="n" href="{{ route('h',$admin) }}">search employe</a>
    <br/> <a class="n" href="{{ route('c',$admin) }}">add employe</a>
   
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