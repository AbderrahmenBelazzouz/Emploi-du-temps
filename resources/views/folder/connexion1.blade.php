@extends('folder.layout')
@section('cnx')

  






<?php  
session_start();

if(isset($_SESSION["message"])){
  $message=$_SESSION["message"];
    echo '<label class="text-danger">'.$message.'</label>';
}

    $message="";
    $_SESSION["message"]="";
?>
    


    <h3> Se Connecter : </h3>

    <div class="form-container sign-in-container" id="tret" >
<form action="{{ route('b',$admin) }}" method="get" >


    <input type="hidden" name="_token" id="csrf-token" value="<?php echo csrf_token(); ?>" />
        
    <label for="">Username:</label>
    
    <input type="text" name="username" id="username" placeholder="Username">
    <br/>

    <label for="">Password :</label>
    
    <input type="password" name="password" id="password" placeholder="Password">
    <br/>
    <br>

    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <button><input type="submit" name="Login" value="Login"></button>

</form>
    </div>





    
    
    </div>
    <style>
    h3 {
        background: linear-gradient(to right, white, #000);
        text-align:center;
      font-size:2em;
     -webkit-background-clip: text;
     -webkit-text-fill-color: transparent;
    }
    label{
    color: white;
    font-size:1em;
}
/* .loginpage {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.formee {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
} */


button {
    
	border-radius: 20px;
	border:  solid #ffffff;
	background-color: #ffffff;
	color: #FFFFFF;
	font-size: 12px;
	/* font-weight: bold; */
	padding: 1px 30px;
	/* letter-spacing: 1px; */
	/* text-transform: uppercase; */
	/* transition: transform 80ms ease-in; */
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}


input {
	background-color: #ffffff;
	border: none;
	padding: 12px 15px;
	margin: 2px 0;
	/* width: 10%; */
}
    



/* .form-container {
	position: absolute;
    
	top: 0;
	height: 10%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
    width: 40%;
	z-index: 2;
} */


    </style>
</body>
@endsection