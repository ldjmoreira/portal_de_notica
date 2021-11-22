<?php
function EmailTemplate($user, $link){
$HTML = '
  <html>
  <body style="background: #FFFFFF;font-family: Verdana; font-size: 14px;color:#1c1b1b;">
  <div style="">
      <h2>Olá '.$user.'</h2>
      <p style="font-size:17px;">Obrigado por se registrar '. APP_TITLE .'.</p>
    <p>Ative sua conta para poder logar no site.</p>
    <p style="padding:15px;background-color:#ECF8FF;">
        Para ativar sua conta <a style="font-weight:bold;color: #2BA6CB;" href="'.$link.'" target="_blank">clique aqui &raquo;</a>
    </p>
      <p style="font-size: 9px;">&copy; '. date('Y',time()) .' '.APP_TITLE.'. Todos os direitos reservados.</p>
  </div>
  </body>
  </html>
  ';

      return $HTML;
}

?>