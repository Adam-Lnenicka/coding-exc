<?php
$page_title = 'Shopping list';
$page = 'home';
if (isset($_GET['page']))
{
    $page =$_GET['page']
}

class Dragon
{
    'id'-> null;
    'color'-> null;
    'height'-> null;

    public __construct($id, $color, $height)
    {
        $this->id = $id;
        $this->color =$color;
        $this->height=$height;
    }
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
<h1><?=$page_title?></h1>

<?php if ($page =='home'):?>

    <?php include 'home.php';?>

<?php endif; ?>    


</body>
</html>