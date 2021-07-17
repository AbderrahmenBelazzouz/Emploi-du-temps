@extends('folder.layout')
@section('cnx')




	<?php
session_start();
if(isset($_SESSION["username"])){
    echo '';






    ?>
<form  action="{{ route('table') }}"   method="get">
    

    <label for="metier" style="font-size:24px; color: white">Niveau     :</label>
    <select id="niveau" name="niveau" style="font-size:22px;">
      <option value="1CP">1CP</option>
      <option value="2CP">2CP</option>
      <option value="1SC">1SC</option>
      <option value="2SC_siw">2SC_siw</option>
      <option value="2SC_isi">2SC_isi</option>
      <option value="3SC_siw">3SC_siw</option>
      <option value="3SC_isi">3SC_isi</option>
    </select>
   
    <input type="submit" name="Login" value="Afficher l'emploi du temps" id="empl" >



</form>
<br/>
<br/>
<br/>
<br/>
    <br/> <button><a class="n" href="{{ route('k','enseignant') }}" id="ens">Enseignant</a></button>
    <br/> <button><a class="n" href="{{ route('k','module') }}" id="mod">Module</a></button>
    <br/> <button><a class="n" href="{{ route('k' , 'group') }}" id="gro">Group</a></button>
    <br/> <button><a class="n" href="{{ route('k' , 'salle') }}" id="sal">Salle</a></button>

  
    
    <?php
}

 
else{
redirect()->route('a', " ") ;

}
    $message="";
    $_SESSION["message"]="";

?>

</div>
<style>
    
    #ens {
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

#ens:hover {opacity: 1}



#mod {
  background-color: #b4aee8;
  border: none;
  color: black;
  padding: 1px 46px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  /* cursor: pointer; */
}

#mod:hover {opacity: 1}


#gro {
  background-color: #b4aee8;
  border: none;
  color: black;
  padding: 1px 50px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  /* cursor: pointer; */
}

#gro:hover {opacity: 1}



#sal {
  background-color: #b4aee8;
  border: none;
  color: black;
  padding: 1px 54px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  /* cursor: pointer; */
}

#sal:hover {opacity: 1}




#empl {
  background-color: #b4aee8;
  border: none;
  color: black;
  padding: 1px 34px;
  font-size:22px;
  text-align: center;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  /* cursor: pointer; */
}

#empl:hover {opacity: 1}




</style>
    </body>
</html>

@endsection