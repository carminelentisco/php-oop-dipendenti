<?php 

include_once __DIR__ . '/classes/informations.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        
    <?php foreach ($informations as $info) { ?>

    <ul class="dipendente-info">   
        <li>Nome Sede: <?php echo $info->print('nomeSede') ?></li>
        <li>ID Dipendente: <?php echo $info->print('dipendenteId') ?></li>
        <li>Nome Dipendente: <?php echo $info->print('dipendenteNome') ?></li>
        <li>Cognome Dipendente: <?php echo $info->print('dipendenteCognome') ?></li>
        <li>Età Dipendente: <?php echo $info->print('dipendenteEta') ?></li>
        <li>Reparto Dipendente: <?php echo $info->print('dipendenteReparto') ?></li>
        <li>Postazione Dipendente: <?php echo $info->print('dipendentePostazione') ?></li>
    </ul>
    <?php } ?>



</body>
</html>