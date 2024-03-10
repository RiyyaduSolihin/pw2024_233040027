<?php
$hardware = ["Motherboard", "Processor", "Hard disk", "Pc coller", "VGA Card", "SSD"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>Macam-macam Perangkat keras komputer</h3>
    
    <ol>
   <?php foreach($hardware as $h ) : ?>
        <li><?= $h; ?></li>
        <?php endforeach; ?>
</ol>

   <h3>Macam-macam Perangkat keras komputer Baru</h3>
   
   <ol>
       
       <?php array_push($hardware, "Card Reader", "Modem");?>
       <?php sort($hardware)?>
       <?php foreach ($hardware as $h) : ?>
        <li><?= $h;?></li>
        <?php endforeach; ?>
    
    
</ol>


</body>
</html>
