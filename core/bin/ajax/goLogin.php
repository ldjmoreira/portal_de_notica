<?php

if(!empty($_POST['user']) and !empty($_POST['pass'])){
	$db = new Conexion();

	$data = $db->real_escape_string($_POST['user']);
	$pass = Encrypt($_POST['pass']);
	$sql = $db->query("SELECT id FROM users WHERE (user = '$data'  OR email='$data') AND pass='$pass' LIMIT 1;");
	if($db->rows($sql) > 0){
		 if($_POST['session']) { ini_set('session.cookie_lifetime', time() + (60*60*24)); }

		$_SESSION['app_id'] = $db->recorrer($sql)[0];
		//$_SESSION['time_online'] = time() - (60 * 6);

		echo 1;
	}else{
		echo '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERRO:</strong> Dados Incorretos.
  </div>';
	}
	$db->liberar($sql); //retira do cache a conexão
	$db->close();


}else{
	echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>ERRO:</strong> Preencha os Dados.
</div>';
}


?>