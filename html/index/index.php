<?php
include(HTML_DIR.'overall/header.php');
?>

<body>
<?php
include(HTML_DIR.'overall/topnav.php');

?>

<section class="mbr-section mbr-after-navbar" id="content1-10">




    <div class="mbr-section__container container mbr-section__container--isolated">


<?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Ativado!</strong> Usuário ativado corretamente.
    </div>';
  }

   if(isset($_GET['error'])) {
    echo '<div class="alert alert-dismissible alert-danger">
      <strong>Erro!</strong></strong>Não se pode ativar o usuário.
    </div>';
  } 
  ?>

        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
            <p>
               
            </p>
          </div>
        </div>
    </div>
</section>



<?php
include(HTML_DIR.'overall/footer.php');
?>