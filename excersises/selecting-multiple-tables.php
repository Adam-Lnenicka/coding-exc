<?php

require_once 'DB.php';

DB::connect('127.0.0.1','world','root','rootroot');


$query ="
    SELECT *
    FROM `countries`
    INNNER JOIN `continents`
        ON `continents`.`continent_id` = `continents`.`id`
    WHERE `continents`.`name` =`Europe`;
";

$countries =DB::select($query)

$country_ids =[];
foreach ($countries as $c){
    $country_ids[] = $country->id;
}

$qmarks = joint(",", array_fill(count($country_ids),"?")

var_dump($country_ids);


$query ="
    SELECT *
    FROM `cities`
    WHERE `cities`, `country_id` IN ({$qmarks})
";

$cities = DB::select(
    $query,
    $country_ids
);

var_dump($cities);

//include 'countries-view.php'
$country_cities =[];
foreach($cities as $city){
    $country_cities[$city]

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($countries as country) :?>
        <li>
            <h2><?=$country->$name :?></h2>

            <
            <li>Prague</li>
            <li>Brno</li>
            <li>Kostelec</li>
        <li>
    </ul>
</body>
</html>

SELECT *
FROM `cities`
WHERE `population`>5000000 