<?php

$page_title = 'Shopping list';
$page ='home';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
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
    <?php if ($page == 'home') : ?>
    <?php include 'home.php'; ?>
    <?php endif; ?>

    <?php if($page == 'form') :?>
    <?php include 'form.php'; ?>
    <?php endif; ?>

    <h1><?= $page_title?></h1>
    <h1><? echo $page_title;?></h1>
</body>
</html>