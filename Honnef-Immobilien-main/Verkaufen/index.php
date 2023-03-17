<?php include_once('../head.phtml'); ?>
    <title>Verkaufen</title>
</head>
<?php include_once('../header.phtml'); ?>
<?php include_once('php/sendFormular.php'); ?>

<?php 
    if ($_GET['action'] == 'showLeistungenfuerVerkaeufer') {
        include_once('./php/showLeistungenfuerVerkaeufer.php');
    } else {
        include_once('./php/showImmobilien.php');
    }
?>
<?php include_once('../footer.phtml'); ?>