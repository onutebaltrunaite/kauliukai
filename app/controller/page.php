<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$compRand1 = rand(1, 6);
$compRand2 = rand(1, 6);

$totalComp = $compRand1 + $compRand2;

$myRand1 = rand(1, 6);
$myRand2 = rand(1, 6);

$totalPlay = $myRand1 + $myRand2;


if($totalComp > $totalPlay){
    $winner = 'Kompiuteris';
} else if ($totalComp == $totalPlay) {
    $winner = 'Lygiosios';
} else {
    $winner = 'Zaidejas';
}


$content = fopen('C:wamp64/www/kauliukai/text.csv', 'a');
fwrite($content, $totalComp . ', ' . $totalPlay . ', ' . $winner . "\r\n"); 
fclose($content);


$tableData = []; 

if (($h = fopen('C:wamp64/www/kauliukai/text.csv', "r")) !== FALSE) {  
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE) { 
        $tableData[] = $data; 
    }
    fclose($h); 
}


$skaicius = count($tableData);
$naujasArray = [];

for ($i = ($skaicius - 5) ; $i < $skaicius; $i++ ){
    $naujasArray[] = $tableData[$i];
};

// var_dump($naujasArray);





if (isset($_POST["zaidziam"])){
    header("Location: frontas.php");
    exit();
} else if (isset($_POST["rezultatai"])){
    header("Location: rezultatai.php");
    exit();
};



?>
