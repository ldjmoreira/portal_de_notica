function goLogin(){
	var connect, form, response, result, user, pass, session;
	user=__('user_login').value;
	pass=__('pass_login').value;
	session = __('session_login').checked ? true : false;
	form = 'user=' + user + '&pass=' + pass + '&session=' + session;
	
	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	connect.onreadystatechange = function(){
		if(connect.readyState == 4 && connect.status == 200){
			if(connect.responseText == 1){
				result = '<div class="alert alert-dismissible alert-success">';
       			result += '<h4>Conectado!</h4>';
        		result += '<p><strong>Estamos te redirecionando...</strong></p>';
        		result += '</div>';
	    		__('_AJAX_LOGIN_').innerHTML = result;
	    		location.reload();
	   		 }else{
	   		 	__('_AJAX_LOGIN_').innerHTML = connect.responseText;
	    	 }

		}else if(connect.readystate != 4){
	  result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="alert">x</button>';
      result += '<h4>Procesando...</h4>';
      result += '<p><strong>Estamos Tentando Logar....</strong></p>';
      result += '</div>';
      __('_AJAX_LOGIN_').innerHTML = result;
		}
	}
	connect.open('POST', 'ajax.php?mode=login', true);
	connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	connect.send(form);
}

// a função abaixo executa gologin se a 
//tecla enter for apertada
function runScriptLogin(e){
	if(e.keyCode == 13){
		goLogin();
	}
}