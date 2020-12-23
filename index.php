<?php
echo "ЗАДАНИЕ 1";
echo "<br />";
$i = 5;
while ($i <= 13) {
    echo $i++ . '<br>';
}

echo "ЗАДАНИЕ 2" . '<br>';
$num=1000;
$count = 0;
while ($num >= 50) {
    $count++;
    $num = $num/2;
}
echo $count;
echo "<br />";
echo $num;
echo "<br />";
echo "<br />";
$count = 0;
for ($num=1000; $num>=50 ; $num=$num/2) {
    $count++;
}
echo $count;
echo "<br />";
echo $num;
echo "<br />";

echo "ЗАДАНИЕ 3" . '<br>';
$i = 3;
for ($k=0; $k<11-$i; $k++) {
    echo $k;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

</body>
</html>