

<table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>ID</th> 
                        <th>NOM________________</th> 
                        <th>PRENOM________</th> 
                        <th>BIRTH________</th> 
                        <th>ARRIVE________</th> 
                        <th>metier________</th> 
                        <th>service</th> 
                    </tr> 
                </thead> 
  
                <tbody> 






    <?php  




    session_start();

     


    $host="localhost";

    $username="root";
    $password="";

    $database="registration";

    $pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);

    $result = $pdo->prepare("select e.id, e.nom, .e.prenom, e.date_naissance, e.date_arrivee , m.nom as metier, s.nom as service from employe e , metier m ,service s ,exerce ee where e.id=ee.id_employe and ee.id_metier=m.id and ee.id_service=s.id  order by e.id " );
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
  </tr> 


<?php } ?>

    </tbody> 
</table> 



