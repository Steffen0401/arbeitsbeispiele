<?php 
    error_reporting(0);
    include_once('../head.phtml'); 
?>
    <title>Vertrauen</title>
<?php include_once('../header.phtml'); ?>

<main id="trust">
<?php
    if ( $_GET['action'] == 'showReferenzObjekte') {
        include('php/showReferenzObjekte.php');
    } else if ( $_GET['action'] == 'showInformationen') {
        include('php/showInformationen.php');
    } else {
        include('php/showStartView.php');
    }
?>
</main>

<?php include_once('../footer.phtml'); ?>