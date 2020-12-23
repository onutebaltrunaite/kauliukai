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

<table>
    <tr>
        <th>Kompiuteris</th>
        <th>Zaidejas</th>
        <th>Laimetojas</th>
    </tr>

    <?php foreach($naujasArray as $value): ?>
        <tr>
            <?php foreach($value as $item): ?>
                <td><?php print $item; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>


</body>
</html>