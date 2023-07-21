<?PHP
    $hostname_localhost ="127.0.0.1";
    $database_localhost ="registroIncidentes";
    $username_localhost ="root";
    $password_localhost ="";

    $json=array();
    //$json1=array();
    //$json2=array();
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		$consulta="select idUser, username, fullName, mail, userDependency, appAccess from user";
		$resultado=mysqli_query($conexion,$consulta);

	
		while($registro=mysqli_fetch_array($resultado)){
			
			$result["idUser"]=$registro['idUser'];
			$result["username"]=$registro['username'];
			$result["fullName"]=$registro['fullName'];
			$result["mail"]=$registro['mail'];
			$result["userDependency"]=$registro['userDependency'];
			$result["appAccess"]=$registro['appAccess'];

            $json['User'][]=$result;
		
		}//*/


        mysqli_close($conexion);
        echo json_encode($json);
        
?>