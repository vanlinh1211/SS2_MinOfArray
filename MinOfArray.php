<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$array = [9, 2, 3, 4, 1, 6, 7, 8];
function MinOfArray($array)
{
    $min = $array[0];
    foreach ($array as $key => $value){
        if ($array[$key] < $min){
            $min = $array[$key];
        }
    }
    return $min;
}
echo MinOfArray($array);
?>
</body>
</html>