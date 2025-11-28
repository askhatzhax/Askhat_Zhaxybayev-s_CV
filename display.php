
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>
<?php
for ($i = 1; $i < 10; $i++)
{
    echo "<tr>";
    for ($j = 1; $j < 10; $j++)
    {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
?>
</table>
<?php
echo "Cтрока " . __LINE__ . " в файле " . __FILE__;
$file="asas";
if(isset($file)){
    echo "piu piu";
}
else {echo "\n   dsds";}
?>
</body>
</html>
