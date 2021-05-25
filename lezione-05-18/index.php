<?php

$lorem = file_get_contents("https://restcountries.eu/rest/v2/region/europe");
//json_encode();
$json = json_decode($lorem);

echo "<ul>";
foreach ($json as $key => $paese) {
    echo "<li>".$paese->name."</li>";
}
echo "</ul>";

//echo ($json[25]->name);
?>