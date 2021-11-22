function goReg(){
  var connect, form, response, result, user, pass, email, pass_dos, tyc;
  user=__('user_reg').value;
  pass=__('pass_reg').value;
  email=__('email_reg').value;
  pass_dos=__('pass_reg_dos').value;
  tyc = __('tyc_reg').checked ? true : false;

  if(true == tyc){
    if(user != '' && pass != '' && pass_dos != '' && email != ''){
      if(pass == pass_dos){
        form = 'user=' + user + '&pass=' + pass + '&email=' + email;
        
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function(){
          if(connect.readyState == 4 && connect.status == 200){
            if(connect.responseText == 1){
              result = '<div class="alert alert-dismissible alert-success">';
                  result += '<h4>Cadastrado!</h4>';
                  result += '<p><strong>Cadastrado com Sucesso!...</strong></p>';
                  result += '</div>';
                __('_AJAX_REG_').innerHTML = result;
                location.reload();
               }else{
                __('_AJAX_REG_').innerHTML = connect.responseText;
               }

          }else if(connect.readystate != 4){
          result = '<div class="alert alert-dismissible alert-warning">';
            result += '<button type="button" class="close" data-dismiss="alert">x</button>';
            result += '<h4>Procesando...</h4>';
            result += '<p><strong>Estamos Tentando Cadastrar....</strong></p>';
            result += '</div>';
            __('_AJAX_REG_').innerHTML = result;
          }
        }

        connect.open('POST', 'ajax.php?mode=reg', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);

            }else{
              result = '<div class="alert alert-dismissible alert-warning">';
              result += '<button type="button" class="close" data-dismiss="alert">x</button>';
              result += '<h4>Erro</h4>';
              result += '<p><strong>As senhas não coincidem!!</strong></p>';
              result += '</div>';
              __('_AJAX_REG_').innerHTML = result;
            }
          }else{
            result = '<div class="alert alert-dismissible alert-warning">';
            result += '<button type="button" class="close" data-dismiss="alert">x</button>';
            result += '<h4>Atenção</h4>';
            result += '<p><strong>Preencha todos os campos!!</strong></p>';
            result += '</div>';
            __('_AJAX_REG_').innerHTML = result;
          }
  }else{
    result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="alert">x</button>';
      result += '<h4>Erro</h4>';
      result += '<p><strong>Aceite os termos e condições!!</strong></p>';
      result += '</div>';
      __('_AJAX_REG_').innerHTML = result;
  }

  
}


function runScriptReg(e){
  if(e.keyCode == 13){
    goReg();
  }
}