<?php
include(HTML_DIR.'overall/header.php');
?>

<body>
<?php
include(HTML_DIR.'overall/topnav.php');

?>


<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row" style="min-height: 270px;">
            <div class="alert alert-dismissible alert-info">
              <strong>Informacões</strong> para visualizar esta página deve estar logado <a data-toggle="modal" data-target="#Login">Inicir Sessão</a>
            </div>
            <h3><?php echo APP_TITLE ?></h3>
        </div>
    </div>
</section>



<?php
include(HTML_DIR.'overall/footer.php');
?>