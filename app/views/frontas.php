<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../controller/page.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">  
</head>
<body>
    

<form action="" method="post" class="d-flex">
    <button name="zaidziam">ZAIDZIAM</button>
    <button name="rezultatai">REZULTATAI</button>
</form>


<div class="d-flex">
    <div class="container">
        <img src="<?php print '../../assets/images/dice' . $compRand1 . '.png';?>" alt="">
        <img src="<?php print '../../assets/images/dice' . $compRand2 . '.png';?>" alt="">
        <div class="points"><?php print 'Kompiuterio taskai: ' . $totalComp; ?></div>
    </div>
    <div class="container">
        <img src="<?php print '../../assets/images/dice' . $myRand1 . '.png';?>" alt="">
        <img src="<?php print '../../assets/images/dice' . $myRand2 . '.png';?>" alt=""> 
        <div class="points"><?php print 'Zaidejo taskai: ' . $totalPlay; ?></div>
    </div>
</div>

<div class="win"><?php print 'Laimejo: ' . $winner;?></div>


</body>
</html>